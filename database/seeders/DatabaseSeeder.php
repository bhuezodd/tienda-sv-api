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
        $this->call([
            UserSeeder::class,
            AddressSeeder::class,
            AdminSeeder::class,
            OrderSeeder::class,
            ProductSeeder::class,
            CategorySeeder::class,
        ]);
    }
}
