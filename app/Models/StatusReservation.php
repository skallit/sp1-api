<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class StatusReservation extends Model
{
    use HasFactory;
    protected $fillable = ['status'];

    public function reservations() {
        return $this->hasMany('App\Models\Reservation');
    }
}
