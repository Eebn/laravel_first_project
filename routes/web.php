<?php

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


Route::get('/posts', 'App\Http\Controllers\PostController@index')->name('post.index');
Route::get('/posts/create', 'App\Http\Controllers\PostController@create')->name('post.create');

Route::post('/posts', 'App\Http\Controllers\PostController@store')->name('post.store');
Route::get('/posts/{post}', 'App\Http\Controllers\PostController@show')->name('post.show');
Route::get('/posts/{post}/edit', 'App\Http\Controllers\PostController@edit')->name('post.edit');
Route::patch('/posts/{post}', 'App\Http\Controllers\PostController@update')->name('post.update');
Route::delete('/posts/{post}', 'App\Http\Controllers\PostController@destroy')->name('post.delete');


Route::get('/main', 'App\Http\Controllers\MainController@index')->name('main.index');
Route::get('/about', 'App\Http\Controllers\AboutController@index')->name('about.index');
Route::get('/contacts', 'App\Http\Controllers\ContactsController@index')->name('contact.index');








Route::get('/dreams', 'App\Http\Controllers\DreamController@show');
Route::get('/dreams/create', 'App\Http\Controllers\DreamController@create');
Route::get('/dreams/update', 'App\Http\Controllers\DreamController@update');
Route::get('/dreams/delete', 'App\Http\Controllers\DreamController@delete');

