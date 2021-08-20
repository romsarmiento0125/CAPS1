<?php

use App\Http\Controllers\test1controller;
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

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/test1', [test1controller::class, 'index']);
Route::prefix('/test1')->group(function () {
    Route::post('/store', [test1controller::class, 'store']);
    Route::put('/{id}', [test1controller::class, 'update']);
    Route::delete('/{id}', [test1controller::class, 'destroy']);
});