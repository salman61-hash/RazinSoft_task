<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('dashboard');
})->middleware('auth')->name('dashboard');





Route::get('/register', [AuthController::class, 'showRegister'])->name('register');
Route::post('/register', [AuthController::class, 'register']);

Route::get('/login', [AuthController::class, 'showLogin'])->name('login');
Route::post('/login', [AuthController::class, 'login']);

Route::get('/logout', [AuthController::class, 'logout'])->name('logout');




Route::middleware('auth')->group(function () {
    Route::get('/profile/create', [ProfileController::class, 'create'])->name('profile.create');
    Route::post('/profile/store', [ProfileController::class, 'store'])->name('profile.store');


     Route::get('/profile/my', [ProfileController::class, 'myProfile'])->name('profile.my');
    Route::get('/profiles', [ProfileController::class, 'allProfiles'])->name('profiles.list');
    Route::get('/profile/{id}', [ProfileController::class, 'view'])->name('profile.view');
});
