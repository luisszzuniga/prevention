<?php

namespace Database\Seeders;

use App\Models\Feature;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class FeatureSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $feature = new Feature();
        $feature->text = 'Gérer les stagiaires';
        $feature->save();

        $feature = new Feature();
        $feature->text = 'Saisir les informations';
        $feature->save();

        $feature = new Feature();
        $feature->text = 'Données envoyées sur le LRS';
        $feature->save();

        $feature = new Feature();
        $feature->text = 'Suivi des formations avec interface';
        $feature->save();
    }
}
