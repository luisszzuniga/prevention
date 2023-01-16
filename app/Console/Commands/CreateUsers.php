<?php

namespace App\Console\Commands;

use App\Models\Company;
use App\Models\Role;
use App\Models\User;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class CreateUsers extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'create:users';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Create Users for your App';

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        $companyId = Company::factory()->create()->first()->getAttribute("id");
        $roleId2 = Role::whereRoleCode(1)->first()->getAttribute("id");
        DB::table('users')->insert([
            'lastname' => 'rousseau',
            'firstname' => 'maxime',
            'email' => 'maxime.rousseau99@gmail.com',
            'phone' => '0781726621',
            'password' => bcrypt('password'),
            'address' => '19 la croix quinquis',
            'zip_code' => '22290',
            'town' => 'pleguien',
            'company_id' => $companyId,
            'role_id' => $roleId2
        ]);
       return 0;
    }
}
