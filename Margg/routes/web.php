<?php

use App\Http\Controllers\AdminRegisterController;
use App\Http\Controllers\BookingController;
use App\Http\Controllers\LocationController;
use App\Http\Controllers\RegisterController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\LocateController;
use App\Http\Controllers\ThingSpeakController;
use App\Http\Controllers\AdminLoginController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/home', [HomeController::class, 'index'])->name('home.index');
Route::get('/login', [RegisterController::class, 'index'])->name('home.register');
Route::post('/login', [RegisterController::class, 'register'])->name('signup');
Route::view('/book', 'booking.menu')->middleware('auth');
Route::view('/home', 'home.index')->middleware('guest');
Route::get('/signin', [LoginController::class, 'index']);
Route::post('/authenticate', [LoginController::class, 'authenticate']);
Route::get('/logout', [LoginController::class, 'logout']);
Route::get('/locate_new', [ThingSpeakController::class, 'getDataFromThingSpeak'])->middleware('auth');
Route::get('/get-data-from-thingspeak', [ThingSpeakController::class, 'getDataFromThingSpeak']);
Route::get('/book', [BookingController::class, 'index'])->middleware('auth');


//admin
Route::get('/adminregister', [AdminRegisterController::class, 'Adminreg'])->name('regpage');
Route::post('/adminregister', [AdminRegisterController::class, 'AdminRegister'])->name('adminReg');
Route::get('/AdminSignin', [AdminLoginController::class, 'Adminlog'])->name('logpage');
Route::post('/AdminAuth', [AdminLoginController::class, 'AdminAuthenticate'])->name('authLog');
Route::view('/AdminDashboard', 'administrator.admin')->middleware('auth:admin');

