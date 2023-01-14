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

        $features = Feature::whereId(1)->get();
        $offerPlus->features()->attach($features);
    }
}
