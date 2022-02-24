<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\Reservation;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ReservationController extends Controller
{
    public $successStatus = 200;

//    /**
//     * getReservation api
//     *
//     * @return \Illuminate\Http\Response
//     */
//    public function getReservation(){
//        $reservations = Reservation::with('drivers')->join('drivers','driver_id','drivers.id')
//            ->where('drivers.user_id', Auth::id())
//            ->get('reservations.*');
//        return response()->json(['success' => $reservations], $this->successStatus);
//
//    }

    /**
     * getReservation api
     *
     * @return \Illuminate\Http\Response
     */
    public function getReservation($id){
        $reservation = Reservation::find($id);
        return response()->json(['success' => $reservation], $this->successStatus);

    }

    public function delReservation($id){
        $date = Carbon::parse(Reservation::with('drivers')->join('drivers','driver_id','drivers.id')
            ->where('drivers.user_id', Auth::id())->findOrFail($id)->date);
        $dateDiff = $date->diffInDays(Carbon::now());
        if($dateDiff > config('date.dayMaxAnnulation') ){
            Reservation::with('drivers')->join('drivers','driver_id','drivers.id')->where('drivers.user_id', Auth::id())->findOrFail($id)->delete();
            return response('Suppression réussi');
        }
        else{
            return response('Attention la réservation sera dans moins de 48h');
        }
    }
}
