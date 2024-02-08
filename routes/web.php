<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\MemberController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\LoginController;
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

Route::get('login', [LoginController::class, 'index'])->name('login');
Route::post('login', [LoginController::class, 'login'])->name('cek-login');

Route::get('register', [LoginController::class, 'register'])->name('register');
Route::post('register-proses', [LoginController::class, 'registerProses'])->name('register-proses');

Route::group(['prefix' => 'admin','middleware' => ['auth'], 'as' => 'admin.'], function(){
    Route::get('/', [HomeController::class, 'index'])->name('dashboard');
    Route::get('member', [MemberController::class, 'member']);
    Route::post('member', [MemberController::class, 'store']);
    Route::patch('member/{id}', [MemberController::class, 'update']);
    Route::delete('member/{id}', [MemberController::class, 'destroy']);
    
    Route::get('user', [UserController::class, 'user']);
    Route::post('user', [UserController::class, 'store']);
    Route::patch('user/{id}', [UserController::class, 'update']);
    Route::delete('user/{id}', [UserController::class, 'destroy']);
    
    Route::get('category', [CategoryController::class, 'kategori']);
    Route::delete('category/{id}', [CategoryController::class, 'destroy']);
    Route::post('category', [UserController::class, 'store']);
    
    Route::get('product', [ProductController::class, 'produk']);
    Route::post('product', [ProductController::class, 'store']);
    Route::patch('product/{id}', [ProductController::class, 'update']);
    Route::delete('product/{id}', [ProductController::class, 'destroy']);
    
    Route::get('logout', [LoginController::class, 'logout'])->name('logout');
});