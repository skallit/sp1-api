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
    Route::post('createReservation', [\App\Http\Controllers\API\ReservationController::class,'createReservation']);
    Route::post('updatePassword', [\App\Http\Controllers\API\AuthController::class,'updatePassword']);
    Route::get('getRegisteredUser', [\App\Http\Controllers\API\AuthController::class,'getRegisteredUser']);
    Route::get('getReservations', [\App\Http\Controllers\API\ReservationController::class,'getReservations']);
    Route::get('getReservation/{id}', [\App\Http\Controllers\API\ReservationController::class,'getReservation']);
    Route::get('getDriver', [\App\Http\Controllers\API\DriverController::class,'getDriver']);
    Route::get('getDriverReservation', [\App\Http\Controllers\API\DriverController::class,'getDriverReservation']);
    Route::post('createDriver', [\App\Http\Controllers\API\DriverController::class,'createDriver']);
    Route::delete('delReservation/{id}', [\App\Http\Controllers\API\ReservationController::class,'delReservation']);
    Route::get('getAgencySeven',[\App\Http\Controllers\API\AgencySevenController::class,'getAgencySeven']);
    Route::get('getVehicle', [\App\Http\Controllers\API\VehicleController::class,'getVehicle']);
    Route::get('getTypeDay',[\App\Http\Controllers\API\TypeDayController::class,'getTypeDay']);
    Route::get('getTypeRoute',[\App\Http\Controllers\API\TypeRouteController::class,'getTypeRoute']);
});
