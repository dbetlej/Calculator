<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Movies;

class MoviesFactory extends Factory
{
    protected $model = Movies::class;
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name' => $this->faker->name(),
            'url' => $this->faker->url(),
            'favourite' => 0,
            'watched' => 0,       
            'series' => null,
            'created_at' => now(),
            'updated_at' => now()
        ];
    }
}
