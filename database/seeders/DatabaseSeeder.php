<?php

namespace Database\Seeders;

use App\Models\AgencySeven;
use App\Models\ContractForm;
use App\Models\Control;
use App\Models\Driver;
use App\Models\Reservation;
use App\Models\User;
use App\Models\Vehicle;
use Database\Factories\AgencySevenFactory;
use Database\Factories\ContractFormFactory;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        ContractForm::factory(5)->create();
        User::create([
            'name'=>'Test',
            'email'=>'test@test.fr',
            'password'=>Hash::make('12345678'),
        ]);
         User::factory(10)->create();
        AgencySeven::factory(10)->create();
        Driver::factory(5)->create();
        Vehicle::factory(5)->create();
         Control::factory(5)->create();
         Reservation::factory(5)->create();
    }
}
