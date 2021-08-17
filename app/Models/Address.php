<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Address extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'street',
        'zipCode',
        'country',
        'city',
        'street_number',
    ];

    public function gardens():HasMany
    {       
        return $this->hasMany(Garden::class);
    }

    public function user():BelongsTo
    {
        return $this->belongsTo(User::class);
    }

}
