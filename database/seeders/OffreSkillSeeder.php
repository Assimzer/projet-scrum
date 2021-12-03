<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Carbon\Carbon;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;

class OffreSkillSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        /*
        |--------------------------------------------------------------------------
        | Réseau
        |--------------------------------------------------------------------------
        */
        DB::table('offre_skills')->insert([
            'skill'      => 'Cisco',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);
        DB::table('offre_skills')->insert([
            'skill'      => 'NAT',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);
        DB::table('offre_skills')->insert([
            'skill'      => 'DHCP',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);
        DB::table('offre_skills')->insert([
            'skill'      => 'DNS',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);
        DB::table('offre_skills')->insert([
            'skill'      => 'Routage',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);
        /*
        |--------------------------------------------------------------------------
        | systeme exploitation
        |--------------------------------------------------------------------------
        */
        DB::table('offre_skills')->insert([
            'skill'      => 'Linux',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);
        DB::table('offre_skills')->insert([
            'skill'      => 'Windows',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);
        /*
        |--------------------------------------------------------------------------
        | gestion de projet 
        |--------------------------------------------------------------------------
        */
        DB::table('offre_skills')->insert([
            'skill'      => 'SCRUM',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);
        /*
        |--------------------------------------------------------------------------
        | CLOUD 
        |--------------------------------------------------------------------------
        */
        DB::table('offre_skills')->insert([
            'skill'      => 'AZURE',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);
        DB::table('offre_skills')->insert([
            'skill'      => 'AWS',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);
        /*
        |--------------------------------------------------------------------------
        | developement
        |--------------------------------------------------------------------------
        */
        DB::table('offre_skills')->insert([
            'skill'      => 'Python',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);
        DB::table('offre_skills')->insert([
            'skill'      => 'Powershell',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);
        DB::table('offre_skills')->insert([
            'skill'      => 'HTML',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);
        DB::table('offre_skills')->insert([
            'skill'      => 'CSS',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);
        DB::table('offre_skills')->insert([
            'skill'      => 'PHP',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);
        DB::table('offre_skills')->insert([
            'skill'      => 'Java',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);
        DB::table('offre_skills')->insert([
            'skill'      => 'JavaScript',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);
        DB::table('offre_skills')->insert([
            'skill'      => 'C#',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);
        DB::table('offre_skills')->insert([
            'skill'      => 'C++',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);
        DB::table('offre_skills')->insert([
            'skill'      => 'Ruby',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);
        DB::table('offre_skills')->insert([
            'skill'      => 'Kotlin',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);
        DB::table('offre_skills')->insert([
            'skill'      => 'golang',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);
        DB::table('offre_skills')->insert([
            'skill'      => 'R',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);
        DB::table('offre_skills')->insert([
            'skill'      => 'Perl',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);
        DB::table('offre_skills')->insert([
            'skill'      => 'Assembleur',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);
        /*
        |--------------------------------------------------------------------------
        | gestion mérise 
        |--------------------------------------------------------------------------
        */
        DB::table('offre_skills')->insert([
            'skill'      => 'merise',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);
        
    }
}
