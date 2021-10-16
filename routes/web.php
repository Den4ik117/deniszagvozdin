<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\IndexController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\Dashboard\ArticleController as DashboardArticleController;
use App\Http\Controllers\ArticleController;


Route::get('/', [IndexController::class, 'index'])->name('index');
Route::post('/', [IndexController::class, 'store'])->name('index.store');

Route::get('/articles', [ArticleController::class, 'index'])->name('articles');
Route::get('/articles/{slug}', [ArticleController::class, 'show'])->name('article');

Route::middleware(['auth', 'verified', 'can:dashboard.view'])->prefix('dashboard')->group(function() {
    Route::get('/', [DashboardController::class, 'index'])->name('dashboard');

    Route::resource('articles', DashboardArticleController::class);
});

require __DIR__.'/auth.php';
