<?php

use App\Http\Controllers\Resources\TransactionController;
use Illuminate\Support\Facades\Route;

Route::name('transactions.')->prefix('transactions')->group(function() {
    Route::get('/', [TransactionController::class, 'index'])->name('index');

});