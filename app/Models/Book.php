<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * @property bool $published
 * @property Carbon $published_at
 */

class Book extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'title', 'content',
        'published', 'published_at',
    ];
    protected $casts = [
        'user_id' => 'integer',
        'published_at' => 'datetime',
        'published' => 'boolean',
    ];

    public function isPublished(): bool
    {
        // return !$this->published;
        return $this->published
        && $this->published_at;
    }
    
    public function fillAttributes(array $attributes): static
    {
        return $this->fill([
            'title' => $attributes['title'],
            'content' => $attributes['content'],
            'published_at' => new Carbon($attributes['published_at']) ?? null,
            'published' => $attributes['published'] ?? false,
        ]);
    }

}
