<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\CommentController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

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
// Route::get('/category', [App\Http\Controllers\CategoryController::class, 'create'])->name('category.create');
// Route::get('/categories', [App\Http\Controllers\CategoryController::class, 'index'])->name('category.index');
// Route::post('/category', [App\Http\Controllers\CategoryController::class, 'store'])->name('category.store');
// Route::get('/category/{id}/edit', [App\Http\Controllers\CategoryController::class, 'edit'])->name('category.edit');
// Route::get('/category/{id}', [App\Http\Controllers\CategoryController::class, 'show'])->name('category.show');
// Route::put('/category/{id}', [App\Http\Controllers\CategoryController::class, 'update'])->name('category.update');
// Route::delete('/category/{id}', [App\Http\Controllers\CategoryController::class, 'destroy'])->name('category.destroy');

Route::resource('category', CategoryController::class);
Route::resource('blog', BlogController::class);
Route::resource('comment', CommentController::class);