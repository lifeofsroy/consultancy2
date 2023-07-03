<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\PageTitle;
use App\Models\Institution;
use Illuminate\Support\Facades\Storage;

class FrontInstitutionDetail extends Component
{
    public $institution_slug;

    public function mount($institution_slug)
    {
        $this->institution_slug = $institution_slug;
    }

    public function export()
    {
        $institute = Institution::where('slug', $this->institution_slug)->first();
        return Storage::disk('public')->download($institute->doc);
    }

    public function render()
    {
        $pagetitle = PageTitle::find(10);
        $institution = Institution::where('slug', $this->institution_slug)->first();

        return view('livewire.front-institution-detail', [
            'institution' => $institution,
            'pagetitle' => $pagetitle
        ]);
    }
}
