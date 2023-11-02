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


Route::get('/hell', function () {
    echo 'my first own route';
});


Route::get('/product', 'App\Http\Controllers\PostController@index')->name('product-list');

Route::get('/student', 'App\Http\Controllers\StudentController@index');


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/add-book', [App\Http\Controllers\BookController::class, 'addBook'])->name('add-book');
Route::post('/add-book-db', [App\Http\Controllers\BookController::class, 'addBookDB'])->name('add-book-db');
Route::get('/book-list', [App\Http\Controllers\BookController::class, 'index'])->name('book-list');

