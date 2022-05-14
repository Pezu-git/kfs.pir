<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
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
        // \App\Models\User::factory(10)->create();

        $this->call([
            UserSeeder::class,
        ]);
        \App\Models\Colaborators::factory(50)->create();
        \App\Models\Contracts::factory(50)->create();
        \App\Models\GphContracts::factory(50)->create();
    }
}
