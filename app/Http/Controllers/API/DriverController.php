<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\Driver;
use App\Models\Reservation;
use Faker\Core\Number;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class DriverController extends Controller
{
    public $successStatus = 200;

    /**
     * getReservation api
     *
     * @return \Illuminate\Http\Response
     */
    public function getDriver(){
        $drivers = Driver::where('user_id', Auth::id())->get();
        return $drivers;

    }

    public function getDriverReservation(){
        $drivers = Driver::with('reservations')->where('user_id', Auth::id())->get();
        return $drivers;

    }

    public function createDriver(Request $request){
        $validator = Validator::make($request->all(), [
            'name' => 'required',
            'firstName' => 'required',
            'street' => 'required',
            'postalCode' => 'required',
            'city' => 'required',
            'proEmail' => 'required',
            'phoneNumber' => 'required',
            'driverLicenseNumber' => 'required',
        ]);
        if ($validator->fails()) {
            return response()->json(['error'=>$validator->errors()], 401);
        }
        $input = $request->all();
        $input['user_id'] = Auth::id();
        $success = Driver::create($input);
        return $success;
    }

}
