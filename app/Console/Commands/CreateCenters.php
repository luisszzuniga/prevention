<?php

namespace App\Console\Commands;

use App\Models\Center;
use Exception;
use Illuminate\Console\Command;
use Illuminate\Console\View\Components\TwoColumnDetail;
use Illuminate\Support\Facades\DB;

class CreateCenters extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'create:centers';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Create Centers for App';

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle(): int
    {
        $this->line('  <fg=yellow;options=bold>CENTERS :</> <fg=default>Nothing to add</>');
        return self::SUCCESS;
    }

}
