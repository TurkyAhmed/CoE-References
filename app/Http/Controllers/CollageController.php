<?php

namespace App\Http\Controllers;

use App\Models\Collage;
use Illuminate\Http\Request;

class CollageController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $collages = Collage::all()->where('deleted_at', null);
        return view('Collages.index',compact('collages'));
    }


    public function create()
    {
        return view('Collages.create');
    }


    public function store(Request $request)
    {
        Collage::create($request->all());
        return redirect()->route('collages.index')->with('successMsg', 'تم الاضافة بنجاح');
    }

    /**
     * Display the specified resource.
     */
    public function show(Collage $collage)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $collage = Collage::findOrFail($id);
        return view('Collages.edit',compact('collage'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $collage = Collage::findOrFail($id);
        $collage->update($request->all());

        return redirect()->route('collages.index')->with('successMsg', 'تم التعديل بنجاح');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Collage $collage)
    {
        //
    }
}
