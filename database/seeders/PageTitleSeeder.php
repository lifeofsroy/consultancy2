<?php

namespace Database\Seeders;

use Illuminate\Support\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class PageTitleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('page_titles')
            ->insert([
                'page' => 'Home',
                'title' => 'Career Counselling Service',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ]);

        DB::table('page_titles')
            ->insert([
                'page' => 'About Us',
                'title' => 'About Us',
                'heading' => 'About Us',
                'image' => 'page/title/header.jpg',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ]);

        DB::table('page_titles')
            ->insert([
                'page' => 'Service Category',
                'title' => 'Services',
                'heading' => 'Our Services',
                'image' => 'page/title/header.jpg',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ]);

        DB::table('page_titles')
            ->insert([
                'page' => 'Service By Category',
                'image' => 'page/title/header.jpg',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ]);

        DB::table('page_titles')
            ->insert([
                'page' => 'Service Details',
                'image' => 'page/title/header.jpg',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ]);

        DB::table('page_titles')
            ->insert([
                'page' => 'All Courses',
                'title' => 'Courses',
                'heading' => 'Our Courses',
                'image' => 'page/title/header.jpg',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ]);

        DB::table('page_titles')
            ->insert([
                'page' => 'Course By Category',
                'image' => 'page/title/header.jpg',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ]);

        DB::table('page_titles')
            ->insert([
                'page' => 'Course Details',
                'image' => 'page/title/header.jpg',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ]);

        DB::table('page_titles')
            ->insert([
                'page' => 'All Institutions',
                'title' => 'Institutions',
                'heading' => 'Our Institutions',
                'image' => 'page/title/header.jpg',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ]);

        DB::table('page_titles')
            ->insert([
                'page' => 'Institution Details',
                'image' => 'page/title/header.jpg',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ]);

        DB::table('page_titles')
            ->insert([
                'page' => 'Contact Us',
                'title' => 'Contacts',
                'heading' => 'Contact Us',
                'image' => 'page/title/header.jpg',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ]);

        DB::table('page_titles')
            ->insert([
                'page' => 'All FAQ',
                'title' => 'FAQ',
                'heading' => 'Common Questions',
                'image' => 'page/title/header.jpg',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ]);

        DB::table('page_titles')
            ->insert([
                'page' => 'All Gallery',
                'title' => 'Gallery',
                'heading' => 'Our Gallery',
                'image' => 'page/title/header.jpg',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ]);

        DB::table('page_titles')
            ->insert([
                'page' => 'Terms & Conditions',
                'title' => 'Terms & Conditions',
                'heading' => 'Terms & Conditions',
                'image' => 'page/title/header.jpg',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ]);

        DB::table('page_titles')
            ->insert([
                'page' => 'Privacy Policy',
                'title' => 'Privacy Policy',
                'heading' => 'Privacy Policy',
                'image' => 'page/title/header.jpg',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ]);

        DB::table('page_titles')
            ->insert([
                'page' => 'Cookie Policy',
                'title' => 'Cookie Policy',
                'heading' => 'Cookie Policy',
                'image' => 'page/title/header.jpg',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ]);

        DB::table('page_titles')
            ->insert([
                'page' => 'Admission Form',
                'title' => 'Admission',
                'heading' => 'Get Admission',
                'image' => 'page/title/header.jpg',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ]);
    }
}
