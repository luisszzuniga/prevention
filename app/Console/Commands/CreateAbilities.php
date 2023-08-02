<?php

namespace App\Console\Commands;

use App\Models\Ability;
use App\Models\Role;
use Illuminate\Console\Command;
use Illuminate\Console\View\Components\TwoColumnDetail;
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
            0 => [ // Super-admin
                [// ability 1
                    'name' => 'user:get:user',
                    'description' => 'Visualize user\'s info'
                ],
                [//ability 2
                    'name' => 'company:post:store',
                    'description' => 'Create a company'
                ],
                [//ability 3
                    'name' => 'trainer:post:store',
                    'description' => 'Create a trainer'
                ],
                [//ability 3
                    'name' => 'vehicle:post:store',
                    'description' => 'Create a vehicle'
                ],
            ],
            1 => [ // Manager
                [
                ],
            ],
            2 => [ // Admin
                [
                ],
            ],
            3 => [ // instructor
                [
                ],
            ],
            4 => [ // Guest
                [
                ],
            ],
        ];
        $superAdminId = Role::where('name', CreateRoles::ROLES[0]['name'])->first()->id;
        $managerId = Role::where('name', CreateRoles::ROLES[1]['name'])->first()->id;
        $adminId = Role::where('name', CreateRoles::ROLES[2]['name'])->first()->id;
        $instructorId = Role::where('name', CreateRoles::ROLES[3]['name'])->first()->id;
        $guestId = Role::where('name', CreateRoles::ROLES[4]['name'])->first()->id;

        foreach ($abilities[0] as $ability) {
            if (!Ability::where('name', $ability['name']->exists())) {
                DB::table('abilities')->insert([
                    'name' => $ability['name'],
                    'description' => $ability['description'],
                    'role_id' => $superAdminId
                ]);
                with(new TwoColumnDetail($this->getOutput()))->render(
                    '<fg=yellow;options=bold>Ability : </>' . $ability['name'],
                    '<fg=yellow;options=bold>ADDED</>'
                );
            } else {
                with(new TwoColumnDetail($this->getOutput()))->render(
                    '<fg=yellow;options=bold>Ability : </>' . $ability['name'],
                    '<fg=red;options=bold>EXISTS</>'
                );
            }
        }
        return Command::SUCCESS;
    }
}
