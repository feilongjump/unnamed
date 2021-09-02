<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Relations\HasOne;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Manufacturer extends Model
{
    /**
     * 联系人
     *
     * @return HasMany
     */
    public function contacts(): HasMany
    {
        return $this->hasMany(ManufacturerContact::class);
    }

    public function defaultContact(): HasOne
    {
        return $this->hasOne(ManufacturerContact::class)->where('is_default', true);
    }

    /**
     * 银行卡信息
     *
     * @return HasMany
     */
    public function banks(): HasMany
    {
        return $this->hasMany(ManufacturerBank::class);
    }
}
