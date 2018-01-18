<?php

Auth::routes();
Route::get('/', 'LanderController@index')->name('lander.index');
Route::get('search', 'SearchController@index')->name('search.index');
Route::post('search/request', 'SearchController@request')->name('search.request');

//Route::get('/home', 'HomeController@index')->name('home');
