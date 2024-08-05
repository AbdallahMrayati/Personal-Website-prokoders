<?php

namespace App\Http\Controllers;

use App\Models\Education;
use Illuminate\Http\Request;

class EducationController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $educations = Education::all();
        return view('resume', compact('educations'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.createEdu');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $education = new Education();
        $education->dateFromTo = $request->input('dateFromTo');
        $education->institute = $request->input('institute');
        $education->subject = $request->input('subject');
        $education->des = $request->input('des');
        $education->save();

        return redirect()->back()->with('success', 'Education added successfully!');
    }

    /**
     * Display the specified resource.
     */
    public function show(Education $education)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Education $education)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Education $education)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Education $education)
    {
        //
    }
}
