<?php

namespace Database\Seeders;

use Illuminate\Support\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class TermConditionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('term_conditions')
        ->insert([
            'title' => 'This is Our Terms and Conditions',
            'desc' => 'We are proud to offer top rangen comprehensve employmen services such and aser payroll & benefts adminitration management asstance with global business range employment employer compliance. We are proud to offer top rangen comprehensve employmen services such and aser payroll & benefts adminitration management asstance with global business range employment employer compliance.',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);
    }
}
