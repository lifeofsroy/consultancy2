<?php

namespace App\Http\Livewire\Partial;

use App\Models\SiteDetail;
use Livewire\Component;

class FrontStyle extends Component
{
    public function render()
    {
        $sdetail = SiteDetail::find(1);

        return view('livewire.partial.front-style', [
            'sdetail' => $sdetail,
        ]);
    }
}
