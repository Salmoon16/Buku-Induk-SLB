<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Absensi>
 */
class AbsensiFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'semester' => fake()->numberBetween(1, 6),
            'hadir' => fake()->randomNumber(1, 30),
            'sakit' => fake()->randomNumber(1, 30),
            'izin' => fake()->randomNumber(1, 30),
            'alpha' => fake()->randomNumber(1, 30),
        ];
    }
}
