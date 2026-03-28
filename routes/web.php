<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\BookController;
use Illuminate\Support\Facades\Route;


Route::get('/login', [AuthController::class, 'showLogin'])->name('login');
Route::post('/login', [AuthController::class, 'login'])->name('login.submit');
Route::get('/', function () {
    return redirect()->route('books.index');
});
Route::middleware('check.login')->group(function () {
    Route::resource('books', BookController::class);
});
