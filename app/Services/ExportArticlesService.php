<?php

namespace App\Services;

use App\Models\Article;
use App\Models\ArticleConfig;
use App\Models\Config;
use DOMDocument;
use Illuminate\Support\Arr;
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
            Article::query()->create([
                'title' => $article->title,
                'description' => $article->description,
                'lead' => $article->lead,
                'slug' => $article->slug,
                'author' => $article->author,
                'content' => $this->getContent($article),
                'image_content' => $this->getImageContent($article),
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

    private function getContent(ArticleConfig $article): string|null
    {
        $filename = resource_path("articles/$article->slug/index.md");

        if (!file_exists($filename)) return null;

        $content = file_get_contents($filename);

        $content = preg_replace_callback("/!\[(.+)\]\((.+)\)/", function ($matches) use ($article) {
            $src = Vite::asset("resources/articles/$article->slug/$matches[2]");
            $alt = $matches[1];
            return "![$alt]($src)";
        }, $content);

        return $this->parsedown->text($content);
    }

    private function getImageContent(ArticleConfig $article): string
    {
        $images = array_diff(scandir(resource_path("articles/$article->slug")), ['.', '..', 'index.md']);

        return Vite::asset("resources/articles/$article->slug/$images[2]");
    }
}
