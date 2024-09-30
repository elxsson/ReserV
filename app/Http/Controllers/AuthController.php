<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function register_create()
    {
        return view('auth.register');
    }

    public function register_store(Request $request)
    {

        $request->validate([
            'name' => 'required|max:255',
            'email' => 'required|email|max:255|unique:users,email',
            'password' => 'required|min:8|confirmed',
            'terms' => 'required|accepted',
        ], [
            'name.required' => 'O nome é obrigatório.',
            'name.max' => 'O nome não pode ter mais de 255 caracteres.',
            'email.required' => 'O e-mail é obrigatório.',
            'email.email' => 'O e-mail deve ser um endereço de e-mail válido.',
            'email.max' => 'O e-mail não pode ter mais de 255 caracteres.',
            'email.unique' => 'O e-mail já está em uso.',
            'password.required' => 'A senha é obrigatória.',
            'password.min' => 'A senha deve ter pelo menos 8 caracteres.',
            'password.confirmed' => 'A confirmação da senha não corresponde.',
            'terms.required' => 'Você deve aceitar os termos de serviço.',
            'terms.accepted' => 'Você deve aceitar os termos de serviço.',
        ]);

        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => bcrypt($request->password),
        ]);

        Auth::login($user);

        return redirect('/site/dashboard')->with('success', 'Conta criada com sucesso!');
    }

    
    public function login_create()
    {
        return view('auth.login');
    }

    public function login(Request $request)
    {
        $credentials = $request->only('email', 'password');

        if (Auth::attempt($credentials)) {
            return redirect()->intended('/site/dashboard')
                             ->with('success', 'Login realizado com sucesso!');
        }

        return back()->withInput($request->only('email'))
                     ->with('error', 'Credenciais inválidas. Por favor, tente novamente.');
    }

    public function logout()
    {
        Auth::logout();
        return redirect()->route('login_create')->with('success', 'Você foi desconectado com sucesso.');
    }

}
