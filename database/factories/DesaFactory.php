<?php

namespace Database\Factories;

use App\Models\desa;
use Illuminate\Database\Eloquent\Factories\Factory;

class DesaFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = desa::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'Judul' => $this->faker->sentence($nbWords = 6, $variableNbWords = true),
            'Gambar' => $this->faker->imageUrl($width = 640, $height = 480),
            'Deskripsi' => $this->faker->sentence($nbWords = 15, $variableNbWords = true),
        ];
    }
}
