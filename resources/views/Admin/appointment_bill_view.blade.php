@include('Admin.header')

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
<link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-icons/1.10.5/font/bootstrap-icons.min.css" rel="stylesheet">

<style>
    body {
        background-color: #f0f4f8;
        font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
    }

    .container {
        margin-top: 3rem;
        padding: 2rem;
        border-radius: 12px;
        background: #ffffff;
        box-shadow: 0 8px 30px rgba(0, 0, 0, 0.05);
    }

    .pagetitle h1 {
        font-size: 2.5rem;
        font-weight: 700;
        color: #343a40;
        margin-bottom: 0.5rem;
        display: flex;
        align-items: center;
    }

    .pagetitle h1 i {
        margin-right: 0.75rem;
        color: #007bff;
    }

    .breadcrumb {
        background: none;
        padding-left: 0;
    }

    .breadcrumb-item a {
        color: #6c757d;
        text-decoration: none;
        transition: color 0.3s;
    }

    .breadcrumb-item a:hover {
        color: #007bff;
    }

    .card {
        border: none;
        border-radius: 15px;
        background: #f8f9fa;
        transition: transform 0.3s, box-shadow 0.3s;
    }

    .card:hover {
        transform: translateY(-8px);
        box-shadow: 0 12px 24px rgba(0, 0, 0, 0.1);
    }

    .card-title {
        font-size: 2rem;
        font-weight: 600;
        color: #495057;
        margin-bottom: 1.5rem;
        position: relative;
    }

    .card-title::after {
        content: '';
        width: 50px;
        height: 3px;
        background-color: #007bff;
        position: absolute;
        left: 0;
        bottom: -10px;
        border-radius: 2px;
    }

    .field-label {
        font-weight: 600;
        color: #495057;
        margin-bottom: 0.5rem;
        display: flex;
        align-items: center;
        cursor: pointer;
    }

    .field-label i {
        margin-right: 0.5rem;
        color: #6c757d;
    }

    .form-control-plaintext {
        color: #343a40;
        background-color: #e9ecef;
        border-radius: 8px;
        padding: 0.75rem 1rem;
        font-size: 1rem;
    }

    .form-group {
        margin-bottom: 1.75rem;
    }

    .btn-back {
        background-color: #007bff;
        color: #fff;
        font-size: 1rem;
        padding: 0.75rem 1.5rem;
        border-radius: 50px;
        transition: background-color 0.3s ease, transform 0.2s ease;
        margin-top: 1rem;
        box-shadow: 0 4px 8px rgba(0, 123, 255, 0.2);
    }

    .btn-back:hover {
        background-color: #007bff;
        color: #fff;
        transform: translateY(-2px);
        box-shadow: 0 6px 12px rgba(0, 123, 255, 0.25);
    }

    .table-hover tbody tr:hover {
        background-color: #f5f5f5;
    }

    .table th,
    .table td {
        vertical-align: middle;
    }

    @media (max-width: 576px) {
        .pagetitle h1 {
            font-size: 2rem;
        }
    }
</style>

<div class="container">
    <div class="pagetitle mb-4">
        <h1><i class="bi bi-receipt"></i> Appointment Bill</h1>
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb mb-0">
                <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}"><i class="bi bi-house-door-fill me-1"></i> Home</a></li>
                <li class="breadcrumb-item active" aria-current="page"><i class="bi bi-receipt"></i> Bill Details</li>
            </ol>
        </nav>
    </div>

    <div class="card">
        <div class="card-body">
            <h2 class="card-title">Appointment Details</h2>

            <div class="form-group">
                <label class="field-label"><i class="bi bi-person-fill"></i> Name</label>
                <input type="text" readonly class="form-control-plaintext" value="{{ $appointment->name }}">
            </div>

            <div class="form-group">
                <label class="field-label"><i class="bi bi-envelope"></i> Email</label>
                <input type="email" readonly class="form-control-plaintext" value="{{ $appointment->email }}">
            </div>

            <div class="form-group">
                <label class="field-label"><i class="bi bi-telephone"></i> Phone</label>
                <input type="text" readonly class="form-control-plaintext" value="{{ $appointment->phone }}">
            </div>

            <div class="form-group">
                <label class="field-label"><i class="bi bi-car-front"></i> Vehicle</label>
                <input type="text" readonly class="form-control-plaintext" value="{{ $appointment->vehicle_name }} {{ $appointment->vehicle_model }} ({{ $appointment->vehicle_year }})">
            </div>

            <div class="form-group">
                <label class="field-label"><i class="bi bi-calendar-check"></i> Appointment Date</label>
                <input type="text" readonly class="form-control-plaintext" value="{{ $appointment->appointment_date }}">
            </div>

            <div class="form-group">
                <label class="field-label"><i class="bi bi-clock"></i> Time Slot</label>
                <input type="text" readonly class="form-control-plaintext" value="{{ $appointment->appointment_time_slot }}">
            </div>

            <h2 class="card-title">Bill Details</h2>

            <div class="form-group">
                <label class="field-label"><i class="bi bi-car"></i> Car Number</label>
                <input type="text" readonly class="form-control-plaintext" value="{{ $appointmentBill->car_number }}">
            </div>

            <div class="form-group">
                <label class="field-label"><i class="bi bi-speedometer2"></i> Kilometers</label>
                <input type="text" readonly class="form-control-plaintext" value="{{ $appointmentBill->kilometers }}">
            </div>

            <div class="form-group">
                <label class="field-label"><i class="bi bi-wrench"></i> Services</label>
                <input type="text" readonly class="form-control-plaintext" value="@if (is_array($appointmentBill->services)) {{ implode(', ', $appointmentBill->services) }} @else {{ $appointmentBill->services }} @endif">
            </div>

            <div class="form-group">
                <label class="field-label"><i class="bi bi-currency-dollar"></i> Prices</label>
                <input type="text" readonly class="form-control-plaintext" value="@if (is_array($appointmentBill->prices)) {{ implode(', ', $appointmentBill->prices) }} @else {{ $appointmentBill->prices }} @endif">
            </div>

            <div class="form-group">
                <label class="field-label"><i class="bi bi-cash-stack"></i> Total Amount</label>
                <input type="text" readonly class="form-control-plaintext" value="{{ $appointmentBill->total_amount }}">
            </div>

            <div class="d-flex justify-content-end">
                <a href="{{ route('admin.appointments') }}" class="btn btn-back"><i class="bi bi-arrow-left"></i> Back to Appointments</a>
            </div>
        </div>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
<script src="{{ asset('Admin/assets/js/main.js') }}"></script>

@include('Admin.footer')
