<?php

namespace Database\Seeders;

use Illuminate\Support\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class SocialIconSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('social_icons')
        ->insert([
            'icon' => 'fa-facebook-f',
            'url' => 'https://facebook.com',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);

        DB::table('social_icons')
        ->insert([
            'icon' => 'fa-twitter',
            'url' => 'https://facebook.com',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);

        DB::table('social_icons')
        ->insert([
            'icon' => 'fa-instagram',
            'url' => 'https://facebook.com',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);

        DB::table('social_icons')
        ->insert([
            'icon' => 'fa-linkedin-in',
            'url' => 'https://facebook.com',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);
    }
}
