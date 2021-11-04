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
            'nomMatiere' => 'Anglais professionnel',
            'sousCoefficient' => 1,
        ]);

        DB::table('matieres')->insert([
            'nomMatiere' => 'Outil mathématique',
            'sousCoefficient' => 1,
        ]);

        DB::table('matieres')->insert([
            'nomMatiere' => 'Droit informatique',
            'sousCoefficient' => 1,
        ]);

        DB::table('matieres')->insert([
            'nomMatiere' => 'Management Budgétisation et Achats',
            'sousCoefficient' => 2,
        ]);

        DB::table('matieres')->insert([
            'nomMatiere' => 'Génie Logiciel',
            'sousCoefficient' => 3,
        ]);

        DB::table('matieres')->insert([
            'nomMatiere' => 'Réseaux, Systèmes et sécurité',
            'sousCoefficient' => 3,
        ]);

        DB::table('matieres')->insert([
            'nomMatiere' => 'BD',
            'sousCoefficient' => 1,
        ]);

        DB::table('matieres')->insert([
            'nomMatiere' => 'Conduite de projet',
            'sousCoefficient' => 3,
        ]);

        DB::table('matieres')->insert([
            'nomMatiere' => 'Projet tutoré',
            'sousCoefficient' => 3,
        ]);
    }
}
