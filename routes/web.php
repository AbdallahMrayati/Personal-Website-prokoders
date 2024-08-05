<?php

use App\Http\Controllers\ProjectController;
use App\Http\Controllers\ExperienceController;
use App\Http\Controllers\EducationController;
use App\Http\Controllers\ProfessionalSkillController;
use App\Http\Controllers\LanguageController;
use App\Models\Education;
use App\Models\Experience;
use App\Models\ProfessionalSkill;
use App\Models\Project;
use App\Models\Language;
use Illuminate\Support\Facades\Route;


// User Routes
Route::get('/', function () {
    return view('index');
})->name('index');

Route::get('/allprojects', function () {
    $projects = Project::orderBy('created_at', 'desc')->get();
    return view('projects')->with('projects', $projects);
})->name('allprojects');

Route::get('/contact', function () {
    return view('contact');
})->name('contact');

Route::get('/resume', function () {

    $professionalSkills = ProfessionalSkill::all();
    $languages = Language::all();
    $education = Education::all();
    $experiences = Experience::all();
    return view('resume')->with([
        'professionalSkills' => $professionalSkills,
        'languages' => $languages,
        'education' => $education,
        'experiences' => $experiences
    ]);
})->name('resume');


// Admin Routes

Route::get('/dashboard', function () {
    return view('admin.dashboard');
});

Route::resource('projects', ProjectController::class);
Route::resource('professional-skills', ProfessionalSkillController::class);
Route::resource('languages', LanguageController::class);
Route::resource('experiences', ExperienceController::class);
Route::resource('educations', EducationController::class);
