<?php
namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class StockExchange extends Model {

    protected $table = 'stock_exchange';

    protected $fillable = [
        'id',
        'name',
        'location'
    ];

    public function exchangeStocks()
    {
        return $this->hasMany('App\Model\ExchangeStock');
    }
}
