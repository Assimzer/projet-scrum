<?php

namespace Database\Seeders;
use Carbon\Carbon;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;


class OffreSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('offre')->insert([
            'titre'           => 'apprentis Developper',
            'date'           => Carbon::now(),
            'description'          => "recherche apprentis au sein de de notre entreprise AYACORP",
            'resumer'              => "Ce BTSA forme les élèves à la gestion de projets d'aménagements paysagers, de l'étude préalable initiale à la fin de leur réalisation. L'élève est capable d'analyser un paysage, de proposer et de réaliser des aménagements pour ",
            'telephone'          => "0384668475",
            'offreType_id' => 1,
            'offreLocation_id' => 1,
            'entreprise_name' => "SpeedyWize",
            
        ]);


        
    }
}
