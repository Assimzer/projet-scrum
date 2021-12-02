<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Carbon\Carbon;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;

class NoteSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('note')->insert([
            'notes' => 12,
            'sousSousCoefficient' => 1,
        ]);
        DB::table('note')->insert([
            'notes' => 11,
            'sousSousCoefficient' => 1,
        ]);
        DB::table('note')->insert([
            'notes' => 13,
            'sousSousCoefficient' => 1,
        ]);
        DB::table('note')->insert([
            'notes' => 14,
            'sousSousCoefficient' => 1,
        ]);
        DB::table('note')->insert([
            'notes' => 12,
            'sousSousCoefficient' => 1,
        ]);
        DB::table('note')->insert([
            'notes' => 16,
            'sousSousCoefficient' => 1,
        ]);
        DB::table('note')->insert([
            'notes' => 18,
            'sousSousCoefficient' => 1,
        ]);
        DB::table('note')->insert([
            'notes' => 8,
            'sousSousCoefficient' => 1,
        ]);
        DB::table('note')->insert([
            'notes' => 10,
            'sousSousCoefficient' => 1,
        ]);
    }
}
