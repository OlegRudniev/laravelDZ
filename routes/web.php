<?php

Route::get('/resources/create', 'ResourceController@create')->name('resources.create');
Route::get('/resources/{resource}/edit', 'ResourceController@edit')->name('resources.edit');
