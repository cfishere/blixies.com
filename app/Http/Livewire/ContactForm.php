<?php

namespace App\Http\Livewire;

use Livewire\Component;

class ContactForm extends Component
{
	public $name;
	public $email;
	public $message;
	public $phone;
	
    public function render()
    {
        return view('livewire.contact-form');
    }
}
