<?php

namespace App\Http\Controllers;

use App\Models\Desenvolvedores;
use App\Models\Niveis;
use Illuminate\Http\Request;

class DesenvolvedorController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $Dev = Desenvolvedores::with('niveis')->get(); // Carrega o nível relacionado
        return view('Desenvolvedores', ['devs' => $Dev]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $Dev = Desenvolvedores::all();
        $niveis = Niveis::all();
        return view('CreateDesenvolvedor', ['devs'=> $Dev, 'niveis'=>$niveis]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'nome' => 'required|string|max:255',
            'sexo' => 'required|string',
            'data_nascimento' => 'required|date',
            'hobby' => 'nullable|string',
            'nivel_id' => 'required|exists:niveis,id',
        ]);
    
        Desenvolvedores::create($validated);
    
        return redirect()->route('desenvolvedores.index')->with('success', 'Desenvolvedor criado com sucesso!');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $dev = Desenvolvedores::find($id);

        if($dev) {
            $dev->delete();
            return redirect()->route('desenvolvedores.index')->with('success', 'Livro excluído com sucesso!');
        }else{
            return redirect()->route('desenvolvedores.index')->with('error', 'Desenvolvedor não encontrado');
        }
    }
}
