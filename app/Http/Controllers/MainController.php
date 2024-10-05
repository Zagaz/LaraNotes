<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


class MainController extends Controller
{
    public function index()
    {
       echo "I'm inside the INDEX!";
        // return view('index');
    }

    public function newNote()
    {
        echo "I'm inside the new note!";
        // return view('newNote');
    }
}
