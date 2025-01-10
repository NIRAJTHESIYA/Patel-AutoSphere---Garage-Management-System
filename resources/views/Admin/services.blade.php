@include('Admin.header')

<link href="https://cdn.datatables.net/1.11.5/css/dataTables.bootstrap5.min.css" rel="stylesheet">

<link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" rel="stylesheet">
<style>
    .btn-pill {
        border-radius: 50px;
        transition: background-color 0.3s, transform 0.3s, box-shadow 0.3s;
        padding: 0.5rem 1.5rem;
        font-weight: 500;
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

    .btn-pill:focus {
        outline: none;
        box-shadow: 0 0 0 3px rgba(25, 135, 84, 0.5);
    }

    .image-container {
        position: relative;
        width: 60px;
        height: 60px;
        overflow: hidden;
        border-radius: 15px;
        cursor: pointer;
    }

    .service-image {
        width: 100%;
        height: 100%;
        object-fit: cover;
        transition: transform 0.3s ease, box-shadow 0.3s ease, filter 0.3s ease;
        filter: grayscale(100%);
    }

    .image-container:hover .service-image {
        transform: scale(1.1);
        box-shadow: 0 8px 16px rgba(0, 0, 0, 0.2);
        filter: grayscale(0%);
    }

    .overlay {
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background-color: rgba(0, 0, 0, 0.6);
        color: #fff;
        display: flex;
        align-items: center;
        justify-content: center;
        opacity: 0;
        transition: opacity 0.3s ease;
        border-radius: 15px;
    }

    .image-container:hover .overlay {
        opacity: 1;
    }

    .overlay i {
        font-size: 1.5rem;
    }

    .card {
        box-shadow: 0 4px 20px rgba(0, 0, 0, 0.1);
        border-radius: 15px;
        transition: box-shadow 0.3s;
        background: #ffffff;
        border: none;
    }

    .card:hover {
        box-shadow: 0 8px 30px rgba(0, 0, 0, 0.15);
    }

    .card-header {
        background: #f8f9fa;
        border-bottom: 1px solid #dee2e6;
    }

    .card-title {
        font-size: 1.75rem;
        color: #343a40;
        display: flex;
        align-items: center;
    }

    .card-title i {
        font-size: 1.3rem;
        margin-right: 0.5rem;
    }

    .breadcrumb-item a {
        color: #6c757d;
        text-decoration: none;
    }

    .breadcrumb-item a:hover {
        color: #343a40;
    }

    table {
        font-family: 'Arial', sans-serif;
        font-size: 0.9rem;
    }

    @media (max-width: 768px) {
        .table-responsive {
            overflow-x: auto;
        }
    }
</style>



<div class="container mt-4">
    @if (session('success') || session('error'))
        <div class="toast-container position-fixed top-0 end-0 p-3">
            @if (session('success'))
                <div class="toast align-items-center text-bg-success border-0 show" role="alert" aria-live="assertive" aria-atomic="true">
                    <div class="d-flex">
                        <div class="toast-body">
                            <i class="bi bi-check-circle-fill me-2"></i>{{ session('success') }}
                        </div>
                        <button type="button" class="btn-close btn-close-white me-2 m-auto" data-bs-dismiss="toast" aria-label="Close"></button>
                    </div>
                </div>
            @endif

            @if(session('error'))
                <div class="toast align-items-center text-bg-danger border-0 show" role="alert" aria-live="assertive" aria-atomic="true">
                    <div class="d-flex">
                        <div class="toast-body">
                            <i class="bi bi-exclamation-triangle-fill me-2"></i>{{ session('error') }}
                        </div>
                        <button type="button" class="btn-close btn-close-white me-2 m-auto" data-bs-dismiss="toast" aria-label="Close"></button>
                    </div>
                </div>
            @endif
        </div>
    @endif

    <div class="pagetitle mb-4">
        <h1 style="font-size: 35px">
            <i class="bi bi-tools"></i> Services
        </h1><br>
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb bg-transparent mb-0">
                <li class="breadcrumb-item">
                    <a href="{{ route('admin.dashboard') }}">
                        <i class="bi bi-house-door-fill me-1"></i> Home
                    </a>
                </li>
                <li class="breadcrumb-item active" aria-current="page">
                    <i class="bi bi-clipboard-data me-1"></i> Services
                </li>
            </ol>
        </nav>
    </div>


    <div class="card">
        <div class="card-header">
            <div class="d-flex justify-content-between align-items-center flex-wrap">
                <h5 class="card-title"><i class="bi bi-table me-2"></i>Services Table</h5>
                <a href="{{ route('services.create') }}" class="btn btn-pill btn-success mt-2 mt-md-0">
                    <i class="bi bi-plus-lg me-1"></i> Add New Service
                </a>
            </div>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table id="servicesTable" class="table table-hover table-bordered table-striped align-middle">
                    <thead class="table-dark">
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Service Name</th>
                            <th scope="col">Description</th>
                            <th scope="col">Topic</th>
                            <th scope="col">Price Range</th>
                            <th scope="col">Image</th>
                            <th scope="col">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($services as $index => $service)
                            <tr>
                                <th scope="row">{{ $index + 1 }}</th>
                                <td>{{ $service->service_name }}</td>
                                <td>{{ Str::limit($service->service_description, 50, '...') }}</td>
                                <td>{{ $service->service_topic }}</td>
                                <td>{{ $service->price_range }}</td>
                                <td>
                                    @if ($service->service_image)
                                        <div class="image-container" data-bs-toggle="tooltip" data-bs-placement="top" title="{{ $service->service_name }}">
                                            <img src="{{ url($service->service_image) }}" alt="{{ $service->service_name }}" class="service-image">
                                            <div class="overlay">
                                            </div>
                                        </div>
                                    @else
                                        <span class="text-muted">No Image</span>
                                    @endif
                                </td>
                                <td>
                                    <div class="d-flex flex-column flex-md-row justify-content-center gap-2">
                                        <a href="{{ route('services.edit', $service->service_id) }}" class="btn btn-pill btn-success">
                                            <i class="bi bi-pencil-square me-1"></i> Edit
                                        </a>
                                        <button type="button" class="btn btn-pill btn-danger" data-bs-toggle="modal" data-bs-target="#deleteModal-{{ $service->service_id }}">
                                            <i class="bi bi-trash-fill me-1"></i> Delete
                                        </button>
                                    </div>

                                    <div class="modal fade" id="deleteModal-{{ $service->service_id }}" tabindex="-1" aria-labelledby="deleteModalLabel-{{ $service->service_id }}" aria-hidden="true">
                                        <div class="modal-dialog modal-dialog-centered">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="deleteModalLabel-{{ $service->service_id }}">
                                                        <i class="bi bi-exclamation-triangle-fill me-2 text-warning"></i>Delete Confirmation
                                                    </h5>
                                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                </div>
                                                <div class="modal-body">
                                                    Are you sure you want to delete the service: <strong>{{ $service->service_name }}</strong>?
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                                                    <form action="{{ route('services.delete', $service->service_id) }}" method="POST" class="d-inline">
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
</div>

@include('Admin.footer')

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
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
    $(document).ready(function () {
        $('#servicesTable').DataTable({
            "paging": true,
            "lengthChange": true,
            "pageLength": 5,
            "searching": true,
            "ordering": true,
            "info": true,
            "autoWidth": false,
            "responsive": true,
            "language": {
                "search": "Filter records:",
                "lengthMenu": "Show _MENU_ entries",
                "info": "Showing _START_ to _END_ of _TOTAL_ services",
                "paginate": {
                    "previous": "<i class='bi bi-chevron-left'></i>",
                    "next": "<i class='bi bi-chevron-right'></i>"
                }
            },
            "columnDefs": [
                { "orderable": false, "targets": [4,5,6] }
            ],
            "drawCallback": function(settings) {
                var tooltipTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle="tooltip"]'))
                tooltipTriggerList.map(function (tooltipTriggerEl) {
                    return new bootstrap.Tooltip(tooltipTriggerEl)
                })
            }
        });

        var tooltipTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle="tooltip"]'))
        var tooltipList = tooltipTriggerList.map(function (tooltipTriggerEl) {
            return new bootstrap.Tooltip(tooltipTriggerEl)
        })

        var toastElList = [].slice.call(document.querySelectorAll('.toast'))
        var toastList = toastElList.map(function (toastEl) {
            return new bootstrap.Toast(toastEl, { delay: 5000 })
        })
        toastList.forEach(toast => toast.show())
    });
</script>
