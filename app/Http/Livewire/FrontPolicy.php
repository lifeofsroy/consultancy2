<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\PageTitle;
use App\Models\PrivacyPolicy;

class FrontPolicy extends Component
{
    public function render()
    {
        $pagetitle = PageTitle::find(15);
        $policy = PrivacyPolicy::find(1);

        return view('livewire.front-policy', [
            'pagetitle' => $pagetitle,
            'policy' => $policy
        ]);
    }
}
