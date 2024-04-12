<?php

namespace App\Http\Controllers;

use App\Models\Education_year;
use Illuminate\Http\Request;

class EducationYearController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $years = Education_year::all()->where('deleted_at', null);
        return view('Education_years.index', compact('years'));
    }


    public function create()
    {
        return view('Education_years.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        Education_year::create($request->all());
        return redirect()->route('education_years.index')->with('successMsg', 'تم الاضافة بنجاح');
    }

    /**
     * Display the specified resource.
     */
    public function show(Education_year $education_year)
    {
        //
    }


    public function edit($id)
    {
        $year = Education_year::findOrFail($id);
        return view('Education_years.edit', compact('year'));
    }


    public function update(Request $request, $id)
    {
        $year = Education_year::findOrFail($id);
        $year->update($request->all());

        return redirect()->route('education_years.index')->with('successMsg', 'تم التعديل بنجاح');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Education_year $education_year)
    {
        //
    }
}
