<?php

namespace App\Models;

use Illuminate\Database\Eloquent\ {
    Factories\HasFactory,
    Model,
    Relations\BelongsTo
};

class TurbineComponent extends Model
{
    use HasFactory;

    /**
     * Define a one-to-one relationship.
     *
     */
    public function turbine(): BelongsTo
    {
        return $this->belongsTo(Turbine::class);
    }

    /**
     * Define a one-to-one  relationship.
     *
     */
    public function component(): BelongsTo
    {
        return $this->belongsTo(Component::class);
    }

    /**
     * Define a one-to-one  relationship.
     *
     */
    public function grade(): BelongsTo
    {
        return $this->belongsTo(Grade::class);
    }
}
