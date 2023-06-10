<?php

namespace App\Http\Livewire;

use App\Models\Student;
use Livewire\Component;

class StudentList extends Component
{
    public $students;
    public function mount(){
        $this->students = Student::all();
    }
    public function deleteStudent($id){
        Student::find($id)->delete();
        $this->mount();
    }
    public function render()
    {
        return view('livewire.student-list');
    }
}
