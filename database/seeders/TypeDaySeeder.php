<?php

namespace Database\Seeders;

use App\Models\TypeDay;
use Illuminate\Database\Seeder;

class TypeDaySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        TypeDay::create([
            'type'=>'matin',
        ]);
        TypeDay::create([
            'type'=>'après-midi',
        ]);
    }
}
