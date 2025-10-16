<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Reservation;
use App\Http\Requests\ReservationRequest;
use Carbon\Carbon;

class ReservationController extends Controller
{
    public function store(ReservationRequest $request, $shop_id)
    {
        Reservation::create([
            'user_id' => Auth::id(),
            'shop_id' => $shop_id,
            'date' => $request->date,
            'time' => $request->time,
            'number_of_people' => $request->number_of_people,
        ]);

        return redirect()->route('reservation.done');
    }

    public function done()
    {
        return view('reservation.done');
    }


    public function destroy($id)
    {
        $reservation = Reservation::findOrFail($id);

        if ($reservation->user_id === Auth::id()) {
            $reservation->delete();
        }

        return redirect()->route('mypage.index');
    }
}
