<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\PageTitle;
use App\Models\Institution;
use Livewire\WithPagination;

class FrontInstitution extends Component
{
    use WithPagination;
    protected $paginationTheme = 'bootstrap';

    public $searchTerm = null;

    public function render()
    {
        $pagetitle = PageTitle::find(9);
        $institutions = Institution::query()
            ->where('status', 1)
            ->where('title', 'like', '%' . $this->searchTerm . '%')
            ->orWhere('location', 'like', '%' . $this->searchTerm . '%')
            ->orWhere('type', 'like', '%' . $this->searchTerm . '%')
            ->latest()->paginate(8);

        return view('livewire.front-institution', [
            'institutions' => $institutions,
            'pagetitle' => $pagetitle
        ]);
    }
}
