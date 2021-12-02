<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Carbon\Carbon;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

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
            'bulletin_index'                  => Str::uuid()->toString(),
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);
        DB::table('bulletins')->insert([
            'nomBulletin'           => '1er Semestre',
            'appreciation'           => 'bulletin test premier semestre',
            'user_id'          => 2,
            'bulletin_index'                  => Str::uuid()->toString(),
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);
        DB::table('bulletins')->insert([
            'nomBulletin'           => '2er Semestre',
            'appreciation'           => 'bulletin test second semestre',
            'user_id'          => 2,
            'bulletin_index'                  => Str::uuid()->toString(),
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);
        DB::table('bulletins')->insert([
            'nomBulletin'           => 'Première année',
            'appreciation'           => 'cool',
            'user_id'          => 3,
            'bulletin_index'                  => Str::uuid()->toString(),
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);
        DB::table('bulletins')->insert([
            'nomBulletin'            => 'Première année',
            'appreciation'           => 'cool',
            'user_id'                => 4,
            'bulletin_index'         => Str::uuid()->toString(),
            'created_at'             => Carbon::now(),
            'updated_at'             => Carbon::now(),
        ]);

    }
}
