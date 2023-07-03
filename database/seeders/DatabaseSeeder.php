<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Faq;
use App\Models\User;
use App\Models\Course;
use App\Models\Slider;
use App\Models\Counter;
use App\Models\FaqForm;
use App\Models\Gallery;
use App\Models\Partner;
use App\Models\Service;
use App\Models\HomeWork;
use App\Models\SocialIcon;
use App\Models\ContactForm;
use App\Models\HomeFeature;
use App\Models\Institution;
use App\Models\Testimonial;
use App\Models\AboutFeature;
use App\Models\AboutWelcome;
use App\Models\CourseComment;
use App\Models\CourseCategory;
use App\Models\ServiceComment;
use App\Models\AppointmentForm;
use App\Models\HeaderNotice;
use App\Models\ServiceCategory;
use Illuminate\Database\Seeder;
use App\Models\InstitutionComment;
use App\Models\Notice;
use Spatie\Permission\Models\Role;
use Illuminate\Support\Facades\Hash;
use Spatie\Permission\Models\Permission;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $user = User::factory()->create([
            'name' => 'Im Admin',
            'email' => 'admin@domain.com',
            'password' => Hash::make('PASSword@78626'),
        ]);

        $role = Role::create(['name' => 'Admin']);

        Permission::create(['name' => 'Authorized']);
        Permission::create(['name' => 'Update About Page']);
        Permission::create(['name' => 'Update Contact Page']);
        Permission::create(['name' => 'Update Donate Page']);
        Permission::create(['name' => 'Update Extra Page']);
        Permission::create(['name' => 'Update Home Page']);
        Permission::create(['name' => 'Update Volunteer Page']);
        Permission::create(['name' => 'Update Header Footer']);
        Permission::create(['name' => 'Update Breadcrumb']);
        Permission::create(['name' => 'Update Section Title']);
        Permission::create(['name' => 'Analytics Page']);

        $role->givePermissionTo('Authorized');
        $user->assignRole($role);

        Slider::factory(10)->create();
        AboutFeature::factory(4)->create();
        AboutWelcome::factory(4)->create();
        Partner::factory(10)->create();
        Gallery::factory(50)->create();
        Faq::factory(50)->create();
        Testimonial::factory(30)->create();
        ServiceCategory::factory(15)->create();
        Service::factory(30)->create();
        ServiceComment::factory(50)->create();
        Institution::factory(20)->create();
        InstitutionComment::factory(50)->create();
        CourseCategory::factory(20)->create();
        Course::factory(50)->create();
        CourseComment::factory(50)->create();
        ContactForm::factory(50)->create();
        AppointmentForm::factory(50)->create();
        Notice::factory(10)->create();
        HeaderNotice::factory(8)->create();

        $this->call([
            SiteDetailseeder::class,
            ContactInfoSeeder::class,
            FooterSeeder::class,
            HeaderSeeder::class,
            PrivacyPolicySeeder::class,
            TermConditionSeeder::class,
            CookiePolicySeeder::class,
            HomeWelcomeSeeder::class,
            HomeAppointmentSeeder::class,
            PageTitleSeeder::class,
            SectionTitleSeeder::class,
            CounterSeeder::class,
            SocialIconSeeder::class,
            HomeFeatureSeeder::class,
            PluginSeeder::class,
        ]);
    }
}
