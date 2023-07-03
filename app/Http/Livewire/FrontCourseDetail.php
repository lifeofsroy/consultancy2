<?php

namespace App\Http\Livewire;

use App\Models\Course;
use Livewire\Component;
use App\Models\PageTitle;
use App\Models\ContactInfo;
use App\Models\Institution;
use App\Models\CourseCategory;

class FrontCourseDetail extends Component
{
    public $course_slug;

    public function mount($course_slug)
    {
        $this->course_slug = $course_slug;
    }

    public function render()
    {
        $pagetitle = PageTitle::find(8);
        $course = Course::where('slug', $this->course_slug)->first();
        $cats = CourseCategory::where('status', 1)->get();
        $institutions = Institution::where('status', 1)->latest()->take(4)->get();
        $contact = ContactInfo::find(1);

        return view('livewire.front-course-detail', [
            'course' => $course,
            'cats' => $cats,
            'institutions' => $institutions,
            'contact' => $contact,
            'pagetitle' => $pagetitle
        ]);
    }
}
