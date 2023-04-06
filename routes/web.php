<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Home;
use App\Http\Controllers\Admin;
use App\Http\Controllers\Auth\LoginRegisterController;


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

// Main site Routes
Route::get('/', [Home::class, 'index']);
Route::get('/about', [Home::class, 'about']);
Route::get('/plans', [Home::class, 'plans']);
Route::get('/contact', [Home::class, 'contact']);
Route::get('/faq', [Home::class, 'faq']);

// Admin Routes
Route::get('/dashboard', [Admin::class, 'dashboard']);
Route::get('/users', [Admin::class, 'users']);
Route::get('/plans', [Admin::class, 'plans']);
Route::get('/runing', [Admin::class, 'runing']);
Route::get('/withdraw', [Admin::class, 'withdraw']);
Route::get('/history', [Admin::class, 'history']);

// Auth Routes
Route::get('/lockscreen', [Admin::class, 'lockscreen']);
Route::get('/accounts', [Home::class, 'accounts']);
Route::post('logout', [LoginRegisterController::class, 'logout']);
Route::post('authenticate', [LoginRegisterController::class, 'authenticate'])->name('authenticate');
Route::post('store', [LoginRegisterController::class, 'store'])->name('store');
// Route::post('/authenticate', [App\Http\Controllers\Auth\LoginRegisterController::class, 'authenticate'])->name('authenticate');
// Route::post('/store', [App\Http\Controllers\Auth\LoginRegisterController::class, 'store'])->name('store');









// Auth Routes
// Route::controller(LoginRegisterController::class)->group(function() {
//     Route::get('/register', 'register')->name('register');
//     Route::post('/store', 'store')->name('store');
//     Route::get('/login', 'login')->name('login');
//     Route::post('/authenticate', 'authenticate')->name('authenticate');
//     Route::get('/dashboard', 'dashboard')->name('dashboard');
//     Route::post('/logout', 'logout')->name('logout');
// });
