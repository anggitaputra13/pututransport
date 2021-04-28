<?php

namespace App\Http\Livewire;

use App\JenisMobil;
use Livewire\Component;

class Navbar extends Component
{
    public function render()
    {
        return view('livewire.navbar', [
            'jenismobils' => JenisMobil::all()
        ]);
    }
}
