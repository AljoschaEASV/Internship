<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Garden extends Model
{
    use HasFactory;

    public function amenities()
    {
      return $this->belongsToMany(Amenity::class);
    }

    public function tentTypes()
    {
      return $this->belongsToMany(TentType::class);
    }

    public function address()
    {
        return $this->belongsTo(Address::class);
    }
    public function user()
    {
        return $this->belongsTo(User::class);
    }


}
