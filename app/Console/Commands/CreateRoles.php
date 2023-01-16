<?php

namespace App\Console\Commands;

use App\Models\Role;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\DB;

class CreateRoles extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'create:roles';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Create Roles for your App';

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
         DB::table('roles')->insert([
            'role_name' => 'super-admin',
            'role_code' => '0001',
        ]);
        return 0;
    }
}
