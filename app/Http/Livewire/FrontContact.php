<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\PageTitle;
use App\Models\ContactForm;
use App\Models\ContactInfo;
use App\Models\SectionTitle;

class FrontContact extends Component
{
    public $name;
    public $email;
    public $phone;
    public $purpose;
    public $msz;

    public function resetInput()
    {
        $this->name = null;
        $this->email = null;
        $this->phone = null;
        $this->purpose = null;
        $this->msz = null;
    }

    public function updated($fields){
        $this->validateOnly($fields,[
            'name' => 'required',
            'email' => 'required|email',
            'phone' => 'required',
            'purpose' => 'required',
            'msz' => 'required',
        ]);
    }

    public function contactRequest(){
        $this->validate([
            'name' => 'required',
            'email' => 'required|email',
            'phone' => 'required',
            'purpose' => 'required',
            'msz' => 'required',
        ]);

        $form = new ContactForm();
        $form->name = $this->name;
        $form->email = $this->email;
        $form->phone = $this->phone;
        $form->purpose = $this->purpose;
        $form->msz = $this->msz;

        $form->save();
        $this->resetInput();
        $this->dispatchBrowserEvent('added', ['message' => 'Query Submitted']);
    }

    protected $messages = [
        'name.required' => 'Name cannot be empty',
        'email.required' => 'Email is necessary',
        'email.email' => 'This is not an email address',
        'phone.required' => 'Phone is necessary',
        'purpose.required' => 'Please give the purpose',
        'msz.required' => 'You forgot to write your Message',
    ];

    public function render()
    {
        $pagetitle = PageTitle::find(11);
        $formtitle = SectionTitle::find(13);
        $maptitle = SectionTitle::find(14);
        $info = ContactInfo::find(1);

        return view('livewire.front-contact', [
            'pagetitle' => $pagetitle,
            'formtitle' => $formtitle,
            'info' => $info,
            'maptitle' => $maptitle,
        ]);
    }
}
