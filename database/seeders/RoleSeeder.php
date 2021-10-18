<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Carbon\Carbon;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;
class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //profileType
        DB::table('roles')->insert([
            'profileType'           => 'Admin',
        ]);
        DB::table('roles')->insert([
            'profileType'           => 'ResponsableDispositif',
        ]);
        DB::table('roles')->insert([
            'profileType'           => 'Professionnel',
        ]);
        DB::table('roles')->insert([
            'profileType'           => 'Eleve',
        ]);
        DB::table('roles')->insert([
            'profileType'           => 'Professeur',
        ]);
    }
}
