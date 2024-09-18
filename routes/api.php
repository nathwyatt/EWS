<?php

use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->group(function () {
    // API routes that require authentication

    Route::apiResource('users', UserController::class);
    Route::get('stations', [StationController::class, 'index']);

});

Route::post('login', 'AuthController@login');
Route::post('register', 'AuthController@register');

Route::get('testing',function(){
    return 'welcome to user dashboard';
});
