<?php

use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\ArticleController;
use App\Http\Controllers\Admin\FileController;
use App\Http\Controllers\IndexController;
use App\Models\Article;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/article', function () {
    $article = Article::findOrFail(1);
    $articles = Article::all();

    return view('article', compact('article', 'articles'));
});

Route::get('/', [IndexController::class, 'index'])->name('index');
Route::post('/', [IndexController::class, 'store'])->name('index.store');
Route::get('/articles', [IndexController::class, 'articles'])->name('articles.index');
Route::get('articles/{slug}', [ArticleController::class, 'show'])->name('articles.show');

Route::group(['prefix' => 'admin', 'name' => 'admin.', 'middleware' => 'auth', 'as' => 'admin.'], function () {
   Route::get('/', AdminController::class)->name('index');
   Route::resource('articles', ArticleController::class)->except('show');
   Route::resource('files', FileController::class)->except('show', 'edit', 'update');
});

require __DIR__.'/auth.php';
