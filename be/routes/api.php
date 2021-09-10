<?php

use App\Http\Controllers\clientcontroller;
use App\Http\Controllers\itemAddController;
use App\Http\Controllers\login;
use App\Http\Controllers\productcontroller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\testcontroller;
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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/name', [testcontroller::class, 'index']);
Route::prefix('/name')->group( function () {
    Route::post('/store', [testcontroller::class, 'store']);
    Route::put('/{id}', [testcontroller::class, 'update']);
    Route::delete('/{id}', [testcontroller::class, 'destroy']);
});

Route::get('/clients', [clientcontroller::class, 'index']);
Route::prefix('/clients')->group( function () {
    Route::post('/store', [clientcontroller::class, 'store']);
    Route::put('/{id}', [clientcontroller::class, 'update']);
    Route::delete('/{id}', [clientcontroller::class, 'destroy']);
});

Route::get('/login', [login::class, 'index']);
Route::prefix('/login')->group( function () {
    Route::post('/store', [login::class, 'store']);
    Route::put('/{id}', [login::class, 'update']);
    Route::delete('/{id}', [login::class, 'destroy']);
});

Route::get('/products', [productcontroller::class, 'index']);
Route::prefix('/products')->group( function () {
    Route::post('/store', [productcontroller::class, 'store']);
    Route::put('/{id}', [productcontroller::class, 'update']);
    Route::delete('/{id}', [productcontroller::class, 'destroy']);
});

Route::get('/additems', [itemAddController::class, 'index']);
Route::prefix('/additems')->group( function () {
    Route::post('/store', [itemAddController::class, 'store']);
    Route::put('/{id}', [itemAddController::class, 'update']);
    Route::delete('/{id}', [itemAddController::class, 'destroy']);
});
