<?php

namespace App\Models;

use Illuminate\Support\Arr;

class ArticleConfig
{
    public readonly string $title;
    public readonly string $slug;
    public readonly string $author;
    public readonly string $description;
    public readonly string $lead;
    public readonly int $priority;
    public readonly string $published;

    public function __construct(array $data)
    {
        $this->title = Arr::get($data, 'title', '');
        $this->slug = Arr::get($data, 'slug', '');
        $this->author = Arr::get($data, 'author', '');
        $this->description = Arr::get($data, 'description', '');
        $this->lead = Arr::get($data, 'lead', '');
        $this->priority = Arr::get($data, 'priority', 0);
        $this->published = Arr::get($data, 'published', now()->format('Y-d-m'));
    }
}
