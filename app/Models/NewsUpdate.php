<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class NewsUpdate extends Model
{
    use HasFactory,  HasUuids;

    protected $fillable = [
        'title',
        'image',
        'description',
        'location',
        'created_by',
        'updated_by',
        'is_active'
    ];
}
