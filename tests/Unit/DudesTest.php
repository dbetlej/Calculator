<?php

namespace Tests\Unit;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use App\Models\Dudes;

class DudesTest extends TestCase
{
    // test_
    use RefreshDatabase;
    public function test_creating_dude()
    {
        $dude = Dudes::factory()->create();
        $this->assertModelExists($dude);
        $this->assertDatabaseHas('dudes', [
            'email' => $dude->email
        ]);
    }
}
