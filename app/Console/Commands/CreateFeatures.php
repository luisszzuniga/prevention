<?php

namespace App\Console\Commands;

use App\Models\Feature;
use Exception;
use Illuminate\Console\Command;
use Illuminate\Console\View\Components\TwoColumnDetail;
use Illuminate\Support\Facades\DB;

class CreateFeatures extends Command
{
    const OFFER_PLUS = 1;
    const OFFER_BUSINESS = 2;
    const OFFER_ENTERPRISE = 3;

    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'create:features';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Create Features for your App';

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        $features = [
            [
                'text' => 'Gérer les stagiaires',
                'offer_id' => self::OFFER_PLUS
            ],
            [
                'text' => 'Saisir les informations',
                'offer_id' => self::OFFER_PLUS
            ],
            [
                'text' => 'Données envoyées en interne',
                'offer_id' => self::OFFER_BUSINESS
            ],
            [
                'text' => 'Données envoyées sur le LRS',
                'offer_id' => self::OFFER_ENTERPRISE
            ],
            [
                'text' => 'interface et gestion des données sur demande',
                'offer_id' => self::OFFER_ENTERPRISE
            ],
        ];
        try {
            foreach ($features as $feature) {
                if (!Feature::where('text', $feature['text'])->exists()) {
                    DB::table('features')->insert([
                        $feature
                    ]);
                    with(new TwoColumnDetail($this->getOutput()))->render(
                        '<fg=yellow;options=bold>FEATURE : </>' . $feature['text'],
                        '<fg=yellow;options=bold>ADDED</>'
                    );
                } else {
                    with(new TwoColumnDetail($this->getOutput()))->render(
                        '<fg=yellow;options=bold>FEATURE : </>' . $feature['text'],
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
