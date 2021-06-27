<?php

namespace Database\Factories;

use App\Models\Product;
use Illuminate\Database\Eloquent\Factories\Factory;
use Faker\Generator as Faker;

$factory->define(Product::class, function (Faker $faker){
    return [
        'title'=> $faker->word(),
        'description' => $faker->text(120),
        'price' => $faker->numberBetween(10000, 100000),
        'image' => ''
    ];
});
class ProductFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Product::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            //
        ];
    }
}
