<?php

namespace Database\Seeders;

use App\Models\Client;
use App\Models\Insumos;
use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        Client::factory()->count(10)->create();
        Insumos::factory()->count(10)->create();
    }
}
