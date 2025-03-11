<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Raport>
 */
class RaportFactory extends Factory
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
            'mata_pelajaran' => fake()->name(),
            'nilai' => fake()->numberBetween(70, 100),
            'keterangan' => fake()->text(),
        ];
    }
}
