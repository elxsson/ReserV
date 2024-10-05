<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Room;

class RoomController extends Controller
{
    public function __construct()
    {
        $this->middleware(['auth', 'admin']);
    }

    public function index()
    {
        $rooms = Room::all();
        return view('rooms', compact('rooms'));
    }

    public function create()
    {
        return view('site.room.create');
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

        Room::create($data);
        return redirect()->route('admin-dashboard')->with('success', 'Sala Criada com Sucesso!');
    }

    public function edit(Room $room)
    {
        return view('site.room.edit', compact('room'));
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
        return redirect()->route('/')->with('success', 'Sala Atualizada com Sucesso!');
    }

    public function show(Room $room)
    {
        return view('site.room.show', compact('room'));
    }

    public function destroy(Room $room)
    {
        $room->delete();
        return redirect()->route('/')->with('success', 'Sala Deletada com Sucesso!'); //redirecionar para o dashboard adm
    }
}