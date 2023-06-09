<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class CommandTest extends TestCase
{

    use RefreshDatabase;

    public function testLaunchData()
    {
        $this->artisan('create:all');
        $this->assertDatabaseHas('users', [
            'lastname' => 'rousseau',
            'firstname' => 'maxime',
            'email' => 'maxime.rousseau99@gmail.com',
        ]);
    }

    public function testSuperAdminRoleIsCreated()
    {
        $this->artisan('create:roles');

        $this->assertDatabaseHas('roles', [
            'id' => 1,
            'name' => 'super-admin',
            'description' => 'Salarié Lery technologies. Peut ajouter, supprimer des clients et ajouter des domaines autorisés (nouveau client par exemple)',
        ]);
    }

    public function testManagerRoleIsCreated()
    {
        $this->artisan('create:roles');

        $this->assertDatabaseHas('roles', [
            'id' => 2,
            'name' => 'manager',
            'description' => 'Accès aux pages statistiques globales, factures et contrats',
        ]);
    }

    public function testAdminRoleIsCreated()
    {
        $this->artisan('create:roles');

        $this->assertDatabaseHas('roles', [
            'id' => 3,
            'name' => 'admin',
            'description' => 'Salarié de l\'entreprise de formation. Peut voir et ajouter des formateurs',
        ]);
    }

    public function testInstructorRoleIsCreated()
    {
        $this->artisan('create:roles');

        $this->assertDatabaseHas('roles', [
            'id' => 4,
            'name' => 'instructor',
            'description' => 'Peut ajouter des leçons et des apprenants',
        ]);
    }

    public function testGuestRoleIsCreated()
    {
        $this->artisan('create:roles');

        $this->assertDatabaseHas('roles', [
            'id' => 5,
            'name' => 'guest',
            'description' => 'Peut avoir accès aux informations de ses stages. C\'est par exemple un apprenant',
        ]);
    }



}
