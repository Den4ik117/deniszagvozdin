<?php

namespace App\Http\Controllers;

use App\Services\UploadImageService;
use Illuminate\Http\Request;

use App\Models\Article;

class ArticleController extends Controller
{
    public function __construct()
    {
        $this->middleware('can:articles.view')->only('index', 'show');
        $this->middleware('can:articles.create')->only('create', 'store');
        $this->middleware('can:articles.update')->only('edit', 'update');
        $this->middleware('can:articles.delete')->only('destroy');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $articles = Article::all();

        return view('article.index', compact('articles'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('article.store');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'description' => 'required',
            'og_title' => 'required',
            'og_description' => 'required',
            'content' => 'required',
            'short_content' => 'required|max:256',
            'image' => 'required|image'
        ]);

        $article = Article::create([
            'title' => $request->input('title'),
            'description' => $request->input('description'),
            'og_title' => $request->input('og_title'),
            'og_description' => $request->input('og_description'),
            'content' => $request->input('content'),
            'short_content' => $request->input('short_content'),
            'user_id' => auth()->user()->id,
        ]);

        if ($request->hasFile('image'))
        {
            $imageUrl = UploadImageService::upload($request->image, $article->id);
            $article->image_url = $imageUrl;
            $article->save();
        }

        return back()->with('success', __('Article has been stored'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $article = Article::findOrFail($id);

        return view('article.show', compact('article'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $article = Article::findOrFail($id);

        return view('article.edit', compact('article'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $validated = $request->validate([
            'title' => 'required',
            'slug' => 'required',
            'description' => 'required',
            'og_title' => 'required',
            'og_description' => 'required',
            'content' => 'required',
            'short_content' => 'required|max:255'
        ]);

        Article::findOrFail($id)->update($validated);

        return back()->with('success', __('Article has been updated'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Article::findOrFail($id)->delete();

        return back()->with('success', __('Article has been deleted;='));
    }
}
