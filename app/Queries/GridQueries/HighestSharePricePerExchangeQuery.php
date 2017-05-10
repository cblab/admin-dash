<?php
namespace App\Queries\GridQueries;
use DB;
use Illuminate\Support\Facades\Auth;

class HighestSharePricePerExchangeQuery {

    public function fetch()
    {
        return DB::select(
            'select a.*,	
                   se.ex_name,
                   st.isin,
                   st.wkn,
                   co.name,
                   co.symbol
            FROM exchange_stock a
            LEFT JOIN exchange_stock b ON a.exchange_id = b.exchange_id
            AND a.price < b.price
            JOIN stock_exchange se ON a.exchange_id = se.id
            JOIN stock st ON a.stock_id = st.id
            JOIN company co ON st.company_id = co.id
            WHERE b.price IS NULL AND a.user_id = '.Auth::user()->id);
    }
}