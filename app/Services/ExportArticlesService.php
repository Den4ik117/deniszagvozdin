<?php

namespace App\Services;

use App\Models\Article;
use App\Models\Config;
use Illuminate\Support\Carbon;

class ExportArticlesService
{
    private Config $config;

    public function __construct()
    {
        $this->config = new Config();
    }

    public function export(): void
    {
        $this->deleteAllArticleIfTheyExist();

        foreach ($this->config->data as $article) {
            Article::query()->create([
                'title' => $article->title,
                'description' => $article->description,
                'lead' => $article->lead,
                'slug' => $article->slug,
                'author' => $article->author,
                'content' => '',
                'published_at' => Carbon::createFromFormat('Y-m-d', $article->published),
                'priority' => $article->priority,
                'visible' => true,
            ]);
        }
    }

    private function deleteAllArticleIfTheyExist(): void
    {
        $articles = Article::all();

        if ($articles->isNotEmpty()) {
            $articles->toQuery()->delete();
        }
    }
}
