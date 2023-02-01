<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class UsuariosController extends Controller
{

    public function index()
    {
        $usuarios = User::all();
        //dd($usuarios);
        return view('admin.usuarios.index', [
            'usuarios' => $usuarios,
            'meuNome' => "Victor Smaniotto"
        ]);
    }


    public function create()
    {
        return view('admin.usuarios.cadastrar');
    }


    public function store(Request $request)
    {
        // dd($request);
        $request->validate([
            'nome'=>'required',
            'email'=>'required|email|unique:users',
            'password'=>'required|min:8'
        ]);

        try{
            $usuario = new User();
            $usuario->nome = $request->nome;
            $usuario->email = $request->email;
            $usuario->password = bcrypt($request->password);
            $usuario->role = $request->role;
            $usuario->save();

            return redirect()->route('admin.usuarios.index')->with('sucesso', 'Usuário cadastrado com sucesso');
        }catch(\Exception $e){
            // dd($e->getMessage());
            return redirect()->back()->withInput()->with('erro', 'Ocorreu um erro ao cadastrar, por favor tente novamente');
        };
    }


    public function show($id)
    {
        //
    }


    public function edit($id)
    {
        //
    }


    public function update(Request $request, $id)
    {
        //
    }


    public function destroy($id)
    {
        //
    }
}
