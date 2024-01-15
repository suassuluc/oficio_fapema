<?php

namespace App\Livewire;

use App\Models\Oficio;
use Livewire\Component;
use App\Models\Setor;

class OficioRow extends Component
{
    public $oficio;

    public $ichecked;

    public function processMark(Oficio $oficio)
    {

        if($this->ichecked) {
            // if (!$this->oficio->updated_at) {
            //     $this->oficio->updated_at = now();
            // }
            $this->oficio->autorizado = true;
            $this->oficio->numero_oficio = rand(1,1000);
            //
        }else{
            $this->oficio->autorizado = false;
            // $this->oficio->numero_oficio = null;
        }

        $this->oficio->save();
    }

    public function mount(Oficio $oficio)
    {
        $this->ichecked = $oficio->autorizado == 'sim' ? true : false;
    }
    public function render()
    {
        return view('livewire.oficio-row');
    }
}
