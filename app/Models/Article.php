<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    protected $fillable = [
        'title',
        'description',
        'lead',
        'slug',
        'author',
        'content',
        'published_at',
        'priority',
        'visible',
    ];

    protected $casts = [
        'published_at' => 'datetime',
        'visible' => 'boolean',
    ];
}
