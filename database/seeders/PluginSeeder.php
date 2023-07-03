<?php

namespace Database\Seeders;

use Illuminate\Support\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class PluginSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('plugins')->insert([
            'is_wh' => 0,
            'is_ph' => 1,
            'is_tw' => 1,
            'wh_no' => '7872289842',
            'ph_no' => '7872289842',
            'tw_id' => 'https://embed.tawk.to/641c1a3e4247f20fefe78763/1gs6sd1sp',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);
    }
}
