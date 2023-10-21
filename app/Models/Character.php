<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Character extends Model
{
    use HasFactory;
    public function jutsus()
    {
        return $this->belongsToMany(Jutsu::class);
    }
}
