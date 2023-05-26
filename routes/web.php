<?php

use App\Http\Controllers\TestController;
use Illuminate\Support\Facades\Route;

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

//Route::get('/', function () {
//    return view('welcome');
//});

Route::view('/', 'welcome', [
    'name' => 'Andy',
]);

// CRUD (create, read, update, delete)

//Route::get('posts', [PostController::class, 'index'])->name('posts');
//Route::get('posts/create', [PostController::class, 'create'])->name('posts.create');
//Route::post('posts', [PostController::class, 'store'])->name('posts.store');
//Route::get('posts/{post}', [PostController::class, 'show'])->name('posts.show');
//Route::get('posts/{post}/edit', [PostController::class, 'edit'])->name('posts.edit');
//Route::put('posts/{post}', [PostController::class, 'update'])->name('posts.update');
//Route::delete('posts/{post}', [PostController::class, 'delete'])->name('posts.delete');
//Route::put('posts/{post}/like', [PostController::class, 'like'])->name('posts.like');


Route::redirect('/test', '/', 302);

Route::get('/controller', TestController::class);
