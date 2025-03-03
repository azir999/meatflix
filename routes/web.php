<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\View;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\MoviesController;
use App\Http\Controllers\Auth\AuthController;

Route::get('/', [HomeController::class, 'index']);

Route::view('/admin', [LoginController::class, 'admin']);

Route::get('/admin',[MoviesController::class, 'index']);

Route::get('/home',[MoviesController::class, 'index']);

Route::get('login', [AuthController::class, 'index'])->name('login');

Route::post('post-login', [AuthController::class, 'postLogin'])->name('login.post'); 

Route::get('admin', [AuthController::class, 'admin']); 

Route::get('admin', [MoviesController::class, 'index']); 