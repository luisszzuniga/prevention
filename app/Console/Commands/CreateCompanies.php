<?php

namespace App\Console\Commands;

use App\Models\Company;
use Illuminate\Console\Command;

class CreateCompanies extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'create:companies {count}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Create Dummy Companies for your App';

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        $numberOfCompanies = $this->argument('count');

        for ($i = 0; $i < $numberOfCompanies; $i++) {
            Company::factory()->create();
        }

        return 0;
    }
}
