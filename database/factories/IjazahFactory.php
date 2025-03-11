<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Ijazah>
 */
class IjazahFactory extends Factory
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
            'file_ijazah' => $url,
            'tahun_kelulusan' => fake() -> date()
        ];
    }
}
