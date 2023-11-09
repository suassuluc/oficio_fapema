<?php

namespace App\Livewire;

use Livewire\Component;

class ToggleBoolean extends Component
{
    public function render()
    {
        return view('livewire.toggle-boolean');
    }

    public $value = 0;

    public function toggle()
    {
        $this->value = !$this->value;

        $oficio = Oficio::findOrFail($this->id);
        $oficio->authorized = !$oficio->authorized;
        $oficio->save();

        $this->emit('oficioUpdated');
    }
}
