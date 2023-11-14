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

    public function toggle()
    {
        $oficio = oficio::find($this->oficioId);

        if ($oficio) {
            $oficio->autorizado = !$oficio->autorizado;
            $oficio->save();

        }
    }

    public function render()
    {
        return view('livewire.toggle-boolean');
    }
}
