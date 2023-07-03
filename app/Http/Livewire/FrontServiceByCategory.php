<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\PageTitle;
use App\Models\SectionTitle;
use App\Models\ServiceCategory;

class FrontServiceByCategory extends Component
{
    public $servicecat_slug;

    public function mount($servicecat_slug)
    {
        $this->servicecat_slug = $servicecat_slug;
    }

    public function render()
    {
        $pagetitle = PageTitle::find(4);
        $sertitle = SectionTitle::find(12);
        $cat = ServiceCategory::where('slug', $this->servicecat_slug)->first();

        return view('livewire.front-service-by-category', [
            'pagetitle' => $pagetitle,
            'sertitle' => $sertitle,
            'cat' => $cat,
        ]);
    }
}
