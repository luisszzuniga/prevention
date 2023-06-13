<?php

namespace App\Console\Commands;

use App\Models\Company;
use App\Models\Role;
use App\Models\User;
use Exception;
use Illuminate\Console\Command;
use Illuminate\Console\View\Components\TwoColumnDetail;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class CreateUsers extends Command
{
    const SUPER_ADMIN = 1;
    const LERY_TECHNOLOGIES = 1;

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
    protected $description = 'Create Users for App';

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        $companyId = Company::whereId(self::LERY_TECHNOLOGIES)->first()->getAttribute('id');
        $roleId = Role::whereId(self::SUPER_ADMIN)->first()->getAttribute('id');
        $users = [
            [
                'firstname' => 'Stephane',
                'lastname' =>Str::ucfirst('pau'),
                'email' => 'stephane.pau@smartmoov.solutions',
                'phone' => '0635192778',
                'password' => bcrypt('ilfi6klf'),
                'address' => '9 SQ. du roi arthur',
                'zip_code' => '35000',
                'town' => 'Rennes',
                'company_id' => $companyId,
                'role_id' => $roleId
            ],
            [
                'firstname' => 'Maxime',
                'lastname' => 'Rousseau',
                'email' => 'maxime.rousseau99@gmail.com',
                'phone' => '0781726621',
                'password' => bcrypt('4rCJ6vZ9m4Yk5p'),
                'address' => '19 la croix quinquis',
                'zip_code' => '22290',
                'town' => 'pleguien',
                'company_id' => $companyId,
                'role_id' => $roleId
            ],
        ];
        try {
            foreach ($users as $user) {
                if (!User::where('email', $user['email'])->exists()) {
                    DB::table('users')->insert([
                        $user
                    ]);
                    with(new TwoColumnDetail($this->getOutput()))->render(
                        '<fg=yellow;options=bold>USER : </>'. $user['firstname'].' '.$user['lastname'],
                        '<fg=yellow;options=bold>ADDED</>'
                    );
                } else {
                    with(new TwoColumnDetail($this->getOutput()))->render(
                        '<fg=yellow;options=bold>USER : </>'.$user['firstname'].' '.$user['lastname'],
                        '<bg=red;options=bold>EXISTS</>'
                    );
                }
            }
        } catch (Exception $e) {

            with(new TwoColumnDetail($this->getOutput()))->render(
                '<fg=red;options=bold>Error: </>'. $e->getMessage(),
                '<fg=red;options=bold>Failed to insert users</>'
            );
        }
        return self::SUCCESS;
    }
}
