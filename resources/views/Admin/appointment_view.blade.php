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

    .btn-danger {
        background-color: #dc3545;
        border-color: #dc3545;
        padding: 0.75rem 1.5rem;
        font-size: 1rem;
        border-radius: 50px;
        transition: background-color 0.3s, transform 0.2s;
    }

    .btn-danger:hover {
        background-color: #c82333;
        border-color: #bd2130;
        transform: translateY(-2px);
    }

    .avatar {
        width: 80px;
        height: 80px;
        border-radius: 50%;
        margin-right: 1rem;
        object-fit: cover;
        border: 2px solid #007bff;
    }

    @media (max-width: 576px) {
        .pagetitle h1 {
            font-size: 2rem;
        }

        .avatar {
            width: 60px;
            height: 60px;
        }
    }

    .btn-common {
        padding: 0.75rem 1.5rem;
        font-size: 1rem;
        border-radius: 50px;
        transition: background-color 0.3s, transform 0.2s;
        width: 150px;
    }

    .btn-common:hover {
        transform: translateY(-2px);
    }

    .btn-success:hover {
        background-color: #157347;
    }

    .btn-danger:hover {
        background-color: #c82333;
    }

    .table-hover tbody tr:hover {
        background-color: #f5f5f5;
    }

    .table th,
    .table td {
        vertical-align: middle;
    }

    .btn {
        display: inline-flex;
        align-items: center;
    }

    .btn i {
        margin-right: 5px;
    }

    .btn-pill.btn-success {
        background-color: #198754;
        border: none;
        color: #ffffff;
    }

    .btn-pill.btn-success:hover {
        background-color: #157347;
        transform: scale(1.05);
        box-shadow: 0 8px 16px rgba(0, 0, 0, 0.2);
    }

    .btn-pill.btn-danger {
        background-color: #dc3545;
        border: none;
        color: #ffffff;
    }

    .btn-pill.btn-danger:hover {
        background-color: #bb2d3b;
        transform: scale(1.05);
        box-shadow: 0 8px 16px rgba(0, 0, 0, 0.2);
    }

    .btn-generate-bill {
        background-color: #007bff;
        border: none;
        color: #fff;
        font-size: 1.1rem;
        font-weight: 600;
        padding: 0.75rem 1.5rem;
        border-radius: 50px;
        box-shadow: 0 5px 15px rgba(0, 123, 255, 0.2);
        transition: background-color 0.3s ease, transform 0.2s ease, box-shadow 0.3s ease;
        display: flex;
        align-items: center;
    }

    .btn-generate-bill i {
        margin-right: 0.5rem;
        font-size: 1.3rem;
    }

    .btn-generate-bill:hover {
        background-color: #0056b3;
        transform: translateY(-4px);
        box-shadow: 0 8px 20px rgba(0, 123, 255, 0.3);
    }

    .btn-generate-bill:active {
        transform: translateY(0);
        box-shadow: none;
    }

    .btn-generate-bill:focus {
        outline: none;
        box-shadow: 0 0 0 0.2rem rgba(0, 123, 255, 0.5);
    }
</style>


<div class="container">
    @if (session('success') || session('error'))
        <div class="toast-container position-fixed top-0 end-0 p-3">
            @if (session('success'))
                <div class="toast align-items-center text-bg-success border-0 show" role="alert" aria-live="assertive"
                    aria-atomic="true">
                    <div class="d-flex">
                        <div class="toast-body">
                            <i class="bi bi-check-circle-fill me-2"></i>{{ session('success') }}
                        </div>
                        <button type="button" class="btn-close btn-close-white me-2 m-auto" data-bs-dismiss="toast"
                            aria-label="Close"></button>
                    </div>
                </div>
            @endif

            @if (session('error'))
                <div class="toast align-items-center text-bg-danger border-0 show" role="alert" aria-live="assertive"
                    aria-atomic="true">
                    <div class="d-flex">
                        <div class="toast-body">
                            <i class="bi bi-exclamation-triangle-fill me-2"></i>{{ session('error') }}
                        </div>
                        <button type="button" class="btn-close btn-close-white me-2 m-auto" data-bs-dismiss="toast"
                            aria-label="Close"></button>
                    </div>
                </div>
            @endif
        </div>
    @endif
    <div class="pagetitle mb-4">
        <h1><i class="bi bi-calendar-fill"></i> Appointment Details</h1>
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb mb-0">
                <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}"><i
                            class="bi bi-house-door-fill me-1"></i> Home</a></li>
                <li class="breadcrumb-item active" aria-current="page"><i class="bi bi-calendar-fill me-1"></i> View
                    Appointment</li>
            </ol>
        </nav>
    </div>

    <div class="card">
        <div class="card-body">
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group mb-3">
                        <label class="field-label" for="appointmentId"><i class="bi bi-tag"></i> Appointment ID</label>
                        <input type="text" readonly class="form-control-plaintext" id="appointmentId"
                            value="{{ $appointment->appointment_id }}">
                    </div>

                    <div class="form-group mb-3">
                        <label class="field-label" for="name"><i class="bi bi-person-fill"></i> Name</label>
                        <input type="text" readonly class="form-control-plaintext" id="name"
                            value="{{ $appointment->name }}">
                    </div>

                    <div class="form-group mb-3">
                        <label class="field-label" for="email"><i class="bi bi-envelope"></i> Email</label>
                        <input type="email" readonly class="form-control-plaintext" id="email"
                            value="{{ $appointment->email }}">
                    </div>

                    <div class="form-group mb-3">
                        <label class="field-label" for="phone"><i class="bi bi-telephone"></i> Phone</label>
                        <input type="text" readonly class="form-control-plaintext" id="phone"
                            value="{{ $appointment->phone }}">
                    </div>

                    <div class="form-group mb-3">
                        <label class="field-label" for="vehicleName"><i class="bi bi-car-front"></i> Vehicle
                            Name</label>
                        <input type="text" readonly class="form-control-plaintext" id="vehicleName"
                            value="{{ $appointment->vehicle_name }}">
                    </div>

                    <div class="form-group mb-3">
                        <label class="field-label" for="vehicleModel"><i class="bi bi-car-front"></i> Vehicle
                            Model</label>
                        <input type="text" readonly class="form-control-plaintext" id="vehicleModel"
                            value="{{ $appointment->vehicle_model }}">
                    </div>

                </div>

                <div class="col-md-6">

                    <div class="form-group mb-3">
                        <label class="field-label" for="vehicleYear"><i class="bi bi-calendar"></i> Vehicle Year</label>
                        <input type="text" readonly class="form-control-plaintext" id="vehicleYear"
                            value="{{ $appointment->vehicle_year }}">
                    </div>

                    <div class="form-group mb-3">
                        <label class="field-label" for="appointmentDate"><i class="bi bi-calendar-check"></i>
                            Appointment Date</label>
                        <input type="text" readonly class="form-control-plaintext" id="appointmentDate"
                            value="{{ $appointment->appointment_date }}">
                    </div>

                    <div class="form-group mb-3">
                        <label class="field-label" for="appointmentTime"><i class="bi bi-clock"></i> Appointment
                            Time</label>
                        <input type="text" readonly class="form-control-plaintext" id="appointmentTime"
                            value="{{ $appointment->appointment_time_slot }}">
                    </div>

                    <div class="form-group mb-3">
                        <label class="field-label" for="services"><i class="bi bi-wrench"></i> Services</label>
                        <textarea class="form-control-plaintext" id="services" rows="3" readonly>{{ implode(', ', is_array($appointment->services) ? $appointment->services : explode(',', $appointment->services)) }}</textarea>
                    </div>

                    <form action="{{ route('admin.appointments.updateStatus', $appointment->appointment_id) }}" method="POST">
                        @csrf
                        <div class="form-group mb-3">
                            <label class="field-label" for="status"><i class="bi bi-check-circle"></i>
                                Status</label>
                            <select class="form-control" id="status" name="status">
                                <option value="0" {{ $appointment->status == 0 ? 'selected' : '' }}>Pending
                                </option>
                                <option value="1" {{ $appointment->status == 1 ? 'selected' : '' }}>Success
                                </option>
                            </select>
                        </div>

                        <div class="d-flex justify-content-end">
                            <button type="submit" class="btn btn-primary btn-common">
                                <i class="bi bi-receipt"></i> Generate Bill
                            </button>
                        </div>
                    </form>

                </div>
            </div>
        </div>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
<script src="{{ asset('Admin/assets/vendor/apexcharts/apexcharts.min.js') }}"></script>
    <script src="{{ asset('Admin/assets/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('Admin/assets/vendor/chart.js/chart.umd.jss') }}"></script>
    <script src="{{ asset('Admin/assets/vendor/echarts/echarts.min.js') }}"></script>
    <script src="{{ asset('Admin/assets/vendor/quill/quill.js') }}"></script>
    <script src="{{ asset('Admin/assets/vendor/simple-datatables/simple-datatables.js') }}"></script>
    <script src="{{ asset('Admin/assets/vendor/tinymce/tinymce.min.js') }}"></script>
    <script src="{{ asset('Admin/assets/vendor/php-email-form/validate.js') }}"></script>

    <script src="{{ asset('Admin/assets/js/main.js') }}"></script>

@include('Admin.footer')
