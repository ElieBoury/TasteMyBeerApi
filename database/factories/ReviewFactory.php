<?php

namespace Database\Factories;

use App\Models\Beer;
use App\Models\Review;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

class ReviewFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Review::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'comment' => $this->faker->text(),
            'rate' => $this->faker->numberBetween(0, 10),
            'user_id' => User::factory()->create()->id,
            'beer_id' => Beer::factory()->create()->id,
            'photo' => "https://picsum.photos/640/480",
        ];
    }
}
