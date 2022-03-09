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
        ContractForm::factory(50)->create();
        User::create([
            'name'=>'Test',
            'firstName'=> 'Tist',
            'empowerment' => 'employee',
            'companyName' => 'oui-oui',
            'contractForm_id'=> 1,
            'email'=>'test@test.fr',
            'password'=>Hash::make('12345678'),
        ]);
         User::factory(100)->create();
        AgencySeven::factory(100)->create();
        Driver::factory(50)->create();
        Vehicle::factory(50)->create();
         Control::factory(50)->create();
         Reservation::factory(50)->create();
    }
}
