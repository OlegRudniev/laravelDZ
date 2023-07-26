<?php
use App\Http\Controllers\NewsController;

Route::get('/news', [NewsController::class, 'index']);
