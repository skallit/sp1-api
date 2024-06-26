<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AgencySeven extends Model
{
    use HasFactory;

    protected $fillable = [
        'city',
        'department',
    ];

    public function reservations() {
        return $this->hasMany('App\Models\Reservation');
    }
}
