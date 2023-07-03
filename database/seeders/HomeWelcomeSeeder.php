<?php

namespace Database\Seeders;

use Illuminate\Support\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class HomeWelcomeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('home_welcomes')->insert([
            'desc' => 'We are proud to offer top rangen comprehensve employmen services such and aser payroll & benefts adminitration management asstance with global business range employment employer compliance. We are proud to offer top rangen comprehensve employmen services such and aser payroll & benefts adminitration management asstance with global business range employment employer compliance.',
            'name' => 'Suman Roy',
            'position' => 'Founder',
            'image' => 'home/welcome/image.jpg',
            'image1' => 'home/welcome/image1.jpg',
            'image2' => 'home/welcome/image2.jpg',
            'icon1' => 'heroicon-o-user-circle',
            'title1' => 'We are proud to offer',
            'text1' => 'We are proud to offer top rangen comprehensve employmen services such and aser payroll',
            'icon2' => 'heroicon-o-user-circle',
            'title2' => 'Adminitration Management',
            'text2' => 'benefts adminitration management asstance with global business range employment.',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);
    }
}
