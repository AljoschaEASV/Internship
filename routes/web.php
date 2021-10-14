<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\GardenController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AuthController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', [HomeController::class, 'index']);

Route::get('/users/{user}', [UserController::class, 'show'])->name('user');
Route::post('/users', [UserController::class, 'store'])->middleware('guest');

Route::get('/register', [AuthController::class, 'register'])->middleware('guest');
Route::get('/login', [AuthController::class, 'login'])->middleware('guest')->name('login');
Route::post('/authenticate', [AuthController::class, 'authenticate'])->middleware('guest');
Route::get('/logout', [AuthController::class, 'logout'])->middleware('auth');

Route::get('/gardens', [GardenController::class, 'index'])->name('gardens');
Route::get('/gardens/create', [GardenController::class, 'create'])->middleware('auth');
Route::get('/gardens/{garden}', [GardenController::class, 'show'])->name('garden-details');
Route::post('/gardens', [GardenController::class, 'store']);
