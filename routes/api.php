<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PriceController;

Route::post('/store', [PriceController::class, 'store']);
Route::get('/write/{id}', [PriceController::class, 'write']);
Route::get('/discount/{id}', [PriceController::class, 'discount']);
