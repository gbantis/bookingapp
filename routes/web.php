<?php

use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\LogoutController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\ReservationController;
use App\Http\Controllers\RoomController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

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
Route::get('/', [RoomController::class, 'home'])->name('home');
Route::get('/register', [RegisterController::class, 'index'])->name('register');
Route::post('/register', [RegisterController::class, 'store']);
Route::get('/become-a-host', [RoomController::class, 'index'])->name('rooms');
Route::post('/become-a-host', [RoomController::class, 'store'])->name('rooms.host');
Route::get('/show/{room}', [RoomController::class, 'show'])->name('rooms.show');
Route::post('/room/reservation', [ReservationController::class, 'store'])->name('reservations.store');
Route::get('/{room}/edit', [RoomController::class, 'edit'])->name('edit');
Route::patch('/{room}/update', [RoomController::class, 'update'])->name('update');
Route::delete('/{room}/delete', [RoomController::class, 'destroy'])->name('rooms.destroy');
Route::get('/user/dashboard', [UserController::class, 'show'])->name('show');
Route::patch('/{reservation}/status', [ReservationController::class, 'update'])->name('update_status');
Route::get('/user/dashboard/requests', [ReservationController::class, 'bookingrequests'])->name('dashboard.requests');

//Route::get('/become-a-host', [RoomController::class, 'host'])->name('host');
Route::post('/logout', [LogoutController::class, 'store'])->name('logout');
Route::get('/login', [LoginController::class, 'index'])->name('login');
Route::post('/login', [LoginController::class, 'store']);
Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
