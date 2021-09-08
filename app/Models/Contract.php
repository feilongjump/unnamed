<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Contract extends Model
{
    const PROCESSING_STATUS_PENDING = 'pending';
    const PROCESSING_STATUS_AUDITED = 'audited';
    const PROCESSING_STATUS_NULLIFIED = 'nullified';

    public static $processingStatusMap = [
        self::PROCESSING_STATUS_PENDING   => '待审核',
        self::PROCESSING_STATUS_AUDITED   => '已审核',
        self::PROCESSING_STATUS_NULLIFIED => '作废',
    ];

    const CONTRACT_TYPE_PART = 'part';
    const CONTRACT_TYPE_PRODUCT = 'product';
    const CONTRACT_TYPE_PACKAGE = 'package';

    public static $contractTypeMap = [
        self::CONTRACT_TYPE_PART   => '配件',
        self::CONTRACT_TYPE_PRODUCT   => '产品',
        self::CONTRACT_TYPE_PACKAGE => '包材',
    ];


    /**
     *
     *
     * @return HasMany
     */
    public function items(): HasMany
    {
        return $this->hasMany(ContractItem::class);
    }

    /**
     * 厂家
     *
     * @return BelongsTo
     */
    public function manufacturer(): BelongsTo
    {
        return $this->belongsTo(Manufacturer::class);
    }

    /**
     * 厂家联系人
     *
     * @return BelongsTo
     */
    public function manufacturer_contact(): BelongsTo
    {
        return $this->belongsTo(ManufacturerContact::class);
    }
}
