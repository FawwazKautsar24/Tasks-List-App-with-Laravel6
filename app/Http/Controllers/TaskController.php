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
        // $task = new Task;
        // $task->title = request('title');
        // $task->description = request('description');
        // $task->save();

        // Task::create([
        //     'title' => request('title'),
        //     'description' => request('description'),
        // ]);
        
        request()->validate([
            'title' => 'required|min:3',
            'description' => 'required',
        ]);

        $task = request()->all();
        Task::create($task);

        // dd($task);

        // return redirect('/');
        return back();
    }

    // public function show($task)
    public function show(Task $task)
    {
        // $task = Task::where('id', $task)->first();
        // $task = Task::find($task);
        return view('tasks.show', compact('task'));
    }

    public function edit(Task $task)
    {
        return view('tasks.edit', compact('task'));
    }

    public function update(Task $task)
    {
        request()->validate([
            'title' => 'required|min:3',
            'description' => 'required',
        ]);
        
        $task->update([
            'title' => request('title'),
            'description' => request('description'),
        ]);

        return redirect("/tasks/{$task->id}");
    }
}
