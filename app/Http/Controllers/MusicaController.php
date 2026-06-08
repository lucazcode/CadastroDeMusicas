<?php

namespace App\Http\Controllers;

use App\Models\Musica;
use App\Http\Requests\MusicaRequest;

class MusicaController extends Controller
{
    public function index()
    {
        $musicas = Musica::all();
        return view('musicas.index')->with('musicas', $musicas);
    }

    public function create()
    {
        return view('musicas.create');
    }

    public function store(MusicaRequest $request)
    {
        Musica::create($request->validated());
        return redirect()->route('musicas.index')->with('sucesso', 'Musica cadastrada com sucesso!');
    }

    public function show(Musica $musica)
    {
        return view('musicas.show')->with('musica', $musica);
    }

    public function edit(Musica $musica)
    {
        return view('musicas.edit')->with('musica', $musica);
    }

    public function update(MusicaRequest $request, Musica $musica)
    {
        $musica->update($request->validated());
        return redirect()->route('musicas.index')->with('sucesso', 'Musica atualizada com sucesso!');
    }

    public function destroy(Musica $musica)
    {
        $musica->delete();
        return redirect()->route('musicas.index')->with('sucesso', 'Musica removida com sucesso!');
    }
}
