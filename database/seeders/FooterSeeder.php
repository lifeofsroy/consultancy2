<?php

namespace Database\Seeders;

use Illuminate\Support\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class FooterSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('footers')->insert([
            'flogo' => 'logo/flogo.png',
            'desc' => 'Enthusia drive accuratie users vas tha effective interface nergsticaly purse adaptive cores create rough effectve create nterface.',
            'copyright' => 'All rights reserved.',
            'name' => 'Unique Career Guidance',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);
    }
}
