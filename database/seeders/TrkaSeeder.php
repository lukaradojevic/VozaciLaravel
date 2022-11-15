<?php

namespace Database\Seeders;

use App\Models\Trka;
use Illuminate\Database\Seeder;

class TrkaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Trka::factory()->count(85)->create();
    }
}
