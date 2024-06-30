<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ProjectController;
use App\Models\Project;
use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return Inertia::render('Welcome', [
        'aboutMeImageUrl' => asset('images/aboutme.jpeg'),
    ]);
});

Route::get('/dashboard', function () {
    $projects = Project::all();
    return Inertia::render('Dashboard', compact('projects'));
})->middleware(['auth', 'verified'])->name('dashboard');


//Projects
Route::get('/editProject/{id}', [ProjectController::class, 'edit'])->middleware(['auth', 'verified'])->name('editproject');
Route::get('/createProject', [ProjectController::class, 'create'])->middleware(['auth', 'verified'])->name('createproject');
Route::delete('/deleteProject/{project}', [ProjectController::class, 'destroy'])->middleware(['auth', 'verified'])->name('deleteproject');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
