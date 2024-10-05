<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;


class MainController extends Controller
{
    public function index()
    {
      $id = session('user.id');
      $user = User::find($id)->toArray();
      $notes = User::find($id)->notes->toArray();
      return view('home');
    }

    public function newNote()
    {
        echo "I'm inside the new note!";
        // return view('newNote');
    }
}
