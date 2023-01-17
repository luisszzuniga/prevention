<?php

namespace App\Console\Commands;

use App\Models\Feature;
use App\Models\Offer;
use App\Models\Role;
use Exception;
use Illuminate\Console\Command;
use Illuminate\Console\View\Components\TwoColumnDetail;
use Illuminate\Support\Facades\DB;

class CreateOffers extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'create:offers';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Create the attached Offers and features for your App';

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {

        $offers = [
            [
                'name' => 'Plus',
                'price' => 4.99,
                'description' => 'Saisie des données du stagiaire'
            ],
            [
                'name' => 'Business',
                'price' => 9.99,
                'description' => 'Envoi automatique des données'
            ],
            [
                'name' => 'Enterprise',
                'price' => 14.99,
                'description' => 'Suivre les formations des stagiaires dans leur SIRH'
            ],
        ];
        try {
            foreach ($offers as $offer) {
                if (!Offer::where('name', $offer['name'])->exists()) {
                    DB::table('offers')->insert([
                        $offer
                    ]);
                    with(new TwoColumnDetail($this->getOutput()))->render(
                        '<fg=yellow;options=bold>OFFER : </>' . $offer['name'],
                        '<fg=yellow;options=bold>ADDED</>'
                    );
                } else {
                    with(new TwoColumnDetail($this->getOutput()))->render(
                        '<fg=yellow;options=bold>OFFER : </>' . $offer['name'],
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
        return 0;
    }
}
