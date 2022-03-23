<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class MovieTest extends TestCase
{
    use RefreshDatabase;

    public function test_user_cant_create_movie() {
        $response = $this->get('/add_movies');
        $response->assertRedirect('/login');

        $response = $this->post('/add_movies', []);
        $response->assertJsonFragment(['msg' => 'No auth.']);
    }

    public function test_user_cant_update_movie() {
        $response = $this->get('/movie/1');
        $response->assertRedirect('/login');

        $response = $this->post('/movie/1', []);
        $response->assertJsonFragment(['msg' => 'No auth.']);
    }

    public function test_user_cant_delete_movie() {
        $response = $this->delete('/movie/1', []);
        $response->assertJsonFragment(['msg' => 'No auth.']);
    }
}
