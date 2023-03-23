<?php

namespace App\Http\Controllers;

use App\Models\Education;
use Illuminate\Http\Request;

class EducationController extends Controller
{
    public function index()
    {
        $education = auth()->user()->education;
        return view('education.index', compact('education'));
    }

    public function create()
    {
        return view('education.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'school_name' => 'required',
            'school_location' => 'required',
            'degree' => 'required',
            'field_of_study' => 'required',
            'graduation_start_date' => 'required',
            'graduation_end_date' => 'required',
        ]);

//        $education = new Education();

//        $education->user_id = auth()->id();
//        $education->school_name = $request->school_name;
//        $education->school_location = $request->school_location;
//        $education->degree = $request->degree;
//        $education->field_of_study = $request->field_of_study;
//        $education->graduation_start_date = $request->graduation_start_date;
//        $education->graduation_end_date = $request->graduation_end_date;
//        $education->save();

        auth()->user()->education()->create($request->all());

        return redirect()->route('education.index');
    }

    public function edit(Education $education)
    {
        return view('education.edit', compact('education'));
    }

    public function update(Request $request, Education $education)
    {
        $request->validate([
            'school_name' => 'required',
            'school_location' => 'required',
            'degree' => 'required',
            'field_of_study' => 'required',
            'graduation_start_date' => 'required',
            'graduation_end_date' => 'required',
        ]);

        $education->update($request->all());

        return redirect()->route('education.index');
    }

    public function destroy(Education $education)
    {
        $education->delete();

        return redirect()->route('education.index');
    }

}
