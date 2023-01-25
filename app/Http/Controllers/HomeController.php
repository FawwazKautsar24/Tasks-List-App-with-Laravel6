<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class HomeController extends Controller
{
    public function index(){
        $name = 'Kats';
        // $tasks = ['Kuliah', 'Praktik Coding', 'Tidur'];
        $tasks = DB::table('tasks')->get();

        return view('welcome', [
            'name' => $name,
            'tasks' => $tasks
        ]);
    }
}
