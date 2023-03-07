<?php

use App\Http\Controllers\Api\RestaurantController;
use App\Http\Controllers\Api\CategoryController;
use App\Http\Controllers\Api\OrderController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::get('/restaurants', [RestaurantController::class, 'index'])->where('query', '[A-Za-z0-9]+');

Route::get('restaurants/{slug}', [RestaurantController::class, 'show']);

Route::get('categories', [CategoryController::class, 'index']);

Route::get('categories/{slug}', [CategoryController::class, 'show']);

Route::get('category/{slug}/restaurants', [CategoryController::class, 'getCategoryRestaurants']);

Route::post('orders/{slug}', [OrderController::class, 'createOrder']);




