<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\Sluggable\HasSlug;
use Spatie\Sluggable\SlugOptions;
//use App\Models\User;

class Article extends Model
{
    use HasFactory, HasSlug;

    protected $fillable = [
        'title',
        'description',
        'og_title',
        'og_description',
        'user_id',
        'content',
        'short_content'
    ];

    public function getSlugOptions(): SlugOptions
    {
        return SlugOptions::create()
            ->generateSlugsFrom('title')
            ->saveSlugsTo('slug');
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
