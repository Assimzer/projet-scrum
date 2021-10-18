<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Carbon\Carbon;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;
class BulletinSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('bulletin')->insert([
            'nomBulletin'           => 'Première année',
            'appreciation'           => 'cool',
            'user_id'          => 1,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);
        DB::table('bulletin')->insert([
            'nomBulletin'           => 'Première année',
            'appreciation'           => 'cool',
            'user_id'          => 2,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

    }
}
