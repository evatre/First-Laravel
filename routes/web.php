<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;

use App\Http\Controllers\CommentController;
use App\Http\Controllers\PostCommentController;


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
    return view('welcome');
});

Route::controller(PostController::class)->group(function() {
    Route::get('/posts', 'index')->name('posts.index');
    Route::get('/posts/create', 'create');
    Route::post('/posts/create', 'store')->name('posts.create');
    Route::get('/posts/show/{post}', 'show')->name('posts.show');
    Route::get('/posts/edit/{post}', 'edit')->name('posts.edit');
    Route::post('/posts/edit/{post}', 'update');
    Route::get('/delete/{post}', 'destroy')->name('posts.delete');
});

Route::controller(CommentController::class)->group(function()
{
    Route::get('/comments', 'index')->name('comments.index');
    Route::get('/comments/create', 'create');
    Route::post('/comments/create', 'store')->name('comments.create');
    Route::get('/comments/show/{comment}', 'show')->name('comments.show');
    Route::get('/comments/edit/{comment}', 'edit')->name('comments.edit');
    Route::post('/comments/edit/{comment}', 'update');
    Route::get('/delete/{comment}', 'destroy')->name('comments.delete');
});

Route::controller(PostCommentController::class)->group(function()
{
    Route::post('/postcomments/store', 'store')->name('postcomments.store');

});
