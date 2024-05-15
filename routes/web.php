<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TasksController;
use App\Http\Controllers\Filter;




Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';

Route::get('/tasks/create', [TasksController::class, 'create'])->middleware('auth')->name('create_task');
Route::post('/tasks/create', [TasksController::class, 'store'])->middleware('auth')->name('store_task');

Route::get('/tasks/all', [TasksController::class, 'index'])->name('index');
Route::get('/task/{id}', [TasksController::class, 'show'])->middleware('auth')->name('show_task');
Route::get('/task/{id}/delete', [TasksController::class, 'destroy'])->middleware('auth')->name('delete_task');

Route::get('/task/{id}/edit', [TasksController::class, 'edit'])->middleware('auth')->name('edit_task');
Route::put('/task/{id}/update', [TasksController::class, 'update'])->middleware('auth')->name('update_task');

Route::get('/tasks/mostRecent', [Filter::class, 'get_the_most_recent_tasks'])->middleware('auth')->name('most_recent_tasks');
Route::get('/tasks/leastRecent', [Filter::class, 'get_the_least_recent_tasks'])->middleware('auth')->name('least_recent_tasks');
Route::get('/tasks_by_title', [Filter::class, 'search_by_title'])->middleware('auth')->name('tasks_by_title');
Route::post('/tasks_by_title', [Filter::class, 'confirm_search_by_title'])->middleware('auth')->name('tasks_found_by_title');

Route::get('/tasks_by_state', [Filter::class, 'search_by_state'])->middleware('auth')->name('search_by_state');
Route::post('/tasks_by_state', [Filter::class, 'tasks_found_by_state'])->middleware('auth')->name('tasks_found_by_state');

Route::get('/back', [TasksController::class, 'backToPreviousPage'])->middleware('auth')->name('back');

