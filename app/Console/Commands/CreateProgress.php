<?php

namespace App\Console\Commands;

use App\Models\Progress;
use Illuminate\Console\Command;

class CreateProgress extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'create:progress {count}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Create Dummy Progress for your App';

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        $numberOfProgress = $this->argument('count');

        for ($i = 0; $i < $numberOfProgress; $i++) {
            Progress::factory()->create();
        }

        return 0;
    }
}
