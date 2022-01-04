<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Carbon\Carbon;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;
class SousMatiereSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('sous_matieres')->insert([
            'matiere_groupe'           => 6,
            'matiere_associer'           => 10,
        ]);
        DB::table('sous_matieres')->insert([
            'matiere_groupe'           => 6,
            'matiere_associer'           => 11,
        ]);
        DB::table('sous_matieres')->insert([
            'matiere_groupe'           => 6,
            'matiere_associer'           => 12,
        ]);
    }
}
