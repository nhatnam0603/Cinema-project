<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\AuthController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Auth\ForgotPasswordController;
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


Route::get('login', [AuthController::class, 'index'])->name('login');
Route::post('post-login', [AuthController::class, 'postLogin'])->name('login.post');
Route::get('registration', [AuthController::class, 'registration'])->name('register');
Route::post('post-registration', [AuthController::class, 'postRegistration'])->name('register.post');
Route::get('dashboard', [AuthController::class, 'dashboard']);
Route::get('logout', [AuthController::class, 'logout'])->name('logout');


// WEB ROUTE dont need auth
Route::get('home', [HomeController::class,'homepage'])->name('home');
Route::get('movie-list', [HomeController::class,'movielist'])->name('movie.list');
Route::get('movie-detail', [HomeController::class,'moviedetail'])->name('movie.detail');
Route::get('ticket-plan', [HomeController::class,'ticketplan'])->name('ticket.plan');
Route::get('seat-plan', [HomeController::class,'seatplan'])->name('seat.plan');
Route::get('contact', [HomeController::class,'contact'])->name('contact');

Route::get('forget-password', [ForgotPasswordController::class, 'showForgetPasswordForm'])->name('forget.password.get');
Route::post('forget-password', [ForgotPasswordController::class, 'submitForgetPasswordForm'])->name('forget.password.post'); 
Route::get('reset-password/{token}', [ForgotPasswordController::class, 'showResetPasswordForm'])->name('reset.password.get');
Route::post('reset-password', [ForgotPasswordController::class, 'submitResetPasswordForm'])->name('reset.password.post');
// BACK END - ADMIN ROUTE
Route::prefix('')->middleware('admin')->group(function(){

    Route::get('dashboard', [AdminController::class, 'dashboard']);
    Route::get('logout', [AdminController::class, 'logout']);
});

Route::prefix('')->middleware('auth')->group(function () {
    
    Route::get('movie-checkout', [HomeController::class,'moviecheckout'])->name('movie.checkout');

});
