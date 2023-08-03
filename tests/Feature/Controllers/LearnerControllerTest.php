<?php

namespace Controllers;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Support\Facades\Artisan;
use Tests\TestCase;
use App\Models\User;

class LearnerControllerTest extends TestCase
{
    use RefreshDatabase;

    /**
     * Test Store Learner
     */
    public function test_store_learner()
    {
        Artisan::call('create:roles');

        $trainer = User::factory()->create();
        $this->actingAs($trainer);

        $learnerData = [
            "lastname" => "Doe",
            "firstname" => "John",
            "email" => "johndoe@example.com",
            "phone" => "1234567890",
            "address" => "123 Test St",
            "zip_code" => "12345",
            "town" => "Test town",
            'trainer_id' => $trainer->id,
        ];

        $response = $this->json('POST', '/api/learners-store', $learnerData);

        $response->assertStatus(201)
            ->assertJsonStructure([
                'message',
                'learner' => [
                    'lastname',
                    'firstname',
                    'email',
                    'phone',
                    'address',
                    'zip_code',
                    'town',
                    'trainer_id'
                ],
            ]);
    }

}
