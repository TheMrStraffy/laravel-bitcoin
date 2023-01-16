<?php

use App\Http\Controllers\BitcoinController;
use Illuminate\Support\Facades\Route;


Route::get('/', [BitcoinController::class, 'index'])->name('home');

Route::resource('bitcoins', BitcoinController::class);
