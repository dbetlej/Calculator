<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use App\Models\Dudes;

class DudesTest extends TestCase
{
    use RefreshDatabase;

    public function test_if_dude_can_login() {
        $dude = Dudes::factory()->create();
        $this->assertModelExists($dude);
        $response = $this->post('/login', [
            'email' => $dude->email,
            'password' => 'password'
        ]);
        $response->assertRedirect('/dashboard');
    }

    public function test_if_dude_cant_login() {
        $dude = Dudes::factory()->create();
        $this->assertModelExists($dude);
        $response = $this->post('/login', [
            'email' => $dude->email,
            'password' => 'passwsordXD'
        ]);
        $response->assertSessionHasErrors(['email']);
    }

    public function test_if_dude_can_register() {
        $response = $this->post('/register', [
            'login' => 'login',
            'email' => 'example@example.com',
            'password' => 'password',
            'rpassword' => 'password'
        ]);
        $response->assertRedirect('/login');
    }

    public function test_if_dude_cant_register() {
        $response = $this->post('/register', [
            'login' => 'login',
            'email' => 'example@example.com',
            'password' => 'password',
            'rpassword' => 'rpassword'
        ]);
        $response->assertSessionHasErrors(['password']);
    }
}