<?php

namespace App\Http\Livewire\Partial;

use Livewire\Component;
use App\Models\SiteDetail;

class FrontMeta extends Component
{
    public function render()
    {
        $sdetail = SiteDetail::find(1);
        
        return view('livewire.partial.front-meta', [
            'sdetail' => $sdetail,
        ]);
    }
}
