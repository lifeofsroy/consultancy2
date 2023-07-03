<?php

namespace Database\Seeders;

use Illuminate\Support\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class CounterSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('counters')->insert([
            'title' => 'Project Complate',
            'value' => '24,066',
            'icon' => 'counter/1.png',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);

        DB::table('counters')->insert([
            'title' => 'Happy Customers',
            'value' => '47,890',
            'icon' => 'counter/2.png',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);

        DB::table('counters')->insert([
            'title' => 'National Award',
            'value' => '98,745',
            'icon' => 'counter/3.png',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);

        DB::table('counters')->insert([
            'title' => 'Team Members',
            'value' => '428+',
            'unit' => '+',
            'icon' => 'counter/4.png',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);
    }
}
