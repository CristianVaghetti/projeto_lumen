<?php

namespace App\Http\Controllers;

use App\Models\Usuario;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Crypt;

class UsuarioController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function getUsers()
    {
        $usuarios = Usuario::all();
        return $usuarios;
    }

    public function index()
    {
        return view('usuarios', ['usuarios' => $this->getUsers(), 'flagBusca' => false]);
    }

    public function show(Request $request)
    {
        $achou = Usuario::find($request->id);
        isset($achou) ? $achou : $achou = 'azar';

        return view('usuarios', ['usuarios' => $this->getUsers(), 'flagBusca' => $achou]);
        
    }


    public function create(Request $request)
    {
            $usuario = new Usuario();
            $usuario->nome = $request->nome;
            $usuario->email = $request->email;
            $usuario->senha = Crypt::encrypt($request->senha);
            $usuario->save();
            return $this->index();
    }

    public function form()
    {
        return view('cadastro', ['metodo' => 'Cadastrar']);
    }

    public function list()
    {
        return view('busca');
    }

    public function edit($id){
        return view('cadastro', ['metodo' => 'Editar', 'id' => $id]);
    }

    public function update(Request $request, $id)
    {
        $usuario = Usuario::find($id);
        if (isset($usuario)) {
            $usuario->nome = $request->nome;
            $usuario->email = $request->email;
            $usuario->senha = $request->senha;
            $usuario->save();
            return $this->index();
        } else return "<h1>cccccc</h1>";
    }

    public function delete($id)
    {
        $usuario = Usuario::find($id);
        if (isset($usuario)) {
            $usuario->delete();
            return $this->index();
        } else return "<h1>dddddddddd</h1>";
    }
}
