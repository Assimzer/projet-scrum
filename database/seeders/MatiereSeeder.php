<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Carbon\Carbon;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;

class MatiereSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('matieres')->insert([
            'nomMatiere' => 'Anglais_Professionnel',
            'sousCoefficient' => 1,
        ]);

        DB::table('matieres')->insert([
            'nomMatiere' => 'Outils_Mathématiques',
            'sousCoefficient' => 1,
        ]);

        DB::table('matieres')->insert([
            'nomMatiere' => 'Droit_Informatique',
            'sousCoefficient' => 1,
        ]);

        DB::table('matieres')->insert([
            'nomMatiere' => 'Management_Budgétisation',
            'sousCoefficient' => 2,
        ]);

        DB::table('matieres')->insert([
            'nomMatiere' => 'Génie_Logiciel',
            'sousCoefficient' => 3,
        ]);

        DB::table('matieres')->insert([
            'nomMatiere' => 'Réseaux_Systèmes_Sécurité',
            'sousCoefficient' => 3,
        ]);

        DB::table('matieres')->insert([
            'nomMatiere' => 'Bases_de_données',
            'sousCoefficient' => 1,
        ]);

        DB::table('matieres')->insert([
            'nomMatiere' => 'Conduite_de_Projet',
            'sousCoefficient' => 3,
        ]);

        DB::table('matieres')->insert([
            'nomMatiere' => 'Projet_tutore',
            'sousCoefficient' => 3,
        ]);
    }
}
