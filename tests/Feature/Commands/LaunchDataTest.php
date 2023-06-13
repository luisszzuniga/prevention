<?php

namespace Commands;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Support\Facades\Artisan;
use Tests\TestCase;

class LaunchDataTest extends TestCase
{
    use RefreshDatabase;

    public function testLaunchDataCommand()
    {
        $this->artisan('create:all')
            ->assertExitCode(0);

        $this->assertDatabaseCount('roles', 5);
        $this->assertDatabaseCount('companies', 1);
        $this->assertDatabaseCount('users', 2);
        $this->assertDatabaseCount('offers', 3);
        $this->assertDatabaseCount('features', 5);
        $this->assertDatabaseCount('themes', 0);
        $this->assertDatabaseCount('criteria', 0);
        $this->assertDatabaseCount('centers', 0);

    }
}
