<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Amenity extends Model
{
    use HasFactory;  

      /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
      'name',
      'icon',
      
  ];

  /**
   * The Many to Many relation with Garden.
   *
   * @return BelongsToMany
   */
    public function gardens():BelongsToMany
    {
      return $this->belongsToMany(Garden::class, 'amenities_gardens');
    }
}
