<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\Driver;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

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
        return response()->json(['success' => $drivers], $this->successStatus);

    }

    public function getDriverReservation(){
        $drivers = Driver::with('reservations')->where('user_id', Auth::id())->get();
        return response()->json(['success' => $drivers], $this->successStatus);

    }
}
