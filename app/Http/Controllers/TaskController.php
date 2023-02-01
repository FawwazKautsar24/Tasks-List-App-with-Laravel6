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
        
        $task = request()->validate([
            'title' => 'required|min:3',
            'description' => 'required',
        ]);

        // $task = request()->all();
        Task::create($task);
        // session()->flash('success', 'Your task was created!');

        // dd($task);

        // return redirect('/');
        return back()->with('success', 'Your task was created!');;
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
        $attribute = request()->validate([
            'title' => 'required|min:3',
            'description' => 'required',
        ]);
        
        $task->update($attribute);

        return redirect("/tasks/{$task->id}")->with('success', 'Your task was updated.');
    }
}
