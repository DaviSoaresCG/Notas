<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function login()
    {
        return view('login');
    }

    public function loginSubmit(Request $request)
    {
        // mensagens para exibir o erro individualmente
        $message = [
            'required' => 'Preencha o campo :attribute',
            'email.email' => 'Digite um email válido',
            'password.min' => 'Digite uma senha de mais de 3 caracteres'
        ];

        $request->validate([
            'email' => 'required|email',
            'password' => 'required|min:3'
        ], $message);

        $userEmail = $request->input('email');
        $userPassword = $request->input('password');
        try {
            //code...
        } catch (\PDOException $e) {
            echo "Conexao falha: ".$e->getMessage();
        }
    }

    public function logout() {}
}
