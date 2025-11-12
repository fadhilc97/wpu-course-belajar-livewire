<?php

namespace App\Livewire\Forms;

use App\Models\Contact;
use Livewire\Attributes\Validate;
use Livewire\Form;

class ContactForm extends Form
{
  #[Validate('required|email:dns')]
  public $email = '';
  
  #[Validate('required|min:3')]
  public $subject = '';
  
  #[Validate('required|min:3')]
  public $message = '';

  public function store() {
    $validated = $this->validate();

    Contact::create($validated);

    $this->reset();

    session()->flash('success', 'Success created user data');
  }
}
