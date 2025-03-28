<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\doctor>
 */
class doctorFactory extends Factory
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
        'major_id'=>1
        ];
    }
}
