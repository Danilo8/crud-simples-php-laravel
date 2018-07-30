<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Agenda;

class AgendaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $contatos = Agenda::all();
        return view('index', compact('contatos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('cadastro');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Agenda::create($request->all());
        return redirect('/')->with(['success' => 'Contato cadastrado com sucesso!']);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $contato = Agenda::findOrFail($id);
        return view('view', compact('contato'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $contato = Agenda::findOrFail($id);
        return view('editar', compact('contato'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $contato = $request->all();
        $id = Agenda::findOrFail($id);
        $id->update($contato);
        return redirect('/')->with(['success' => 'Contato editado com sucesso!']);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $contato = Agenda::findOrFail($id);
        $contato->delete($id);
        return redirect('/')->with(['success' => 'Contato excluido com sucesso!']);
    }
}
