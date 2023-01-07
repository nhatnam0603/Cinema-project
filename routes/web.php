<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\AuthController;
use App\Http\Controllers\HomeController;

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('login', [AuthController::class, 'index'])->name('login');
Route::post('post-login', [AuthController::class, 'postLogin'])->name('login.post'); 
Route::get('registration', [AuthController::class, 'registration'])->name('register');
Route::post('post-registration', [AuthController::class, 'postRegistration'])->name('register.post'); 
Route::get('dashboard', [AuthController::class, 'dashboard']); 
Route::get('logout', [AuthController::class, 'logout'])->name('logout');

Route::get('home', [HomeController::class,'homepage'])->name('home');

Route::get('movie-list', [HomeController::class,'movielist'])->name('movie.list');
Route::get('movie-detail', [HomeController::class,'moviedetail'])->name('movie.detail');
Route::get('movie-checkout', [HomeController::class,'moviecheckout'])->name('movie.checkout');

Route::get('ticket-plan', [HomeController::class,'ticketplan'])->name('ticket.plain');
Route::get('seat-plan', [HomeController::class,'seatplan'])->name('seat.plain');