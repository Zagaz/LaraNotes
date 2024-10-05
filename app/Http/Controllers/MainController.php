<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


class MainController extends Controller
{
    public function index()
    {
      // Load users notes
      // show home view
      return view('home');
    }

    public function newNote()
    {
        echo "I'm inside the new note!";
        // return view('newNote');
    }
}
