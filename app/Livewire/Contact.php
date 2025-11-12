<?php

namespace App\Livewire;

use App\Livewire\Forms\ContactForm;
use Livewire\Component;
use Livewire\Attributes\Title;

#[Title('Contact Page')]
class Contact extends Component
{
  public ContactForm $form;

  public function createContactMessage() {
    $this->form->store();
  }

  public function render()
  {
    return view('livewire.contact');
  }
}
