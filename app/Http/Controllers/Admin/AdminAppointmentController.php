<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Appointment;
use App\Models\AppointmentBill;
use App\Models\Service;
use App\Mail\AppointmentRejection;
use App\Mail\AppointmentSuccess;
use Illuminate\Http\JsonResponse;
use Illuminate\Support\Facades\Mail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;


class AdminAppointmentController extends Controller
{


    public function index()
    {
        $appointments = Appointment::all();
        return view('Admin.appointment', compact('appointments'));
    }

    public function view($appointment_id)
    {
        $appointment = Appointment::findOrFail($appointment_id);
        return view('Admin.appointment_view', compact('appointment'));
    }

    public function delete($appointment_id)
    {
        $appointment = Appointment::findOrFail($appointment_id);
        $appointment->delete();

        return redirect()->route('admin.appointments')->with('success', 'Appointment deleted successfully.');
    }

    public function updateStatus(Request $request, $appointment_id)
    {
        $appointment = Appointment::findOrFail($appointment_id);

        if ($request->status == 1) {
            $appointment->status = 1;
            $appointment->save();
            return redirect()->route('admin.bill.create', ['appointment_id' => $appointment_id]);
        } else {
            return redirect()->back()->with('error', 'Unable to generate the bill. Status must be Success.');
        }
    }

    public function viewBill($appointment_id)
    {
        $appointmentBill = AppointmentBill::where('appointment_id', $appointment_id)->firstOrFail();

        $appointment = Appointment::where('appointment_id', $appointment_id)->firstOrFail();

        return view('Admin.appointment_bill_view', compact('appointmentBill', 'appointment'));
    }


}
