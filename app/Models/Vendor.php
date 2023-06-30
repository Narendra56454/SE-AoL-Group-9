<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Vendor;

class Vendor extends Model
{
    protected $fillable = [
        'name',
        'rating',
        'category',
        'description',
        'location',
        'food_image'
    ];

    public function reviews()
    {
        return $this->hasMany(Review::class);
    }
}
