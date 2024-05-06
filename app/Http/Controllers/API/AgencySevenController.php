<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\AgencySeven;
use Illuminate\Http\Request;

class AgencySevenController extends Controller
{
    public $successStatus = 200;

    /**
     * getReservation api
     *
     * @return \Illuminate\Http\Response
     */
    public function getAgencySeven(){
        $agencySeven = AgencySeven::all();
        return $agencySeven;

    }
}
