<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Carbon\Carbon;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;
class PossedeNoteSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('possede_notes')->insert([
            'matiere_id' => 1,
            'note_id' => 1,
        ]);
        DB::table('possede_notes')->insert([
            'matiere_id' => 2,
            'note_id' => 2,
        ]);
        DB::table('possede_notes')->insert([
            'matiere_id' => 3,
            'note_id' => 3,
        ]);
        DB::table('possede_notes')->insert([
            'matiere_id' => 4,
            'note_id' => 4,
        ]);
        DB::table('possede_notes')->insert([
            'matiere_id' => 5,
            'note_id' => 5,
        ]);
        DB::table('possede_notes')->insert([
            'matiere_id' => 6,
            'note_id' => 6,
        ]);
        DB::table('possede_notes')->insert([
            'matiere_id' => 7,
            'note_id' => 7,
        ]);
        DB::table('possede_notes')->insert([
            'matiere_id' => 8,
            'note_id' => 8,
        ]);
        DB::table('possede_notes')->insert([
            'matiere_id' => 9,
            'note_id' => 9,
        ]);
    }
}
