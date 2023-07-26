<?php
use App\Http\Controllers\FormController;

Route::get('/feedback', [FormController::class, 'showFeedbackForm'])->name('feedback.form');
Route::post('/feedback', [FormController::class, 'submitFeedback'])->name('feedback.submit');

Route::get('/data-request', [FormController::class, 'showDataRequestForm'])->name('data-request.form');
Route::post('/data-request', [FormController::class, 'submitDataRequest'])->name('data-request.submit');
