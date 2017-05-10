<?php
namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Stock extends Model
{
    protected $table = 'stock';
    protected $fillable = [
        'id',
        'company_id',
        'isin',
        'wkn'
    ];

    public function company()
    {
        return $this->belongsTo('App\Model\Company');
    }


    public function exchangeStocks()
    {
        return $this->hasMany('App\Model\ExchangeStock');
    }

}