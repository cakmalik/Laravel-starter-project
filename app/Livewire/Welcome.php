<?php

namespace App\Livewire;

use Livewire\Component;
use Livewire\Attributes\Title;

#[Title('Welcome')]

class Welcome extends Component
{
    public function render()
    {
        return view('livewire.welcome');
    }
}
