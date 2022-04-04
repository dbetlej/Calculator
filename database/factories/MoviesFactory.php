<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Movie>
 */
class MoviesFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'name' => $this->faker->name(),
            'url' => $this->faker->url(),
            'description' => $this->faker->text(300),
            'series' => $this->faker->text(100),
            'category' => $this->faker->text(110),
            'favorite' => $this->faker->boolean(),
            'watched' => $this->faker->boolean(),
            'to_watch' => $this->faker->boolean(),
        ];
    }
}
