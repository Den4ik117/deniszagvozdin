<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\IndexController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\ArticleController;


Route::get('/', [IndexController::class, 'index'])->name('index');
Route::post('/', [IndexController::class, 'store'])->name('index.store');

Route::get('/blog', function () {
    return view('articles');
})->name('articles');

Route::get('/articles/kak-sozdavalsya-sajt-denis-zagvozdin', function () {
    return view('articles.article-1');
})->name('article.1');

Route::get('/article', function () {
    return view('article');
});

Route::middleware(['auth', 'verified'])->group(function() {
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');

    Route::resource('articles', ArticleController::class);
});

require __DIR__.'/auth.php';
