<?php

namespace Database\Seeders;

use Illuminate\Support\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class SiteDetailseeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('site_details')
        ->insert([
            'site_title' => 'Career Counselling Service',
            'site_desc' => 'We are proud to offer top rangen comprehensve employmen.',
            'site_keys' => 'Weare, proudto, offertop, rangen, comprehensve, employmen',
            'title_color' => '#067496',
            'button_color' => '#5c0696',
            'active_color' => '#fa3504',
            'beard_color' => '#e1fa04',
            'icon_color' => '#faa404',
            'tab_color' => '#c104fa',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);
    }
}
