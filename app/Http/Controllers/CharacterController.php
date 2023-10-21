<?php

namespace App\Http\Controllers;

use App\Models\Character;
use Illuminate\Http\Request;

class CharacterController extends Controller
{
    // Listar todos os personagens
    public function index()
    {
        return Character::all();
    }

    // Exibir detalhes de um personagem específico
    public function show(Character $character)
    {
        return $character;
    }

    // Adicionar um novo personagem
    public function store(Request $request)
    {
        $character = Character::create($request->all());
        return response()->json($character, 201);
    }

    // Atualizar o persongem existente
    public function update(Request $request, Character $character)
    {
        $character->update($request->all());
        return response()->json($character, 200);
    }

    // Deletar um personagem
    public function destroy(Character $character)
    {
        $character->delete();
        return response()->json(null, 204);
    }

}
