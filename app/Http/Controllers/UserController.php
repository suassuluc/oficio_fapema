<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{

    public function index()
    {
        $Usuario = user::paginate();
        return view('pages.usuarios.index',['Usuario'=> $Usuario]);

    }


    public function promoteToAdmin($id)
{
    $user = User::findOrFail($id);
    $user->role = 'admin';
    $user->save();

    return redirect()->back()->with('success', 'Usuário promovido a administrador com sucesso!');
}
}
