<?php

namespace App\Http\Controllers;
use App\Models\Task;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class TaskController extends Controller
{
    public function index()
    {
        $user = Auth::user();
        $tasks = $user->tasks;
        return view('MyEmployeeApp.task', compact('tasks'));
    }

    public function toggleComplete(Task $task)
    {
        $user = Auth::user(); 
        if ($task->user_id === $user->id) {
            $task->is_completed = !$task->is_completed;
            $task->save();
        }

        return redirect()->back();
    }
}
