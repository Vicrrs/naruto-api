<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Mission;

class MissionController extends Controller
{
    // Listar todas as missões
    public function index()
    {
        $missions = Mission::all();
        return response()->json($missions);
    }

    // Mostrar detalhes de uma missão específica
    public function show($id)
    {
        $mission = Mission::find($id);
        if (!$mission){
            return response()->json(['message' => 'Mission not found'], 404);
        }
        return response()->json($mission);
    }

    // Criar uma nova missão
    public function store(Request $request) {

        $this->validate($request, [
            'name' => 'required',
            'description' => 'required',
            'rank' => 'required|in:D,C,B,A,S'
        ]);
        $mission = Mission::create($request->all());
        return response()->json($mission, 201);
    }

    // Atualizar a missao existente
    public function update(Request $request, $id)
    {
        $mission = Mission::find($id);

        if (!$mission) {
            return response()->json(['message'=>'Mission not found'], 404);
        }
        $mission->update($request->all());
        return response()->json($mission);
    }

    // Excluir uma missao
    public function destroy($id)
    {
        $mission = Mission::find($id);
        if (!$mission) {
            return response()->json(['message' => 'Mission not found'], 404);
        }
    
        $mission->delete();
    
        return response()->json(['message' => 'Mission deleted successfully']);
    }

}
