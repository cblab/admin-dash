<?php
namespace App\Http\Controllers;

use App\Model\Company;
use App\Model\Stock;

use Illuminate\Http\Request;

class StockController extends Controller
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
        $companies = Company::all();
        return view('stock.create')
            ->with('companies', $companies);
    }


    /**
     * Create a new stock and persist data.
     *
     * @param \Illuminate\Http\Request $request
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        $this->validate($request, [
                'company_id' => 'required|numeric',
                'wkn' => 'required|max:10',
                'isin' => 'required|max:12',
            ]
        );

        $company_id = $request->get('company_id');
        $wkn = $request->get('wkn');
        $isin = $request->get('isin');

        $stock = new Stock([
            'company_id' => $company_id,
            'wkn' => $wkn,
            'isin' => $isin,
        ]);

        $stock->save();

        return view('stock.created')
            ->with('stock', $stock);
    }
}