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
        DB::table('bulletins')->insert([
            'nomBulletin'           => 'Première année',
            'appreciation'           => 'cool',
            'user_id'          => 1,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);
        DB::table('bulletins')->insert([
            'nomBulletin'           => '1er Semestre',
            'appreciation'           => 'bulletin test premier semestre',
            'user_id'          => 2,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);
        DB::table('bulletins')->insert([
            'nomBulletin'           => '2er Semestre',
            'appreciation'           => 'bulletin test second semestre',
            'user_id'          => 2,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);
        DB::table('bulletins')->insert([
            'nomBulletin'           => 'Première année',
            'appreciation'           => 'cool',
            'user_id'          => 3,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);
        DB::table('bulletins')->insert([
            'nomBulletin'           => 'Première année',
            'appreciation'           => 'cool',
            'user_id'          => 4,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

    }
}
