<?php

namespace App\Services;

use App\Models\Article;
use Illuminate\Support\Facades\View;

class UpdateSitemapService
{
    public function update(): void
    {
        $urls = Article::query()
            ->select(['updated_at', 'slug'])
            ->where('visible', '=', true)
            ->get()
            ->map(fn (Article $article) => [
                'loc' => route('articles.show', $article->slug),
                'lastmod' => $article->updated_at->format('Y-m-d')
            ])->push([
                'loc' => route('index'),
                'lastmod' => now()->format('Y-m-d'),
            ], [
                'loc' => route('articles.index'),
                'lastmod' => now()->format('Y-m-d'),
            ]);

        $sitemap = View::make('sitemap', compact(['urls']))->render();

        file_put_contents(public_path('sitemap.xml'), $sitemap);
    }
}
