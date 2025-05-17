<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Usuario;
use Illuminate\Http\Request;
use Symfony\Component\Console\Input\Input;

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

        // if user exists
        $user = Usuario::where('email', $userEmail)
            ->where('deleted_at', null)
            ->first();

        if (!$user) {
            return redirect()->back()->withInput()->with('loginError', 'Email ou senha incorretos!');
        }

        //check password
        if (!password_verify($userPassword, $user->password)) {
            return redirect()->back()->withInput()->with('loginError', 'Email ou senha incorretos!');
        }

        //update last_login
        $user->last_login = date('Y-m-d H:i:s');
        $user->save();

        //session login
        session([
            'user' => [
                'id' => $user->id,
                'name' => $user->name,
                'email' => $userEmail
            ]
        ]);

        return redirect()->route('home');
    }

    public function logout() {
        //logout from aplication
        session()->forget('user');
        return redirect()->route('login');
    }
}
