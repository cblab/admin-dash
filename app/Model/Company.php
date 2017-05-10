<?php
namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Company extends Model {

    protected $table = 'company';

    protected $fillable = [
        'id',
        'name',
        'symbol'
    ];

    public function stocks()
    {
        return $this->hasMany('App\Model\Stock');
    }

    public function exchangeStocks()
    {
        return $this->hasManyThrough('App\Model\ExchangeStock', 'App\Model\Stock');
    }

}
