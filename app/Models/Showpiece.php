<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Showpiece extends Model
{
    /**
     * 配件信息
     *
     * @return HasMany
     */
    public function parts(): HasMany
    {
        return $this->hasMany(Part::class, 'showpiece_id');
    }

    /**
     * 包装信息
     *
     * @return HasMany
     */
    public function packages(): HasMany
    {
        return $this->hasMany(Package::class, 'showpiece_id');
    }

    /**
     * 图片信息
     *
     * @return HasMany
     */
    public function pictures(): HasMany
    {
        return $this->hasMany(Picture::class, 'relevance_id')
            ->where('type', Picture::SHOWPIECE);
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
}
