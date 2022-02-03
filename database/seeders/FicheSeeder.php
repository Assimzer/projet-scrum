<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class FicheSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('fiche')->insert([
            'title'      => 'METADIEU Axel',
            'description' => 'Ceci est la fiche pour Axel', 
            'nomCandidat' => 'METADIEU',
            'prenomCandidat' => 'Axel',
            'email' => 'axel.metadieu@grand-dole.fr',
            'address' => '82 rue du Général Malet',
            'permis' => 0,
            'vehicule' => 1,
            'optionDeSIO' => 0,
            'entrepriseTrouvee' => 0,
            'conformeAFormation' => 0,
            'demarcheRealisee' => 1,
            'demandeEmploi' => 0,
            'amenagement' => 'PAI',
            'adequationFormProjet' => 'Conforme',
            'niveauScolaire' => '12-15',
            'experiencePro' => 'oui-significatif',
        ]);

        DB::table('fiche')->insert([
            'title'      => 'TROY Antoine',
            'description' => 'Ceci est la fiche pour Antoine', 
            'nomCandidat' => 'TROY',
            'prenomCandidat' => 'Antoine',
            'email' => 'antoine.troy@grand-dole.fr',
            'address' => '82 rue des fleurs Foucherans',
            'permis' => 0,
            'vehicule' => 0,
            'optionDeSIO' => 0,
            'entrepriseTrouvee' => 0,
            'conformeAFormation' => 0,
            'demarcheRealisee' => 1,
            'demandeEmploi' => 0,
            'amenagement' => 'aucun',
            'adequationFormProjet' => 'Conforme',
            'niveauScolaire' => '12-15',
            'experiencePro' => 'non',
        ]);
    }
}
