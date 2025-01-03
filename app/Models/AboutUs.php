<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AboutUs extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'description',
        'tag',
        'image',
        'is_active',
        'created_by',
        'updated_by',
    ];

    protected $casts = [
        'image' => 'array'
    ];
}
