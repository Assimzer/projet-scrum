<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Carbon\Carbon;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;
class ComposerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //BULLETIN YANN 1semestre 2021
        DB::table('composer')->insert([
            'appreciation'  => 'yann fait des effort mais cela reste insufisant',
            'coefGlobal'  => 1,
            'matiere_id'  => 2,
            'bulletin_id'  => 2,
        ]);
        DB::table('composer')->insert([
            'appreciation'  => 'yann est interesser mais à du mal à suivre',
            'coefGlobal'  => 1,
            'matiere_id'  => 3,
            'bulletin_id'  => 2,
        ]);
        DB::table('composer')->insert([
            'appreciation'  => 'correct rien à signalé',
            'coefGlobal'  => 1,
            'matiere_id'  => 4,
            'bulletin_id'  => 2,
        ]);
        DB::table('composer')->insert([
            'appreciation'  => 'eleve serieux avec quelque dificulté',
            'coefGlobal'  => 2,
            'matiere_id'  => 3,
            'bulletin_id'  => 2,
        ]);
        DB::table('composer')->insert([
            'appreciation'  => 'eleve serieux avec quelque dificulté',
            'coefGlobal'  => 3,
            'matiere_id'  => 6,
            'bulletin_id'  => 2,
        ]);
        DB::table('composer')->insert([
            'appreciation'  => 'eleve serieux avec quelque dificulté',
            'coefGlobal'  => 3,
            'matiere_id'  => 7,
            'bulletin_id'  => 2,
        ]);
        DB::table('composer')->insert([
            'appreciation'  => 'eleve interesser mais doit revoire cette matiere',
            'coefGlobal'  => 1,
            'matiere_id'  => 8,
            'bulletin_id'  => 2,
        ]);
        DB::table('composer')->insert([
            'appreciation'  => 'RAS',
            'coefGlobal'  => 3,
            'matiere_id'  => 9,
            'bulletin_id'  => 2,
        ]);


        //BULLETIN YANN 2semestre 2020
        DB::table('composer')->insert([
            'appreciation'  => '[2S] yann1',
            'coefGlobal'  => 1,
            'matiere_id'  => 2,
            'bulletin_id'  => 3,
        ]);
        DB::table('composer')->insert([
            'appreciation'  => '[2S] yann2',
            'coefGlobal'  => 1,
            'matiere_id'  => 3,
            'bulletin_id'  => 3,
        ]);
        DB::table('composer')->insert([
            'appreciation'  => '[2S] yann3',
            'coefGlobal'  => 1,
            'matiere_id'  => 4,
            'bulletin_id'  => 3,
        ]);
        DB::table('composer')->insert([
            'appreciation'  => '[2S] yann4',
            'coefGlobal'  => 2,
            'matiere_id'  => 3,
            'bulletin_id'  => 3,
        ]);
        DB::table('composer')->insert([
            'appreciation'  => '[2S] yann5',
            'coefGlobal'  => 3,
            'matiere_id'  => 6,
            'bulletin_id'  => 3,
        ]);
        DB::table('composer')->insert([
            'appreciation'  => '[2S] yann6',
            'coefGlobal'  => 3,
            'matiere_id'  => 7,
            'bulletin_id'  => 3,
        ]);
        DB::table('composer')->insert([
            'appreciation'  => '[2S] yann7',
            'coefGlobal'  => 1,
            'matiere_id'  => 8,
            'bulletin_id'  => 3,
        ]);
        DB::table('composer')->insert([
            'appreciation'  => '[2S] yann8',
            'coefGlobal'  => 3,
            'matiere_id'  => 9,
            'bulletin_id'  => 3,
        ]);
    }
}
