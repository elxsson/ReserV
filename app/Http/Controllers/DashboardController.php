<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Room;
use App\Models\Reservation;
use Carbon\Carbon;

class DashboardController extends Controller
{
    public function site_dashboard()
    {
        $userId = auth()->id();

        $rooms = Room::all();
        $userReservations = Reservation::with(['room', 'user'])->where('user_id', $userId)->get();
        $totalReservations = $userReservations->count();

        return view('site.dashboard', compact(
            'totalReservations',
            'rooms',
            'userReservations'
        ));
    }
    
    // public function admin_dashboard()
    // {
    //     return redirect()->route('admin_dashboard');
    // }
}
