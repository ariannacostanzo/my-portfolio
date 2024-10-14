<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ProjectController;
use App\Models\Project;
use App\Models\Skill;
use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;
use App\Http\Controllers\ContactFormController;

Route::post('/contact', [ContactFormController::class, 'send']);


Route::get('/', function () {
    $skills = Skill::all();
    $projects = Project::with('images')->get();
    return Inertia::render('Welcome', [
        'aboutMeImageUrl' => asset('images/aboutme.jpeg'),
        'skills' => $skills,
        'projects' => $projects,
    ]);
})->name('welcome');


Route::get('projectDetailPage/{id}', function ($id) {
    $project = Project::with('images')->findOrFail($id);
    return Inertia::render('ProjectDetailPage', [
        'project' => $project,
    ]);

})->name('projectDetail');



require __DIR__.'/auth.php';
