<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Customer;
use App\Models\Service;
use App\Models\Appointment;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;
use App\Models\AppointmentBill;
use PDF;

class AdminController extends Controller
{

    public function index(Request $request, $startDate = null, $endDate = null)
    {
        $count = Customer::count();
        $filter = $request->get('filter', 'today');
        $query = Customer::query();

        if ($filter == 'today') {
            $count = $query->whereDate('created_at', Carbon::today())->count();
        } elseif ($filter == 'week') {
            $count = $query->whereBetween('created_at', [Carbon::now()->startOfWeek(), Carbon::now()->endOfWeek()])->count();
        } elseif ($filter == 'month') {
            $count = $query->whereMonth('created_at', Carbon::now()->month)->count();
        } elseif ($filter == 'year') {
            $count = $query->whereYear('created_at', Carbon::now()->year)->count();
        } elseif ($filter == 'all') {
            $count = $query->count();
        }

        $appointmentCount = Appointment::count();
        $appointmentfilter = $request->get('appointmentfilter', 'today');
        $appointmentquery = Appointment::query();

        if ($appointmentfilter == 'today') {
            $appointmentCount = $appointmentquery->whereDate('created_at', Carbon::today())->count();
        } elseif ($appointmentfilter == 'week') {
            $appointmentCount = $appointmentquery->whereBetween('created_at', [Carbon::now()->startOfWeek(), Carbon::now()->endOfWeek()])->count();
        } elseif ($appointmentfilter == 'month') {
            $appointmentCount = $appointmentquery->whereMonth('created_at', Carbon::now()->month)->count();
        } elseif ($appointmentfilter == 'year') {
            $appointmentCount = $appointmentquery->whereYear('created_at', Carbon::now()->year)->count();
        } elseif ($appointmentfilter == 'all') {
            $appointmentCount = $appointmentquery->count();
        }

        // Fetch the appointment data
        $appointments = Appointment::with('appointmentBill')->get();  // Fetch appointments with related appointment bills

        // Appointment data filtering by start and end date (for PDF report generation)
        if ($startDate && $endDate) {
            $totalAppointments = Appointment::whereBetween('appointment_date', [$startDate, $endDate])->count();

            $peakServiceHours = Appointment::selectRaw('HOUR(appointment_time_slot) as hour, COUNT(*) as count')
                ->whereBetween('appointment_date', [$startDate, $endDate])
                ->groupBy('hour')
                ->orderBy('count', 'DESC')
                ->first();

            $totalCustomers = Customer::count();
            $newCustomers = Customer::where('created_at', '>=', Carbon::today()->subDays(7))->count();
            $returningCustomers = $totalCustomers - $newCustomers;

            $mostRequestedServices = Appointment::select('services')
                ->whereBetween('appointment_date', [$startDate, $endDate])
                ->groupBy('services')
                ->selectRaw('services, COUNT(*) as count')
                ->orderBy('count', 'DESC')
                ->take(5)
                ->get();

            $revenueByService = DB::table('appointments')
                ->join('services', 'appointments.services', '=', 'services.service_id')
                ->select('services.service_name', DB::raw('SUM(services.price_range) as total_revenue'))
                ->whereBetween('appointments.appointment_date', [$startDate, $endDate])
                ->groupBy('services.service_name')
                ->get();

            $pdf = PDF::loadView('Admin.report', compact(
                'totalAppointments',
                'peakServiceHours',
                'totalCustomers',
                'newCustomers',
                'returningCustomers',
                'mostRequestedServices',
                'revenueByService'
            ));

            return $pdf->download('report.pdf');
        }

        // Return the view with appointment data for display
        return view("Admin.index", compact('count', 'filter', 'appointmentCount', 'appointmentfilter', 'appointments'));
    }


    public function users() {
        $users = Customer::all();
        return view("Admin.users", compact('users'));
    }

    public function delete($id){
        $customer = Customer::find($id);

        if ($customer) {
            $customer->delete();
            return redirect()->back()->with('success', 'Customer deleted successfully.');
        } else {
            return redirect()->back()->with('error', 'Customer not found.');
        }
    }

    public function view($id){
        $customer = Customer::find($id);

        if ($customer) {
            return view("Admin.user_view", compact('customer'));
        } else {
            return redirect()->back()->with('error', 'Customer not found.');
        }
    }

    public function generateDailyReport(Request $request){
        return $this->index($request, Carbon::today(), Carbon::today());
    }

    public function generateWeeklyReport(Request $request){
        return $this->index($request, Carbon::now()->startOfWeek(), Carbon::now()->endOfWeek());
    }

    public function generateMonthlyReport(Request $request){
        return $this->index($request, Carbon::now()->startOfMonth(), Carbon::now()->endOfMonth());
    }

    public function generateYearlyReport(Request $request){
        return $this->index($request, Carbon::now()->startOfYear(), Carbon::now()->endOfYear());
    }

    public function generateAllReports(Request $request){
        return $this->index($request, null, null);
    }

    public function customReport(){
        return view('Admin.custom_report_view');
    }

    public function generateReport(Request $request) {
        $request->validate([
            'adminStartDateInput' => 'required|date',
            'adminEndDateInput' => 'required|date',
            'selectTable' => 'required|string',
        ]);

        $startDate = $request->adminStartDateInput;
        $endDate = $request->adminEndDateInput;
        $table = $request->selectTable;

        $data = collect();
        $count = 0;

        switch ($table) {
            case 'customers':
                $data = Customer::select('customer_id', 'customer_name', 'email', 'created_at')
                                ->whereBetween('created_at', [$startDate, $endDate])
                                ->get();
                $count = $data->count();
                break;

            case 'appointments':
                $data = Appointment::select('appointment_id', 'name', 'email', 'phone', 'created_at')
                                   ->whereBetween('created_at', [$startDate, $endDate])
                                   ->get();
                $count = $data->count();
                break;

            case 'services':
                $servicesList = Service::select('service_id', 'service_name')->get();

                $servicesCount = Appointment::select('services', DB::raw('COUNT(*) as service_count'))
                    ->whereBetween('created_at', [$startDate, $endDate])
                    ->groupBy('services')
                    ->orderBy('service_count', 'DESC')
                    ->get();

                $data = [
                    'servicesList' => $servicesList,
                    'servicesCount' => $servicesCount,
                ];

                $count = $servicesCount->count();
                break;

            default:
                return redirect()->back()->with('error', 'Invalid table selected.');
        }

        if (empty($data) || (is_array($data) && empty($data['servicesList']) && empty($data['servicesCount']))) {
            return redirect()->back()->with('info', 'No data found for the selected criteria.');
        }

        $pdf = PDF::loadView('Admin.custom_report', compact('data', 'startDate', 'endDate', 'table', 'count'));

        return $pdf->download('custom_report.pdf');
    }

    public function showAppointments()
    {
        // Fetch appointments with their related AppointmentBill data
        $appointments = Appointment::with('appointmentBill')->get();

        // Pass appointments data to the view using 'with'
        return view('appointments.index')->with('appointments', $appointments);
    }

}

