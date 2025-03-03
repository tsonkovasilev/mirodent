<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\OrdersController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/orders', [OrdersController::class, 'index'])->name("orders.index");
Route::get('/orders/create',[OrdersController::class, 'create'])->name("orders.create");
Route::get('/orders/{id}',[OrdersController::class, 'view'])->name("orders.view");

