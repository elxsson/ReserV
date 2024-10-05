<?php

namespace App\Http\Controllers;

use App\Models\Reservation;
use App\Models\Room;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ReservationController extends Controller
{

    public function index()
    {
        $userId = auth()->id();
        $reservations = Reservation::with(['room', 'user'])->where('user_id', $userId)->get();

        return view('site.reservation.index', compact('reservations'));
    }

    public function create(Request $request)
    {
        $roomId = $request->query('room_id');
        $room = Room::find($roomId);
    
        return view('site.reservation.create', compact('room'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'room_id' => 'required|exists:rooms,id',
            'day_reservation' => 'required|date|after_or_equal:today',
            'start_time' => 'required|date_format:H:i',
            'end_time' => 'required|date_format:H:i|after:start_time',
        ]);

        $reservation = new Reservation($request->all());
        $reservation->user_id = Auth::id();
        $reservation->save();

        return redirect()->route('dashboard')->with('success', 'Reserva created successfully!');
    }
    
    public function edit(Reservation $reservation)
    {
        return view('site.reservation.edit', compact('reservation'));
    }

    public function update(Reservation $reservation, Request $request)
    {
        $request->validate([
            'day_reservation' => 'required|date|after_or_equal:today',
            'start_time' => 'required|date_format:H:i',
            'end_time' => 'required|date_format:H:i|after:start_time',
        ]);

        $reservation->update($request->all());

        return redirect()->route('dashboard')->with('success', 'Reserva Atualizada com Sucesso!');
    }

    public function show(Reservation $reservation)
    {
        return view('site.reservation.show', compact('reservation'));
    }

    public function destroy(Reservation $reservation)
    {
        $reservation->delete();
        return redirect()->route('dashboard')->with('success', 'Reserva Deletada com Sucesso!');
    }
}
