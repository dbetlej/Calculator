<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use App\Models\Dudes;

class MovieTest extends TestCase
{
    use RefreshDatabase;

    // get movie list
    public function test_if_dude_can_get_movie_list() {
        $response = $this->post('/movies', []);
        
        $response->assertRedirect('/dashboard');
    }

    // add list
    // delete list
    // edit list

    // get movie
    // add movie
    // delete movie
    // edit movie
}
