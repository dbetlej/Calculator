<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

use App\Models\Dudes;
use App\Models\Movies;

class MovieTest extends TestCase
{
    use RefreshDatabase;

    // TODO:
    // public function test_dude_create_movie() {
    //     $movie = Movies::factory()->create();

    //     $this->assertModelExists($movie);
    // }
}
