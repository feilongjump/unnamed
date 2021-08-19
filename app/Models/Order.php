<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Order extends Model
{
    const PROCESSING_STATUS_PENDING = 'pending';
    const PROCESSING_STATUS_AUDITED = 'audited';
    const PROCESSING_STATUS_NULLIFIED = 'nullified';

    public static $processingStatusMap = [
        self::PROCESSING_STATUS_PENDING   => '待审核',
        self::PROCESSING_STATUS_AUDITED   => '已审核',
        self::PROCESSING_STATUS_NULLIFIED => '作废',
    ];

    protected $dates = [
        'delivered_at',
    ];

    /**
     * 所属客户
     *
     * @return BelongsTo
     */
    public function customer(): BelongsTo
    {
        return $this->belongsTo(Customer::class);
    }

    /**
     * 客户联系人
     *
     * @return BelongsTo
     */
    public function customer_contact(): BelongsTo
    {
        return $this->belongsTo(CustomerContact::class);
    }

    /**
     *
     *
     * @return HasMany
     */
    public function items(): HasMany
    {
        return $this->hasMany(OrderItem::class);
    }

    /**
     * 配件
     *
     * @return HasMany
     */
    public function parts(): HasMany
    {
        return $this->hasMany(OrderPart::class);
    }

    /**
     * 包材
     *
     * @return HasMany
     */
    public function packages(): HasMany
    {
        return $this->hasMany(OrderPackage::class);
    }

    /**
     * 唛头
     *
     * @return HasOne
     */
    public function mark(): HasOne
    {
        return $this->hasOne(OrderMark::class);
    }

    /**
     * 图片信息
     *
     * @return HasMany
     */
    public function pictures(): HasMany
    {
        return $this->hasMany(Picture::class, 'relevance_id')
            ->where('type', Picture::ORDER);
    }
}
