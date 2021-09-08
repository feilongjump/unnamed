<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Material extends Model
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
}
