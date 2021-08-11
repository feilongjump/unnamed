<?php

namespace Database\Seeders;

use Illuminate\Database\Eloquent\Model;
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
        Model::unguard();

        $this->call(AdminTablesSeeder::class);
        $this->call(ManufacturerSeeder::class);
        $this->call(CustomerSeeder::class);
        $this->call(MaterialSeeder::class);
        $this->call(ShowpieceSeeder::class);
        $this->call(QuoteSeeder::class);

        Model::reguard();
    }
}
