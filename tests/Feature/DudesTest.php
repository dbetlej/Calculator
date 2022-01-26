<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use App\Models\Dudes;

class DudesTest extends TestCase
{
    use RefreshDatabase;
    /** 
     *   debug
     *  
     *   use RefreshDatabase;
     */


    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function test_example()
    {
        $response = $this->get('/');

        $response->assertStatus(200);
    }

    /** @test */ 
    public function check_if_dude_can_login() {
        $dude = Dudes::factory()->create();
        $this->assertModelExists($dude);
        $response = $this->post('/login', [
            'email' => $dude->email,
            'password' => 'password'
        ]);
        $response->assertRedirect('/dashboard');
    }

    /** @test */ 
    public function check_if_dude_cant_login() {
        $dude = Dudes::factory()->create();
        $this->assertModelExists($dude);
        $response = $this->post('/login', [
            'email' => $dude->email,
            'password' => 'passwsordXD'
        ]);
        $response->assertSessionHasErrors(['email']);
    }

    /** @test */
    public function check_if_dude_can_register() {
        $response = $this->post('/register', [
            'login' => 'login',
            'email' => 'example@example.com',
            'password' => 'password',
            'rpassword' => 'password'
        ]);
        $response->assertRedirect('/login');
    }

    /** @test */
    public function check_if_dude_cant_register() {
        $response = $this->post('/register', [
            'login' => 'login',
            'email' => 'example@example.com',
            'password' => 'password',
            'rpassword' => 'rpassword'
        ]);
        $response->assertSessionHasErrors(['password']);
    }
}