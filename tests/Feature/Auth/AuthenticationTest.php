<?php

namespace Tests\Feature\Auth;

use App\Models\User;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class AuthenticationTest extends TestCase
{
    use RefreshDatabase;

    public function test_login_screen_can_be_rendered(): void
    {
        $response = $this->get('/login');

        $response->assertStatus(200);
    }

    public function test_users_can_authenticate_using_the_login_screen(): void
    {
        $user = User::factory()->create();

        $response = $this->post('/login', [
            'email' => $user->email,
            'password' => 'password',
        ]);

        $this->assertAuthenticated();
        $response->assertViewIs('dashboard');
        $response->assertViewHas(['token', 'firstname', 'lastname']);
    }

    public function test_users_can_not_authenticate_with_invalid_password(): void
    {
        $user = User::factory()->create();

        $this->post('/login', [
            'email' => $user->email,
            'password' => 'wrong-password',
        ]);

        $this->assertGuest();
    }

    public function test_guest_users_are_redirected_to_login_page(): void
    {
        $response = $this->get('/dashboard');

        $response->assertRedirect(RouteServiceProvider::HOME);
    }

    public function test_access_with_correct_ability()
    {
        // Créez un utilisateur
        $userWithAbility = User::factory()->create();

        // Créez un token pour cet utilisateur avec la bonne ability
        $token = $userWithAbility->createToken('TestToken', ['user-get-user'])->plainTextToken;

        // Utilisez le token pour faire une demande
        $headers = ['Authorization' => 'Bearer ' . $token];

        // Testez l'accès à la route
        $response = $this->json('POST', '/api/learners/store', $headers);
        $response->assertStatus(201); // Ou tout autre code de statut que vous attendez
    }

    public function test_access_with_incorrect_ability()
    {
        $userWithoutAbility = User::factory()->create();

        $token = $userWithoutAbility->createToken('TestToken', ['wrong-ability'])->plainTextToken;

        $headers = ['Authorization' => 'Bearer ' . $token];

        $response = $this->json('POST', '/api/learners/store', $headers);
        $response->assertStatus(401);
    }
}
