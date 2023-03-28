<?php

namespace Database\Seeders;

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
        $this->call(UserSeeder::class);
        $this->call(AttributeSeeder::class);
        $this->call(TypeSeeder::class);
        $this->call(RarityeSeeder::class);
        $this->call(PropertySeeder::class);

    }
}
