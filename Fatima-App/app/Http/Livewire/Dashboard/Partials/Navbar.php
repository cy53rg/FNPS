<?php

namespace App\Http\Livewire\Dashboard\Partials;

use Livewire\Component;
use Illuminate\Support\Facades\Auth;

class Navbar extends Component
{

  
    public function render()
    {
        return view('livewire.dashboard.partials.navbar');
    }
}
