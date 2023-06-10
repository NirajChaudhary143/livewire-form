<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Student;

class Registration extends Component
{
    public $name,$email,$phone_number;
    public function submit(){
        // $this->validate([
        //     'name'=>['required', 'not_regex:/^[0-9]+$/'],
        //     'email'=>'required|email|unique:students,email',
        //     'phone_number'=>'required|numeric|digits:10'
        // ]);
        $student = new Student();
        $student->name = $this->name;
        $student->email = $this->email;
        $student->phone_number = $this->phone_number;
        $student->save();
        // We need to reset the form field
        $this->resetFields();

    }
// Reset the input fields
    public function resetFields(){
        $this->reset(['name','email','phone_number']);
    }
// Form Validation Live
    public function updated($field){
        $this->validateOnly($field,[
            'name'=>['required', 'not_regex:/^[0-9]+$/'],
            'email'=>'required|email|unique:students,email',
            'phone_number'=>'required|numeric|digits:10'
        ]);
       
    }
    public function render()
    {
        return view('livewire.registration');
    }

}
