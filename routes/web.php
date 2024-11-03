<?php

use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\ForgotPasswordController;


Route::get('/', function () {
    return Inertia::render('Welcome');
})->name('welcome');

Route::get('/login', function () {
    return Inertia::render('Welcome');
})->name('login');

Route::get('/register', function () {
    return Inertia::render('Welcome');
})->name('register');

Route::get('/forgot-password', function () {
    return Inertia::render('Welcome');
})->name('forgot-password');

Route::middleware(['auth:web'])->get('/main', function () {
    return Inertia::render('Main');
})->name('Home');


Route::post('/login', [LoginController::class, 'login'])->name('loginas');
Route::post('/register', [RegisterController::class, 'register'])->name('registeris');
Route::post('/forgot-password', [ForgotPasswordController::class, 'sendResetLinkEmail'])->name('forgot-password');


Route::get('/test-email', function () {
    Mail::raw('This is a test email.', function ($message) {
        $message->to('mantsmockevicius@gmail.com')->subject('Test Email');
    });

    return 'Test email sent!';
});
