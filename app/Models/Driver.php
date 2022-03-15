<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Driver extends Model
{
    use HasFactory;

    protected $fillable =[
        'name',
        'firstName',
        'street',
        'postalCode',
        'city',
        'proEmail',
        'phoneNumber',
        'driverLicenseNumber',
        'user_id',
    ];

    public function reservations() {
        return $this->hasMany('App\Models\Reservation');
    }

    public function user() {
        return $this->belongsTo('App\Models\User','user_id');
    }
}
