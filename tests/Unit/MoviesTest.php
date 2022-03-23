<?php

namespace Tests\Unit;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;
use App\Models\Movies;

class MoviesTest extends TestCase
{
    use RefreshDatabase;

    public function test_check_create_movie()
    {
        $movie = Movies::factory()->create();
        $this->assertModelExists($movie);
        $this->assertDatabaseHas('movies', [
            'name' => $movie->name
        ]);
    }

    public function test_check_delete_movie()
    {
        $movie = Movies::factory()->create();
        $this->assertModelExists($movie);
        $this->assertDatabaseHas('movies', [
            'name' => $movie->name
        ]);
        $movie->delete();
        $this->assertModelMissing($movie);
    }

    public function test_check_update_movie()
    {
        $movie = Movies::factory()->create();
        $this->assertModelExists($movie);
        $this->assertDatabaseHas('movies', [
            'name' => $movie->name
        ]);
        $movie->name = 'test';
        $movie->save();
        $this->assertDatabaseHas('movies', [
            'name' => 'test'
        ]);
    }

    public function test_check_create_movie_series()
    {
        $movies = Movies::factory()->count(3)->create([
            'series' => 'MCU'
        ]);
        $this->assertDatabaseHas('movies', [
            'series' => 'MCU'
        ]);
    }
}
