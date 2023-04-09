<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Home;
use App\Http\Controllers\Admin;
use App\Http\Controllers\Authusers;


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
Route::get('/', [Home::class, 'index'])->name('index');
Route::get('about', [Home::class, 'about'])->name('about');
Route::get('plans', [Home::class, 'plans'])->name('plans');
Route::get('contact', [Home::class, 'contact'])->name('contact');
Route::get('faq', [Home::class, 'faq'])->name('faq');
Route::get('myassets', [Home::class, 'myassets'])->name('myassets');

// Admin Routes
Route::get('dashboard', [Admin::class, 'dashboard'])->name('dashboard');
Route::get('users', [Admin::class, 'users'])->name('users');
Route::get('dasboardplans', [Admin::class, 'dasboardplans'])->name('dasboardplans');;
Route::get('runing', [Admin::class, 'runing'])->name('runing');
Route::get('withdraw', [Admin::class, 'withdraw'])->name('withdraw');
Route::get('history', [Admin::class, 'history'])->name('history');

// Auth Routes
Route::get('lockscreen', [Admin::class, 'lockscreen'])->name('lockscreen');
Route::get('accounts', [Home::class, 'accounts'])->name('accounts');
Route::get('logout', [Authusers::class, 'logout'])->name('logout');
Route::post('authenticate', [Authusers::class, 'authenticate'])->name('authenticate');
Route::post('store', [Authusers::class, 'store'])->name('store');

// Data storge
Route::post('save_plan', [Admin::class, 'SavePlan'])->name('SavePlan');
Route::get('delete_plan', [Admin::class, 'delete_plan'])->name('delete_plan');
Route::get('delete_user', [Admin::class, 'delete_user'])->name('delete_user');


