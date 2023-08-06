<?php
use App\Http\Controllers\FeedbackController;

Route::delete('/feedback/{feedback}', [FeedbackController::class, 'destroy'])->name('feedback.destroy');
