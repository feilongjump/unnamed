<?php

namespace App\Models;

class OrderPart extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'order_id', 'manufacturer_id', 'no', 'name', 'spec', 'rate', 'quantity', 'unit_price', 'amount', 'remarks',
    ];
}
