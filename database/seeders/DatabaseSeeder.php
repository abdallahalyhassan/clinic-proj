<?php

namespace Database\Seeders;

use App\Models\doctor;
use App\Models\oppintement;
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

      $this->call([
        User::class,
        majorseeder::class,
        doctor::class,
        oppintement::class,

      ]);
    }
}
