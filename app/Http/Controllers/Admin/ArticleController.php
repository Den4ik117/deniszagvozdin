<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Article;
use App\Models\NewArticle;
use Illuminate\Http\Request;
use Parsedown;

class ArticleController extends Controller
{
    public function __construct()
    {
        $this->middleware('can:articles.view')->only('index');
        $this->middleware('can:articles.create')->only('create', 'store');
        $this->middleware('can:articles.update')->only('edit', 'update');
        $this->middleware('can:articles.delete')->only('destroy');
    }

    public function index()
    {
        $articles = Article::latest()->get();

        return view('admin.articles.index', compact('articles'));
    }

    public function create()
    {
        return view('admin.articles.create');
    }

    public function store(Request $request, Parsedown $parseDown)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'required|string|max:65535',
            'preview' => 'required|string|max:65535',
            'content_md' => 'required|string|max:16777215'
        ]);

        Article::create([
            'title' => $request->input('title'),
            'description' => $request->input('description'),
            'og_title' => $request->input('title'),
            'og_description' => $request->input('description'),
            'preview' => $request->input('preview'),
            'user_id' => auth()->user()->id,
            'visible' => $request->boolean('visible'),
            'content_md' => $request->input('content_md'),
            'content_html' => $parseDown->text($request->input('content_md'))
        ]);

        return redirect()->route('admin.articles.index')->with('success', 'Статья успешно создана!');
    }

    public function show($slug)
    {
//        $article = Article::where('slug', $slug)->firstOrFail();
        $article = NewArticle::with(['files'])->where('slug', $slug)->firstOrFail();

//        dd($article);

        if (!$article->visible && !auth()->check())
            abort(404);

        return view('article', compact('article'));
    }


    public function edit(Article $article)
    {
        $files = $article->files;

        return view('admin.articles.edit', compact(['article', 'files']));
    }

    public function update(Request $request, Article $article, Parsedown $parseDown)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'required|string|max:65535',
            'preview' => 'required|string|max:65535',
            'content_md' => 'required|string|max:16777215'
        ]);

        $article->update([
            'title' => $request->input('title'),
            'description' => $request->input('description'),
            'og_title' => $request->input('title'),
            'og_description' => $request->input('description'),
            'preview' => $request->input('preview'),
            'visible' => $request->boolean('visible'),
            'content_md' => $request->input('content_md'),
            'content_html' => $parseDown->text($request->input('content_md')),
            'priority' => $request->input('priority')
        ]);

        return redirect()->route('admin.articles.edit', $article->id)->with('success', 'Статья успешно обновлена!');
    }

    public function destroy(Article $article)
    {
        $article->delete();

        return redirect()->route('admin.articles.index')->with('success', 'Статья успешно удалена!');
    }
}
