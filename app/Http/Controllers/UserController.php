<?php

namespace App\http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{
    public function store(Request $request)
    {
        // Validação dos dados do formulário
        $request->validate([
            'email' => 'required|email|unique:users',
            'password' => 'required|min:6',
        ]);

        // Criação do usuário
        user::create([
            'email' => $request->email,
            'password' => bcrypt($request->password),
        ]);

        // Redirecionamento ou resposta de sucesso
        return redirect()->back()->with('success', 'Usuário registrado com sucesso!');
    }
}
