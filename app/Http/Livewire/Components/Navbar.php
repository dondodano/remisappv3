<?php

namespace App\Http\Livewire\Components;

use Livewire\Component;
use Illuminate\Support\Facades\Auth as Auths;

class Navbar extends Component
{

    public function logout()
    {
        activity()
        ->causedBy(Auths::user())
        ->performedOn(Auths::user())
        ->log('logged-out');


        session()->forget('session');
        session()->invalidate();
        Auths::logout();
        return redirect('/login');
    }

    public function render()
    {
        return view('livewire.components.navbar');
    }
}
