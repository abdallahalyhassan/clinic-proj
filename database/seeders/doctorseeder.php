<?php

namespace Database\Seeders;

use App\Models\doctor;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class doctorseeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        doctor::factory(10)->create();
    }
}
