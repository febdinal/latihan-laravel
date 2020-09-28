<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    function index() {
        $name = 'Tole';
        $name2 = 'felix';

        return view('Home', compact('name','name2'));
        //return view('home', [])->with('name', 'tole');
    }
}
