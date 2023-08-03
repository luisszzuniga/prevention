<?php

namespace Models;

use App\Models\Company;
use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class CompanyTest extends TestCase
{
    use RefreshDatabase;

    /**
     * Test fillable attributes.
     *
     * @return void
     */
    public function test_fillable_attributes(): void
    {
        $company = new Company([
            'name' => 'Test Company',
        ]);

        $this->assertEquals('Test Company', $company->name);
    }

    /**
     * Test users relation.
     *
     * @return void
     */
    public function test_users_relation(): void
    {
        $company = Company::factory()->create();
        $user = User::factory()->create(['company_id' => $company->id]);

        $this->assertInstanceOf(User::class, $company->users->first());
        $this->assertEquals($user->id, $company->users->first()->id);
    }

}

