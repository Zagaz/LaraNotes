<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MainController extends Controller
{

    public function about()
    {
        return view('about');
    }
    public function contact()
    {
        return view('contact');
    }
    public function main($name)
    {
        return view('main',['name'=>$name]);
    }
    public function page2($name)
    {
        return view('page2',['name'=>$name]);
    }
    public function page3($name)
    {
        return view('page3',['name'=>$name]);
    }

}
