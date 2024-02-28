<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\SalesController;

Route::get('/', [HomeController::class, 'index']);

Route::prefix('category')->group(function () {
    Route::get('/food-beverage', [ProductController::class, 'foodBeverage']);
    Route::get('/beauty-health', [ProductController::class, 'beautyHealth']);
    Route::get('/home-care', [ProductController::class, 'homeCare']);
    Route::get('/baby-kid', [ProductController::class, 'babyKid']);
    Route::get('/category/beauty-health', [ProductController::class, 'beautyHealth']);
    
});

Route::get('/user/{id}/name/{name}', [UserController::class, 'show']);

Route::get('/sales', [SalesController::class, 'index']);


Route::get('/user/profile', [UserController::class, 'showProfile']);
Route::get('/user/profile/edit', [UserController::class, 'showEditProfileForm']);
Route::post('/user/profile', [UserController::class, 'updateProfile']);


Route::get('/user/{id}/name/{name}', [UserController::class, 'showUserProfile']);

