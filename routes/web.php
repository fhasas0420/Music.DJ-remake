<?php

use Illuminate\Support\Facades\Route;
use Inertia\Inertia;
use Illuminate\Http\Request;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\ForgotPasswordController;
use App\Http\Controllers\SettingsController;
use App\Http\Controllers\UserProfileController;
use App\Http\Controllers\RoomController;

Route::get('/', function (Request $request) {
    if($request->user()) {
        return redirect()->route('Home');
    } else {
        return Inertia::render('Welcome', [
            'canLogin' => Route::has('login'),
            'canRegister' => Route::has('register'),
        ]);
    }
})->name('welcome');

Route::get('/two-factor-challenge', function () {
    return Inertia::render('Welcome');
})->name('two-factor.login');

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

Route::middleware(['auth:web'])->get('/rooms', function () {
    return Inertia::render('Rooms');
})->name('Rooms');

Route::middleware(['auth:web'])->get('/my-library', function () {
    return Inertia::render('Library');
})->name('Library');

Route::middleware(['auth:web'])->get('/settings', function () {
    return Inertia::render('Settings');
})->name('Settings');

Route::middleware(['auth:web'])->get('/room', function () {
    return Inertia::render('Room');
})->name('Room');


Route::post('/logout', [LoginController::class, 'logout'])->name('atsijungimas');


Route::post('/forgot-password', [ForgotPasswordController::class, 'sendResetLinkEmail'])->name('forgot-password');

Route::put('/change-first-name', [SettingsController::class, 'ChangeFirstName'])->name('Change-FirstName');
Route::put('/change-last-name', [SettingsController::class, 'ChangeLastName'])->name('Change-LastName');
Route::put('/change-birthday', [SettingsController::class, 'ChangeBirthday'])->name('Change-Birthday');
Route::put('/change-pronouns', [SettingsController::class, 'ChangePronuons'])->name('Change-Pronuons');
Route::put('/change-email', [SettingsController::class, 'ChangeEmail'])->name('Change-Email');
Route::put('/change-icon', [SettingsController::class, 'ChangeIcon'])->name('Change-Icon');
Route::put('/change-password', [SettingsController::class, 'updatePassword'])->name('Change-Password');
Route::put('/change-icon', [SettingsController::class, 'updateIcon'])->name('Change-Icon');

Route::get('/user-information', [UserProfileController::class, 'show'])->name('Show-User-Info');
Route::get('/two-factor-status', [UserProfileController::class, 'twoFactorStatus'])->middleware('auth');

Route::post('/create-room', [RoomController::class, 'store'])->name('create-room');


