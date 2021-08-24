<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Profile extends Component
{
    public function render()
    {
        return <<<'blade'
            <div>
                <h1 style="color:green;">profile</h1>
                {{-- Stop trying to control. --}}
            </div>
        blade;
    }
}
