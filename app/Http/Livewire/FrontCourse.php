<?php

namespace App\Http\Livewire;

use App\Models\Course;
use Livewire\Component;
use App\Models\PageTitle;
use App\Models\Institution;
use Livewire\WithPagination;
use App\Models\CourseCategory;

class FrontCourse extends Component
{
    use WithPagination;
    protected $paginationTheme = 'bootstrap';

    public $searchTerm = null;

    public function render()
    {
        $pagetitle = PageTitle::find(6);

        $courses = Course::query()
            ->where('status', 1)
            ->where('title', 'like', '%' . $this->searchTerm . '%')
            ->latest()->paginate(8);

        $coursecats = CourseCategory::where('status', 1)->get();

        $institutions = Institution::where('status', 1)->latest()->take(5)->get();

        return view('livewire.front-course', [
            'courses' => $courses,
            'coursecats' => $coursecats,
            'institutions' => $institutions,
            'pagetitle' => $pagetitle
        ]);
    }
}
