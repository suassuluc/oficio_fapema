<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Oficio;


class ListOficio extends Component
{
    public $oficio;

    Public $ofico_id;

    public $receiveUpdates = [];

    public $count;

    public function processMark($id){
        $this->ofico_id = $id;

        $oficio = Oficio::find($this->ofico_id);

        $oficio->autorizado = true;

        $oficio->numero_oficio = 39754578;

        $oficio->saveOrFail();
    }

    public function mount()
    {
        $this->oficio = Oficio::all();
    }



    public function updatedReceiveUpdates($a, $b){
        dd($a, $b);
    }


    public function render()
    {

        $this->oficio = Oficio::all();
        return view('livewire.list-oficio');
    }
}
