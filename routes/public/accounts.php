<?php

use App\Http\Controllers\Resources\AccountController;
use Illuminate\Support\Facades\Route;

Route::get('accounts', [AccountController::class, 'index']);