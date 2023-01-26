<?php

namespace Tests\Feature;

use App\Models\User;
use App\Models\Vehicle;
use Tests\TestCase;

class VehicleTest extends TestCase
{
    public function testVehicleIsCreated()
    {
        $userId = User::factory()->create()->first()->getAttribute('id');
        $data = [
            'name' => 'Opel corsa',
            'brand' => 'Opel',
            'license_plate' => 'AK-879-AZ',
            'type' => 'essence',
            'learner_id' => $userId
        ];
        // Act
        $vehicle = Vehicle::create($data);
        // Assert
        $this->assertDatabaseHas('vehicles', $data);
        $this->assertInstanceOf(Vehicle::class, $vehicle);
        $this->assertEquals($data['name'], $vehicle->name);
        $this->assertEquals($data['brand'], $vehicle->brand);
        $this->assertEquals($data['license_plate'], $vehicle->license_plate);
        $this->assertEquals($data['type'], $vehicle->type);
    }

}
