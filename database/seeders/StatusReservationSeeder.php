<?php

namespace Database\Seeders;

use App\Models\StatusReservation;
use Illuminate\Database\Seeder;

class StatusReservationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        StatusReservation::create([
            'status'=>'en cours',
        ]);
        StatusReservation::create([
            'status'=>'à venir',
        ]);
    }
}
