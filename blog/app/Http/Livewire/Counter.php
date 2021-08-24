<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Counter extends Component
{
    public function render()
    {
        $data = ['name' => 'biswajit poddar',
            'email' => 'poddarbiswajit19@gmail.com',
            'age' => '47',
            'mobile' => '8974997073'];
        return view('livewire.counter', ['data' => $data], ['data2' => 'RAM']);
    }
}
