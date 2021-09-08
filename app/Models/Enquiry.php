<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Enquiry extends Model
{

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
