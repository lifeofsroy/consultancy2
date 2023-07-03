<?php

namespace App\Http\Livewire\Partial;

use App\Models\HeaderNotice;
use App\Models\Notice;
use Livewire\Component;

class FrontNotice extends Component
{
    public function render()
    {
        $notices = HeaderNotice::where('status', 1)->get();
        
        return view('livewire.partial.front-notice', [
            'notices' => $notices,
        ]);
    }
}
