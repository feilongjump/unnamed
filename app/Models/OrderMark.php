<?php

namespace App\Models;

class OrderMark extends Model
{
    protected $casts = [
        'front'     => 'array',
        'side'      => 'array',
        'inner_box' => 'array',
    ];
}
