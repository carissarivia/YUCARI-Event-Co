<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function home()
{
    return view('home');
}

public function about()
{
    return view('about');
}

public function projects()
{
    return view('projects');
}

public function journal()
{
    return view('journal');
}

public function contact()
{
    return view('contact');
}

public function form()
{
    return view('contact');
}

}
