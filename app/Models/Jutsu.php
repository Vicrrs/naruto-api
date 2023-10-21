<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Jutsu extends Model
{
    use HasFactory;
    public function characters()
    {
        return $this->belongsToMany(Character::class);
    }
    protected $fillable = ['name', 'type', 'description'];
}
