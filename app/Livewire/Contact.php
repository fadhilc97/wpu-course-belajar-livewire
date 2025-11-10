<?php

namespace App\Livewire;

use Livewire\Component;
use Livewire\Attributes\Title;

#[Title('Contact Page')]
class Contact extends Component
{
    public function render()
    {
        return view('livewire.contact');
    }
}
