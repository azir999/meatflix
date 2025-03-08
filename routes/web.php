<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\View;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\MoviesController;
use App\Http\Controllers\Auth\AuthController;
use App\Http\Controllers\ProducersController;


Route::get('/', [HomeController::class, 'index'])->name('home');

Route::view('/admin', [LoginController::class, 'admin']);

Route::get('/admin',[MoviesController::class, 'index']);

Route::get('/home',[MoviesController::class, 'index']);

Route::get('login', [AuthController::class, 'index'])->name('login');

Route::post('post-login', [AuthController::class, 'postLogin'])->name('login.post'); 

Route::get('admin', [AuthController::class, 'admin']); 

Route::get('admin', [MoviesController::class, 'index']); 

Route::get('/movie', [MoviesController::class, 'index'])->name('movies.index');

Route::delete('/movies/{id}', [MoviesController::class, 'destroy'])->name('movies.destroy');

Route::post('admin/create', [MoviesController::class, 'store'])->name('movies.store');

Route::post('admin/{id}', [MoviesController::class, 'update'])->name('movies.update');

Route::get('producers', [ProducersController::class, 'index']);

Route::get('/producers', [ProducersController::class, 'index'])->name('producers.index');

Route::delete('producers/{id}', [ProducersController::class, 'destroy'])->name('producers.destroy');

Route::post('producers/create', [ProducersController::class, 'store'])->name('producers.store');

Route::post('producers/{id}', [ProducersController::class, 'update'])->name('producers.update');

Route::get('show/{id}', [MoviesController::class, 'show'])->name('producers.show');

Route::get('show', [ProducersController::class, 'index']);


