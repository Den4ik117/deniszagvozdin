<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class NewArticle extends Model
{
    public $timestamps = false;

    protected $fillable = [
        'title',
        'description',
        'slug',
//        'og_title',
//        'og_description',
        'lead',
        'author',
//        'preview',
//        'content_md',
        'content',
        'visible',
        'priority',
        'published_at',
    ];

    protected $casts = [
        'published_at' => 'datetime',
    ];

    public function files()
    {
        return $this->hasMany(File::class, 'article_id', 'id');
    }
}
