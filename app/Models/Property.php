<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Property extends Model
{
    use HasFactory;

    // Define fillable attributes for mass assignment
    protected $fillable = [
        'title',
        'description',
        'price',
        'location',
        'imageUrl',
        'bedrooms',
        'bathrooms',
        'size',
        'available',
    ];
}

