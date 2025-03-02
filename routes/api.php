<?php

use App\Http\Controllers\API\FoodCategoryController;
use App\Http\Controllers\API\RestaurantController;
use Illuminate\Support\Facades\Route;

Route::prefix('v1')->group(function () {
    // Food Categories
    Route::get('/categories', [FoodCategoryController::class, 'index']);
    Route::get('/categories/{foodCategory}', [FoodCategoryController::class, 'show']);

    // Restaurants
    Route::get('/restaurants', [RestaurantController::class, 'index']);
    Route::get('/restaurants/{restaurant}', [RestaurantController::class, 'show']);
}); 