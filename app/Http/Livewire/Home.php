<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\JenisMobil;
use App\Mobil;

class Home extends Component
{
    public function render()
    {
        return view('livewire.home', [
            'mobils' => Mobil::take(4)->get(),
            'jenismobils' => JenisMobil::all()
        ]);
    }
}
