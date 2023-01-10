<?php

namespace App\Console\Commands;

use App\Models\Feature;
use App\Models\Offer;
use Illuminate\Console\Command;

class CreateOffers extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'create:offers {count}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Create Dummy Offers for your App';

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        $numberOfOffers = $this->argument('count');

        $features = Feature::factory(10)->create();
        Offer::factory(10)->create()->each(function ($offer) use ($features) {
            $offer->features()->attach($features->random(2));
        });

        for ($i = 0; $i < $numberOfOffers; $i++) {
            Offer::factory()->create();
        }

        return 0;
    }
}
