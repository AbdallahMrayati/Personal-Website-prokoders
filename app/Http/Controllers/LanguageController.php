<?php

namespace App\Http\Controllers;

use App\Models\Language;
use Illuminate\Http\Request;

class LanguageController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $languages = Language::all();
        return view('resume', compact('languages'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.createLang');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $lang = new Language();
        $lang->name =  $request->name;

        $lang->save();

        return redirect()->back()->with('done');
    }

    /**
     * Display the specified resource.
     */
    public function show(Language $language)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Language $language)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Language $language)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Language $language)
    {
        //
    }
}
