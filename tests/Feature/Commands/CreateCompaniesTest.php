<?php

namespace Tests\Feature\Commands;

use App\Console\Commands\CreateCompanies;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Support\Facades\Artisan;
use Tests\TestCase;

class CreateCompaniesTest extends TestCase
{
    use RefreshDatabase;

    public function testCreateCompanies()
    {
        $this->artisan('create:companies')
            ->assertExitCode(0);

        foreach (CreateCompanies::COMPANIES as $company) {
            $this->assertDatabaseHas('companies', $company);
        }
    }

    public function testCompaniesExists()
    {
        Artisan::call('create:companies');
        Artisan::call('create:companies');

        $output = Artisan::output();

        $this->assertStringContainsString('EXISTS', $output);
    }

}

