<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TypeRoute extends Model
{
    use HasFactory;

    protected $fillable = ['type'];

    public function Reservations() {
        return $this->hasMany('App\Models\Reservation');
    }
}
