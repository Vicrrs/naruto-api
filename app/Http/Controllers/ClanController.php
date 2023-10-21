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

}
