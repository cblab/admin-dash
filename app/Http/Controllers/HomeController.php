<?php

namespace App\Http\Controllers;

use App\Exceptions\AlreadySyncedException;
use App\Exceptions\ConnectionNotAcceptedException;
use App\Exceptions\CredentialsDoNotMatchException;
use App\Exceptions\EmailAlreadyInSystemException;
use App\Exceptions\EmailNotProvidedException;
use App\Exceptions\NoActiveAccountException;
use App\Exceptions\TransactionFailedException;
use App\Exceptions\UnauthorizedException;
use App\Queries\GridQueries\HighestSharePricePerExchangeQuery;
use App\Queries\GridQueries\UserStockQuery;
use Illuminate\Http\Request;

class HomeController extends Controller
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
        $user_stock_query = new UserStockQuery();
        $common_stocks_group = $user_stock_query->filterByStockType('common_stock');
        $prefered_stocks_group = $user_stock_query->filterByStockType('prefered_stock');

        return view('pages.home')
            ->with('common_stocks_group', $common_stocks_group)
            ->with('prefered_stocks_group', $prefered_stocks_group);
    }

    public function highestMarketPrices() {
        $highest_trade_values_per_exchange = (new HighestSharePricePerExchangeQuery())->fetch();

        return view('pages.highest-market-prices')
            ->with('highest_trade_values_per_exchange', $highest_trade_values_per_exchange);
    }

}
