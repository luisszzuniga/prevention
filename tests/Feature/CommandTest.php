<?php

namespace Tests\Feature;

use Tests\TestCase;

class CommandTest extends TestCase
{
    public function testLaunchData()
    {
        $this->artisan('create:all');
        $this->assertDatabaseHas('users', [
            'lastname' => 'rousseau',
            'firstname' => 'maxime',
            'email' => 'maxime.rousseau99@gmail.com',
        ]);
    }

}
