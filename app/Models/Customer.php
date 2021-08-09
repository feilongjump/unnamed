<?php

namespace App\Models;

use Dcat\Admin\Traits\HasDateTimeFormatter;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    use HasDateTimeFormatter;
    use SoftDeletes;

    /**
     * 联系人
     *
     * @return HasMany
     */
    public function contacts(): HasMany
    {
        return $this->hasMany(CustomerContact::class, 'customer_id');
    }

    /**
     * 银行卡信息
     *
     * @return HasMany
     */
    public function banks(): HasMany
    {
        return $this->hasMany(CustomerBank::class, 'customer_id');
    }
}
