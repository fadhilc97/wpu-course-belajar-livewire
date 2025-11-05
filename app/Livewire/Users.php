<?php

namespace App\Livewire;

use App\Models\User;
use Livewire\Component;
use Illuminate\Support\Facades\Hash;
use Livewire\Attributes\Validate;

class Users extends Component
{
  #[Validate('required|min:4')]
  public $name = '';

  #[Validate('required|email:dns')]
  public $email = '';

  #[Validate('required|min:8')]
  public $password = '';

  public function createNewUser() {
    $this->validate();

    User::create([
      'name' => $this->name,
      'email' => $this->email,
      'password' => Hash::make($this->password)
    ]);

    $this->reset();
  }

  public function render()
  {
    return view('livewire.users', [
      'title' => 'Users Page',
      'users' => User::all()
    ]);
  }
}
