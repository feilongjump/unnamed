<?php

namespace App\Models;

class ManufacturerContact extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'telephone', 'email', 'fax', 'is_default'
    ];
}
