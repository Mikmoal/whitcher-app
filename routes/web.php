<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CreditRequestController;

Route::get('/', function () {
    return view('welcome');
});

Route::resource('requests', CreditRequestController::class);
