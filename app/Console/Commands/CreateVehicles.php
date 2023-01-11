<?php

namespace App\Console\Commands;

use App\Models\Vehicle;
use Illuminate\Console\Command;

class CreateVehicles extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'create:vehicles {count}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Create Dummy Vehicles for your App';

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        $numberOfVehicles = $this->argument('count');

        for ($i = 0; $i < $numberOfVehicles; $i++) {
            Vehicle::factory()->create();
        }

        return 0;
    }
}
