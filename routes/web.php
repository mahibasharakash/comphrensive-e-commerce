<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ApplicationController;

require __DIR__.'/backend.php';

Route::get('admin/auth', [ApplicationController::class, 'admin'])->name('lvs.admin.app.auth');
Route::get('admin/auth/{any}', [ApplicationController::class, 'admin'])->where('any', '.*')->name('lvs.admin.app.auth.any');
Route::get('admin', [ApplicationController::class, 'admin'])->name('lvs.admin.app');
Route::get('admin/{any}', [ApplicationController::class, 'admin'])->where('any', '.*')->name('lvs.admin.app.any');

Route::get('seller/auth', [ApplicationController::class, 'seller'])->name('lvs.seller.app.auth');
Route::get('seller/auth/{any}', [ApplicationController::class, 'seller'])->where('any', '.*')->name('lvs.seller.app.auth.any');
Route::get('seller', [ApplicationController::class, 'seller'])->name('lvs.seller.app');
Route::get('seller/{any}', [ApplicationController::class, 'seller'])->where('any', '.*')->name('lvs.seller.app.any');

Route::get('auth', [ApplicationController::class, 'buyer'])->name('lvs.app.auth');
Route::get('auth/{any}', [ApplicationController::class, 'buyer'])->where('any', '.*')->name('lvs.app.auth.any');
Route::get('', [ApplicationController::class, 'buyer'])->name('lvs.app');
Route::get('{any}', [ApplicationController::class, 'buyer'])->where('any', '.*')->name('lvs.app.any');
