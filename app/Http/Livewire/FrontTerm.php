<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\PageTitle;
use App\Models\TermCondition;

class FrontTerm extends Component
{
    public function render()
    {
        $pagetitle = PageTitle::find(14);
        $term = TermCondition::find(1);

        return view('livewire.front-term', [
            'pagetitle' => $pagetitle,
            'term' => $term
        ]);
    }
}
