<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;


class MainController extends Controller
{
    public function index()
    {
        $id = session('user.id');
        $notes = User::find($id)->notes()->get()->toArray();

        return view('home', ['notes' => $notes]);
    }

    public function editNote($id)
    {
        
    }

    public function deleteNote($id)
    {
        echo "I'm inside the delete note!";
        // return view('deleteNote');
    }

    public function newNote()
    {
        echo "I'm inside the new note!";
        // return view('newNote');
    }
}
