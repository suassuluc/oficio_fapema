<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Oficio;


class ListOficio extends Component
{
    public function render()
    {
        return view('livewire.list-oficio',[
            'oficio' =>  Oficio::all()
        ]);
    }
}
