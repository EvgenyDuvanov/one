<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'title', 'content',
        'published', 'published_at',
    ];
    protected $casts = [
        'published' => 'boolean',
    ];

    protected $dates = [
        'published_at',
    ];
}
