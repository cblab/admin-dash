<?php
namespace App\Model;

use Illuminate\Database\Eloquent\Model;

/**
 * Class ExchangeStock
 * @package App\Model
 */
class ExchangeStock extends Model
{
    protected $table = 'exchange_stock';
    protected $fillable = [
        'id',
        'stock_id',
        'user_id',
        'exchange_id',
        'prefered_stock',
        'common_stock',
        'price'
    ];

    public function user()
    {
        return $this->belongsTo('App\User');
    }

    public function stock()
    {
        return $this->belongsTo('App\Model\Stock');
    }

    public function stockExchange()
    {
        return $this->belongsTo('App\Model\StockExchange');
    }

}