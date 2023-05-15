<?php

namespace App\Services;

use App\Models\Article;
use App\Models\Config;
use DOMDocument;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Vite;
use Parsedown;

class ExportArticlesService
{
    private Config $config;
    private Parsedown $parsedown;

    public function __construct()
    {
        $this->config = new Config();
        $this->parsedown = new Parsedown();
    }

    public function export(): void
    {
        $this->deleteAllArticleIfTheyExist();

        foreach ($this->config->data as $article) {
            $_content = null;
            $filename = resource_path('articles/' . $article->slug . '/index.md');
            if (file_exists($filename)) {
                $content = file_get_contents($filename);
                $content = $this->parsedown->text($content);
                $html = new DOMDocument();
                $html->loadHTML(mb_convert_encoding($content, 'HTML-ENTITIES', 'UTF-8'));
                $tags = $html->getElementsByTagName('img');
                foreach ($tags as $tag) {
                    $filepath = 'resources/articles/' . $article->slug . '/' . $tag->getAttribute('src');
                    $tag->setAttribute('src', Vite::asset($filepath));
                }
                $_content = $html->saveHTML();
            }

            Article::query()->create([
                'title' => $article->title,
                'description' => $article->description,
                'lead' => $article->lead,
                'slug' => $article->slug,
                'author' => $article->author,
                'content' => $_content,
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
