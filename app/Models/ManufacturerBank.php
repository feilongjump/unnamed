<?php

namespace App\Models;

use Dcat\Admin\Traits\HasDateTimeFormatter;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Model;

class ManufacturerBank extends Model
{
	use HasDateTimeFormatter;
    use SoftDeletes;

    protected $table = 'manufacturer_banks';

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
