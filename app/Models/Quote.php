<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Quote extends Model
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
}
