<?php

namespace App\Http\Controllers;

use App\Models\Jutsu;
use Illuminate\Http\Request;

class JutsuController extends Controller
{
    // Listar todos os jutsus
    public function index()
    {
        return Jutsu::all();
    }

    // Exibir detalhes de um jutsu específico
    public function show(Jutsu $jutsu)
    {
        return $jutsu;
    }

    // Adicionar um novo jutsu
    public function store(Request $request)
    {
        $jutsu = Jutsu::create($request->all());
        return response()->json($jutsu, 201);
    }

    // Atualizar um justsu existente
    public function update(Request $request, Jutsu $jutsu)
    {
        $jutsu->update($request->all());
        return response()->json($jutsu, 200);
    }

    // Deletar um jutsu
    public function destroy(Jutsu $jutsu)
    {
        $jutsu->delete();
        return response()->json(null, 204);
    }
    
}
