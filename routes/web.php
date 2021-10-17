<?php

use Illuminate\Http\Request;


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


//START ROUTES BOOKS

Route::get('/', '\App\Http\Controllers\NewsController@indexxx') -> name ('index');

Route::get('/{name}', '\App\Http\Controllers\NewsController@author_index') -> name ('author_index');

Route::get('/books', '\App\Http\Controllers\NewsController@addbook') -> name('addbook');

Route::get('/books/delete/{id}', '\App\Http\Controllers\NewsController@delete_book') -> name('delete_book');

Route::get('/books/edit/{id}', '\App\Http\Controllers\NewsController@edit_book') -> name('edit_book');

Route::post('/books/update/{id}', '\App\Http\Controllers\NewsController@update_book') -> name('update_book');

Route::post('/books/check', '\App\Http\Controllers\NewsController@addbook_check') -> name('addbook');

//END ROUTES BOOKS

//START ROUTES AUTHORS

Route::get('/author/delete/{id}', '\App\Http\Controllers\AuthorController@delete_author') -> name('delete_author');

Route::get('/author', '\App\Http\Controllers\AuthorController@author') -> name('author');

Route::post('/author/update', '\App\Http\Controllers\AuthorController@update_author') -> name('update_author');

Route::post('/author/check', '\App\Http\Controllers\AuthorController@author_check') -> name('author_check');

Route::get('/author/edit/{id}', '\App\Http\Controllers\AuthorController@edit_author') -> name('edit_author');

//END ROUTES AUTHORS