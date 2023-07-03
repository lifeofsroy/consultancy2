<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\PageTitle;
use App\Models\CookiePolicy;

class FrontCookie extends Component
{
    public function render()
    {
        $pagetitle = PageTitle::find(16);
        $cookie = CookiePolicy::find(1);

        return view('livewire.front-cookie', [
            'pagetitle' => $pagetitle,
            'cookie' => $cookie
        ]);
    }
}
