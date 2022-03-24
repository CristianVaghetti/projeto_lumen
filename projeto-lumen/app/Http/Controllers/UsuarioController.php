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
        $nome = $usuarios[0]->nome;
        return view('usuario', ['usuarios' => $usuarios]);
    }
    public function show(Request $request, $id)
    {
        $usuario = Usuario::find($id);
        return view('usuario', ['usuarios' => $usuario]);
    }

    public function create(Request $request) {
        $usuario = new Usuario();
        $usuario->nome = $request->nome;
        $usuario->email = $request->email;
        $usuario->senha = $request->senha;
        $usuario->save();
        return view('cadastro', ['usuario' => $usuario]);
    }

    public function update(Request $request, $id) {
        $usuario = Usuario::find($id);
        $usuario->nome = $request->nome;
        $usuario->email = $request->email;
        $usuario->senha = $request->senha;
        $usuario->save();
        return view('update', ['usuario' => $usuario]);
    }

    public function delete(Request $request, $id)
    {
        $usuario = Usuario::find($id);
        $usuario->delete();
        return "DELETADO";
    }

}
