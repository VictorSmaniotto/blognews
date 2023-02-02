<?php

namespace App\Http\Controllers\Api;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class UsuarioController extends Controller
{
    public function getUsuarios()
    {
        $usuarios = User::all();
        return $usuarios->toJson();
    }

    public function cadastrarUsuario(Request $request)
    {

    }
}
