<?php

use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\UserController;

// Маршруты для регистрации и авторизации
Route::get('/register', [RegisterController::class, 'showRegistrationForm'])->name('register.form');
Route::post('/register', [RegisterController::class, 'register'])->name('register.submit');
Route::get('/login', [LoginController::class, 'showLoginForm'])->name('login.form');
Route::post('/login', [LoginController::class, 'login'])->name('login.submit');
Route::post('/logout', [LoginController::class, 'logout'])->name('logout');

// Маршруты для админки - управления пользователями
Route::middleware('auth')->group(function () {
    Route::get('/admin/users', [UserController::class, 'index'])->name('admin.users.index');
    Route::get('/admin/users/{user}', [UserController::class, 'edit'])->name('admin.users.edit');
    Route::patch('/admin/users/{user}', [UserController::class, 'update'])->name('admin.users.update');



Route::post('/register', [RegisterController::class, 'register'])
->middleware([ValidateRegisterForm::class])
->name('register.submit');

Route::patch('/admin/users/{user}', [UserController::class, 'update'])
->middleware([ValidateUserEditForm::class])
->name('admin.users.update');

});
