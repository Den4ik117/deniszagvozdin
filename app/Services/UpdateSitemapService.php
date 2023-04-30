<?php

namespace App\Services;

use App\Models\Article;
use Illuminate\Support\Facades\View;

class UpdateSitemapService
{
    public function update(): void
    {
        $articleURLs = Article::query()
            ->select(['published_at', 'slug'])
            ->where('visible', '=', true)
            ->get()
            ->map(fn (Article $article) => [
                'loc' => route('articles.show', $article->slug),
                'lastmod' => $article->published_at->format('Y-m-d')
            ]);

        $urls = [
            [
                'loc' => route('index'),
                'lastmod' => now()->format('Y-m-d'),
            ],
            [
                'loc' => route('articles.index'),
                'lastmod' => now()->format('Y-m-d'),
            ],
            ...$articleURLs
        ];

        $sitemap = View::make('sitemap', compact(['urls']))->render();

        file_put_contents(public_path('sitemap.xml'), $sitemap);
    }
}
