<?php

use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/register', [AuthController::class, 'ShowRegister'])->name('register.show');

Route::post('/register', [AuthController::class,'Register'])->name('register');
