<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Siswa>
 */
class SiswaFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $seed = fake()->unique()->uuid;
        $url = "https://picsum.photos/seed/$seed/200/300";
        return [
            'nis' => fake()->unique()->numerify('#######'),
            'nama' => fake()->name(),
            'tanggal_lahir' => fake()->date(),
            'alamat' => fake()->address(),
            'parents' => fake()->name(),
            'contact_parents' => fake()->phoneNumber(),
            'foto' => $url
        ];
    }
}
