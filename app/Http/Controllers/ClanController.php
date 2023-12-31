<?php

namespace App\Http\Controllers;

use App\Models\Clan;    
use Illuminate\Http\Request;

class ClanController extends Controller
{
    // Lista de todos os clãs
    public function index()
    {
        $clans = Clan::all();
        return response()->json($clans);
    }

    // Adicionando clã
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'nullabel|string',
            'symbol_url'=>'nullabel|string'
        ]);
        $clan = Clan::create($request->all());
        return response()->json($clan, 201);
    }

    // Retornando cla conforme o id
    public function show(Clan $clan)
    {
        return response() -> json($clan);
    }

    // Método update para atualizar um cla existente

    public function update(Request $request, Clan $clan)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'nullable|string',
            'symbol_url' => 'nullable|string'
        ]);
    
        $clan->update($request->all());
        return response()->json($clan);
    }

    // excluir um clã específico com base em seu ID
    public function destroy(Clan $clan)
    {
        $clan->delete();
        return response()->json(null, 204);
    }


}
