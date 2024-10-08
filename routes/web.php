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


// Route::resource('projects', ProjectController::class);

// Route::get('/dashboard', function () {
//     $projects = Project::all();
//     return Inertia::render('Dashboard', compact('projects'));
// })->middleware(['auth', 'verified'])->name('dashboard');


//Projects
// Route::get('/editProject/{id}', [ProjectController::class, 'edit'])->middleware(['auth', 'verified'])->name('editproject');
// Route::get('/createProject', [ProjectController::class, 'create'])->middleware(['auth', 'verified'])->name('createproject');
// Route::delete('/deleteProject/{project}', [ProjectController::class, 'destroy'])->middleware(['auth', 'verified'])->name('deleteproject');

// Route::middleware('auth')->group(function () {
//     Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
//     Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
//     Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
// });

require __DIR__.'/auth.php';
