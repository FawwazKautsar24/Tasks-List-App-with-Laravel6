<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){
        $name = 'Kats';
        $tasks = ['Kuliah', 'Praktik Coding', 'Tidur'];

        return view('welcome', [
            'name' => $name,
            'tasks' => $tasks
        ]);
    }
}
