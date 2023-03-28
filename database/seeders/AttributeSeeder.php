<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AttributeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('attributes')->insert([
            1 => [
             'id' => 1,
             'name' => 'water',
            ],
            2 => [
                'id' => 2,
                'name' => 'fire',
               ],
            3 => [
                'id' => 3,
                'name' => 'earth',
               ],
            4 => [
                'id' => 4,
                'name' => 'light',
               ],
            5 => [
                'id' => 5,
                'name' => 'darkness',
               ],
            6 => [
                'id' => 6,
                'name' => 'wind',
               ],
            7 => [
                'id' => 7,
                'name' => 'divine',
               ],
        ]);
    }
}
