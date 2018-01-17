<?php

Auth::routes();
Route::get('/', 'LanderController@index')->name('lander.index');
Route::get('search', 'SearchController@index')->name('search.index');


//Route::get('/home', 'HomeController@index')->name('home');
