<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function about(){
        $name = 'Fawww';

        return view('about', compact('name'));
    }

    public function contact(){
        return view('contact');
    }
}
