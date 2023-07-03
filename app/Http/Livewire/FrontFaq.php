<?php

namespace App\Http\Livewire;

use App\Models\Faq;
use Livewire\Component;
use App\Models\PageTitle;
use App\Models\SectionTitle;

class FrontFaq extends Component
{
    public function render()
    {
        $pagetitle = PageTitle::find(12);
        $faqtitle = SectionTitle::find(15);
        $faqs = Faq::where('status', 1)->get();

        return view('livewire.front-faq', [
            'pagetitle' => $pagetitle,
            'faqtitle' => $faqtitle,
            'faqs' => $faqs,
        ]);
    }
}
