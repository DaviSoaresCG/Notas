<?php

namespace App\Http\Controllers;

use Illuminate\Contracts\Encryption\DecryptException;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Crypt;

class NoteController extends Controller
{
    public function edit($id)
    {
        try {

            $id = Crypt::decrypt($id);
            echo $id;
        } catch (DecryptException $e) {

            return redirect()->route('home');
        }
    }

    public function delete($id)
    {
        try {

            $id = Crypt::decrypt($id);
            echo $id;
        } catch (DecryptException $e) {

            return redirect()->route('home');
        }
    }
}
