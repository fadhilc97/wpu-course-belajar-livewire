<?php

namespace App\Livewire;

use App\Models\User;
use Livewire\Component;
use Illuminate\Support\Facades\Hash;
use Livewire\Attributes\Validate;
use Livewire\WithFileUploads;

class Users extends Component
{
  use WithFileUploads;

  #[Validate('required|min:4')]
  public $name = '';

  #[Validate('required|email:dns|unique:users')]
  public $email = '';

  #[Validate('required|min:8')]
  public $password = '';

  #[Validate('image|max:5120')]
  public $avatar;

  public function createNewUser() {
    $validated = $this->validate();

    if ($this->avatar) {
      $validated['avatar'] = $this->avatar->store('avatar', 'public');
    }

    User::create([
      'name' => $this->name,
      'email' => $this->email,
      'password' => Hash::make($this->password),
      'avatar' => $validated['avatar']
    ]);

    $this->reset();

    session()->flash('success', 'Success created user data');
  }

  public function render()
  {
    return view('livewire.users', [
      'title' => 'Users Page',
      'users' => User::all()
    ]);
  }
}
