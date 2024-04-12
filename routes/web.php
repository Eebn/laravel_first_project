<?php

use App\Http\Controllers\Post\CreateController;
use App\Http\Controllers\Post\DestroyController;
use App\Http\Controllers\Post\EditController;
use App\Http\Controllers\Post\IndexController;
use App\Http\Controllers\Post\ShowController;
use App\Http\Controllers\Post\StoreController;
use App\Http\Controllers\Post\UpdateController;
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
Route::get('/', function () {
    return view('welcome');
});


Route::group(['namespace' => 'App\Http\Controllers\Post'], function () {
    Route::get('/posts', IndexController::class)->name('post.index');
    Route::get('/posts/create', CreateController::class)->name('post.create');

    Route::post('/posts', StoreController::class)->name('post.store');
    Route::get('/posts/{post}', ShowController::class)->name('post.show');
    Route::get('/posts/{post}/edit', EditController::class)->name('post.edit');
    Route::patch('/posts/{post}', UpdateController::class)->name('post.update');
    Route::delete('/posts/{post}', DestroyController::class)->name('post.delete');
});


Route::get('/main', 'App\Http\Controllers\MainController@index')->name('main.index');
Route::get('/about', 'App\Http\Controllers\AboutController@index')->name('about.index');
Route::get('/contacts', 'App\Http\Controllers\ContactsController@index')->name('contact.index');

