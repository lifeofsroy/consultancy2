<?php

namespace App\Http\Livewire\Partial;

use App\Models\Footer;
use App\Models\Gallery;
use Livewire\Component;
use App\Models\SocialIcon;
use App\Models\ServiceCategory;

class FrontFooter extends Component
{
    public function render()
    {
        $footer = Footer::find(1);
        $photos = Gallery::latest()->take(6)->get();
        $scats = ServiceCategory::where('is_footer', 1)->take(2)->get();
        $socials = SocialIcon::all();

        return view('livewire.partial.front-footer', [
            'footer' => $footer,
            'photos' => $photos,
            'scats' => $scats,
            'socials' => $socials
        ]);
    }
}
