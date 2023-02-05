<?php

namespace App\Http\Controllers;

use App\Subject;
use Illuminate\Http\Request;

class SubjectController extends Controller
{
    public function show(Subject $subject)
    {
        $tasks = $subject->tasks()->latest()->paginate(12);
        return view('subjects.show', compact('subject', 'tasks'));
    }
}
