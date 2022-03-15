<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Vehicle extends Model
{
    use HasFactory;

    protected $fillable = [
        'nameModel',
        'numberOfSeats',
        'licensePlate',
        'status',
        'vehicleStatus_id'
    ];

    public function reservations() {
        return $this->hasMany('App\Models\Reservation');
    }

    public function vehicle() {
        return $this->belongsTo('App\Models\VehicleStatus','vehicleStatus_id');
    }
}
