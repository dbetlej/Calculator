<?php

namespace Tests\Unit;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use App\Models\Dudes;

class DudesTest extends TestCase
{
    use RefreshDatabase;
    
    public function test_creating_dude()
    {
        $dude = Dudes::factory()->create([
            'login' => 'kazak'
        ]);
        $this->assertModelExists($dude);
        $this->assertDatabaseHas('dudes', [
            'email' => $dude->email
        ]);
    }

    public function test_delete_dude()
    {
        $dude = Dudes::factory()->create();
        $this->assertModelExists($dude);
        $dude->delete();
        $this->assertModelMissing($dude);
    }

    public function test_update_dude()
    {
        $dude = Dudes::factory()->create();
        $this->assertModelExists($dude);
        $dude->login = 'Jakuza';
        $dude->save();
        $this->assertDatabaseHas('dudes', [
            'login' => 'Jakuza'
        ]);
    }
}
