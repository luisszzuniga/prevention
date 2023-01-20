<?php

use App\Console\Commands\LaunchData;
use App\Http\Controllers\VehicleController;
use App\Models\User;
use App\Models\Vehicle;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;


class CommandTest extends TestCase
{
    public function testLanchData( )
    {
        $this->artisan('create:all');

        $this->assertDatabaseHas('users', [
            'lastname' => 'rousseau',
            'firstname' => 'maxime',
            'email' => 'maxime.rousseau99@gmail.com',
        ]);
    }

}
