<?php

namespace Database\Seeders;

use App\Models\AgencySeven;
use Database\Factories\AgencySevenFactory;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
         \App\Models\User::factory(10)->create();
         AgencySeven::factory(10)->create();
    }
}
