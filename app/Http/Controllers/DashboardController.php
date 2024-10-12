<?php

namespace App\Http\Controllers;

use App\Models\Room;
use App\Models\Reservation;

class DashboardController extends Controller
{
    public function site_dashboard()
    {
        $userId = auth()->id();

        $rooms = Room::all();
        $userReservations = Reservation::with(['room', 'user'])->where('user_id', $userId)->get();
        $totalReservations = $userReservations->count();

        return response()->json([
            'totalReservations' => $totalReservations,
            'rooms' => $rooms,
            'userReservations' => $userReservations,
        ], 200);
    }
    
    // public function admin_dashboard()
    // {
    //     return redirect()->route('admin_dashboard');
    // }
}
