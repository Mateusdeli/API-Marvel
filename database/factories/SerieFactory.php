<?php

namespace Database\Factories;

use App\Models\Serie;
use Illuminate\Database\Eloquent\Factories\Factory;

class SerieFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Serie::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'title' => $this->faker->unique()->name,
            'description' => $this->faker->name,
            'resourceURI' => $this->faker->url,
            'startYear' => $this->faker->date('Y'),
            'endYear' => $this->faker->date('Y'),
            'rating' => $this->faker->randomLetter,
            'modified' => $this->faker->date()
        ];
    }
}
