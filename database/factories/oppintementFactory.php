<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\oppintement>
 */
class oppintementFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name'=>$this->faker->name(),
            'phone'=>$this->faker->phoneNumber(),
            'email'=>$this->faker->unique()->safeEmail(),
        'user_id'=>1,
        'doctor_id'=>2
        ];
    }
}
