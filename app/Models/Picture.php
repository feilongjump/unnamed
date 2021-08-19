<?php

namespace App\Models;

class Picture extends Model
{
    const SHOWPIECE = 1;
    const ORDER = 2;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'type', 'relevance_id', 'name', 'path',
    ];
}
