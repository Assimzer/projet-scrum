<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class UploadfileSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('uploadfile')->insert([
            'name'      => $filename, 
            'path' => $path
        ]);
    }
}
