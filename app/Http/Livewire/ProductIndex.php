<?php

namespace App\Http\Livewire;

use App\Mobil;
use Livewire\Component;
use Livewire\WithPagination;

class ProductIndex extends Component
{
    use WithPagination;

    public $search;

    protected $updateQueryString = ['search'];

    public function updatingSearch()
    {
        $this->resetPage();
    }

    public function render()
    {
        if ($this->search) {
            $mobils = Mobil::where('nama', 'like', '%' . $this->search . '%')->paginate(8);
        } else {
            $mobils = Mobil::paginate(8);
        }

        return view('livewire.product-index', [
            'mobils' => $mobils
        ]);
    }
}
