<?php

use App\Http\Controllers\BabyController;
use App\Http\Controllers\BeautyController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\FoodController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\HomePageController;
use App\Http\Controllers\UserController;
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

Route::get('/',[HomePageController::class, 'index']);

Route::prefix('/category', )->group(function () {
    Route::get('/', [CategoryController::class, 'index']);
    Route::get('/food-beverage', [FoodController::class, 'index']);
    Route::get('/beauty-health', [BeautyController::class, 'index']);
    Route::get('/home-care', [HomeController::class, 'index']);
    Route::get('/baby-kid', [BabyController::class, 'index']);
});

Route::prefix('/user')->group(function () {
    Route::get('/{id?}/name/{name?}', [UserController::class, 'index']);
});
