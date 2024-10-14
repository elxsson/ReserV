<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Room;

class RoomController extends Controller
{
    public function __construct()
    {
        $this->middleware(['auth', 'admin'])->except('show');
    }

    public function index()
    {
        $rooms = Room::all();
        return response()->json($rooms, 200);
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'name' => 'required|string|max:10',
            'capacity' => 'required|integer|min:4',
            'equipment' => 'nullable|array',
            'equipment.*' => 'string|max:255',
        ],  
        [
            'name.required' => 'O nome é obrigatório.',
            'name.max' => 'O nome não pode ter mais de 10 caracteres.',
            'name.string' => 'O nome deve ser uma string válida.',
            'capacity.required' => 'A capacidade é obrigatória.',
            'capacity.integer' => 'A capacidade deve ser um número inteiro.',
            'capacity.min' => 'A capacidade deve ser de no mínimo 4.',
            'equipment.array' => 'Os equipamentos devem ser uma lista.',
            'equipment.*.max' => 'Cada equipamento pode ter no máximo 255 caracteres.',
        ]);

        $room = Room::create($data);
        return response()->json(['message' => 'Sala Criada com Sucesso!', 'room' => $room], 201);
    }

    public function update(Room $room, Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:10',
            'capacity' => 'required|integer|min:4',
            'equipment' => 'nullable|array',
            'equipment.*' => 'string|max:255',
        ]);

        $room->update($request->only('name', 'capacity', 'equipment'));
        return response()->json(['message' => 'Sala Atualizada com Sucesso!', 'room' => $room], 200);
    }

    public function show(Room $room)
    {
        return response()->json($room, 200);
    }

    public function destroy(Room $room)
    {
        $room->delete();
        return response()->json(['message' => 'Sala Deletada com Sucesso!'], 204);
    }
}