<?php

namespace App\Models;

class CustomerBank extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'currency', 'account_name', 'account_number',
        'account_bank', 'bank_address', 'company_address',
    ];
}
