<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use App\Models\Dudes;

class MovieTest extends TestCase
{
    use RefreshDatabase;

    // TODO:
    // create movie
    public function test_if_dude_can_create_movie() {
        $response = $this->post('/');

        $response->assertRedirect('/dashboard');
    }
    // edit movie
    // get movie
    // delete movie

    // create movie_list
    // edit movie_list
    // get movie_list
    // delete movie_list
}
