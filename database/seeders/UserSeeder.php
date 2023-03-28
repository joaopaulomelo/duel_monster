<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            1 => [
             'id' => 1,
             'name' => 'King of the games',
             'email' => 'king@games.com.br',
             'password' => bcrypt('123456')
            ],
        ]);
    }
}
