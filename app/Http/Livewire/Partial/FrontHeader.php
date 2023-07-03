<?php

namespace App\Http\Livewire\Partial;

use App\Models\Header;
use Livewire\Component;

class FrontHeader extends Component
{
    public function render()
    {
        $header = Header::find(1);

        return view('livewire.partial.front-header', [
            'header' => $header
        ]);
    }
}
