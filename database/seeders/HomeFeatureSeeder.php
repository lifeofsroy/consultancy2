<?php

namespace Database\Seeders;

use Illuminate\Support\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class HomeFeatureSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('home_features')->insert([
            'title' => 'Product Engineering',
            'icon' => 'home/feature/icon1.png',
            'desc' => 'Our consuans are provide compreensve outsourcin service turnke solutions help with the advisers requiremen.',
            'color' => '#31ff87',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);

        DB::table('home_features')->insert([
            'title' => 'Strategic Partners',
            'icon' => 'home/feature/icon2.png',
            'desc' => 'Our consuans are provide compreensve outsourcin service turnke solutions help with the advisers requiremen.',
            'color' => '#021738',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);
    }
}
