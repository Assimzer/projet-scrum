<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Carbon\Carbon;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;

class OptionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('options')->insert([
            'optionNom'      => 'SISR', 
        ]);
        DB::table('options')->insert([
            'optionNom'      => 'SLAM', 
        ]);
        DB::table('options')->insert([
            'optionNom'      => 'PRO', 
        ]);
    }
}
