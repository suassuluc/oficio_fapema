<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\oficio;

class ToggleBoolean extends Component
{

    public $oficioId;

    public function emit($event, $payload = [])
{
    parent::emit($event, $payload);
}

    public function mount($oficioId)
    {
        $this->oficioId = $oficioId;
    }

    public function toggle()
    {
        $oficio = oficio::find($this->oficioId);

        if ($oficio) {
            $oficio->autorizado = $oficio->autorizado === 1 ? 0 : 1;
            $oficio->save();

            $this->emit('oficioUpdated');



        }
    }

    public function togglenot()
    {
        $oficio = oficio::find($this->oficioId);

        if ($oficio) {
            $oficio->autorizado = $oficio->autorizado === 0 ? 1 : 0;
            $oficio->save();


        }
    }

    public function render()
    {
        return view('livewire.toggle-boolean');
    }
}
