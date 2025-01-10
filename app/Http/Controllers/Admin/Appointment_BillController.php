<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Appointment;
use App\Models\AppointmentBill;
use App\Mail\AppointmentBill_Mail;
use App\Models\Service;
use App\Mail\AppointmentRejection;
use App\Mail\AppointmentSuccess;
use Illuminate\Http\JsonResponse;
use Illuminate\Support\Facades\Mail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Storage;
use PDF;


class Appointment_BillController extends Controller
{

    public function createBill($appointment_id)
    {
        $appointment = Appointment::findOrFail($appointment_id);
        $appointments = Appointment::all();
        $services = Service::all();

        $appointmentServices = json_decode($appointment->services);
        if (!is_array($appointmentServices)) {
            $appointmentServices = [];
        }

        $matchingServices = $services->filter(function ($service) use ($appointmentServices) {
            return in_array(trim($service->service_name), array_map('trim', $appointmentServices));
        });

        return view('Admin.bill', compact('appointment', 'appointments', 'matchingServices','appointment_id'));
    }



    public function generateBill(Request $request)
    {
        $validatedData = $request->validate([
            'car_number' => 'required|string',
            'kilometers' => 'required|numeric',
            'services' => 'required|array',
            'services.*' => 'string',
            'prices' => 'required|array',
            'prices.*' => 'numeric',
            'total_amount' => 'required|numeric',
        ]);

        $appointmentBill = AppointmentBill::create([
            'appointment_id' => $request->input('appointment_id'),
            'car_number' => $validatedData['car_number'],
            'kilometers' => $validatedData['kilometers'],
            'services' => implode(',', $validatedData['services']),
            'prices' => implode(',', $validatedData['prices']),
            'total_amount' => $validatedData['total_amount'],
        ]);

        $pdf = PDF::loadView('Admin.Appointment_Bill_pdf', [
            'car_number' => $validatedData['car_number'],
            'kilometers' => $validatedData['kilometers'],
            'services' => $validatedData['services'],
            'prices' => $validatedData['prices'],
            'total_amount' => $validatedData['total_amount'],
        ]);

        $pdfPath = public_path('pdfs/Appointment_Bill_' . $appointmentBill->id . '.pdf');
        $pdf->save($pdfPath);

        Mail::to($request->input('user_email'))->send(new AppointmentBill_Mail(
            $validatedData['car_number'],
            $validatedData['kilometers'],
            $validatedData['services'],
            $validatedData['prices'],
            $validatedData['total_amount'],
            $pdfPath
        ));

        return redirect()->back()->with('success', 'Bill generated and sent to email successfully!');
    }


}
