<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class PromotionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('promotion')->insert([
            'promotion_id'      => 1,
            'nomPromotion'          => "SIO",
            'anneePromotion'         =>   Carbon::now(),
            'option_id'   => 1,
        ]);
        DB::table('promotion')->insert([
            'promotion_id'      => 1,
            'nomPromotion'          => "SIO",
            'anneePromotion'         =>   Carbon::now(),
            'option_id'   => 2,
        ]);
        DB::table('promotion')->insert([
            'promotion_id'      => 1,
            'nomPromotion'          => "ASI",
            'anneePromotion'         =>   Carbon::now(),
        ]);
        DB::table('promotion')->insert([
            'promotion_id'      => 1,
            'nomPromotion'          => "DCG",
            'anneePromotion'         =>   Carbon::now(),
        ]);
    }
}
