<?php

use App\Http\Controllers\Resources\AccountController;
use Illuminate\Support\Facades\Route;

Route::name('accounts.')->prefix('accounts')->group(function() {
    Route::get('/', [AccountController::class, 'index'])->name('index');

});