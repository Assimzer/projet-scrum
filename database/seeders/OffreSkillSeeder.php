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
            'skill'      => 'HP',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);
        DB::table('offre_skills')->insert([
            'skill'      => 'Juniper',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);
        DB::table('offre_skills')->insert([
            'skill'      => 'Mikrotik',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);
        DB::table('offre_skills')->insert([
            'skill'      => 'Asus',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);
        DB::table('offre_skills')->insert([
            'skill'      => 'Netgear',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);
        DB::table('offre_skills')->insert([
            'skill'      => 'D-Link',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);
        DB::table('offre_skills')->insert([
            'skill'      => 'Ubiquity',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);
        DB::table('offre_skills')->insert([
            'skill'      => 'Tp-Link',
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
        DB::table('offre_skills')->insert([
            'skill'      => 'Vlan',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);
        DB::table('offre_skills')->insert([
            'skill'      => 'ActiveDirectory',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);
        /*
        |--------------------------------------------------------------------------
        | systeme Backup
        |--------------------------------------------------------------------------
        */
        DB::table('offre_skills')->insert([
            'skill'      => 'Acronis',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);
        DB::table('offre_skills')->insert([
            'skill'      => 'Rubrik',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);
        DB::table('offre_skills')->insert([
            'skill'      => 'Veeam',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);
        DB::table('offre_skills')->insert([
            'skill'      => 'Cohesity',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);
        DB::table('offre_skills')->insert([
            'skill'      => 'Commvault',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);
        DB::table('offre_skills')->insert([
            'skill'      => 'SpectrumProtectSuite',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);
        DB::table('offre_skills')->insert([
            'skill'      => 'Veritas',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);
        DB::table('offre_skills')->insert([
            'skill'      => 'Unitrends',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);
        DB::table('offre_skills')->insert([
            'skill'      => 'Barracuda',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);
        

        /*
        |--------------------------------------------------------------------------
        | systeme Telephonie
        |--------------------------------------------------------------------------
        */
        DB::table('offre_skills')->insert([
            'skill'      => 'Wazo',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);
        DB::table('offre_skills')->insert([
            'skill'      => 'Centrex',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);
        DB::table('offre_skills')->insert([
            'skill'      => '3CX',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);
        DB::table('offre_skills')->insert([
            'skill'      => 'VOIP',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);
        DB::table('offre_skills')->insert([
            'skill'      => 'TOIP',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);
        DB::table('offre_skills')->insert([
            'skill'      => 'Alcatel',
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
        /*
        |--------------------------------------------------------------------------
        | Soft Skill
        |--------------------------------------------------------------------------
        */
        DB::table('offre_skills')->insert([
            'skill'      => 'CapacitésAnalytiques',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);
        DB::table('offre_skills')->insert([
            'skill'      => 'Planification',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);
        DB::table('offre_skills')->insert([
            'skill'      => 'Recherche',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);
        DB::table('offre_skills')->insert([
            'skill'      => 'CapacitésRelationnelles',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);
        DB::table('offre_skills')->insert([
            'skill'      => 'Mentoring',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);
        DB::table('offre_skills')->insert([
            'skill'      => 'RésolutionDesConflits',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);
        DB::table('offre_skills')->insert([
            'skill'      => 'Collaboration',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);
        DB::table('offre_skills')->insert([
            'skill'      => 'Intégrité',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);
        DB::table('offre_skills')->insert([
            'skill'      => 'Leadership',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);
        DB::table('offre_skills')->insert([
            'skill'      => 'Communication',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);


    }
}
