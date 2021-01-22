<?php

namespace App\Http\Livewire\Auth;

use App\User;
use Livewire\Component;

class Register extends Component
{
    public $form = [
        'name'                    => '',
        'email'                   => '',
        'password'                => '',
        'password_confirmation'   => '',
    ];

    /* ----- USER states methods ----- */
    public function submit()
    {
        $this->validate([
            'form.name'     => 'required',
            'form.email'    => 'required|email',
            'form.password' => 'required|confirmed'
        ]);

        $user = User::create($this->form);
        $user->assignRole('guest');

        return redirect(route('login'));
    }

    /* ----- LIVEWIRE states methods ----- */
    public function render()
    {
        return view('livewire.auth.register');
    }
}
