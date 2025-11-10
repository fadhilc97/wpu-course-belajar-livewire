<?php

namespace App\Livewire;

use Livewire\Component;
use Livewire\Attributes\Title;

#[Title('Users Page')]
class Users extends Component
{
  public function render()
  {
    return view('livewire.users');
  }
}
