<?php

use App\Http\Controllers\CarController;
use App\Http\Controllers\CarFavoriteController;
use App\Http\Controllers\ClientController;
use App\Http\Controllers\ClientFavoriteController;
use App\Http\Controllers\RentalOrderController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/hello', function () {
    return view('hello', ['title' => 'Hello']);
});

Route::get('/clients', [ClientController::class, 'index']);
Route::get('/clients/{id}', [ClientController::class, 'show']);
Route::get('/rental-orders', [RentalOrderController::class, 'index']);
Route::get('/rental-orders/{id}', [RentalOrderController::class, 'show']);
Route::get('/cars', [CarController::class, 'index']); // добавлено
Route::get('/cars/{id}', [CarController::class, 'show']);

