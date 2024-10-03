<?php

namespace Database\Factories;

use App\Models\Reservation;
use App\Models\User;
use App\Models\Room;
use Illuminate\Database\Eloquent\Factories\Factory;
use Carbon\Carbon;

class ReservationFactory extends Factory
{
    protected $model = Reservation::class;

    public function definition()
    {
        $startTime = Carbon::now()->addHours(rand(1, 10));
        $endTime = (clone $startTime)->addHours(rand(1, 4));

        return [
            'user_id' => User::factory(),
            'room_id' => Room::factory(),
            'day_reservation' => $startTime->toDateString(),
            'start_time' => $startTime->toTimeString(),
            'end_time' => $endTime->toTimeString(),
        ];
    }
}