<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Farm extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'status',
        'name',
        'country',
        'address',
        'coordinates',
    ];

    /**
     * Define a one-to-many relationship.
     *
     */
    public function turbines(): HasMany
    {
        return $this->hasMany(Turbine::class);
    }
}
