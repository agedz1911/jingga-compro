<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    use HasFactory;

    protected $fillable = [
        'event_title',
        'event_year',
        'gallery',
        'created_by',
        'updated_by',
        'is_active'
    ];

    protected $casts = [
        'gallery' => 'array'
    ];
}
