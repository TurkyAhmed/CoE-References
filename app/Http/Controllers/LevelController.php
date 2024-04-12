<?php

namespace App\Http\Controllers;

use App\Models\Department;
use App\Models\Education_year;
use App\Models\Level;
use Illuminate\Http\Request;

class LevelController extends Controller
{
    static $levels =  ['المستوى الاول','المستوى االثاني','المستوى الثالث','المستوى الرابع','المستوى الخامس','المستوى السادس'];


    public function index()
    {
        $levels = Level::all()->where('deleted_at', null);
        return view('Levels.index', compact('levels'));
    }


    public function create()
    {
        $departments = Department::all()->where('deleted_at', null);
        $years = Education_year::all()->where('deleted_at', null);
        $_levels = LevelController::$levels;

        return view('Levels.create', compact('departments', 'years','_levels'));
    }


    public function store(Request $request)
    {
        Level::create($request->all());

        return redirect()->route('levels.index')->with('successMsg','تم الاضاقة بنجاح');
    }

    /**
     * Display the specified resource.
     */
    public function show(Level $level)
    {
        //
    }

    public function edit($id)
    {
        $currentLevel = Level::findOrFail($id);
        $departments = Department::all()->where('deleted_at', null);
        $years = Education_year::all()->where('deleted_at', null);
        $_levels = LevelController::$levels;

        return view('Levels.edit', compact('departments', 'years','_levels','currentLevel'));
    }


    public function update(Request $request, $id)
    {
        $level = Level::findOrFail($id);
        $level->update($request->all());

        return redirect()->route('levels.index')->with('successMsg','تم التعديل بنجاح');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Level $level)
    {
        //
    }
}
