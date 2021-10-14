<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Support\Facades\Storage;

class Garden extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'title',
        'subtitle',
        'address_id',
        'user_id',
        'description',
        'image',
    ];

    /**
     * @param string $image
     * @return string
     */
    public function getImageAttribute(string $image): string
    {
        return Storage::url($image);
    }

    /**
     * @return BelongsToMany
     */
    public function amenities(): BelongsToMany
    {
        return $this->belongsToMany(Amenity::class, 'amenities_gardens');
    }

    /**
     * @return BelongsToMany
     */
    public function tentTypes(): BelongsToMany
    {
        return $this->belongsToMany(TentType::class, 'gardens_tent_types');
    }

    /**
     * @return BelongsTo
     */
    public function address(): BelongsTo
    {
        return $this->belongsTo(Address::class);
    }

    /**
     * @return BelongsTo
     */
    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }
}
