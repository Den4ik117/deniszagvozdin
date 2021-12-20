<?php

use App\Http\Controllers\Admin\ArticleController;
use App\Http\Controllers\Admin\FileController;
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

Route::get('/', function () {
    return view('index');
})->name('index');

Route::post('/', function () {
    return view('index');
})->name('index.store');

Route::get('articles', function () {

})->name('articles.index');

Route::get('articles/{slug}', function ($slug) {
    $article = Article::where('slug', $slug)->firstOrFail();

    return view('articles.show', compact('article'));
})->name('articles.show');

Route::group(['prefix' => 'admin', 'name' => 'admin.', 'middleware' => 'auth', 'as' => 'admin.'], function () {
   Route::get('/', function () {
       return view('admin.index');
   })->name('index');

   Route::resource('articles', ArticleController::class);
   Route::resource('files', FileController::class)->except('show', 'edit', 'update');
});

require __DIR__.'/auth.php';
