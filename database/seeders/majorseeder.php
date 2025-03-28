<?php

namespace Database\Seeders;

use App\Models\oppintement;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class majorseeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        oppintement::factory(10)->create();
    }
}
