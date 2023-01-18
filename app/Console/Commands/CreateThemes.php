<?php

namespace App\Console\Commands;

use App\Models\Theme;
use Illuminate\Console\Command;

class CreateThemes extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'create:themes';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Create Themes for your App';

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        $this->line('  <fg=yellow;options=bold>THEMES :</> <fg=default>Nothing to add</>');
        return 0;
    }
}
