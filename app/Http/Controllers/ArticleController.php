<?php

namespace App\Http\Controllers;

use App\Models\Article;

class ArticleController extends Controller
{
    public function index()
    {
        $articles = Article::query()
            ->select(['slug', 'title', 'lead', 'published_at', 'author'])
            ->where('visible', '=', true)
            ->latest()
            ->get();

        return view('articles.index', compact(['articles']));
    }

    public function show(Article $article)
    {
        return view('articles.show', compact(['article']));
    }
}
