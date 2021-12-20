<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Article;
use Illuminate\Http\Request;

class ArticleController extends Controller
{
    public function index()
    {
        $articles = Article::latest()->get();

        return view('admin.articles.index', compact('articles'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.articles.create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'required|string|max:255',
            'og_title' => 'required|string|max:255',
            'og_description' => 'required|string|max:255',
            'preview' => 'required|string|max:255',
            'content' => 'required|string'
        ]);

        Article::create($validated + [
                'user_id' => auth()->user()->id,
                'visible' => $request->boolean('visible')
            ]);

        return redirect()->route('admin.articles.index')->with('success', 'Статья успешно создана!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Article  $article
     * @return \Illuminate\Http\Response
     */
    public function show(Article $article)
    {
        //
    }


    public function edit(Article $article)
    {
        $files = $article->files;

        return view('admin.articles.edit', compact(['article', 'files']));
    }

    public function update(Request $request, Article $article)
    {
        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'required|string|max:255',
            'og_title' => 'required|string|max:255',
            'og_description' => 'required|string|max:255',
            'preview' => 'required|string|max:255',
            'content' => 'required|string'
        ]);

        $article->update($validated + [
                'visible' => $request->boolean('visible')
            ]);

        return back()->with('success', 'Статья успешно обновлена!');
    }

    public function destroy(Article $article)
    {
        $article->delete();

        return back()->with('success', 'Статья успешно удалена!');
    }
}