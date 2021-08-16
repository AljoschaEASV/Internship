<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TentType extends Model
{
    use HasFactory;

    public function gardens()
    {
      return $this->belongsToMany(Garden::class);
    }
}
