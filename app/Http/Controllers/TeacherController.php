<?php

namespace App\Http\Controllers;

use App\Models\Teacher;
use Illuminate\Http\Request;

class TeacherController extends Controller
{
    public function index(){
        $teachers = Teacher::all()->where('deleted_at', null);
        return view('Teachers.index',compact('teachers'));
    }

    public function create(){
        return view('Teachers.create');
    }


    public function store(Request $req){
        Teacher::create($req->all());
        return redirect()->route('teachers.index')->with('successMsg', 'تم الاضافة بنجاح');
    }


    public function edit($id){
        $teacher = Teacher::findOrFail($id);
        return view('Teachers.edit',compact('teacher'));
    }

    public function update(Request $req , $id){
        $teacher = Teacher::findOrFail($id);
        $teacher->update($req->all());
        return redirect()->route('teachers.index')->with('successMsg', 'تم التعديل بنجاح');
    }
}
