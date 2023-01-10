<?php

namespace App\Console\Commands;

use App\Models\Feature;
use Illuminate\Console\Command;

class CreateFeatures extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'create:features {count}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Create Dummy Features for your App';

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        $numberOfFeatures = $this->argument('count');

        for ($i = 0; $i < $numberOfFeatures; $i++) {
            Feature::factory()->create();
        }

        return 0;
    }
}
