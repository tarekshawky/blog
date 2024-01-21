<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Button extends Component
{
    public  $name;
    public  $href;

    public function render()
    {
        return view('livewire.button');

    }
}
