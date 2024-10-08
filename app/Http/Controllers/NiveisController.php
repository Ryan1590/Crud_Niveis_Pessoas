<?php

namespace App\Http\Controllers;

use App\Models\Niveis;
use Illuminate\Http\Request;

class NiveisController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {   
      $niveis = Niveis::get();
      return view('Niveis', ['niveis' => $niveis]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {

       return view('CreateNiveis');
        
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'nivel' => 'required|string|max:255',
        ]);
    
        Niveis::create($validated);
        return redirect()->route('niveis.index')->with('success', 'Nivel criado com sucesso!');
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
        $nivel = Niveis::find($id);
        return view('CreateNiveis', compact('nivel'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $validated = $request->validate([
            'nivel' => 'required|string|max:255',
        ]);
    
        $nivel = Niveis::findOrFail($id);

        $nivel->update($validated);
        return redirect()->route('niveis.index')->with('success', 'Nivel Atualizado com sucesso!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $niveis = Niveis::find($id);
    
        if($niveis){
            $niveis->delete();
            return redirect()->route('niveis.index')->with('success', 'Nivel excluído com sucesso!');
        }else{
            return redirect()->route('niveis.index')->with('error', 'Nivel não encontrado');
        }
    }
}
