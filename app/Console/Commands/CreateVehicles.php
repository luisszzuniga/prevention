<?php

namespace App\Console\Commands;

use App\Models\Vehicle;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\DB;

class CreateVehicles extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'create:vehicles';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Create Vehicles for your App';

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        DB::table('vehicles')->insert([
            'name' => 'Opel Astra',
            'brand' => 'Opel',
            'license_plate' => 'AK-549-XL',
            'type' => 'essence'
        ]);
       return 0;
    }
}
