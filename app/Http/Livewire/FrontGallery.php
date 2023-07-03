<?php

namespace App\Http\Livewire;

use App\Models\Gallery;
use Livewire\Component;
use App\Models\PageTitle;
use App\Models\SectionTitle;
use Livewire\WithPagination;

class FrontGallery extends Component
{
    public function render()
    {
        $pagetitle = PageTitle::find(13);
        $gallerytitle = SectionTitle::find(16);
        $photos = Gallery::where('status', 1)->get();

        return view('livewire.front-gallery', [
            'pagetitle' => $pagetitle,
            'gallerytitle' => $gallerytitle,
            'photos' => $photos,
        ]);
    }
}
