<?php

namespace App\Http\Livewire;
use App\Models\Student;
use Illuminate\Http\Request;

use Livewire\Component;

class Crud extends Component
{
    public $students, $Codigo, $Nombre, $Direccion, $Telefono, $Email, $student_id;

    public function index()
    {
        $data['students']=Student::paginate(5);
        return view('livewire.crud', $data);
    }

    public function create()
    {
        return view('student.create');
    }

    public function store(Request $request)
    {
        $studentData = request()->except('_token');
        Student::insert($studentData);
        return redirect('student');
    }

    public function edit($id)
    {
        $student=Student::find($id);
        return view('student.edit',compact('student'));
    }

    public function update(Request $request, $id)
    {
        $studentData = request()->except(['_token','_method']);
        Student::where('id', '=', $id)->update($studentData);
        return redirect('student');
    }

    public function destroy($id)
    {
        Student::destroy($id);
        return redirect('student');
    }


}
