<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Relations\HasOne;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Customer extends Model
{
    /**
     * 联系人
     *
     * @return HasMany
     */
    public function contacts(): HasMany
    {
        return $this->hasMany(CustomerContact::class);
    }

    public function defaultContact(): HasOne
    {
        return $this->hasOne(CustomerContact::class)->where('is_default', true);
    }

    /**
     * 银行卡信息
     *
     * @return HasMany
     */
    public function banks(): HasMany
    {
        return $this->hasMany(CustomerBank::class);
    }
}
