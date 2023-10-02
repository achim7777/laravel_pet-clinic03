<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Pet>
 */
class PetFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'owner_id' => rand(1, 50),
            'name' => $this->faker->text(8),
            'date_of_birth' => $this->faker->date(),
            'type' => $this->faker->text(5),
        ];
    }
}