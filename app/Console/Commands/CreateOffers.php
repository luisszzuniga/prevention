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
    protected $signature = 'create:offers';

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
        $offerPlus = new Offer();
        $offerPlus->name = 'Plus';
        $offerPlus->price = 4.99;
        $offerPlus->description = 'Saisie des données du stagiaire';
        $offerPlus->save();

        $offerBuisness = new Offer();
        $offerBuisness->name = 'Buisness';
        $offerBuisness->price = 9.99;
        $offerBuisness->description = 'Envoi automatique des données';
        $offerBuisness->save();

        $offerEntreprise = new Offer();
        $offerEntreprise->name = 'Entreprise';
        $offerEntreprise->price = 14.99;
        $offerEntreprise->description = 'Suivre les formations des stagiaires dans leur SIRH';
        $offerEntreprise->save();



        $feature = new Feature();
        $feature->text = 'Gérer les stagiaires';
        $feature->save();
        $offerPlus->features()->attach($feature);
        $offerBuisness->features()->attach($feature);
        $offerEntreprise->features()->attach($feature);


        $feature = new Feature();
        $feature->text = 'Saisir les informations';
        $feature->save();
        $offerPlus->features()->attach($feature);
        $offerBuisness->features()->attach($feature);

        $offerEntreprise->features()->attach($feature);


        $feature = new Feature();
        $feature->text = 'Données envoyées sur le LRS';
        $feature->save();
        $offerBuisness->features()->attach($feature);
        $offerEntreprise->features()->attach($feature);

        $feature = new Feature();
        $feature->text = 'Suivi des formations avec interface';
        $feature->save();
        $offerEntreprise->features()->attach($feature);


        return 0;
    }
}
