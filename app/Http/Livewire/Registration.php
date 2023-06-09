<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Registration extends Component
{
    public $name,$email,$phone_number;
    public function submit(){
        dd($this->name,$this->email,$this->phone_number);
    }
    public function render()
    {
        return view('livewire.registration');
    }

}
