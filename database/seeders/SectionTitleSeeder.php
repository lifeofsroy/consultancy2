<?php

namespace Database\Seeders;

use Illuminate\Support\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class SectionTitleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('section_titles')
        ->insert([
            'section' => 'Home Page - Welcome',
            'title' => 'We Help Young Companies To Expand Business',
            'subtitle' => 'How To Grow Business',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);
        
        DB::table('section_titles')
        ->insert([
            'section' => 'Home Page - Sevice',
            'title' => 'We Are Best Offer Outsourced Finance Services',
            'subtitle' => 'Our Services',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);

        DB::table('section_titles')
        ->insert([
            'section' => 'Home Page - Counter',
            'title' => 'Get The Best Consult From Your Expert',
            'subtitle' => 'Our Specialties',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);

        DB::table('section_titles')
        ->insert([
            'section' => 'Home Page - Work',
            'title' => 'Steps For Successful Business',
            'subtitle' => 'How We Work',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);

        DB::table('section_titles')
        ->insert([
            'section' => 'Home Page - Testimonial',
            'title' => 'What Customers Are Say About Our Services',
            'subtitle' => 'Our Testimonial',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);

        DB::table('section_titles')
        ->insert([
            'section' => 'Home Page - FAQ',
            'title' => 'Solutions That Differentiate You',
            'subtitle' => 'Popular Questions',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);

        DB::table('section_titles')
        ->insert([
            'section' => 'Home Page - Course',
            'title' => 'Latest News And Articles From The Blog Posts',
            'subtitle' => 'Our Success Stories',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);

        DB::table('section_titles')
        ->insert([
            'section' => 'About Page - Features',
            'title' => 'Get Most Advantage Solution For Your Business',
            'subtitle' => 'Our Approach',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);

        DB::table('section_titles')
        ->insert([
            'section' => 'About Page - Welcome',
            'title' => 'We’ve Been Thriving In 38 Years',
            'subtitle' => 'Discover Our Company',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);

        DB::table('section_titles')
        ->insert([
            'section' => 'About Page - Gallery',
            'title' => 'Last Year We Have Completed 20+ Case Studies',
            'subtitle' => 'Our Recent Photos',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);

        DB::table('section_titles')
        ->insert([
            'section' => 'Service Category Page',
            'title' => 'Services Provided By Our Experts',
            'subtitle' => 'Our Services',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);

        DB::table('section_titles')
        ->insert([
            'section' => 'Service By Category Page',
            'title' => 'We Are Best Offer Outsourced Finance Services',
            'subtitle' => 'Our Services',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);

        DB::table('section_titles')
        ->insert([
            'section' => 'Contact Page - Form',
            'title' => 'Have Be Any Question? Feel Free To Contact With Us',
            'subtitle' => 'Have Any Question?',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);

        DB::table('section_titles')
        ->insert([
            'section' => 'Contact Page - Map',
            'title' => 'Find Us On Google Map',
            'subtitle' => 'We Are Here!',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);

        DB::table('section_titles')
        ->insert([
            'section' => 'FAQ Page',
            'title' => 'Solutions That Differentiate You',
            'subtitle' => 'Popular Questions',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);

        DB::table('section_titles')
        ->insert([
            'section' => 'Gallery Page',
            'title' => 'Last Year We Have Completed 20+ Case Studies',
            'subtitle' => 'Our Photo Gallery',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);
        
    }
}
