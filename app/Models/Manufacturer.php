<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Dcat\Admin\Traits\HasDateTimeFormatter;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Manufacturer extends Model
{
	use HasDateTimeFormatter;
    use SoftDeletes;

    protected $table = 'manufacturers';

    /**
     * 联系人
     *
     * @return HasMany
     */
    public function contacts(): HasMany
    {
        return $this->hasMany(ManufacturerContact::class, 'manufacturer_id');
    }

    /**
     * 银行卡信息
     *
     * @return HasMany
     */
    public function banks(): HasMany
    {
        return $this->hasMany(ManufacturerBank::class, 'manufacturer_id');
    }
}
