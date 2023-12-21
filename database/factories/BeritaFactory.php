<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Berita>
 */
class BeritaFactory extends Factory
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
            'kategori_id' => $this->faker->numberBetween(1,env('JML_KATEGORI')),
            'judul' => $this->faker->sentence(mt_rand(2, 8)),
            'narasi' => $this->faker->paragraphs(2, true),
            'thumb' => $this->faker->imageUrl(640, 480, 'people', true),
            'sumber' => $this->faker->url(),
            'penjelasan' => $this->faker->paragraphs(3, true),
            'referensi' => $this->faker->url(),
            'validasi' => $this->faker->boolean(),
        ];
    }
}
