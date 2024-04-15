<?php

use App\Http\Controllers\AddressController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

Route::prefix("/")->group(function () { 

  Route::get('', [HomeController::class, 'index'])->name('products-index');
  
  Route::get('cart', [CartController::class, 'index'])->name('cart-index');
  Route::post('cart/{id}', [CartController::class, 'store'])->name('cart-store');
  Route::put('/cart/update/{id}', [CartController::class, 'updateQuantity'])->name('cart-update');

  Route::get('address/create', [AddressController::class, 'create'])->name('address-create');
  Route::post('address', [AddressController::class, 'store'])->name('address-store');

  Route::get('sing-up', [UserController::class,'singup'])->name('singup-create');
  Route::get('sing-in', [UserController::class,'singin'])->name('singin-create');

});

Route::fallback(function(){
  return view('ERRO!!');
});

