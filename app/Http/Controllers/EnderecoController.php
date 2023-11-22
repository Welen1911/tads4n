<?php

namespace App\Http\Controllers;

use App\Http\Requests\EnderecoStore;
use App\Models\Endereco;
use App\Models\Usuario;
use Illuminate\Http\Request;

class EnderecoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Usuario $usuario)
    {
        return view('enderecos.create', compact('usuario'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store( Usuario $usuario, EnderecoStore $request)
    {
        Endereco::create([
            'logradouro' => $request->logradouro,
            'numero' => $request->numero,
            'usuario_id' => $usuario->id,
        ]);

        return redirect()->route('usuario.show', $usuario->id);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Endereco  $endereco
     * @return \Illuminate\Http\Response
     */
    public function show(Endereco $endereco)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Endereco  $endereco
     * @return \Illuminate\Http\Response
     */
    public function edit(Endereco $endereco,  Usuario $usuario)
    {
        return view('enderecos.edit', compact('endereco', 'usuario'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Endereco  $endereco
     * @return \Illuminate\Http\Response
     */
    public function update(EnderecoStore $request, Endereco $endereco, Usuario $usuario)
    {
        $endereco->update([
            'logradouro' => $request->logradouro,
            'numero' => $request->numero,
        ]);

        return redirect()->route('usuario.show', compact('usuario'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Endereco  $endereco
     * @return \Illuminate\Http\Response
     */
    public function destroy(Endereco $endereco)
    {
        //
    }
}
