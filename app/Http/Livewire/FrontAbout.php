<?php

namespace App\Http\Livewire;

use App\Models\Gallery;
use Livewire\Component;
use App\Models\PageTitle;
use App\Models\AboutFeature;
use App\Models\AboutWelcome;
use App\Models\SectionTitle;

class FrontAbout extends Component
{
    public function render()
    {
        $pagetitle = PageTitle::find(2);
        $featuretitle = SectionTitle::find(8);
        $welcometitle = SectionTitle::find(9);
        $gallerytitle = SectionTitle::find(10);
        $features = AboutFeature::all();
        $welcomes = AboutWelcome::all();
        $photos = Gallery::where('featured', 1)->latest()->take(6)->get();

        return view('livewire.front-about', [
            'featuretitle' => $featuretitle,
            'welcometitle' => $welcometitle,
            'gallerytitle' => $gallerytitle,
            'features' => $features,
            'welcomes' => $welcomes,
            'photos' => $photos,
            'pagetitle' => $pagetitle
        ]);
    }
}
