<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\AuthController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\Auth\ForgotPasswordController;
use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\ProductController;
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


//Start route login,register and reset password
Route::get('registration', [AuthController::class, 'registration'])->name('register');
Route::post('post-registration', [AuthController::class, 'postRegistration'])->name('register.post');
Route::get('logout', [AuthController::class, 'logout'])->name('logout');



// WEB ROUTE dont need auth
Route::get('home', [HomeController::class,'homepage'])->name('home');
Route::get('movie-list', [HomeController::class,'movielist'])->name('movie.list');
Route::get('movie-detail', [HomeController::class,'moviedetail'])->name('movie.detail');

//Route user
// Route::prefix('home')->middleware('auth')->group(function () {

    Route::get('home', [HomeController::class,'homepage'])->name('home');

    Route::get('movie-list', [HomeController::class,'movielist'])->name('movie.list');
    Route::get('movie-detail', [HomeController::class,'moviedetail'])->name('movie.detail');
    Route::get('movie-checkout', [HomeController::class,'moviecheckout'])->name('movie.checkout');


Route::get('ticket-plan', [HomeController::class,'ticketplan'])->name('ticket.plan');
Route::get('seat-plan', [HomeController::class,'seatplan'])->name('seat.plan');
Route::get('contact', [HomeController::class,'contact'])->name('contact');

//Search movie route
Route::get('search', [HomeController::class,'searchMovies'])->name('search');
// Route::get('search', 'searchMovies');
// });


Route::get('forget-password', [ForgotPasswordController::class, 'showForgetPasswordForm'])->name('forget.password.get');
<<<<<<< HEAD
Route::post('forget-password', [ForgotPasswordController::class, 'submitForgetPasswordForm'])->name('forget.password.post'); 
=======
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

Route::get('forget-password', [ForgotPasswordController::class, 'showForgetPasswordForm'])->name('forget.password.get');
Route::post('forget-password', [ForgotPasswordController::class, 'submitForgetPasswordForm'])->name('forget.password.post');
>>>>>>> 93049f6 (fix conflict)
Route::get('reset-password/{token}', [ForgotPasswordController::class, 'showResetPasswordForm'])->name('reset.password.get');
Route::post('reset-password', [ForgotPasswordController::class, 'submitResetPasswordForm'])->name('reset.password.post');

Route::get('login', [AuthController::class, 'index'])->name('login');
Route::post('post-login', [AuthController::class, 'postLogin'])->name('login.post');

// End route login,register and reset password
    
// User needs to be authenticated to enter here.
Route::group(['middleware' => 'auth'], function () {
    //Start route website
    Route::get('movie-checkout', [HomeController::class,'moviecheckout'])->name('movie.checkout');
    Route::get('comfirm-payment', [HomeController::class,'confirmpayment'])->name('comfirm.payment');
    //End route website

});

// BACK END - ADMIN ROUTE
Route::prefix('')->middleware('admin')->group(function(){

    Route::get('dashboard', [AdminController::class,'dashboard'])->name('dashboard');
    Route::get('logout', [AdminController::class, 'logout'])->name('logout');

    //Product routes
    Route::get('product', [ProductController::class,'index']);
    Route::get('product/create', [ProductController::class,'create']);
    Route::post('product', [ProductController::class,'store']);
    Route::delete('product',[ProductController::class,'destroy'])->name('admin.product.destroy');
});

