<?php

namespace App\Console\Commands;

use App\Models\Center;
use Illuminate\Console\Command;

class CreateCenters extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'create:centers {count}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Create Dummy Centers for your App';

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        $numberOfcenters = $this->argument('count');

        for ($i = 0; $i < $numberOfcenters; $i++) {
            Center::factory()->create();
        }

        return 0;
    }
}
