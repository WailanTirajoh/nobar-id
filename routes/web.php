<?php

use App\Http\Controllers\Front\FriendController;
use App\Http\Controllers\Front\GroupController;
use App\Http\Controllers\Front\HomeController;
use App\Http\Controllers\Front\WatchlistController;
use App\Http\Controllers\ProfileController;
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

Route::group(['as' => 'front.'], function(){
    Route::get('/', [HomeController::class, 'index'])->name('home.index');
    Route::get('/watchlist', [WatchlistController::class, 'index'])->name('watchlist.index');
    Route::get('/friend', [FriendController::class, 'index'])->name('friend.index');
    Route::get('/group', [GroupController::class, 'index'])->name('group.index');
    Route::get('/profile', [ProfileController::class, 'index'])->name('profile.index');
});
