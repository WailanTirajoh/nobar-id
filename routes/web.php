<?php

use App\Http\Controllers\Front\ExploreController;
use App\Http\Controllers\Front\FriendController;
use App\Http\Controllers\Front\GroupController;
use App\Http\Controllers\Front\HomeController;
use App\Http\Controllers\Front\NotificationController;
use App\Http\Controllers\Front\VideoController;
use App\Http\Controllers\Front\WatchlistController;
use App\Http\Controllers\Front\ProfileController;

use App\Http\Controllers\Back\MovieController;
use App\Http\Controllers\Back\PermissionController;
use App\Http\Controllers\Back\RoleController;
use App\Http\Controllers\Back\UserController;
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

Route::group(['as' => 'front.'], function () {
    Route::get('/', [HomeController::class, 'index'])->name('home.index');
    Route::get('/explore', [ExploreController::class, 'index'])->name('explore.index');

    Route::group(['middleware' => ['auth']], function () {
        Route::get('/video', [VideoController::class, 'index'])->name('video.index');
        Route::get('/group', [GroupController::class, 'index'])->name('group.index');
        Route::get('/friend', [FriendController::class, 'index'])->name('friend.index');
        Route::get('/watchlist', [WatchlistController::class, 'index'])->name('watchlist.index');
        Route::get('/profile', [ProfileController::class, 'index'])->name('profile.index');
        Route::get('/notification', [NotificationController::class, 'index'])->name('notification.index');
    });
});

Route::group(['as' => 'back.', 'middleware' => ['auth'], 'prefix' => 'back'], function () {
    Route::resource('user', UserController::class);
    Route::resource('movie', MovieController::class);
    Route::resource('role', RoleController::class);
    Route::resource('permission', PermissionController::class);
});



// Authentication Routes...
Route::get('/login', [App\Http\Controllers\Auth\LoginController::class, 'showLoginForm'])->name('login');
Route::post('/login', [App\Http\Controllers\Auth\LoginController::class, 'login'])->name('login.store');
Route::post('logout', [App\Http\Controllers\Auth\LoginController::class, 'logout'])->name('logout');

// Registration Routes...
Route::get('register', [App\Http\Controllers\Auth\RegisterController::class, 'showRegistrationForm'])->name('register');
Route::post('register', [App\Http\Controllers\Auth\RegisterController::class, 'register']);

// Password Reset Routes...
Route::get('password/reset', [App\Http\Controllers\Auth\ForgotPasswordController::class, 'showLinkRequestForm'])->name('password.request');
Route::post('password/email', [App\Http\Controllers\Auth\ForgotPasswordController::class, 'sendResetLinkEmail'])->name('password.email');
Route::get('password/reset/{token}', [App\Http\Controllers\Auth\ResetPasswordController::class, 'showResetForm'])->name('password.reset');
Route::post('password/reset', [App\Http\Controllers\Auth\ResetPasswordController::class, 'reset'])->name('password.update');

// Confirm Password (added in v6.2)
Route::get('password/confirm', [App\Http\Controllers\Auth\ConfirmPasswordController::class, 'showConfirmForm'])->name('password.confirm');
Route::post('password/confirm', [App\Http\Controllers\Auth\ConfirmPasswordController::class, 'confirm']);

// Email Verification Routes...
Route::get('email/verify', [App\Http\Controllers\Auth\VerificationController::class, 'show'])->name('verification.notice');
Route::get('email/verify/{id}/{hash}', [App\Http\Controllers\Auth\VerificationController::class, 'verify'])->name('verification.verify');
Route::get('email/resend', [App\Http\Controllers\Auth\VerificationController::class, 'resend'])->name('verification.resend');
