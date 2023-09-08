<?php

namespace App\Livewire\Error;

use Livewire\Component;
use Livewire\Attributes\Layout;

class NotFound extends Component
{
    public function render()
    {
        return view('livewire.error.not-found');
    }
}
