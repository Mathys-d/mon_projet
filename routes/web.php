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


Route::get('/cart', [CartController::class, 'index'])->name('cart');
Route::post('/cart/add', [CartController::class, 'add'])->name('cart.add');
Route::post('/cart/update/{id}', [CartController::class, 'updateQuantity'])->name('cart.update');
Route::post('/cart/remove/{id}', [CartController::class, 'remove'])->name('cart.remove');


Route::get('/paiement', [PaiementController::class, 'index'])->name('paiement');
Route::post('/paiement', [PaiementController::class, 'submit'])->name('paiement.submit');
