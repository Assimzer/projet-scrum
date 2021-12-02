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
            'nomMatiere' => 'Anglais',
            'sousCoefficient' => 1,
        ]);

        DB::table('matieres')->insert([
            'nomMatiere' => 'Outil_mathematique',
            'sousCoefficient' => 1,
        ]);

        DB::table('matieres')->insert([
            'nomMatiere' => 'Droit_informatique',
            'sousCoefficient' => 1,
        ]);

        DB::table('matieres')->insert([
            'nomMatiere' => 'Management_Budgetisation',
            'sousCoefficient' => 2,
        ]);

        DB::table('matieres')->insert([
            'nomMatiere' => 'Genie_Logiciel',
            'sousCoefficient' => 3,
        ]);

        DB::table('matieres')->insert([
            'nomMatiere' => 'Reseaux_Systemes_securite',
            'sousCoefficient' => 3,
        ]);

        DB::table('matieres')->insert([
            'nomMatiere' => 'BD',
            'sousCoefficient' => 1,
        ]);

        DB::table('matieres')->insert([
            'nomMatiere' => 'Conduite_de_projet',
            'sousCoefficient' => 3,
        ]);

        DB::table('matieres')->insert([
            'nomMatiere' => 'Projet_tutore',
            'sousCoefficient' => 3,
        ]);
    }
}
