<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Quiz>
 */
class QuizFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'pertanyaan' => $this->faker->sentence(mt_rand(2, 50)),
            'benar' => $this->faker->sentence(mt_rand(1, 10)),
            'salah1' => $this->faker->sentence(mt_rand(1, 10)),
            'salah2' => $this->faker->sentence(mt_rand(1, 10)),
            'salah3' => $this->faker->sentence(mt_rand(1, 10)),
        ];
    }
}
