<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RarityeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('rarities')->insert([
            1 => [
             'id' => 1,
             'name' => 'Common',
            ],
            2 => [
                'id' => 2,
                'name' => 'Rare',
               ],
            3 => [
                'id' => 3,
                'name' => 'Super Rare',
               ],
            4 => [
                'id' => 4,
                'name' => 'Ultra Rare',
               ],
            5 => [
                'id' => 5,
                'name' => 'Ultimate Rare',
               ],
            6 => [
                'id' => 6,
                'name' => 'Holographic Rare',
               ],
            7 => [
                'id' => 7,
                'name' => 'Secret Rare',
               ],
        ]);
    }
}
