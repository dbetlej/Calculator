<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

use App\Models\Users;

class UsersTest extends TestCase
{
    use RefreshDatabase;

    public function test_if_user_can_login()
    {
        $user = Users::factory()->create();
        $this->assertModelExists($user);

        $response = $this->post('/login', [
            'email' => $user->email,
            'password' => 'password'
        ]);

        $response->assertRedirect('/dashboard');
    }

    public function test_if_user_cant_login()
    {
        $user = Users::factory()->create();
        $this->assertModelExists($user);

        $response = $this->post('/login', [
            'email' => $user->email,
            'password' => 'passwsordXD'
        ]);

        $response->assertSessionHasErrors(['email']);
    }

    public function test_if_user_can_register()
    {
        $response = $this->post('/register', [
            'login' => 'login',
            'email' => 'example@example.com',
            'password' => 'password',
            'rpassword' => 'password'
        ]);

        $response->assertRedirect('/login');
    }

    public function test_if_user_cant_register()
    {
        $response = $this->post('/register', [
            'login' => 'login',
            'email' => 'example@example.com',
            'password' => 'password',
            'rpassword' => 'rpassword'
        ]);

        $response->assertSessionHasErrors(['rpassword']);
    }
}
