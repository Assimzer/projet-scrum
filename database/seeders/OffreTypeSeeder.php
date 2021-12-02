<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Carbon\Carbon;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;

class OffreTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('offreType')->insert([
            'type'      => 'CDI', 
        ]);
        DB::table('offreType')->insert([
            'type'      => 'CDD', 
        ]);

    }
}
