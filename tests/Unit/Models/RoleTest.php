<?php

namespace Models;

use App\Models\Role;
use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class RoleTest extends TestCase
{
    use RefreshDatabase;

    /**
     * Test fillable attributes.
     *
     * @return void
     */
    public function test_fillable_attributes()
    {
        $role = new Role([
            'name' => 'Admin',
            'description' => 'Administrator role'
        ]);

        $this->assertEquals('Admin', $role->name);
        $this->assertEquals('Administrator role', $role->description);
    }

    /**
     * Test users relation.
     *
     * @return void
     */
    public function test_users_relation()
    {
        $role = Role::factory()->create();
        User::factory()->count(3)->create(['role_id' => $role->id]);

        $this->assertEquals(3, $role->users->count());
        $this->assertInstanceOf(User::class, $role->users->first());
    }
}

