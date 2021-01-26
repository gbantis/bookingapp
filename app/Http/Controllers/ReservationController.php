<?php

namespace App\Http\Controllers;

use App\Models\Reservation;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ReservationController extends Controller
{
    public function __construct()
    {
        $this->middleware(['auth'])->only(['store', 'destroy']);
    }

    public function store(Request $request)
    {
        Auth::user()->reservations()->create([
            'room_id' => $request->room_id,
            'start_date' => $request->checkin,
            'end_date' => $request->checkout,
            'price' => $request->total,
        ]);

        $notification = [
            'message' => 'Your Reservation created',
            'alert-type' => 'success',
        ];

        return redirect()->route('rooms.show', $request->room_id)->with($notification);
    }

    public function bookingrequests()
    {
        $rooms = Auth::user()->rooms()->with('reservations')->get();

        return view('dashboard.requests', compact('rooms'));
    }

    public function update(Request $request, Reservation $reservation)
    {
        $reservation->status = $request->status;
        $reservation->status = request('status');
        $reservation->save();

        return redirect()->back()->with('message', 'task marked complete');
    }
}
