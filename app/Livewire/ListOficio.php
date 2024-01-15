<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Oficio;
use App\Models\Setor;


class ListOficio extends Component
{


    public function render()
    {

        return view('livewire.list-oficio',[
            'oficio' =>  Oficio::all(),
            'setor' => Setor::all()
        ]);
    }
}
