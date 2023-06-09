<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Registration extends Component
{
    public $name,$email,$phone_number;
    public function submit(){
        dd($this->name,$this->email,$this->phone_number);
    }
// Form Validation
    public function updated($field){
        $this->validateOnly($field,[
            'name'=>['required', 'not_regex:/^[0-9]+$/'],
            'email'=>'required|email',
            'phone_number'=>'required|numeric|digits:10'
        ]);
    }
    public function render()
    {
        return view('livewire.registration');
    }

}
