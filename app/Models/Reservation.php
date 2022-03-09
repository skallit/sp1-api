<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Reservation extends Model
{
    use HasFactory;

    protected  $primaryKey = 'id';

    protected $fillable = [
        'numberOfReservation',
        'date',
    ];

    public function driver() {
        return $this->belongsTo('App\Models\Driver','driver_id');
    }

    public function typeDay() {
        return $this->belongsTo('App\Models\TypeDay','typeDay_id');
    }
    public function typeRoute() {
        return $this->belongsTo('App\Models\TypeRoute','typeRoute_id');
    }
    public function departureAgency() {
        return $this->belongsTo('App\Models\AgencySeven','departureAgency_id');
    }
    public function returnAgency() {
        return $this->belongsTo('App\Models\AgencySeven','returnAgency_id');
    }
    public function vehicle() {
        return $this->belongsTo('App\Models\Vehicle','vehicle_id');
    }
    public function status() {
        return $this->belongsTo('App\Models\StatusReservation','status_id');
    }
}
