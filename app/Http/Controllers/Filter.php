<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Task;

class Filter extends Controller
{
    /**filter by date */
    public function get_the_most_recent_tasks()
    {
        $user = Auth::user();
        $tasks = Task::where('user_id', $user->id)
                     ->orderBy('start_date', 'desc')
                     ->get();
    
        return view('filter.most_recent', ['tasks' => $tasks]);
    }
    public function get_the_least_recent_tasks()
    {
        $user = Auth::user();
        $tasks = Task::where('user_id', $user->id)
                     ->orderBy('start_date', 'asc')
                     ->get();
    
        return view('filter.least_recent', ['tasks' => $tasks]);
    }

    public function search_by_title(){
        return view('filter.title_search');
    }
    public function confirm_search_by_title(Request $request){
        $user = Auth::user();
        $title = $request->input('task_title');
        $tasks = Task::where('task_title',$title)
        ->where('user_id', $user->id)
        ->get();
        return view('filter.tasks_found_by_title')->with('tasks',$tasks);
    }
        
    public function search_by_state(){
        return view('filter.state_search');
    }
    public function tasks_found_by_state(Request $request){
        $user = Auth::user();
        $state = $request->input('task_state');
        $tasks = Task::where('task_state',$state)
        ->where('user_id', $user->id)
        ->get();
        return view('filter.tasks_found_by_state')->with('tasks',$tasks);
    }
        
}
