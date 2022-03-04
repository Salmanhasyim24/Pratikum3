<?php

use App\Http\Controllers\ArticleController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\PostController;
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
    return view('auth.login2');
});

Route::get('/dashboard', [DashboardController::class, 'index']);
Route::get('/user-profile', [DashboardController::class, 'profile']);
Route::get('/list-post', [PostController::class, 'index']);
Route::get('/add-post', [PostController::class, 'create']);
Route::get('/edit-post', [PostController::class, 'edit']);

Route::resource('/list-article', ArticleController::class);
// Route::get('/list-article', [ArticleController::class,'index']);
// Route::get('/list-article/create', [ArticleController::class, 'create']);
// Route::post('/list-article/store', [ArticleController::class,'store']);
// Route::get('/list-article/{id}/edit', [ArticleController::class, 'edit']);
// Route::put('/list-article/{id}', [ArticleController::class, 'update']);
// Route::delete('/list-article/{id}', [ArticleController::class, 'destroy']);



// Route::get('/list', [BiodataController::class, 'index'])->name('list');
// Route::get('/add_siswa', [BiodataController::class, 'create'])->name('add-siswa');
// Route::post('/store_siswa', [BiodataController::class, 'store']);
// Route::get('/edit/{id}', [BiodataController::class, 'edit'])->name('edit-siswa');
// Route::put('/update/{id}', [BiodataController::class, 'update'])->name('update-siswa');
// Route::delete('/delete/{id}', [BiodataController::class, 'destroy'])->name('destroy-siswa');
// Route::get('/bio/{id}', [BiodataController::class, 'show'])->name('show-bio');