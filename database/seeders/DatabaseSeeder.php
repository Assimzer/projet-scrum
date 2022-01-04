<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Carbon\Carbon;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;
class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(RoleSeeder::class);
        $this->call(OptionSeeder::class);
        $this->call(UserSeeder::class);
        $this->call(MatiereSeeder::class);
        $this->call(NoteSeeder::class);
        $this->call(BulletinSeeder::class);
        $this->call(PeriodeSeeder::class);
        $this->call(ComposerSeeder::class);
        $this->call(OffreTypeSeeder::class);
        $this->call(OffreSkillSeeder::class);
        $this->call(OffreLocationSeeder::class);
        $this->call(OffreSeeder::class);
        $this->call(ContienSkillSeeder::class);
        $this->call(SousMatiereSeeder::class);
        $this->call(TuteurSeeder::class);
    }
}
