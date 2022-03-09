<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TypeDay extends Model
{
    use HasFactory;


    protected $fillable = ['type'];

    public function reservations() {
        return $this->hasMany('App\Models\Reservation');
    }
}
