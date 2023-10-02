<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Appointment>
 */
class AppointmentFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'pet_id' => rand(1, 50),
            'date' => $this->faker->date('Y_m_d'),
            'start' => $this->faker->time('H:i'),
            'end' => $this->faker->time('H:i'),
            'description' => $this->faker->text(50),
        ];
    }
}