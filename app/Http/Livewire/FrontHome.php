<?php

namespace App\Http\Livewire;

use App\Models\Faq;
use App\Models\Course;
use App\Models\Slider;
use App\Models\Counter;
use App\Models\Partner;
use App\Models\Service;
use Livewire\Component;
use App\Models\HomeWork;
use App\Models\PageTitle;
use App\Models\HomeWelcome;
use App\Models\Institution;
use App\Models\Testimonial;
use App\Models\SectionTitle;
use App\Models\AppointmentForm;
use App\Models\HomeAppointment;
use App\Models\HomeFeature;
use App\Models\Notice;
use App\Models\ServiceCategory;
use App\Models\SiteDetail;

class FrontHome extends Component
{
    public $name;
    public $email;
    public $phone;
    public $dob;
    public $service;
    public $datetime;
    public $msz;
    public $category = null;
    public $services = null;

    public function resetInput()
    {
        $this->name = null;
        $this->email = null;
        $this->phone = null;
        $this->dob = null;
        $this->service = null;
        $this->datetime = null;
        $this->msz = null;
        $this->category = null;
        $this->services = null;
    }

    public function UpdatedCategory($service_category_id)
    {
        $this->services = Service::where([['service_category_id', $service_category_id], ['status', 1]])->get();
    }

    public function updated($fields)
    {
        $this->validateOnly($fields, [
            'name' => 'required',
            'email' => 'required|email',
            'phone' => 'required|numeric|digits:10',
            'dob' => 'required|before:today',
            'category' => 'required',
            'service' => 'required',
            'datetime' => 'required|after:today',
        ]);
    }

    public function appointment()
    {
        $this->validate([
            'name' => 'required',
            'email' => 'required|email',
            'phone' => 'required|numeric|digits:10',
            'dob' => 'required|before:today',
            'category' => 'required',
            'service' => 'required',
            'datetime' => 'required|after:today',
        ]);

        $appoint = new AppointmentForm();
        $appoint->name = $this->name;
        $appoint->email = $this->email;
        $appoint->phone = $this->phone;
        $appoint->dob = $this->dob;
        $appoint->service_id = $this->service;
        $appoint->datetime = $this->datetime;
        $appoint->msz = $this->msz;

        $appoint->save();

        $this->resetInput();
        $this->dispatchBrowserEvent('added', ['message' => 'Appointment Reserved']);
    }

    protected $messages = [
        'name.required' => 'Name cannot be empty',
        'email.required' => 'Email is required',
        'email.email' => 'This is not an email address',
        'phone.required' => 'Phone is required',
        'phone.numeric' => 'Invalid Phone Number',
        'phone.digits' => 'Invalid Phone Number',
        'dob.required' => 'Required',
        'dob.before' => 'Invalid Date of Birth',
        'category.required' => 'Required',
        'service.required' => 'Required',
        'datetime.required' => 'Required',
        'datetime.after' => 'Are you comedy me!',
    ];

    public function render()
    {
        $pagetitle = PageTitle::find(1);
        $sdetail = SiteDetail::find(1);
        $welcometitle = SectionTitle::find(1);
        $servicetitle = SectionTitle::find(2);
        $countertitle = SectionTitle::find(3);
        $worktitle = SectionTitle::find(4);
        $testititle = SectionTitle::find(5);
        $faqtitle = SectionTitle::find(6);
        $coursetitle = SectionTitle::find(7);
        $sliders = Slider::where('status', 1)->get();
        $welcome = HomeWelcome::find(1);
        $allservices = Service::where([['status', 1], ['featured', 1]])->latest()->take(7)->get();
        $appointment = HomeAppointment::find(1);
        $institutions = Institution::where([['status', 1], ['featured', 1]])->take(3)->get();
        $counters = Counter::all();
        $testimonials = Testimonial::where('status', 1)->get();
        $faqs = Faq::where([['status', 1], ['featured', 1]])->take(4)->get();
        $courses = Course::where([['status', 1], ['featured', 1]])->take(3)->get();
        $partners = Partner::where('status', 1)->get();
        $scats = ServiceCategory::all();
        $notices = Notice::where('status', 1)->get();
        $features = HomeFeature::all();

        return view('livewire.front-home', [
            'pagetitle' => $pagetitle,
            'sdetail' => $sdetail,
            'sliders' => $sliders,
            'features' => $features,
            'welcometitle' => $welcometitle,
            'welcome' => $welcome,
            'servicetitle' => $servicetitle,
            'allservices' => $allservices,
            'appointment' => $appointment,
            'worktitle' => $worktitle,
            'institutions' => $institutions,
            'countertitle' => $countertitle,
            'counters' => $counters,
            'testititle' => $testititle,
            'testimonials' => $testimonials,
            'faqtitle' => $faqtitle,
            'faqs' => $faqs,
            'coursetitle' => $coursetitle,
            'courses' => $courses,
            'partners' => $partners,
            'scats' => $scats,
            'notices' => $notices,
        ]);
    }
}
