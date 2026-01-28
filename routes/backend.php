<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthenticationController;
use App\Http\Controllers\ProfileController;

Route::prefix('auth')->group(function() {
    Route::post('/login', [AuthenticationController::class, 'login'])->name('LOGIN.API.AUTH');
    Route::post('/registration', [AuthenticationController::class, 'registration'])->name('REGISTRATION.API.AUTH');
    Route::post('/forgot', [AuthenticationController::class, 'forgot'])->name('FORGOT.API.AUTH');
    Route::post('/reset', [AuthenticationController::class, 'reset'])->name('RESET.API.AUTH');
    Route::post('/verification', [AuthenticationController::class, 'verification'])->name('VERIFICATION.API.AUTH');
});

Route::middleware('auth:sanctum')->group(function () {

    Route::prefix('profile')->group(function() {
        Route::get('/details', [ProfileController::class, 'details'])->name('USER.DETAILS.API.PROFILE');
        Route::post('/change-details', [ProfileController::class, 'changeDetails'])->name('USER.CHANGE.DETAILS.API.PROFILE');
        Route::post('/change-password', [ProfileController::class, 'changePassword'])->name('USER.CHANGE.PASSWORD.API.PROFILE');
        Route::post('/logout', [ProfileController::class, 'logout'])->name('USER.LOGOUT.API.PROFILE');
    });

});
