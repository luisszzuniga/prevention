<?php

namespace App\Console\Commands;

use App\Models\Role;
use Illuminate\Console\Command;

class CreateRoles extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'create:roles {count}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Create Dummy Roles for your App';

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        $numberOfRoles = $this->argument('count');

        for ($i = 0; $i < $numberOfRoles; $i++) {
            Role::factory()->create();
        }

        return 0;
    }
}
