<?php
namespace App\Queries\GridQueries;

use DB;
use Illuminate\Support\Facades\Auth;

class UserStockQuery {

    public function filterByStockType($keyword)
    {
        $stocks = DB::table('users')
            ->join('exchange_stock', 'exchange_stock.user_id', '=', 'users.id')
            ->join('stock_exchange', 'exchange_stock.exchange_id', '=', 'stock_exchange.id')
            ->join('stock', 'exchange_stock.stock_id', '=', 'stock.id')
            ->join('company', 'stock.company_id', '=', 'company.id')
            ->where('users.id', Auth::user()->id)
            ->where('exchange_stock.'.$keyword, 1)
            ->orderBy('company.id', 'desc')
            ->get();

        $aStocks = [];
        foreach ($stocks as $stock) {
            $aStocks[$stock->name][] = $stock;
        }

        return $aStocks;
    }
}