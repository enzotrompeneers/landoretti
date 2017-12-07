<?php

Route::get('/', 'LanderController@index')->name('lander.index');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
