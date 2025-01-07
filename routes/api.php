<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PriceController;

Route::post('/store', [PriceController::class, 'store']);
Route::get('/qrcreate/{id}', [PriceController::class, 'qrcreate']);
Route::get('/show-info/{id}', [PriceController::class, 'showInfo']);
