<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class homeController extends Controller
{
    public function index()
    {
        return view('index');
    }

    public function home()
    {
        return view('home');
    }

    public function about()
    {
        return view('about');
    }

    public function resume()
    {
        return view('resume');
    }

    public function contact()
    {
        return view('contact');
    }

    public function project()
    {
        return view('project');
    }
}
