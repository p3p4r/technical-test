<?php

namespace App\Models;

use Illuminate\Database\Eloquent\ {
    Factories\HasFactory,
    Model,
};
use Illuminate\Database\Eloquent\Relations\{
    BelongsToMany,
    HasMany
};

class Turbine extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'farm_id',
        'name',
        'description',
        'install_date',
        'status'
    ];

    /**
     * Define a many-to-many relationship.
     *
     */
    public function components(): BelongsToMany
    {
        return $this->belongsToMany(Component::class, 'turbine_components')
            ->withPivot('grade_id');
    }

    /**
     * Define a one-to-many relationship.
     *
     */
    public function turbineComponents(): HasMany
    {
        return $this->hasMany(TurbineComponent::class);
    }

    /**
     * Define a one-to-many relationship.
     *
     */
    public function inspections(): HasMany
    {
        return $this->hasMany(Inspection::class);
    }

}
