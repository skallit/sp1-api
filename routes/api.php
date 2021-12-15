<?php

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

Route::post('login',[\App\Http\Controllers\API\AuthController::class,'login']);

Route::group(['middleware' => 'auth:api'], function(){
    Route::post('register', [\App\Http\Controllers\API\AuthController::class,'register']);
    Route::post('getRegisteredUser', [\App\Http\Controllers\API\AuthController::class,'getRegisteredUser']);
    Route::get('getReservation', [\App\Http\Controllers\API\ReservationController::class,'getReservation']);
    Route::get('getDriver', [\App\Http\Controllers\API\DriverController::class,'getDriver']);
    Route::get('getDriverReservation', [\App\Http\Controllers\API\DriverController::class,'getDriverReservation']);
    Route::delete('delReservation/{id}', [\App\Http\Controllers\API\ReservationController::class,'delReservation']);
});
