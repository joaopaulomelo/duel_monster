<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('types')->insert([
            1 => [
             'id' => 1,
             'name' => 'dragon',
            ],
            2 => [
                'id' => 2,
                'name' => 'fairy',
               ],
            3 => [
                'id' => 3,
                'name' => 'beast',
               ],
            4 => [
                'id' => 4,
                'name' => 'winged beast',
               ],
            5 => [
                'id' => 5,
                'name' => 'dinosaur',
            ],
            6 => [
                'id' => 6,
                'name' => 'zombie',
               ]
        ]);
    }
}
