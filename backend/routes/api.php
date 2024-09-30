<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ProductController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application.
| These routes are loaded by the RouteServiceProvider and all of them
| will be assigned to the "api" middleware group. Make something great!
|
*/

Route::post('/login', [AuthController::class, 'login']);
Route::post('/users', [AuthController::class, 'store']);

Route::middleware('auth:sanctum')->group(function () {
    Route::get('/users', [AuthController::class, 'index']);
    Route::put('/users/{user}', [AuthController::class, 'update']);
    Route::delete('/users/{user}', [AuthController::class, 'destroy']);

    // Rotas de categorias com prefixo 'api/categories'
    Route::prefix('categories')->group(function () {
        Route::get('/', [CategoryController::class, 'index']); 
        Route::post('/', [CategoryController::class, 'store']); 
        Route::get('/{category}', [CategoryController::class, 'show']); 
        Route::put('/{category}', [CategoryController::class, 'update']); 
        Route::delete('/{category}', [CategoryController::class, 'destroy']);
    });

    // Rotas de produtos com prefixo 'api/products'
    Route::prefix('products')->group(function () {
        Route::get('/', [ProductController::class, 'index']);
        Route::get('/products/best-selling', [ProductController::class, 'bestSelling']);
        Route::post('/', [ProductController::class, 'store']); 
        Route::get('/{product}', [ProductController::class, 'show']); 
        Route::put('/{product}', [ProductController::class, 'update']); 
        Route::delete('/{product}', [ProductController::class, 'destroy']); 
    });
});
