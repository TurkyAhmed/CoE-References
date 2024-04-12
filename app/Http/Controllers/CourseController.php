<?php

namespace App\Http\Controllers;

use App\Models\Course;
use App\Models\Education_year;
use App\Models\Level;
use App\Models\Subject;
use App\Models\Teacher;
use Illuminate\Http\Request;

class CourseController extends Controller
{

    public function index()
    {
        $courses = Course::all();
        return view('Courses.index',compact('courses'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $subjects = Subject::all()->where('deleted_at', null);
        $teachers = Teacher::all()->where('deleted_at', null);
        $levels = Level::all()->where('deleted_at', null);

        return view('Courses.create',compact('subjects','teachers','levels'));
    }


    public function store(Request $request)
    {
        Course::create($request->all());

        return redirect()->route('courses.index')->with('successMsg','تم الاضاقة بنجاح');
    }

    /**
     * Display the specified resource.
     */
    public function show(Course $course)
    {
        //
    }

    public function edit($id)
    {
        $course = Course::findOrFail($id);
        $subjects = Subject::all()->where('deleted_at', null);
        $teachers = Teacher::all()->where('deleted_at', null);
        $levels = Level::all()->where('deleted_at', null);

        // return $course;
        return view('Courses.edit',compact('course','subjects','teachers','levels'));

    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $course = Course::findOrFail($id);
        $course->update($request->all());

        return redirect()->route('courses.index')->with('successMsg',' تم التعديل بنجاح');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Course $course)
    {
        //
    }

    public function listAllCourses(){
        $courses = Course::all();
        return view('Courses.listCourses',compact('courses'));
    }
}
