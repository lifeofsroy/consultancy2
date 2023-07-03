<?php

namespace App\Http\Livewire;

use App\Models\Service;
use Livewire\Component;
use App\Models\PageTitle;
use App\Models\ContactInfo;
use App\Models\ServiceCategory;

class FrontServiceDetail extends Component
{
    public $service_slug;

    public function mount($service_slug)
    {
        $this->service_slug = $service_slug;
    }

    public function render()
    {
        $pagetitle = PageTitle::find(5);
        $service = Service::where('slug', $this->service_slug)->first();
        $cats = ServiceCategory::where('status', 1)->inRandomOrder()->take(5)->get();
        $contact = ContactInfo::find(1);

        return view('livewire.front-service-detail', [
            'service' => $service,
            'cats' => $cats,
            'contact' => $contact,
            'pagetitle' => $pagetitle
        ]);
    }
}
