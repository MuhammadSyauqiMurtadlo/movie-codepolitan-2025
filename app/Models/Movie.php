<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Movie extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'slug'
    ];

    public function ratings()
    {
        return $this->hasMany(Rating::class);
    }
}
