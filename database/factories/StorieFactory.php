<?php

namespace Database\Factories;

use App\Models\Storie;
use Illuminate\Database\Eloquent\Factories\Factory;

class StorieFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Storie::class;

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
            'resourceURI' => $this->faker->name,
            'type' => $this->faker->unique()->name,
            'modified' => $this->faker->date()
        ];
    }
}
