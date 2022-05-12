<?php

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


// theme
Route::get('/', [App\Http\Controllers\ThemeController::class, 'index'])->name('theme.index');
Route::get('/themes/{theme}', [App\Http\Controllers\ThemeController::class, 'show'])->name('theme.show');


Route::get('/comment', [App\Http\Controllers\CommentController::class, 'index'])->name('comment.index');
Route::get('/comment/create', [App\Http\Controllers\CommentController::class, 'create'])->name('comment.create');
Route::post('/comment', [App\Http\Controllers\CommentController::class, 'store'])->name('comment.store');
Route::get('/comment/{comment}', [App\Http\Controllers\CommentController::class, 'show'])->name('comment.show');
Route::get('/comment/{comment}/edit', [App\Http\Controllers\CommentController::class, 'edit'])->name('comment.edit');
Route::patch('/comment/{comment}', [App\Http\Controllers\CommentController::class, 'update'])->name('comment.update');
Route::delete('/comment/{comment}', [App\Http\Controllers\CommentController::class, 'destroy'])->name('comment.delete');

