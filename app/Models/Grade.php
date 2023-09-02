<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Model;

class Grade extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'status'
    ];

    /**
     * Define a one-to-many relationship.
     *
     */
    public function components(): HasMany
    {
        return $this->hasMany(Component::class);
    }

    /**
     * Define a one-to-many relationship.
     *
     */
    public function turbineComponents(): HasMany
    {
        return $this->hasMany(TurbineComponent::class);
    }
}
