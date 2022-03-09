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
        'status',
    ];

    public function drivers() {
        return $this->belongsTo('App\Models\Driver');
    }

    public function typeDay() {
        return $this->belongsTo('App\Models\TypeDay');
    }
    public function typeRoute() {
        return $this->belongsTo('App\Models\TypeRoute');
    }
    public function agencySeven() {
        return $this->belongsTo('App\Models\AgencySeven');
    }
    public function vehicle() {
        return $this->belongsTo('App\Models\Vehicle');
    }
}
