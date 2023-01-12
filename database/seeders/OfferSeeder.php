<?php

namespace Database\Seeders;

use App\Models\Company;
use App\Models\Feature;
use App\Models\Offer;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class OfferSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
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

        $features1 = Feature::whereId(1)->get();
        $features2 = Feature::whereId(2)->get();
        $features3 = Feature::whereId(3)->get();
        $features4 = Feature::whereId(4)->get();

        $offerPlus->features()->attach($features1);
        $offerPlus->features()->attach($features2);

        $offerBuisness->features()->attach($features1);
        $offerBuisness->features()->attach($features2);
        $offerBuisness->features()->attach($features3);

        $offerEntreprise->features()->attach($features1);
        $offerEntreprise->features()->attach($features2);
        $offerEntreprise->features()->attach($features3);
        $offerEntreprise->features()->attach($features4);
    }
}
