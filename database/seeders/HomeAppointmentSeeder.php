<?php

namespace Database\Seeders;

use Illuminate\Support\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class HomeAppointmentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('home_appointments')->insert([
            'title' => 'We’re Ready To Assist You',
            'image' => 'home/appointment/image.jpg',
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
