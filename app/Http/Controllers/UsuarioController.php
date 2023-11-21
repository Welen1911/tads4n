<?php

namespace App\Http\Controllers;

use App\Models\Endereco;
use App\Models\Usuario;
use Illuminate\Http\Request;

class UsuarioController extends Controller
{
    public function index()
    {
        $usuarios = Usuario::all();

        return view('usuarios.index', compact('usuarios'));
    }
    public function create()
    {
        return view('usuarios.create');
    }
    public function store(Request $request)
    {
        // dd($request->all());
        $usuario = Usuario::create([
            'nome' => strtolower($request->nome),
            'email' => strtolower($request->email),
            'senha' => $request->senha
        ]);

        $usuario->telefone()->create([
            'celular' => $request->celular,
            'telfixo' => $request->telfixo,
        ]);

        $usuario->endereco()->create([
            'logradouro' => $request->logradouro,
            'numero' => $request->numero,
        ]);

        return redirect()->route('usuario.index');
    }
    public function show(Usuario $usuario)
    {
        return view('usuarios.show', compact('usuario'));
    }
    public function edit(Usuario $usuario)
    {
        return view('usuarios.edit', compact('usuario'));
    }
    public function update(Request $request, Usuario $usuario)
    {
        $usuario->update([
            'nome' => strtolower($request->nome),
            'email' => strtolower($request->email),
            'senha' => ($request->senha == null) ? 123 : $request->senha
        ]);

        $usuario->telefone->update([
            'celular' => $request->celular,
            'telfixo' => $request->telfixo,
        ]);

        return redirect()->route('usuario.index');
    }
    public function destroy(Usuario $usuario)
    {
        // dd($usuario);
        $usuario->destroy($usuario->id);
        return redirect()->route('usuario.index');
    }

    public function createEndereco(Usuario $usuario)
    {
        return view('enderecos.create', compact('usuario'));
    }

    public function storeEndereco(Usuario $usuario, Request $request) {
        $usuario->endereco()->create([
            'logradouro' => $request->logradouro,
            'numero' => $request->numero,
        ]);

        return redirect()->route('usuario.show', $usuario->id);
    }

    public function editEndereco(Endereco $endereco) {
        return view('enderecos.edit', compact('endereco'));
    }

    public function updateEndereco( Endereco $endereco, Request $request) {
        $endereco->update([
            'logradouro' => $request->logradouro,
            'numero' => $request->numero,
        ]);

        return redirect()->route('usuario.index');
    }
}
