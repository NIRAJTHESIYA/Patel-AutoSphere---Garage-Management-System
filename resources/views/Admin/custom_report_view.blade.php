@include('Admin.header')

<link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/css/bootstrap.min.css" rel="stylesheet">
<link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-icons/1.10.5/font/bootstrap-icons.min.css" rel="stylesheet">

<link href="https://cdn.jsdelivr.net/npm/flatpickr/dist/flatpickr.min.css" rel="stylesheet">

<body>
    <div class="container mt-5">
        <div class="pagetitle mb-4">
            <h1 style="font-size: 35px">
                <i class="bi bi-clipboard-fill"></i> Custom Report
            </h1><br>
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb bg-transparent mb-0">
                    <li class="breadcrumb-item">
                        <a href="{{ route('admin.dashboard') }}">
                            <i class="bi bi-house-door-fill me-1"></i> Home
                        </a>
                    </li>
                    <li class="breadcrumb-item active" aria-current="page">
                        <i class="bi bi-file-earmark-text-fill me-1"></i> Custom Report
                    </li>
                </ol>
            </nav>
        </div>

        <div class="card shadow-sm border-0">
            <div class="card-body">
                <h4 class="mb-4"><i class="bi bi-calendar-check-fill me-2 text-secondary"></i>Generate Custom Report</h4>

                <form action="{{ route('report.generate') }}" method="POST">
                    @csrf

                    <div class="mb-4">
                        <label for="setStartDate" class="form-label">Start Date</label>
                        <div class="input-group">
                            <span class="input-group-text"><i class="bi bi-calendar-date-fill"></i></span>
                            <input type="text" class="form-control animate__animated animate__fadeIn" name="adminStartDateInput" id="setStartDate" placeholder="Select Start Date" required>
                        </div>
                    </div>

                    <div class="mb-4">
                        <label for="setEndDate" class="form-label">End Date</label>
                        <div class="input-group">
                            <span class="input-group-text"><i class="bi bi-calendar-date-fill"></i></span>
                            <input type="text" class="form-control animate__animated animate__fadeIn" name="adminEndDateInput" id="setEndDate" placeholder="Select End Date" required>
                        </div>
                    </div>

                    <div class="mb-4">
                        <label for="selectTable" class="form-label">Select Table</label>
                        <div class="input-group">
                            <span class="input-group-text"><i class="bi bi-table"></i></span>
                            <select class="form-select" id="selectTable" name="selectTable" required>
                                <option selected disabled>Select Table</option>
                                <option value="customers">Customer</option>
                                <option value="appointments">Appointment</option>
                                <option value="services">Service</option>
                            </select>
                        </div>
                    </div>

                    <div class="mb-4">
                        <button type="submit" class="btn btn-primary">
                            <i class="bi bi-file-earmark-pdf-fill me-2"></i>Generate Report
                        </button>
                    </div>
                </form>
            </div>
        </div>

    </div>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/flatpickr"></script>

    <script>
        flatpickr("#setStartDate", {
            dateFormat: "Y-m-d",
            altInput: true,
            altFormat: "F j, Y",
            allowInput: true
        });

        flatpickr("#setEndDate", {
            dateFormat: "Y-m-d",
            altInput: true,
            altFormat: "F j, Y",
            allowInput: true
        });
    </script>
</body>

@include('Admin.footer')

    <script src="{{ asset('Admin/assets/vendor/apexcharts/apexcharts.min.js') }}"></script>
    <script src="{{ asset('Admin/assets/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('Admin/assets/vendor/chart.js/chart.umd.jss') }}"></script>
    <script src="{{ asset('Admin/assets/vendor/echarts/echarts.min.js') }}"></script>
    <script src="{{ asset('Admin/assets/vendor/quill/quill.js') }}"></script>
    <script src="{{ asset('Admin/assets/vendor/simple-datatables/simple-datatables.js') }}"></script>
    <script src="{{ asset('Admin/assets/vendor/tinymce/tinymce.min.js') }}"></script>
    <script src="{{ asset('Admin/assets/vendor/php-email-form/validate.js') }}"></script>

    <script src="{{ asset('Admin/assets/js/main.js') }}"></script>
