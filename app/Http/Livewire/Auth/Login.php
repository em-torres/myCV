<?php

namespace App\Http\Livewire\Auth;

use App\User;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class Login extends Component
{
    public $form = [
        'email'                   => '',
        'password'                => '',
    ];

    /* ----- USER states methods ----- */
    public function submit()
    {
        $this->validate([
            'form.email'    => 'required|email',
            'form.password' => 'required'
        ]);

        Auth::attempt($this->form);

        if(Auth::check())
        {
            return redirect(route('home'));
        }
        return ;
    }

    /* ----- LIVEWIRE states methods ----- */
    public function render()
    {
        return view('livewire.auth.login');
    }
}
