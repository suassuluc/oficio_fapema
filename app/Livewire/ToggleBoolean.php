<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\oficio;

class ToggleBoolean extends Component
{

    public $oficioId;


    public function mount($oficioId)
    {
        $this->oficioId = $oficioId;
    }


    #[On('refresh')]
    public function toggle()
    {
        $oficio = oficio::find($this->oficioId);

        if ($oficio) {
            $oficio->autorizado = $oficio->autorizado === 1 ? 0 : 1;

            if ($oficio->autorizado) {
                $oficio->increment('numero_oficio');
            }
            $oficio->saveOrFail();

        }
    }


    public function togglenot()
    {
        $oficio = oficio::find($this->oficioId);

        if ($oficio) {
            $oficio->autorizado = $oficio->autorizado === 0 ? 1 : 0;

            $oficio->saveOrFail();

            $this->dispatch('refresh');


        }
    }

    public function render()
    {
        return view('livewire.toggle-boolean');
    }
}
