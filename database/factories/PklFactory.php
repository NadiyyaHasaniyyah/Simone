<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Pkl>
 */
class PklFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'status' => $this->faker->randomElement(['Belum Ambil', 'Sudah Ambil', 'Lulus']),
            'nilai'=> $this->faker->randomElement(['A', 'B', 'C', 'D', 'E']),
            'semester' => $this->faker->numberBetween(1, 14),
            'mhs_id' => $this->faker->numberBetween(1, 10),
        ];
    }
}
