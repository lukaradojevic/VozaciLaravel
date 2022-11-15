<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Database\Seeders\TimSeeder;
use Database\Seeders\VozacSeeder;
use Database\Seeders\TrkaSeeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $tim = new TimSeeder();
        $tim->run();

        $vozac = new VozacSeeder();
        $vozac->run();

        $trka = new TrkaSeeder();
        $trka->run();
    }
}
