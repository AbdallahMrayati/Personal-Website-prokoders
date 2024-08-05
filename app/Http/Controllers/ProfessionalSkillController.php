<?php

namespace App\Http\Controllers;

use App\Models\ProfessionalSkill;
use Illuminate\Http\Request;

class ProfessionalSkillController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $professionalSkills = ProfessionalSkill::all();
        return view('resume', compact('professionalSkills'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.createProfS');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $prof = new ProfessionalSkill();
        $prof->name =  $request->name;

        $prof->save();

        return redirect()->back()->with('success', 'Skill added successfully!');
    }

    /**
     * Display the specified resource.
     */
    public function show(ProfessionalSkill $professionalSkill)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(ProfessionalSkill $professionalSkill)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, ProfessionalSkill $professionalSkill)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(ProfessionalSkill $professionalSkill)
    {
        //
    }
}
