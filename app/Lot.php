<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Lot extends Model
{
    //
    public $table="lots";
    protected $fillable = [
        'seller_id', 'cultivar', 'origin_country', 'harvesting_date','weight', 'auction_started'
    ];
}
