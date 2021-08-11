<?php

namespace Database\Seeders;

use App\Models\Showpiece;
use Illuminate\Database\Seeder;

class ShowpieceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Showpiece::factory()
            ->count(9)
            ->hasParts(3)
            ->hasPackages(3)
            ->create();
    }
}
