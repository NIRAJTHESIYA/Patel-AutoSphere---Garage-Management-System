@include('Admin.header')

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
<link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-icons/1.10.5/font/bootstrap-icons.min.css" rel="stylesheet">

<style>
    body {
        background-color: #f3f4f6;
        font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        color: #343a40;
        line-height: 1.6;
    }

    .container {
        margin-top: 4rem;
        padding: 2.5rem;
        border-radius: 12px;
        background: #ffffff;
        box-shadow: 0 10px 30px rgba(0, 0, 0, 0.1);
        transition: transform 0.3s, box-shadow 0.3s;
    }

    .container:hover {
        transform: translateY(-3px);
        box-shadow: 0 20px 40px rgba(0, 0, 0, 0.2);
    }

    .pagetitle h1 {
        font-size: 2.5rem;
        font-weight: 700;
        color: #007bff;
        margin-bottom: 1rem;
    }

    .form-control {
        border-radius: 12px;
        border: 1px solid #ced4da;
        padding: 0.75rem;
        font-size: 1rem;
        transition: border-color 0.3s, box-shadow 0.3s;
    }

    .form-control:focus {
        border-color: #007bff;
        box-shadow: 0 0 5px rgba(0, 123, 255, 0.3);
    }

    .field-label {
        font-weight: 600;
        color: #495057;
    }

    .row {
        margin-bottom: 1.5rem;
    }


    .btn-generate-bill {
        background-color: #007bff;
        border: none;
        color: #fff;
        font-size: 1.1rem;
        font-weight: 600;
        padding: 0.75rem 1.5rem;
        border-radius: 50px;
        box-shadow: 0 4px 15px rgba(0, 123, 255, 0.2);
        transition: background-color 0.3s ease, transform 0.2s ease, box-shadow 0.3s ease;
        display: flex;
        align-items: center;
    }

    .btn-generate-bill:hover {
        background-color: #0056b3;
        transform: translateY(-2px);
        box-shadow: 0 10px 20px rgba(0, 123, 255, 0.3);
    }

    .table-title {
        font-size: 1.5rem;
        font-weight: 700;
        margin-bottom: 1rem;
        color: #495057;
    }

    .table {
        border: 2px solid #007bff;
        border-radius: 8px;
        overflow: hidden;
    }

    .table th {
        background-color: #007bff;
        color: white;
        border-bottom: 2px solid #0056b3;
    }

    .table input[type="number"] {
        border-radius: 8px;
        border: 1px solid #ced4da;
        padding: 0.5rem;
        transition: border-color 0.3s;
    }

    .table input[type="number"]:focus {
        border-color: #007bff;
        box-shadow: 0 0 5px rgba(0, 123, 255, 0.3);
    }

    .toast-container {
        z-index: 1051;
    }

    .toast {
        border-radius: 8px;
    }

    .breadcrumb-item a {
        color: #000000;
    }

    .breadcrumb-item a:hover {
        text-decoration: underline;
    }

    .breadcrumb-item.active {
        color: #6c757d;
    }

    @media (max-width: 768px) {
        .container {
            padding: 1.5rem;
        }

        .btn-generate-bill {
            width: 100%;
        }

        .table {
            font-size: 0.9rem;
        }
    }

    /* Advanced styles */
    .form-group label {
        font-weight: 500;
        margin-bottom: 0.5rem;
    }

    .form-control {
        transition: all 0.3s;
    }

    .form-control:focus {
        border-color: #007bff;
        box-shadow: 0 0 5px rgba(0, 123, 255, 0.3);
    }

    .service-row {
        transition: background-color 0.2s;
    }

    .service-row:hover {
        background-color: #f1f1f1;
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
        <h1><i class="bi bi-receipt"></i> Appointment Bill Details</h1>
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb mb-0">
                <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}"><i
                            class="bi bi-house-door-fill me-1"></i> Home</a></li>
                <li class="breadcrumb-item active" aria-current="page"><i class="bi bi-receipt"></i> View Bill</li>
            </ol>
        </nav>
    </div>
    <div class="card">
        <div class="card-body">

            <form method="POST" action="{{ route('generate-bill') }}">
                @csrf
                <input type="hidden" name="appointment_id" value="{{ $appointment_id }}">
                <h3 class="table-title">Basic Information</h3>
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group mb-3">
                            <label class="field-label" for="user_email"><i class="bi bi-envelope"></i> User
                                Email</label>
                            <input type="email" class="form-control" id="user_email" name="user_email"
                                value="{{ old('user_email', $appointment->email) }}" readonly>
                            @error('user_email')
                                <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="form-group mb-3">
                            <label class="field-label" for="car_number"><i class="bi bi-car"></i> Car Number</label>
                            <input type="text" class="form-control" id="car_number" name="car_number"
                                value="{{ old('car_number') }}">
                            @error('car_number')
                                <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="form-group mb-3">
                            <label class="field-label" for="date"><i class="bi bi-calendar"></i> Date</label>
                            <input type="date" class="form-control" id="date" name="date"
                                value="{{ old('date', date('Y-m-d')) }}" readonly>
                            @error('date')
                                <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>

                    </div>

                    <div class="col-md-6">
                        <div class="form-group mb-3">
                            <label class="field-label" for="user_name"><i class="bi bi-person"></i> User Name</label>
                            <input type="text" class="form-control" id="user_name" name="user_name"
                                value="{{ old('user_name', $appointment->name) }}" readonly>
                            @error('user_name')
                                <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="form-group mb-3">
                            <label class="field-label" for="kilometers"><i class="bi bi-car"></i> Kilometers</label>
                            <input type="number" class="form-control" id="kilometers" name="kilometers"
                                value="{{ old('kilometers') }}">
                            @error('kilometers')
                                <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                </div>

                <h3 class="table-title">Service Price</h3>
                <table class="table table-striped" id="serviceTable">
                    <thead>
                        <tr>
                            <th><i class="bi bi-tools"></i> Service</th>
                            <th><i class="bi bi-cash-stack"></i> Price</th>
                            <th><i class="bi bi-trash"></i> Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($matchingServices as $service)
                            <tr class="service-row">
                                <td><input type="text" class="form-control" name="services[]"
                                        value="{{ $service->service_name }}" readonly></td>
                                <td><input type="number" step="0.01" class="form-control" name="prices[]"
                                        value="{{ old('prices.' . $loop->index) }}"></td>
                                <td><button type="button" class="btn btn-danger btn-sm remove-service"><i
                                            class="bi bi-x-circle"></i></button></td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
                <button type="button" class="btn btn-primary btn-sm" id="addService"><i
                        class="bi bi-plus-circle"></i> Add Service</button>
                <br><br>

                <h3 class="table-title">Total Amount</h3>
                <div class="form-group mb-3">
                    <label class="field-label" for="totalAmount"><i class="bi bi-cash-stack"></i> Total
                        Amount</label>
                    <input type="number" readonly class="form-control" id="totalAmount" name="total_amount"
                        value="{{ old('total_amount') }}">
                </div>

                <button type="submit" class="btn-generate-bill"><i class="bi bi-file-earmark-post"></i>
                    Bill</button>
            </form>

        </div>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdn.datatables.net/1.11.5/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.11.5/js/dataTables.bootstrap5.min.js"></script>

<script src="{{ asset('Admin/assets/vendor/apexcharts/apexcharts.min.js') }}"></script>
<script src="{{ asset('Admin/assets/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
<script src="{{ asset('Admin/assets/vendor/chart.js/chart.umd.jss') }}"></script>
<script src="{{ asset('Admin/assets/vendor/echarts/echarts.min.js') }}"></script>
<script src="{{ asset('Admin/assets/vendor/quill/quill.js') }}"></script>
<script src="{{ asset('Admin/assets/vendor/simple-datatables/simple-datatables.js') }}"></script>
<script src="{{ asset('Admin/assets/vendor/tinymce/tinymce.min.js') }}"></script>
<script src="{{ asset('Admin/assets/vendor/php-email-form/validate.js') }}"></script>
<script src="{{ asset('Admin/assets/js/main.js') }}"></script>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        let addServiceButton = document.getElementById('addService');
        let serviceTable = document.getElementById('serviceTable').getElementsByTagName('tbody')[0];
        let totalAmountInput = document.getElementById('totalAmount');

        function updateTotalAmount() {
            let priceInputs = document.getElementsByName('prices[]');
            let totalAmount = 0;
            for (let i = 0; i < priceInputs.length; i++) {
                totalAmount += parseFloat(priceInputs[i].value) || 0;
            }
            totalAmountInput.value = totalAmount.toFixed(2);
        }

        addServiceButton.addEventListener('click', function() {
            let newRow = serviceTable.insertRow();
            newRow.innerHTML = `
            <td><input type="text" class="form-control" name="services[]" required></td>
            <td><input type="number" step="0.01" class="form-control" name="prices[]" required></td>
            <td><button type="button" class="btn btn-danger btn-sm remove-service"><i class="bi bi-x-circle"></i></button></td>
        `;
            updateTotalAmount();
        });

        serviceTable.addEventListener('click', function(event) {
            if (event.target.closest('.remove-service')) {
                let row = event.target.closest('tr');
                row.remove();
                updateTotalAmount();
            }
        });

        serviceTable.addEventListener('input', function(event) {
            if (event.target.name === 'prices[]') {
                updateTotalAmount();
            }
        });
    });
</script>

@include('Admin.footer')
