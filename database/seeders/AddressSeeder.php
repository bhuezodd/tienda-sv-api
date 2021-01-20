<?php

namespace Database\Seeders;

use App\Models\address;
use Database\Factories\AddressFactory;
use Illuminate\Database\Seeder;

class AddressSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        address::factory(10)->create();
    }
}
