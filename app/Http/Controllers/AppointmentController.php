<?php

namespace App\Http\Controllers;

use App\Models\Appointment;
use Illuminate\Http\Request;
use App\Mail\AppointmentConfirmation;
use App\Mail\AdminAppointmentNotification;
use Illuminate\Support\Facades\Mail;
use Carbon\Carbon;
use App\Jobs\SendAppointmentReminder;

class AppointmentController extends Controller
{
    public function show(){
        return view("Appointment.appointment");
    }

    public function bookAppointment(Request $request){
        $request->validate([
            'name' => 'required|string|max:20',
            'phone' => 'required|max:10|digits:10',
            'vehicle_name' => 'required|string|max:20',
            'vehicle_model' => 'required|string|max:20',
            'vehicle_year' => 'required|integer|min:1990|max:' . (date('Y') + 1),
            'appointment_date' => 'required|date|after_or_equal:today',
            'appointment_time_slot' => 'required|string',
            'services' => 'required|array|min:1',
        ], [
            'services.required' => 'Please select at least one service.'
        ]);

        $customer_id = session('id');

        if (!$customer_id) {
            return redirect()->back()->with('error', 'You need to be logged in to book an appointment.');
        }

        $appointment_id = mt_rand(1000, 9999);

        $existingAppointment = Appointment::where('appointment_date', $request->input('appointment_date'))
            ->where('appointment_time_slot', $request->input('appointment_time_slot'))
            ->first();

        if ($existingAppointment) {
            return redirect()->back()->with('error', 'The selected time slot is already booked. Please choose a different slot.');
        }

        $appointment = Appointment::create([
            'appointment_id' => $appointment_id,
            'customer_id' => $customer_id,
            'name' => $request->input('name'),
            'phone' => $request->input('phone'),
            'email' => session('email'),
            'vehicle_name' => $request->input('vehicle_name'),
            'vehicle_model' => $request->input('vehicle_model'),
            'vehicle_year' => $request->input('vehicle_year'),
            'appointment_date' => $request->input('appointment_date'),
            'appointment_time_slot' => $request->input('appointment_time_slot'),
            'services' => json_encode($request->input('services')),
            'reminder_sent' => false, // Set default to false
        ]);

        Mail::to($appointment->email)->send(new AppointmentConfirmation($appointment));

        $adminEmail = 'nirajthesiya0708@gmail.com';
        Mail::to($adminEmail)->send(new AdminAppointmentNotification($appointment));


        return redirect()->back()->with('success', 'Your appointment request was sent successfully. You can check your email.');
    }


    public function fetchBookSlots(Request $request){
        $request->validate([
            'date' => 'required|date|after_or_equal:today',
        ]);

        $bookedSlots = Appointment::where('appointment_date', $request->date)
            ->pluck('appointment_time_slot')
            ->toArray();

        return response()->json($bookedSlots);
    }

}
