<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\UserPostController;
use App\Http\Controllers\PostLikeController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\Auth\LogoutController;
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

Route::get('/dashboard', [DashboardController::class, 'index'])
    ->name('dashboard')
    ->middleware('auth');

Route::post('/logout', [LogoutController::class, 'store'])->name('logout');

Route::get('/',function(){
    return view('home');
})->name('home');
// Route::get('/demande',function(){
//     return view('posts.demande');
// });


// Route::get('users/{user}/posts', [UserPostController::class, 'index'])->name('users.posts');
Route::get('users/{user:username}/posts', [UserPostController::class, 'index'])->name('users.posts');

Route::get('/login', [LoginController::class, 'index'])->name('login');
Route::post('/login', [LoginController::class, 'store']);


Route::get('/register', [RegisterController::class, 'index'])->name('register');
Route::post('/register', [RegisterController::class, 'store']);

Route::get('/posts', [PostController::class, 'index'])->name('posts');
Route::get('offre', [PostController::class, 'offre'])->name('offre');
Route::get('demande', [PostController::class, 'demande'])->name('demande');
Route::get('/posts/{post}', [PostController::class, 'show'])->name('posts.show');
Route::post('/posts', [PostController::class, 'store']);
Route::post('/posts/{post}', [PostController::class, 'update'])->name('posts.update');
Route::delete('/posts/{post}', [PostController::class, 'destroy'])->name('posts.destroy');
Route::get('/posts/edit/{post}', [PostController::class, 'edit'])->name('posts.edit');
Route::get('/search',  [PostController::class, 'search'])->name('post.search');

Route::post('/posts/{post}/like', [PostLikeController::class, 'store'])->name('posts.like');
Route::delete('/posts/{post}/unlike', [PostLikeController::class, 'destroy'])->name('posts.unlike');

