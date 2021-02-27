<?php

use App\Http\Controllers\OrderController;
use App\Http\Controllers\userController;
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

Route::middleware('auth:sanctum')->get('/me', function (Request $request) {
    return auth()->user();
});

Route::get('/users', [userController::class, 'getUsers']);

Route::middleware('auth:sanctum')->group(function () {
    Route::apiResources([
        'orders' => OrderController::class
    ]);
});
