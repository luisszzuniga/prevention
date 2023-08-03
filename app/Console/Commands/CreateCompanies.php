<?php

namespace App\Console\Commands;

use App\Models\Company;
use Exception;
use Illuminate\Console\Command;
use Illuminate\Console\View\Components\TwoColumnDetail;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use Symfony\Component\Console\Command\Command as CommandAlias;

class CreateCompanies extends Command
{

    const COMPANIES = [
        [
            'id' => 1,
            'name' => 'Lery Technologies',
            'address' => '1 rue de Paris',
            'zip_code' => '35510',
            'town' => ' Cesson Sévigné'
        ],
    ];

    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'create:companies';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Create Companies for App';

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle(): int
    {

        try {
            foreach (self::COMPANIES as $company) {
                if (!Company::where('name', $company['name'])->exists()) {
                    DB::table('companies')->insert([
                        $company
                    ]);
                    with(new TwoColumnDetail($this->getOutput()))->render(
                        '<fg=yellow;options=bold>COMPANY : </>' . $company['name'],
                        '<fg=yellow;options=bold>ADDED</>'
                    );
                } else {
                    with(new TwoColumnDetail($this->getOutput()))->render(
                        '<fg=yellow;options=bold>COMPANY : </>' . $company['name'],
                        '<bg=red;options=bold>EXISTS</>'
                    );
                }
            }
        } catch (Exception $e) {

            with(new TwoColumnDetail($this->getOutput()))->render(
                '<fg=red;options=bold>Error: </>' . $e->getMessage(),
                '<fg=red;options=bold>Failed to insert users</>'
            );
        }
        return self::SUCCESS;
    }
}
