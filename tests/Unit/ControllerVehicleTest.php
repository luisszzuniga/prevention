<?php

namespace Tests\Unit;

use App\Models\User;
use Tests\TestCase;

class ControllerVehicleTest extends TestCase
{
    public function testStore(): void
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

    public function testUnauthenticatedUsersCannotAccessVehiclePage(): void
    {
        $response = $this->get('/vehicle');
        $response->assertRedirect('login');
    }

    public function testAuthenticatedUsersCanAccessVehiclePage()
    {
        $user = User::factory()->create();
        $this->actingAs($user);

        $response = $this->get('/vehicle');
        $response->assertOk();
    }

}
