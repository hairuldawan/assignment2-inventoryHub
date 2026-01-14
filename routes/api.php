<?php

use App\Http\Controllers\Api\AuthController;
use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;

Route::post('/auth/register', [AuthController::class, 'register']);
Route::post('/auth/login', [AuthController::class, 'login']);

Route::middleware('auth:sanctum')->group(function () {
    Route::get('/auth/me', [AuthController::class, 'me']);
    Route::post('/auth/logout', [AuthController::class, 'logout']);
});

Route::middleware('auth:sanctum')->group(function () {
    // Auth endpoints
    Route::get('/auth/me', [AuthController::class, 'me']);
    Route::post('/auth/logout', [AuthController::class, 'logout']);

    // Eendpoints with Spatie Permissions
    Route::get('products', [ProductController::class, 'index'])->middleware('permission:products-view');
    Route::get('products/{id}', [ProductController::class, 'show'])->middleware('permission:products-view');
    Route::post('products', [ProductController::class, 'store'])->middleware('permission:products-create');
    Route::put('products/{id}', [ProductController::class, 'update'])->middleware('permission:products-update');
    Route::delete('products/{id}', [ProductController::class, 'destroy'])->middleware('permission:products-delete');
});

