<?php

namespace App\Http\Controllers;

use App\Models\Experience;
use Illuminate\Http\Request;

class ExperienceController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $experiences = Experience::all();
        return view('resume', compact('experiences'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.createExp');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $experience = new Experience();
        $experience->dateFromTo = $request->input('dateFromTo');
        $experience->position = $request->input('position');
        $experience->company = $request->input('company');
        $experience->des = $request->input('des');
        $experience->save();

        return redirect()->back()->with('success', 'Experience added successfully!');
    }
    /**
     * Display the specified resource.
     */
    public function show(Experience $experience)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Experience $experience)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Experience $experience)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Experience $experience)
    {
        //
    }
}
