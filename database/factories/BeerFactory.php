<?php

namespace Database\Factories;

use App\Models\Beer;
use Illuminate\Database\Eloquent\Factories\Factory;

class BeerFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Beer::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {

        $types = array("Blonde", "Brune", "Blanche", "Triple");

        return [
            'name' => $this->faker->lastName,
            'type' => $types[array_rand($types)],
            'picture' => "https://picsum.photos/480",
        ];
    }
}
