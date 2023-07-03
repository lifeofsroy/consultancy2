<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\PageTitle;
use App\Models\SectionTitle;
use App\Models\ServiceCategory;

class FrontServiceCategory extends Component
{
    public function render()
    {
        $pagetitle = PageTitle::find(3);
        $cattitle = SectionTitle::find(11);
        $scats = ServiceCategory::all();

        return view('livewire.front-service-category', [
            'pagetitle' => $pagetitle,
            'cattitle' => $cattitle,
            'scats' => $scats,
        ]);
    }
}
