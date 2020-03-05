<?php

use App\Http\Controllers\Admin\AuthorController;

Route::get('/','HomeController@index')->name('admin');

Route::get('/author','AuthorController@index')->name('author.index');