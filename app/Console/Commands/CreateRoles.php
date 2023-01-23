<?php

namespace App\Console\Commands;

use App\Models\Role;
use Exception;
use Illuminate\Console\Command;
use Illuminate\Console\View\Components\TwoColumnDetail;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class CreateRoles extends Command
{
    const ROLES = [
        [
            'id' => 1,
            'name' => 'super-admin',
            'code' => '0001',
        ],
    ];
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
    protected $description = 'Create Roles for App';

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        $roles = [
            [
                'id' => 1,
                'name' => 'super-admin',
                'code' => '0001',
            ],
        ];
        try {
            foreach (self::ROLES as $role) {
                if (!Role::where('name', $role['name'])->exists()) {
                    DB::table('roles')->insert([
                        $role
                    ]);
                    with(new TwoColumnDetail($this->getOutput()))->render(
                        '<fg=yellow;options=bold>ROLE : </>' . $role['name'],
                        '<fg=yellow;options=bold>ADDED</>'
                    );
                } else {
                    with(new TwoColumnDetail($this->getOutput()))->render(
                        '<fg=yellow;options=bold>ROLE : </>' . $role['name'],
                        '<bg=red;options=bold>EXISTS</>'
                    );
                }
            }
        } catch (Exception $e) {

            with(new TwoColumnDetail($this->getOutput()))->render(
                '<fg=red;options=bold>Error: </>' . $e->getMessage(),
                '<fg=red;options=bold>Failed to insert roles</>'
            );
        }
        return 0;
    }
}
