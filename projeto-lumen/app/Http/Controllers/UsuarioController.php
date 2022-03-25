<?php

namespace App\Http\Controllers;

use App\Models\Usuario;
use Illuminate\Http\Request;

class UsuarioController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function index()
    {
        $usuarios = Usuario::all();
        return view('usuarios', ['usuarios' => $usuarios]);
    }

    public function show(Request $request, $id)
    {
        $usuario = Usuario::find($id);
        if (isset($usuario))
            return view('usuarios', ['usuario' => $usuario]);
        else
            return "<h1>ERRO</h1>";
    }


    public function create(Request $request)
    {
        if (isset($request->nome)) {
            $usuario = new Usuario();
            $usuario->nome = $request->nome;
            $usuario->email = $request->email;
            $usuario->senha = $request->senha;
            $usuario->save();
            return "SUCESSO";
        } else return "ERRO";
    }

    public function form(Request $request)
    {
        return view('cadastro');
    }

    public function update(Request $request, $id)
    {
        $usuario = Usuario::find($id);
        if (isset($usuario)) {
            $usuario->nome = $request->nome;
            $usuario->email = $request->email;
            $usuario->senha = $request->senha;
            $usuario->save();
            return "ALTERADO";
        } else return "<h1>ERRO</h1>";
    }

    public function delete(Request $request, $id)
    {
        $usuario = Usuario::find($id);
        if (isset($usuario)) {
            $usuario->delete();
            return "DELETADO";
        } else return "<h1>ERRO</h1>";
    }
}
