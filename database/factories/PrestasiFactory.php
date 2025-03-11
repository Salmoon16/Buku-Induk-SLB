<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Prestasi>
 */
class PrestasiFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'nama_prestasi' => fake()->name(),
            'tingkat_prestasi' => fake()->randomElement(['Sekolah', 'Kabupaten', 'Provinsi', 'Nasional', 'Internasional']),
            'tahun_prestasi' => fake()->year(),
        ];
    }
}
