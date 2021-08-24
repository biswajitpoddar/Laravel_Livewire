<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Counterproperty extends Component
{
    public $message = "hello from counterproperty";

    public $msg = "First";

    public function mount()
    {
        $this->message = "tic tic tic";
    }

    public function myFunction($name)
    {
        $this->msg = "changed by " . $name;
    }
    public function render()
    {
        return view('livewire.counterproperty');
    }
}
