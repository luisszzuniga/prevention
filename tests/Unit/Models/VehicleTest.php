<?php

namespace Tests\Unit\Models;

use App\Models\User;
use App\Models\Vehicle;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class VehicleTest extends TestCase
{
    use RefreshDatabase;

    /**
     * Test fillable attributes.
     *
     * @return void
     */
    public function test_fillable_attributes(): void
    {
        $vehicle = new Vehicle([
            'name' => 'Car',
            'brand' => 'Toyota',
            'license_plate' => '123ABC',
            'type' => 'Sedan',
            'user_id_Learner' => 1,
        ]);

        $this->assertEquals('Car', $vehicle->name);
        $this->assertEquals('Toyota', $vehicle->brand);
        $this->assertEquals('123ABC', $vehicle->license_plate);
        $this->assertEquals('Sedan', $vehicle->type);
        $this->assertEquals(1, $vehicle->user_id_Learner);
    }

    /**
     * Test user relation.
     *
     * @return void
     */
    public function test_user_relation(): void
    {
        $user = User::factory()->create();
        $vehicle = Vehicle::factory()->create(['user_id_Learner' => $user->id]);

        $this->assertInstanceOf(User::class, $vehicle->user);
        $this->assertEquals($user->id, $vehicle->user->id);
    }

}
