<?php

namespace App\Http\Controllers;

use Illuminate\Contracts\Encryption\DecryptException;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Crypt;

class NoteController extends Controller
{
    public function edit($id)
    {
        $id = $this->decryptId($id);
    }

    public function delete($id)
    {
        $id = $this->decryptId($id);
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
