<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class HomeSlider extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'description',
        'image',
        'is_active',
        'tage',
        'created_by',
        'updated_by',
    ];
}
