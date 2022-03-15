<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\Reservation;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class ReservationController extends Controller
{
    public $successStatus = 200;

    /**
     * getReservation api
     *
     * @return \Illuminate\Http\Response
     */
    public function getReservations(){
        $reservations = User::with('driver.reservations.typeDay')->with('driver.reservations.typeRoute')->with('driver.reservations.status')
            ->with('driver.reservations.departureAgency')->with('driver.reservations.returnAgency')->with('driver.reservations.vehicle')
            ->get();
        $reservations =$reservations[0]->driver;
        return $reservations;

    }

    /**
     * getReservation api
     *
     * @return \Illuminate\Http\Response
     */
    public function getReservation($id){
        $reservation = Reservation::where('id',$id)->with('typeDay')->with('typeRoute')->with('status')
            ->with('driver')->with('departureAgency')->with('returnAgency')->with('vehicle')->first();
        return $reservation;

    }



    public function delReservation($id){
        $reservationId=Reservation::with('drivers')->join('drivers','driver_id','drivers.id')
            ->where('drivers.user_id', Auth::id())->where('reservations.id', $id)->get('reservations.id');
        $date = Carbon::parse(Reservation::with('drivers')->join('drivers','driver_id','drivers.id')
            ->where('drivers.user_id', Auth::id())->findOrFail($id)->date);
        $dateDiff = $date->diffInDays(Carbon::now());
        if($reservationId = $id and $dateDiff > config('date.dayMaxAnnulation')){
            Reservation::with('drivers')->join('drivers','driver_id','drivers.id')
                ->where('drivers.user_id', Auth::id())->where('reservations.id', $id)->delete();
            return response('Suppression réussi');
        }
        elseif($dateDiff < config('date.dayMaxAnnulation') ){
            return response('Attention la réservation sera dans moins de 48h');
        }
        else{
            return response('Vous n\'avez pas accez a cette réservation');
        }
    }

    public function createReservation(Request $request){
        $validator = Validator::make($request->all(), [
            'departureAgency_id' => 'required',
            'date' => 'required',
            'typeDay_id' => 'required',
            'typeRoute_id' => 'required',
            'vehicle_id' => 'required',
            'driver_id' => 'required',
        ]);
        if ($validator->fails()) {
            return response()->json(['error'=>$validator->errors()], 401);
        }
        $input = $request->all();
        $input['numberOfReservation'] = rand(1,5000);
        do {
            $input['numberOfReservation'] = mt_rand(1,5000);
        } while ( Reservation::where( 'numberOfReservation', $input['numberOfReservation'] )->exists() );
        $input['status_id'] = rand(1,2);
        $success = Reservation::create($input);
        return response()->json(['success'=>$success], $this->successStatus);
    }
}
