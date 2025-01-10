<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Appointment;

class TimeslotController extends Controller
{

    public function index(){
        return view("Admin.View_slot");
    }

    public function fetchBookedSlotsForAdmin(Request $request)
    {
        $date = $request->input('date');

        $bookedSlots = [];
        $unavailableSlots = session()->get("unavailable_slots.$date", []);

        $bookedSlots = Appointment::whereDate('appointment_date', $date)
            ->pluck('appointment_time_slot')
            ->toArray();

            return response()->json([
                'bookedSlots' => $bookedSlots,
                'unavailableSlots' => $unavailableSlots
            ]);
    }


}

