<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class TentType extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
    'name',
    'description',
  ];

    /**
     * @return BelongsToMany
     */
    public function gardens(): BelongsToMany
    {
        return $this->belongsToMany(Garden::class, 'gardens_tent_types');
    }
}
