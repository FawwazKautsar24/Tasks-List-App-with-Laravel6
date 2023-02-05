<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Task;

class HomeController extends Controller
{
    public function index(){
        $name = 'Kats';
        $tasks = Task::all();

        return view('welcome', [
            'name' => $name,
            'tasks' => $tasks
        ]);
    }
}
