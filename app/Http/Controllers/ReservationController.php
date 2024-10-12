<?php

namespace App\Http\Controllers;

use App\Models\Reservation;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ReservationController extends Controller
{

    public function index()
    {
        $userId = auth()->id();
        $reservations = Reservation::with(['room', 'user'])->where('user_id', $userId)->get();

        return response()->json([
            'reservations' => $reservations,
        ], 200);
    }

    public function store(Request $request)
    {
        $request->validate([
            'room_id' => 'required|exists:rooms,id',
            'day_reservation' => 'required|date|after_or_equal:today',
            'start_time' => 'required|date_format:H:i',
            'end_time' => 'required|date_format:H:i|after:start_time',
        ]);

        // verifica a disponibilidade do horário
        $exists = Reservation::where('room_id', $request->room_id)
            ->where('day_reservation', $request->day_reservation)
            ->where(function($query) use ($request) {
                $query->whereBetween('start_time', [$request->start_time, $request->end_time])
                    ->orWhereBetween('end_time', [$request->start_time, $request->end_time]);
            })
            ->exists();

        if ($exists) {
            return response()->json(['message' => 'O horário selecionado não está disponível.'], 400);
        }

        $reservation = new Reservation($request->all());
        $reservation->user_id = Auth::id();
        $reservation->save();

        return response()->json(['message' => 'Reserva Criada com Sucesso!'], 201);
    }

    public function update(Reservation $reservation, Request $request)
    {
        $request->validate([
            'day_reservation' => 'required|date|after_or_equal:today',
            'start_time' => 'required|date_format:H:i',
            'end_time' => 'required|date_format:H:i|after:start_time',
        ]);

        $exists = Reservation::where('room_id', $reservation->room_id)
            ->where('day_reservation', $request->day_reservation)
            ->where('id', '<>', $reservation->id) // exclui a reserva que está sendo atualizada
            ->where(function($query) use ($request) {
                $query->whereBetween('start_time', [$request->start_time, $request->end_time])
                    ->orWhereBetween('end_time', [$request->start_time, $request->end_time]);
            })
            ->exists();

        if ($exists) {
            return response()->json(['message' => 'O horário selecionado não está disponível.'], 400);
        }

        $reservation->update($request->only('day_reservation', 'start_time', 'end_time'));
        return response()->json(['message' => 'Reserva Atualizada com Sucesso!']);
    }

    public function destroy(Reservation $reservation)
    {
        if ($reservation->user_id !== auth()->id()) {
            return response()->json(['message' => 'Você não tem permissão para deletar esta reserva.'], 403);
        }

        $reservation->delete();
        return response()->json(['message' => 'Reserva Deletada com Sucesso!'], 200);
    }
}
