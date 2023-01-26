<?php

namespace App\Http\Controllers;

use App\Task;
use Illuminate\Http\Request;

class TaskController extends Controller
{
    public function index()
    {
        $tasks = Task::all();
        return view('tasks.index', compact('tasks'));
    }

    public function store()
    {
        $task = new Task;
        $task->title = request('title');
        $task->description = request('description');
        $task->save();

        // dd($task);

        // return redirect('/');
        return back();
    }
}
