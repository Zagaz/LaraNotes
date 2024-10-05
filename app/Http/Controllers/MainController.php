<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Contracts\Encryption\DecryptException;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Crypt;

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
       $id = $this->decryptId($id);

       echo "I'm inside the edit note! . $id";
    }

    public function deleteNote($id)
    {
        
        $id = $this->decryptId($id);

        echo "I'm inside the delete note! . $id";
    }

    public function newNote()
    {
        echo "I'm inside the new note!";
        // return view('newNote');
    }
    private function decryptId($id)
    {
        try {
            $id = Crypt::decrypt($id);
        } catch (DecryptException $e) {
            return redirect()->route('home');
        }
        return $id;
    }
}
