<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PropertySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('properties')->insert([
            1 => [
             'id' => 1,
             'name' => 'normal',
            ],
            2 => [
                'id' => 2,
                'name' => 'continue',
               ],
            3 => [
                'id' => 3,
                'name' => 'weaponry',
               ],
            4 => [
                'id' => 4,
                'name' => 'field',
               ],
            5 => [
                'id' => 5,
                'name' => 'counter',
            ],
            6 => [
                'id' => 6,
                'name' => 'quick',
               ]
        ]);
    }
}
