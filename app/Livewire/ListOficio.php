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

    public $toogle = false;

    public $row = [];

    public function processMark($id){

        $this->toogle = !$this->toogle;

        $this->ofico_id = $id;

        $oficio = Oficio::find($this->ofico_id);

        if($this->row[$id] == true){
            $oficio->autorizado = true;
        } else {
            $oficio->autorizado = false;
        }

        // recebe numero randomico
        $oficio->numero_oficio = rand(1000, 9999);

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
