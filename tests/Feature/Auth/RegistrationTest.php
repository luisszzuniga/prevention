<?php

namespace Tests\Feature\Auth;

use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Support\Facades\DB;
use Tests\TestCase;

class RegistrationTest extends TestCase
{
    use RefreshDatabase;

    public function test_registration_screen_can_be_rendered(): void
    {
        $response = $this->get('/register');
        $response->assertStatus(200);
    }

    public function test_new_users_can_register(): void
    {
        $role =
            [
                'id' => 1,
                'name' => 'super-admin',
                'description' => 'Salarié Lery technologies. Peut ajouter, supprimer des clients et ajouter des domaines autorisés (nouveau client par exemple)'
            ];
        DB::table('roles')->insert([
            $role
        ]);
        $response = $this->post('/register', [
            'lastname' => 'lastname',
            'firstname' => 'firstname',
            'email' => 'test@example.com',
            'password' => 'password',
            'password_confirmation' => 'password',
            'phone' => 'phone',
            'address' => 'address',
            'zip_code' => '12345',
            'town' => 'TownName',
        ]);
        $this->assertAuthenticated();
        $response->assertRedirect(RouteServiceProvider::DASHBOARD);
    }
}
