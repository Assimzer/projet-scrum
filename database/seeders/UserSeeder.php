<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Carbon\Carbon;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;
class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name'           => 'COURBEZ',
            'fristname'           => 'Julian',
            'email'          => 'jcourbez@groupmontroland.fr',
            'role_id'          => 2,
            'password'      => Hash::make('Azerty*1'),
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        DB::table('users')->insert([
            'name'           => 'BANAS',
            'fristname'           => 'Yann',
            'email'          => 'yannbanas@gmail.com',
            'role_id'          => 4,
            'password'      => Hash::make('Azerty*1'),
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        DB::table('users')->insert([
            'name'           => 'METADIEUX',
            'fristname'           => 'Axel',
            'email'          => 'axel.metadieux@gmail.com',
            'role_id'          => 4,
            'password'      => Hash::make('Azerty*1'),
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        DB::table('users')->insert([
            'name'           => 'LAHLOUH',
            'fristname'           => 'Assim',
            'email'          => 'assim.lahlouh@gmail.com',
            'role_id'          => 4,
            'password'      => Hash::make('Azerty*1'),
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);
    }
}
