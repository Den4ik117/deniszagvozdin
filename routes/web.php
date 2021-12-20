<?php

use App\Http\Controllers\Admin\ArticleController;
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
});

Route::post('/', function () {
    return view('index');
})->name('index.store');

Route::group(['prefix' => 'admin', 'name' => 'admin.', 'middleware' => 'auth', 'as' => 'admin.'], function () {
   Route::get('/', function () {
       return view('admin.index');
   })->name('index');

   Route::resource('articles', ArticleController::class);
});

require __DIR__.'/auth.php';
