<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\OrdersController;
use App\Http\Controllers\AuthController;

Route::get('/', function () {
    return view('welcome');
});



Route::post('/logout', [AuthController::class,'logout'])->name("logout");

Route::middleware('guest')->controller(AuthController::class)->group(function () {
    Route::get('/register', 'showRegister')->name("show.register");
    Route::post('/register', 'register')->name("register");
    Route::get('/login', 'showLogin')->name("show.login");
    Route::post('/login', 'login')->name("login");
});

Route::middleware('auth')->controller(OrdersController::class)->group(function () {
    Route::get('/orders','index')->name("orders.index");
    Route::get('/orders/create','create')->name("orders.create");
    Route::get('/orders/{id}','view')->name("orders.view");
    Route::post('/orders','store')->name("orders.store");
    Route::delete('/orders/{order}','delete')->name("orders.delete");
});


