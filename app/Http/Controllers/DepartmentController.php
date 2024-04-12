<?php

namespace App\Http\Controllers;

use App\Models\Collage;
use App\Models\Department;
use Illuminate\Http\Request;

class DepartmentController extends Controller
{


    public function index()
    {
        $departments = Department::all()->where('deleted_at', null);
        return view('Departments.index' , compact('departments'));
    }


    public function create()
    {
        $collages = Collage::all()->where('deleted_at', null);
        return view('Departments.create',compact('collages'));
    }


    public function store(Request $request)
    {
        Department::create($request->all());
        return redirect()->route('departments.index')->with('successMsg','تم الاضاقة بنجاح');
    }

    /**
     * Display the specified resource.
     */
    public function show(Department $department)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $department = Department::findOrFail($id);
        $collages = Collage::all()->where('deleted_at', null);
        return view('Departments.edit', compact('department', 'collages'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $department = Department::findOrFail($id);
        $department->update($request->all());

        return redirect()->route('departments.index')->with('successMsg','تم التعديل بنجاح');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Department $department)
    {
        //
    }
}
