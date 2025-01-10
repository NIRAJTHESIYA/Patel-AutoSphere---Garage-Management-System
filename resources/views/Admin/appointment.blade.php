@include('Admin.header')

<link href="https://cdn.datatables.net/1.11.5/css/dataTables.bootstrap5.min.css" rel="stylesheet">
<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">

<style>
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
</style>

<div class="container mt-4">
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
        <h1 style="font-size: 35px">
            <i class="bi bi-calendar2-event"></i> Appointments
        </h1><br>
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb bg-transparent mb-0">
                <li class="breadcrumb-item">
                    <a href="{{ route('admin.dashboard') }}">
                        <i class="bi bi-house-door-fill me-1"></i> Home
                    </a>
                </li>
                <li class="breadcrumb-item active" aria-current="page">
                    <i class="bi bi-calendar2-event me-1"></i> Appointments
                </li>
            </ol>
        </nav>
    </div>

    <div class="card">
        <div class="card-header">
            <h5 class="card-title"><i class="bi bi-table me-2"></i>Appointment Table</h5>
        </div>
        <div class="card-body">
            <table id="appointmentsTable" class="table table-hover table-bordered">
                <thead class="table-dark">
                    <tr>
                        <th scope="col">ID</th>
                        <th scope="col">Name</th>
                        <th scope="col">Email Address</th>
                        <th scope="col">Date</th>
                        <th scope="col">Time</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>

                <tbody>
                    @foreach ($appointments as $appointment)
                        <tr>
                            <td>{{ $appointment->appointment_id }}</td>
                            <td>{{ $appointment->name }}</td>
                            <td>{{ $appointment->email }}</td>
                            <td>{{ $appointment->appointment_date }}</td>
                            <td>{{ $appointment->appointment_time_slot }}</td>
                            <td>
                                <a href="{{ route('admin.appointments.view', $appointment->appointment_id) }}"
                                    class="btn btn-success rounded-pill">
                                    <i class="fas fa-eye"></i> View
                                </a>
                                <hr>
                                @php
                                    $billExists = \App\Models\AppointmentBill::where('appointment_id', $appointment->appointment_id)->exists();
                                @endphp
                                @if ($billExists)
                                    <a href="{{ route('appointments.bill.view', $appointment->appointment_id) }}"
                                        class="btn btn-primary rounded-pill">
                                        <i class="fas fa-file-invoice"></i> View Bill
                                    </a><hr>
                                @endif
                                <button type="button" class="btn btn-danger rounded-pill" data-bs-toggle="modal"
                                    data-bs-target="#deleteModal-{{ $appointment->appointment_id }}">
                                    <i class="fas fa-trash-alt"></i> Delete
                                </button>

                                <div class="modal fade" id="deleteModal-{{ $appointment->appointment_id }}" tabindex="-1"
                                    aria-labelledby="deleteModalLabel-{{ $appointment->appointment_id }}" aria-hidden="true">
                                    <div class="modal-dialog modal-dialog-centered">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title"
                                                    id="deleteModalLabel-{{ $appointment->appointment_id }}">
                                                    <i class="bi bi-exclamation-triangle-fill me-2 text-warning"></i>Delete
                                                    Confirmation
                                                </h5>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                    aria-label="Close"></button>
                                            </div>
                                            <div class="modal-body">
                                                Are you sure you want to delete the appointment for:
                                                <strong>{{ $appointment->name }}</strong>?
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary"
                                                    data-bs-dismiss="modal">Cancel</button>
                                                <form
                                                    action="{{ route('appointments.delete', $appointment->appointment_id) }}"
                                                    method="POST" class="d-inline">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-danger">
                                                        <i class="bi bi-trash-fill me-1"></i>Delete
                                                    </button>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </td>
                        </tr>
                    @endforeach
                </tbody>


            </table>
        </div>
    </div>
</div>

@include('Admin.footer')

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdn.datatables.net/1.11.5/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.11.5/js/dataTables.bootstrap5.min.js"></script>

<script>
    $(document).ready(function() {
        $('#appointmentsTable').DataTable({
            "paging": true,
            "lengthChange": false,
            "searching": true,
            "ordering": true,
            "info": true,
            "autoWidth": false,
            "responsive": true,
            "pageLength": 5,
        });
    });
</script>
