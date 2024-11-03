<?php

use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\Auth\LoginController;


Route::get('/', function () {
    return Inertia::render('Welcome');
})->name('t');

Route::get('/login', function () {
    return Inertia::render('Welcome');
})->name('loginas');

Route::get('/register', function () {
    return Inertia::render('Welcome');
});

Route::middleware(['auth:web'])->get('/main', function () {
    return Inertia::render('Main');
})->name('Home');


Route::post('/login', [LoginController::class, 'login'])->name('login');
Route::post('/register', [RegisterController::class, 'register'])->name('register');
