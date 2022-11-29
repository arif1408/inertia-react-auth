<?php

use Illuminate\Support\Facades\Route;

//route index register
Route::get('/register', [
    \App\Http\Controllers\Auth\RegisterController::class,
    'index',
]);

//route store register
Route::post('/register', [
    \App\Http\Controllers\Auth\RegisterController::class,
    'store',
]);
