<?php

namespace Database\Seeders;
use Carbon\Carbon;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

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
            'offre_uuid'           => Str::uuid()->toString(),
            'titre'           => 'apprentis Developper',
            'description'          => "recherche apprentis au sein de de notre entreprise",
            'resumer'              => "Ce BTSA forme les élèves à la gestion de projets d'aménagements paysagers, de l'étude préalable initiale à la fin de leur réalisation. L'élève est capable d'analyser un paysage, de proposer et de réaliser des aménagements pour ",
            'telephone'          => "0384668475",
            'societer'          => "AYA_Corp",
            'offreType_id' => 1,
            'offreLocation_id' => 1,
            'posted_by' => 2,
            
        ]);

        DB::table('offre')->insert([
            'offre_uuid'           => Str::uuid()->toString(),
            'titre'           => 'apprentis Developper',
            'description'          => "recherche apprentis au sein de de notre entreprise",
            'resumer'              => "formation interne possible",
            'telephone'          => "0384668475",
            'societer'          => "CoCaCoLa",
            'offreType_id' => 1,
            'offreLocation_id' => 2,
            'posted_by' => 1,
            
        ]);

        DB::table('offre')->insert([
            'offre_uuid'           => Str::uuid()->toString(),
            'titre'           => 'Developper JAVA',
            'description'          => "recherche developper Java pour developper notre app metier",
            'resumer'              => "formation interne possible",
            'telephone'          => "0384668475",
            'societer'          => "Orangina",
            'offreType_id' => 1,
            'offreLocation_id' => 3,
            'posted_by' => 1,
            
        ]);

        DB::table('offre')->insert([
            'offre_uuid'           => Str::uuid()->toString(),
            'titre'           => 'Developper Web full stack',
            'description'          => "recherche developper Java pour developper notre app metier",
            'resumer'              => "formation interne possible",
            'telephone'          => "0384668475",
            'societer'          => "Microsoft",
            'offreType_id' => 1,
            'offreLocation_id' => 3,
            'posted_by' => 1,
            
        ]);


        
    }
}
