<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\PageTitle;
use App\Models\CourseCategory;

class FrontCourseByCategory extends Component
{
    public $coursecat_slug;

    public function mount($coursecat_slug)
    {
        $this->coursecat_slug = $coursecat_slug;
    }

    public function render()
    {
        $pagetitle = PageTitle::find(7);
        $coursecat = CourseCategory::where('slug', $this->coursecat_slug)->first();
        $cats = CourseCategory::where('status', 1)->get();

        return view('livewire.front-course-by-category', [
            'coursecat' => $coursecat,
            'cats' => $cats,
            'pagetitle' => $pagetitle
        ]);
    }
}
