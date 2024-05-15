<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Task;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Auth;



class TasksController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $user = Auth::user();
        if($user){
            $tasks = Task::where('user_id', $user->id)->get(); // Ajout de ->get()
            return view('tasks.index', ['tasks' => $tasks]);
        }
        return view('tasks.index');
    }
    

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('tasks.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $messages = [
            'task_title.string'=>'the task title must be a string',
            'task_title.required'=>'the task title must be added'

        ];
        $validated_data = $request->validate([
            'task_title' => 'string|required|max:255',
            'task_content' => 'nullable|string',
            'task_state' => 'string|required',
            'start_date' => 'date|required|after_or_equal:today',
            'end_date' => 'date|required|after_or_equal:start_date', 
            'start_time' => 'required|date_format:H:i',
            'end_time' => 'required|date_format:H:i',
        ], $messages);
        
        $user = Auth::user();
        $task = new Task();
        $task->fill($validated_data);
        $task->user_id = $user->id;
        $task->save();
        return redirect()->route('index');

    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
      //  $task = Task::findOrFail($id);
      $task = Auth::user()->tasks()->findOrFail($id);
        return view('tasks.show')->with('task',$task);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $task = Task::findOrFail($id);
        return view('tasks.edit')->with('task',$task);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $messages = [
            'task_title.string'=>'the task title must be a string',
            'task_title.required'=>'the task title must be added'

        ];
        $validated_data = $request->validate([
            'task_title' => 'string|required|max:255',
            'task_content' => 'nullable|string',
            'task_state' => 'string|required',
            'start_date' => 'date|required|after_or_equal:today',
            'end_date' => 'date|required|after_or_equal:start_date', 
            'start_time' => 'required',
            'end_time' => 'required'
        ], $messages);
        
        $task = Task::findOrFail($id);
        $task->fill($validated_data);
        $task->update();
        return redirect()->route('index');

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $task = Task::findOrFail($id);
        $task->delete();
        return redirect()->route('index');

    }
    public function backToPreviousPage(Request $request)
    {
        return Redirect::back();
    }
    
    
}
