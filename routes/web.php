<?php

use App\Http\Controllers\CartController;
use App\Http\Controllers\CustomController;
use App\Http\Controllers\PaiementController;
use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\HomeController;



Route::get('/', [HomeController::class, 'index']);

Route::get('/product', [ProductController::class, 'index']);

Route::get('/product/{id}', [ProductController::class, 'indexDetails']);

Route::get('/custom', [CustomController::class, 'index']);

Route::get('/cart', [CartController::class, 'index']);

Route::get('/paiement', [PaiementController::class, 'index'])->name('paiement');
Route::post('/paiement', [PaiementController::class, 'submit'])->name('paiement.submit');
