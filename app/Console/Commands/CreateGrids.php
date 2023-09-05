<?php

namespace App\Console\Commands;

use App\Models\Grid;
use App\Models\Company;
use Exception;
use Illuminate\Console\Command;
use Illuminate\Console\View\Components\TwoColumnDetail;
use Illuminate\Support\Facades\DB;

class CreateGrids extends Command
{
    const GRIDS = [
        [
            'name' => 'Grille A',
        ],
    ];

    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'create:grids';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Create Grading Grids for App';

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle(): int
    {
        try {
            $client = Company::where('name', 'Lery Technologies')->firstOrFail();
            foreach (self::GRIDS as $grid) {
                $grid['client_id'] = $client->id;
                if (!Grid::where('title', $grid['title'])->exists()) {
                    DB::table('grids')->insert([
                        $grid
                    ]);
                    with(new TwoColumnDetail($this->getOutput()))->render(
                        '<fg=yellow;options=bold>GRID : </>' . $grid['title'],
                        '<fg=yellow;options=bold>ADDED</>'
                    );
                } else {
                    with(new TwoColumnDetail($this->getOutput()))->render(
                        '<fg=yellow;options=bold>GRID : </>' . $grid['title'],
                        '<bg=red;options=bold>EXISTS</>'
                    );
                }
            }
        } catch (Exception $e) {
            with(new TwoColumnDetail($this->getOutput()))->render(
                '<fg=red;options=bold>GRID: </>' . $e->getMessage(),
                '<fg=red;options=bold>Failed to insert grids</>'
            );
        }
        return self::SUCCESS;
    }
}
