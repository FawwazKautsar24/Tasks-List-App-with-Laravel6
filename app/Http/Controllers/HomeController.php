<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
// use DB;
use App\Task;

class HomeController extends Controller
{
    public function index(){
        $name = 'Kats';
        // $tasks = ['Kuliah', 'Praktik Coding', 'Tidur'];
        // $tasks = DB::table('tasks')->get();
        $tasks = Task::all();
        // dd($tasks);

        return view('welcome', [
            'name' => $name,
            'tasks' => $tasks
        ]);
    }
}
