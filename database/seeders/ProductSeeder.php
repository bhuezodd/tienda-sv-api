<?php

namespace Database\Seeders;

use App\Models\product;
use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        product::factory(10)->create();
    }
}
