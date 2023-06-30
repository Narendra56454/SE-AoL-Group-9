<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\FooterController;
use App\Http\Controllers\SearchController;
use App\Http\Controllers\VendorController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\RegistrationController;

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
    return view('homepage');
});

Route::get('/favorite', function () {
    return view('favorite');
});

Route::get('/search', [SearchController::class, 'index'])->name('search');

Route::get('/vendorDetail/{vendor}', [VendorController::class, 'vendor'])->name('vendor.detail');

Route::get('/category/{category}', [CategoryController::class, 'category']);

Route::get('/profile', [ProfileController::class, 'profile'])->middleware('auth');
Route::get('/editProfile', [ProfileController::class, 'editProfile'])->middleware('auth');
Route::post('/editProfile', [ProfileController::class, 'edit'])->middleware('auth');

Route::get('/login', [LoginController::class, 'create'])->middleware('guest');
Route::post('/login', [LoginController::class, 'authenticate']);
Route::post('/logout', [LoginController::class, 'logout']);

Route::get('/register', [RegistrationController::class, 'create'])->middleware('guest');
Route::post('/register', [RegistrationController::class, 'store']);

Route::get('/contact', [FooterController::class, 'contact']);
Route::get('/about', [FooterController::class, 'about']);
Route::get('/termCondition', [FooterController::class, 'termCondition']);