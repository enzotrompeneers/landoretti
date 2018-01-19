<?php

Auth::routes();
Route::get('/', 'LanderController@index')->name('lander');

Route::get('isearch', 'SearchController@index')->name('isearch');
Route::post('isearch/request', 'SearchController@request')->name('search.request');

Route::get('faq', 'FaqController@index')->name('faq');

Route::get('auction', 'AuctionController@index')->name('auction.index');
Route::get('auction/create', 'AuctionController@create')->name('auction.create');
