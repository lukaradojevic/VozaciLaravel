<?php

namespace Database\Seeders;

use App\Models\Vozac;
use Illuminate\Database\Seeder;

class VozacSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Vozac::factory()->count(70)->create();
    }
}
