<?php

use App\Http\Controllers\Admin\BorrowController;

Route::get('/','HomeController@index')->name('dashboard');

// Route::get('/author','AuthorController@index')->name('author.index');
// Route::post('/author','AuthorController@store')->name('author.store');
// Route::get('/author/create','AuthorController@create')->name('author.create');
// Route::get('/author/{author}/edit','AuthorController@edit')->name('author.edit');
// Route::put('/author/{author}','AuthorController@update')->name('author.update');
// Route::delete('/author/{author}','AuthorController@destroy')->name('author.destroy');

Route::get('/author/data','DataController@authors')->name('author.data');
Route::get('/book/data','DataController@books')->name('book.data');
Route::get('/borrow/data','DataController@borrows')->name('borrow.  ');
Route::resource('author','AuthorController'); // menggunakan route resource
Route::resource('book','BookController'); 
Route::get('borrow', 'BorrowController@index')->name('borrow.index');