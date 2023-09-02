<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Inspection extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'turbine_id',
        'user_id',
        'inspection_date',
        'notes',
        'status'
    ];

    /**
     * Define a one-to-one relationship.
     *
     */
    public function turbine()
    {
        return $this->belongsTo(Turbine::class);
    }

    /**
     * Define a one-to-one relationship.
     *
     */
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
