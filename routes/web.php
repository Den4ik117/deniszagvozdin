<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\IndexController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\ArticleController;


Route::get('/', [IndexController::class, 'index'])->name('index');
Route::post('/', [IndexController::class, 'store'])->name('index.store');

Route::get('/articles', function () {
    $articles = \App\Models\Article::all();

//    $html = \App\Services\JSON2HTMLService::decode($json);

    return view('articles', compact('articles'));
})->name('articles');

Route::get('/test', function () {
    $json = json_decode(file_get_contents(public_path('json/article-1.json')), true);

    $html = \App\Services\JSON2HTMLService::decode($json);

    return view('test', compact('html'));
});

Route::get('/articles/kak-sozdavalsya-sajt-denis-zagvozdin', function () {
    return view('articles.article-1');
})->name('article.1');

Route::get('/articles/{slug}', function ($slug) {
    $article = \App\Models\Article::where('slug', $slug)->first();

    $html = \App\Services\JSON2HTMLService::decode(json_decode($article->content, true));

    return view('article.show', compact('article', 'html'));
})->name('article');

Route::middleware(['auth', 'verified', 'can:dashboard.view'])->prefix('dashboard')->group(function() {
    Route::get('/', [DashboardController::class, 'index'])->name('dashboard');

    Route::resource('articles', ArticleController::class);
});

require __DIR__.'/auth.php';
