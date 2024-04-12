<?php

namespace App\Http\Controllers;

use App\Models\Course;
use App\Models\Reference;
use Illuminate\Http\Request;

use function PHPSTORM_META\type;

class ReferenceController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index($id)
    {
        // $references = Reference::all()->where('deleted_at', null)->where('course_id',$id);
        // //TODO cahnge course_id to be dynamic
        // return view('Refrances.index',compact('references'));

        // return $references;
    }

    public function courseReferences($id){
        $references = Reference::all()->where('deleted_at', null)->where('course_id',$id);
        //TODO cahnge course_id to be dynamic
        return view('Refrances.index',compact('references'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $courses = Course::all();
        return view('Refrances.create',compact('courses'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // return  $request->course_id->subject;

        $course = Course::findOrFail($request->course_id);
        $type =  $request->type_of_reference;

        if($request->has('file_reference')){
            foreach($request->file('file_reference') as $file){
                $fileName = $course->subject->name .'_'. $course->teacher->name .'_'. $type . time() .'_'. rand(1,1000) .'.'. $file->extension();
                $file->move(public_path('assets/reference_files/'. $course->subject->name .'/'.$request->type_of_reference),$fileName);

                Reference::create([
                    'course_id'=> $course->id,
                    'type_of_reference'=> $type,
                    'name'=> $fileName,
                ]);
            }
        }

        return 'تمت العملية بنجاح';

    }

    /**
     * open but with files make download
     */
    public function show($id)
    {
        $reference = Reference::findOrFail($id);
        $course = Course::findOrFail($reference->course_id);

        // get the path prog d:...to file name
        // $file = public_path('assets/reference_files/'. $course->subject->name .'/'.$reference->type_of_reference .'/'. $reference->name);

        $file = 'assets/reference_files/'. $course->subject->name .'/'.$reference->type_of_reference .'/'. $reference->name;
        $reference_data['file_path'] = $file;
        $reference_data['course_id'] = $reference->course_id;
        // show image only
        // return response()->file($file);
        return view("Refrances.showCourseReferences",compact("reference_data"));
    }


    public function downloadReference($id){
        $reference = Reference::findOrFail($id);
        $course = Course::findOrFail($reference->course_id);

        $file = public_path('assets/reference_files/'. $course->subject->name .'/'.$reference->type_of_reference .'/'. $reference->name);
        return response()->download($file);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Reference $reference)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Reference $reference)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Reference $reference)
    {
        //
    }
}
