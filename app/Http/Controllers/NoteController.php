<?php

namespace App\Http\Controllers;

use App\Services\Operations;
use Illuminate\Contracts\Encryption\DecryptException;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Crypt;

class NoteController extends Controller
{

    public function newNote()
    {
        return view('create');
    }

    public function newNoteSubmit(Request $request)
    {
        
    }

    public function edit($id)
    {
        $id = Operations::decryptId($id);
    }

    public function delete($id)
    {
        $id = Operations::decryptId($id);
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
