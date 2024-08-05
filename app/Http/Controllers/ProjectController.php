<?php

namespace App\Http\Controllers;

use App\Models\Project;
use Illuminate\Http\Request;

class ProjectController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $projects = Project::all();
        return view('projects')->with('projects', $projects);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.createProject');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {


        $input =  $request->all();

        $fileName = time() . $request->file('img')->getClientOriginalName();
        $path = $request->file('img')->storeAs('images', $fileName, 'public');
        $input["img"] = '/storage/' . $path;

        // // Create a new record in the database with the request data and the image path
        // $project = new Project;
        // $project->name =  $request->name;
        // $project->des =  $request->des;
        // $project->img  = $request->imageName;

        // $project->save();

        Project::create($input);

        return redirect()->back()->with('success', 'done');
    }

    /**
     * Display the specified resource.
     */
    public function show(Project $project)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Project $project)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Project $project)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Project $project)
    {
        //
    }
}