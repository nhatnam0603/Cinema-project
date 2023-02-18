<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\AuthController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\Auth\ForgotPasswordController;
use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\CastsController;
use App\Http\Controllers\Admin\ProductController;
use App\Http\Controllers\Admin\ManagerController;
use App\Http\Controllers\Admin\ScreensController;
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
Route::get('registration', [AuthController::class, 'registration'])->name(
    'register'
);
Route::post('post-registration', [
    AuthController::class,
    'postRegistration',
])->name('register.post');
Route::get('logout', [AuthController::class, 'logout'])->name('logout');

// WEB ROUTE dont need auth
Route::get('home', [HomeController::class, 'homepage'])->name('home');
Route::get('movie-list', [HomeController::class, 'movielist'])->name(
    'movie.list'
);
Route::get('movie-detail', [HomeController::class, 'moviedetail'])->name(
    'movie.detail'
);


Route::get('ticket-plan', [HomeController::class,'ticketplan'])->name('ticket.plan');
Route::get('seat-plan', [HomeController::class,'seatplan'])->name('seat.plan');
Route::get('contact', [HomeController::class,'contact'])->name('contact');
Route::post('contactstore', [HomeController::class, 'contactstore'])->name('contactstore');

//Search movie route
Route::get('search', [HomeController::class, 'searchMovies'])->name('search');

// });

Route::get('forget-password', [
    ForgotPasswordController::class,
    'showForgetPasswordForm',
])->name('forget.password.get');
Route::post('forget-password', [
    ForgotPasswordController::class,
    'submitForgetPasswordForm',
])->name('forget.password.post');
Route::get('reset-password/{token}', [
    ForgotPasswordController::class,
    'showResetPasswordForm',
])->name('reset.password.get');
Route::post('reset-password', [
    ForgotPasswordController::class,
    'submitResetPasswordForm',
])->name('reset.password.post');
// BACK END - ADMIN ROUTE
Route::get('login', [AuthController::class, 'index'])->name('login');
Route::post('post-login', [AuthController::class, 'postLogin'])->name(
    'login.post'
);
Route::get('send-email-next-movie', [
    HomeController::class,
    'sendnextmovie',
])->name('email.send.nextmovie');
// End route login,register and reset password

// User needs to be authenticated to enter here.
Route::group(['middleware' => 'auth'], function () {
    //Start route website
    Route::get('movie-checkout', [
        HomeController::class,
        'moviecheckout',
    ])->name('movie.checkout');
    Route::get('comfirm-payment', [
        HomeController::class,
        'confirmpayment',
    ])->name('comfirm.payment');
    //End route website
});

// BACK END - ADMIN ROUTE
Route::prefix('')
    ->middleware('admin')
    ->group(function () {
        Route::get('crud-movie', [AdminController::class, 'crud_movie']);
        Route::get('dashboard', [AdminController::class, 'dashboard'])->name(
            'dashboard'
        );
        Route::get('logout', [AdminController::class, 'logout'])->name(
            'logout'
        );

        //Product routes
        Route::get('product', [ProductController::class, 'index'])->name(
            'admin.product.index'
        );
        Route::get('product/create', [
            ProductController::class,
            'create',
        ])->name('admin.product.create');
        Route::post('product', [ProductController::class, 'store'])->name(
            'admin.product.store'
        );
        Route::delete('product/{movie}', [
            ProductController::class,
            'destroy',
        ])->name('admin.product.destroy');
        Route::get('product/{movie}/edit', [
            ProductController::class,
            'edit',
        ])->name('admin.product.edit');
        Route::post('product/{movie}/update', [
            ProductController::class,
            'update',
        ])->name('admin.product.update');
        Route::get('product/{movie}/assign', [
            ProductController::class,
            'assign',
        ])->name('admin.product.assign');
        Route::get('product/{movie}/assignscreen', [
            ProductController::class,
            'assignscreen',
        ])->name('admin.product.assignscreen');
        //User Management
        Route::resource('user', ManagerController::class);

        //Cast routes
        Route::resource('cast', CastsController::class);
        Route::get('cast/assign/{cast}', [
            CastsController::class,
            'assign',
        ])->name('cast.assign');
        Route::post('cast/assign/{movie}/store', [
            CastsController::class,
            'assignStore',
        ])->name('cast.assign.store');
        //Scren Routes
        Route::get('screen', [ScreensController::class, 'index'])->name(
            'admin.screen.index'
        );
        Route::get('screen/create', [ScreensController::class, 'create'])->name(
            'admin.screen.create'
        );
        Route::post('screen', [ScreensController::class, 'store'])->name(
            'admin.screen.store'
        );
        Route::delete('screen/{screen}', [
            ScreensController::class,
            'destroy',
        ])->name('admin.screen.destroy');
        Route::get('screen/{screen}/edit', [
            ScreensController::class,
            'edit',
        ])->name('admin.screen.edit');
        Route::post('screen/{screen}/update', [
            ScreensController::class,
            'update',
        ])->name('admin.screen.update');
        Route::get('screen/{screen}/assign', [
            ScreensController::class,
            'assign',
        ])->name('admin.screen.assign');
        Route::get('screen/{screen}/assign/store', [
            ScreensController::class,
            'assignStore',
        ])->name('admin.screen.assign.store');
    });
