<?php

namespace Tests\Unit;


use Tests\TestCase;
use Illuminate\Foundation\Testing\RefreshDatabase;

class ControllerVehicleTest extends TestCase
{
    public function testStore()
    {
        $data = [
            'name' => 'vehicle1',
            'brand' => 'brand1',
            'license_plate' => 'license1',
            'type' => 'type1'
        ];

        $response = $this->post(route('vehicles.store'), $data);

        $response->assertStatus(201);
        $response->assertJson([
            'message' => "Le véhicule vehicle1 a été créé avec succès.",
            'vehicle' => [
                'name' => 'vehicle1',
                'brand' => 'brand1',
                'license_plate' => 'license1',
                'type' => 'type1'
            ]
        ]);
    }

}
