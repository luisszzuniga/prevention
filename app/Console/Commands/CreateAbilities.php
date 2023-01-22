<?php

namespace App\Console\Commands;

use App\Models\Ability;
use App\Models\Role;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\DB;

class CreateAbilities extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'create:abilities';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Create abilities for all users role';

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        $abilities = [
            '1' => [ // super-admin
                [// ability 1
                    'name' => 'user:get:user',
                    'description' => 'Visualize user\'s info'
                ],
                [//ability 2
                    'name' => 'company:post:create',
                    'description' => 'Create a company'
                ]
            ],
        ];
        //todo boucler sur les roles
        $roleId = Role::where('name', CreateRoles::ROLES[0]['name'])->first()->id;

        foreach($abilities[1] as $ability ) {
            DB::table('abilities')->insert([
                'name'=> $ability['name'],
                'description' => $ability['description'],
                'role_id' => $roleId
            ]);
        }
        return Command::SUCCESS;
    }
}
