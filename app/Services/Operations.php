<?php

namespace App\Services;

use Illuminate\Contracts\Encryption\DecryptException;
use Illuminate\Support\Facades\Crypt;

class Operations
{
    public static function decryptId($value)
    {
        //return the ID decrypted
        try {
            $id = Crypt::decrypt($value);
        } catch (DecryptException $e) {
            return redirect()->route('home')->with('error', $e);
        }

        return $id;
    }
}