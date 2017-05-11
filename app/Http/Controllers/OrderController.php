<?php
namespace App\Http\Controllers;

use App\Model\Stock;
use App\Model\StockExchange;
use App\Model\ExchangeStock;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class OrderController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // i am aware that this reuses stocks created by other users - should be no problem
        $stocks = Stock::all();
        $exchanges = StockExchange::all();

        return view('order.create')
            ->with('stocks', $stocks)
            ->with('exchanges', $exchanges);
    }

    /**
     * Create a new order/trade and persist data.
     *
     * @param \Illuminate\Http\Request $request
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        $this->validate($request, [
                'exchange_id' => 'required|numeric',
                'stock_id' => 'required|numeric',
                'stock_type' => 'required|boolean',
                'price' => 'required|numeric'
            ]
        );

        $order = new ExchangeStock([
            'stock_id' => $request->get('stock_id'),
            'user_id' => Auth::user()->id,
            'exchange_id' => $request->get('exchange_id'),
            'common_stock' => ($request->get('stock_type') == 0) ? 1 : 0,
            'prefered_stock' => ($request->get('stock_type') == 1) ? 1 : 0,
            'price' => $request->get('price')
        ]);

        $order->save();

        return view('order.created')
            ->with('order', $order);
    }

    /**
     * Show form to choose an exchange for reporting.
     *
     * @return \Illuminate\Http\Response
     */
    public function chooseExchange() {
        $exchanges = StockExchange::all();

        return view('order-table.choose-exchange')
            ->with('exchanges', $exchanges);
    }

    /**
     * List orders by exchange
     *
     * @param \Illuminate\Http\Request $request
     *
     * @return \Illuminate\Http\Response
     */
    public function listOrdersByExchange(Request $request) {
        $exchange_id = $request->get('exchange_id');

        $exchange_name = (StockExchange::where('id', $exchange_id)->first())->ex_name;
        $orders = ExchangeStock::where('exchange_id', $exchange_id)
            ->where('user_id', Auth::user()->id)
            ->orderBy('created_at', 'desc')
            ->get();

        return view('order-table.report')
            ->with('orders', $orders)
            ->with('exchange_name', $exchange_name);
    }

}