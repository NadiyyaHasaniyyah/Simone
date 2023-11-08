<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Khs>
 */
class KhsFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'sks_smt' => $this->faker->numberBetween(15, 24),
            'sks_komulatif' => $this->faker->numberBetween(18, 144),
            'ips' => $this->faker->randomFloat(1, 4),
            'ipk' => $this->faker->randomFloat(1, 4),
            'semester' => $this->faker->numberBetween(1, 14),
            'mhs_id' => $this->faker->numberBetween(1, 10),
        ];
    }
}
