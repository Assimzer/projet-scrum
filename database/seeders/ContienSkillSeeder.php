<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Carbon\Carbon;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;
use App\Models\Offre;

class ContienSkillSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('contien_skill')->insert([
            'offre_skills_id'      => 1,
            'offre_id'      => 1,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);
        DB::table('contien_skill')->insert([
            'offre_skills_id'      => 2,
            'offre_id'      => 1,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);
        DB::table('contien_skill')->insert([
            'offre_skills_id'      => 4,
            'offre_id'      => 1,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);
        DB::table('contien_skill')->insert([
            'offre_skills_id'      => 5,
            'offre_id'      => 1,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);
        DB::table('contien_skill')->insert([
            'offre_skills_id'      => 6,
            'offre_id'      => 1,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);
        DB::table('contien_skill')->insert([
            'offre_skills_id'      => 3,
            'offre_id'      => 1,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);
    }
}
