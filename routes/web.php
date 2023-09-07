<?php
Route::get('auth/facebook', 'AuthController@redirectToFacebook');
Route::get('auth/facebook/callback', 'AuthController@handleFacebookCallback');


Route::get('/get-news', 'NewsController@getNews');

Route::get('/news/create', 'NewsController@create')->name('news.create');
Route::post('/news', 'NewsController@store')->name('news.store');
