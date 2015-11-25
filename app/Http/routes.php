<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', "LastestAddedController@index");
Route::get('/home', function(){
        return redirect('/');
});
Route::get('books/borrowed',"BooksController@borrowed");
Route::get('books/{id}/borrow',"BooksController@borrow");
Route::get('books/{id}/unborrow',"BooksController@unborrow");
Route::resource('books',"BooksController");
Route::controllers ([
    'auth'=>'Auth\AuthController',
    'password' =>'Auth\PasswordController'
]);

