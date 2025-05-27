<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

use App\Http\Controllers\TodoController;

use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\AuthController;

// Login & Register routes
Route::get('/login', [AuthController::class, 'showLogin'])->name('login');
Route::post('/login', [AuthController::class, 'login']);
Route::get('/register', [AuthController::class, 'showRegister'])->name('register');
Route::post('/register', [AuthController::class, 'register']);
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');


Route::resource('todos', TodoController::class)->except(['index'])->middleware('auth');

Route::get('/', [TodoController::class, 'index'])->name('todos.index');
Route::resource('todos', TodoController::class)->except(['index']);
