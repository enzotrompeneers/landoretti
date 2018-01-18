<?php

Auth::routes();
Route::get('/', 'LanderController@index')->name('lander');
Route::get('isearch', 'SearchController@index')->name('isearch');
Route::post('isearch/request', 'SearchController@request')->name('search.request');
Route::get('faq', 'FaqController@index')->name('faq');

//Route::get('/home', 'HomeController@index')->name('home');
