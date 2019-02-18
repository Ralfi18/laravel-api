<?php

use Illuminate\Http\Request;
use App\Http\Resources\BooksCollection;
use App\Book;
/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

// Route::get('/books', function () {
//     return new BooksCollection(Book::all());
// });
// load all books
Route::get('/books', 'BooksController@index');
Route::get('/books/{id}', 'BooksController@show');
Route::post('/books/store', 'BooksController@store');