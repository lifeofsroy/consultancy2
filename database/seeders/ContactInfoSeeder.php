<?php

namespace Database\Seeders;

use Illuminate\Support\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class ContactInfoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('contact_infos')->insert([
            'phone' => '7872289842',
            'email' => 'contact@company.com',
            'address' => 'Baburbag, Burdwan, 713104',
            'mapurl' => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d58720.33949508931!2d88.04637376901196!3d23.096319091174518!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39f85bfab7ac07a9%3A0xf739555f0c7a88cd!2sJaugram%20Sopan!5e0!3m2!1sen!2sin!4v1660604832630!5m2!1sen!2sin',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);
    }
}
