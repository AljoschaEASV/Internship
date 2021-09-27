<?php

use App\Http\Controllers\GardenController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\UserController;

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
Auth::routes();

Route::get('/', [HomeController::class, 'index']);

Route::get('/gardens', [GardenController::class, 'index'])->name('gardens');

Route::get('/users/{user}', [UserController::class, 'show'])->name('user');

Route::get('/gardens/{garden}', [GardenController::class, 'show'])->name('garden-details');
