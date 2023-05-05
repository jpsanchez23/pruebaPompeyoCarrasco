<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\AuthController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/max-items', [App\Http\Controllers\HomeController::class, 'maxItems'])->name('max-items');

Route::get('/login', [App\Http\Controllers\AuthController::class, 'showLoginForm'])->name('login');

Route::get('/posts/create', [App\Http\Controllers\PostController::class, 'create'])->name('posts.create');
Route::post('/posts', [App\Http\Controllers\PostController::class, 'store'])->name('posts.store');
Route::get('/posts/{type?}', [App\Http\Controllers\PostController::class, 'index'])->name('posts.index');

Route::get('/publicaciones/{id}/comentarios', [App\Http\Controllers\ComentarioController::class, 'index'])->name('comentarios.index');
Route::post('/publicaciones/{id}/comentarios', [App\Http\Controllers\ComentarioController::class, 'store'])->name('comentarios.store');