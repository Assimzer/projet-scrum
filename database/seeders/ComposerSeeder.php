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
            'commentaire'  => 'revoire les verbes irregulier',
            'coefGlobal'  => 1,
            'matiere_id'  => 1,
            'bulletin_id'  => 2,
            'note_id'   => 1,
            'periode_id'    => 1,
        ]);
        DB::table('composer')->insert([
            'commentaire'  => 'revoir les base du javascript',
            'coefGlobal'  => 1,
            'matiere_id'  => 2,
            'bulletin_id'  => 2,
            'note_id'   => 2,
            'periode_id'    => 1,
        ]);
        DB::table('composer')->insert([
            'commentaire'  => 'ras',
            'coefGlobal'  => 1,
            'matiere_id'  => 3,
            'bulletin_id'  => 2,
            'note_id'   => 3,
            'periode_id'    => 1,
        ]);
        DB::table('composer')->insert([
            'commentaire'  => 'ras',
            'coefGlobal'  => 1,
            'matiere_id'  => 4,
            'bulletin_id'  => 2,
            'note_id'   => 4,
            'periode_id'    => 1,
        ]);
        DB::table('composer')->insert([
            'commentaire'  => 'ras',
            'coefGlobal'  => 2,
            'matiere_id'  => 3,
            'bulletin_id'  => 2,
            'note_id'   => 5,
            'periode_id'    => 1,
        ]);
        DB::table('composer')->insert([
            'commentaire'  => 'ras',
            'coefGlobal'  => 3,
            'matiere_id'  => 6,
            'bulletin_id'  => 2,
            'note_id'   => 6,
            'periode_id'    => 1,
        ]);
        DB::table('composer')->insert([
            'commentaire'  => 'ras',
            'coefGlobal'  => 3,
            'matiere_id'  => 7,
            'bulletin_id'  => 2,
            'note_id'   => 7,
            'periode_id'    => 1,
        ]);
        DB::table('composer')->insert([
            'commentaire'  => 'ras',
            'coefGlobal'  => 1,
            'matiere_id'  => 8,
            'bulletin_id'  => 2,
            'note_id'   => 8,
            'periode_id'    => 1,
        ]);
        DB::table('composer')->insert([
            'commentaire'  => 'ras',
            'coefGlobal'  => 3,
            'matiere_id'  => 9,
            'bulletin_id'  => 2,
            'note_id'   => 9,
            'periode_id'    => 1,
        ]);


        //BULLETIN YANN 2semestre 2020
        DB::table('composer')->insert([
            'commentaire'  => '[2S] yann1',
            'coefGlobal'  => 1,
            'matiere_id'  => 1,
            'bulletin_id'  => 3,
            'note_id'   => 10,
            'periode_id'    => 2,
        ]);
        DB::table('composer')->insert([
            'commentaire'  => '[2S] yann1',
            'coefGlobal'  => 1,
            'matiere_id'  => 2,
            'bulletin_id'  => 3,
            'note_id'   => 9,
            'periode_id'    => 2,
        ]);
        DB::table('composer')->insert([
            'commentaire'  => '[2S] yann2',
            'coefGlobal'  => 1,
            'matiere_id'  => 3,
            'bulletin_id'  => 3,
            'note_id'   => 8,
            'periode_id'    => 2,
        ]);
        DB::table('composer')->insert([
            'commentaire'  => '[2S] yann3',
            'coefGlobal'  => 1,
            'matiere_id'  => 4,
            'bulletin_id'  => 3,
            'note_id'   => 7,
            'periode_id'    => 2,
        ]);
        DB::table('composer')->insert([
            'commentaire'  => '[2S] yann4',
            'coefGlobal'  => 2,
            'matiere_id'  => 3,
            'bulletin_id'  => 3,
            'note_id'   => 6,
            'periode_id'    => 2,
        ]);
        DB::table('composer')->insert([
            'commentaire'  => '[2S] yann5',
            'coefGlobal'  => 3,
            'matiere_id'  => 6,
            'bulletin_id'  => 3,
            'note_id'   => 5,
            'periode_id'    => 2,
        ]);
        DB::table('composer')->insert([
            'commentaire'  => '[2S] yann6',
            'coefGlobal'  => 3,
            'matiere_id'  => 7,
            'bulletin_id'  => 3,
            'note_id'   => 4,
            'periode_id'    => 2,
        ]);
        DB::table('composer')->insert([
            'commentaire'  => '[2S] yann7',
            'coefGlobal'  => 1,
            'matiere_id'  => 8,
            'bulletin_id'  => 3,
            'note_id'   => 3,
            'periode_id'    => 2,
        ]);
        DB::table('composer')->insert([
            'commentaire'  => '[2S] yann8',
            'coefGlobal'  => 3,
            'matiere_id'  => 9,
            'bulletin_id'  => 3,
            'note_id'   => 2,
            'periode_id'    => 2,
        ]);
    }
}
