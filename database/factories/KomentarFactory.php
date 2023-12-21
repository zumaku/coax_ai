<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Komentar>
 */
class KomentarFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'user_id' => $this->faker->numberBetween(1, env('JML_USER')),
            'berita_id' => $this->faker->numberBetween(1, env('JML_BERITA')),
            'komentar' => $this->faker->sentence(mt_rand(1, 255)),
        ];
    }
}
