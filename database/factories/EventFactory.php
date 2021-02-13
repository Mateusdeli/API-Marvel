<?php

namespace Database\Factories;

use App\Models\Event;
use Illuminate\Database\Eloquent\Factories\Factory;

class EventFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Event::class;

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
            'modified' => $this->faker->date(),
            'start' => $this->faker->date(),
            'end' => $this->faker->date()
        ];
    }
}
