<?php

namespace App\Http\Controllers;

use App\Models\Colaborador;
use Illuminate\Http\Request;

class ColaboradorController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
{
    $colaboradores = Colaborador::all();

    return view('colaboradores.index', compact('colaboradores'));
}


    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
{
    $request->validate([
        'nome_completo' => 'required|string|max:255',
        'setor' => 'required|in:Tecnologia,Administrativo,Projeto',
        'cidade' => 'required|string',
        'data_checkin' => 'required|date',
    ]);

    Colaborador::create([
        'nome_completo' => $request->nome_completo,
        'setor' => $request->setor,
        'cidade' => $request->cidade,
        'data_checkin' => $request->data_checkin,
    ]);

    return redirect()->route('colaboradores.index')->with('success', 'Colaborador cadastrado com sucesso!');
}

    /**
     * Display the specified resource.
     */
    public function show($id)
{
    $colaborador = Colaborador::findOrFail($id);

    return view('colaboradores.show', compact('colaborador'));
}


    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
{
    $colaborador = Colaborador::findOrFail($id);

    return view('colaboradores.edit', compact('colaborador'));
}

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
{
    $request->validate([
        'nome_completo' => 'required|string|max:255',
        'setor' => 'required|in:Tecnologia,Administrativo,Projeto',
        'cidade' => 'required|string',
        'data_checkin' => 'required|date',
    ]);

    $colaborador = Colaborador::findOrFail($id);
    $colaborador->update([
        'nome_completo' => $request->nome_completo,
        'setor' => $request->setor,
        'cidade' => $request->cidade,
        'data_checkin' => $request->data_checkin,
    ]);

    return redirect()->route('colaboradores.index')->with('success', 'Colaborador atualizado com sucesso!');
}


    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
{
    $colaborador = Colaborador::findOrFail($id);

    $colaborador->delete();

    return redirect()->route('colaboradores.index')->with('success', 'Colaborador excluído com sucesso!');
}
}
