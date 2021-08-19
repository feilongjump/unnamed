<?php

namespace Database\Seeders;

use App\Models\Order;
use Illuminate\Database\Seeder;

class OrderSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Order::factory()
        ->count(9)
        ->hasItems(3)
        ->hasParts(3)
        ->hasPackages(3)
        ->hasMark(1)
        ->create();
    }
}
