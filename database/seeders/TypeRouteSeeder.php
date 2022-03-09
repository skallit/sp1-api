<?php

namespace Database\Seeders;

use App\Models\TypeRoute;
use Illuminate\Database\Seeder;

class TypeRouteSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        TypeRoute::create([
            'type'=>'Aller simple',
        ]);
        TypeRoute::create([
            'type'=>'Aller retour',
        ]);
    }
}
