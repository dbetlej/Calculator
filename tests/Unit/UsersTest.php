<?php

namespace Tests\Unit;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

use App\Models\Users;

class UsersTest extends TestCase
{
    use RefreshDatabase;

    public function test_creating_user()
    {
        $user = Users::factory()->create([
            'login' => 'kazak'
        ]);

        $this->assertModelExists($user);
        $this->assertDatabaseHas('Users', [
            'email' => $user->email
        ]);
    }

    public function test_delete_user()
    {
        $user = Users::factory()->create();
        $this->assertModelExists($user);
        $user->delete();
        $this->assertModelMissing($user);
    }

    public function test_update_user()
    {
        $user = Users::factory()->create();
        $this->assertModelExists($user);
        $user->login = 'Jakuza';
        $user->save();
        $this->assertDatabaseHas('users', [
            'login' => 'Jakuza'
        ]);
    }
}
