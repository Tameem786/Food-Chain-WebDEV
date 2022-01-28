<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\DonationController;
use App\Http\Controllers\FoodController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\LogoutController;

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
})->name('welcome');

Route::get('/register', [RegisterController::class, 'viewRegister'])->name('register');

Route::post('/register', [RegisterController::class, 'doRegister']);

Route::get('/login', [LoginController::class, 'viewLogin'])->name('login');

Route::post('/login', [LoginController::class, 'doLogin']);


Route::get('/contact', function () {
    return view('layout.contact');
});

Route::get('/donation', [DonationController::class, 'viewDonation'])->name('donation')->middleware('auth');

Route::post('/donation', [DonationController::class, 'storeDonation'])->middleware('auth');

Route::get('/profile', function() {
    return view('layout.profile');
})->name('profile')->middleware('auth');

Route::get('/food', [FoodController::class, 'viewFood'])->name('food')->middleware('auth');

Route::get('/logout', [LogoutController::class, 'doLogout'])->middleware('auth');

Route::get('/users', [AdminController::class, 'viewUser'])->name('users')->middleware('auth');

Route::get('/admin', function() {
    return view('layout.admin');
})->name('admin')->middleware('auth');

Route::delete('/delete/{id}', [AdminController::class, 'deleteFood']);