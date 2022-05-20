<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\SwipeController;
use App\Http\Controllers\MatchController;
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

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::group(['middleware'=>'auth'],function(){
    Route::get('/users',[UserController::class,'index'])->name('users.index');
    Route::post('/swipes',[SwipeController::class,'store'])->name('swipes.store');
    Route::get('/matches',[MatchController::class,'index'])->name('matches.index');
});

Route::get('/logout', [App\Http\Controllers\Auth\LoginController::class, 'logout'])->middleware('auth')->name('logout');


Route::get('/', [App\Http\Controllers\HomeController::class, 'ho'])->name('ho');