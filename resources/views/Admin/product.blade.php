@include('Admin.header')

<link href="https://cdn.datatables.net/1.11.5/css/dataTables.bootstrap5.min.css" rel="stylesheet">

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

    .card {
        box-shadow: 0 4px 20px rgba(0, 0, 0, 0.1);
        border-radius: 15px;
        background: #ffffff;
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

    .image-container {
        display: flex;
        justify-content: center;
        align-items: center;
        width: 60px;
        height: 60px;
        overflow: hidden;
        border-radius: 15px;
        cursor: pointer;
        margin: 0 auto;
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

    .btn-pill:focus {
        outline: none;
        box-shadow: 0 0 0 3px rgba(25, 135, 84, 0.5);
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
            <i class="bi bi-box"></i> Products
        </h1><br>
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb bg-transparent mb-0">
                <li class="breadcrumb-item">
                    <a href="{{ route('admin.dashboard') }}">
                        <i class="bi bi-house-door-fill me-1"></i> Home
                    </a>
                </li>
                <li class="breadcrumb-item active" aria-current="page">
                    <i class="bi bi-box-fill me-1"></i> Products
                </li>
            </ol>
        </nav>
    </div>

    <div class="card">
        <div class="card-header">
            <div class="d-flex justify-content-between align-items-center flex-wrap">
                <h5 class="card-title"><i class="bi bi-table me-2"></i>Products Table</h5>
                <a href="{{ route('products.create') }}" class="btn btn-pill btn-success mt-2 mt-md-0">
                    <i class="bi bi-plus-lg me-1"></i> Add New Product
                </a>
            </div>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table id="productsTable" class="table table-hover table-bordered table-striped align-middle">
                    <thead class="table-dark">
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Product Name</th>
                            <th scope="col">Short Description</th>
                            <th scope="col">Category</th>
                            <th scope="col">Price</th>
                            <th scope="col">Availability</th>
                            <th scope="col" class="text-center">Image</th>
                            <th scope="col">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($products as $index => $product)
                            <tr>
                                <th scope="row">{{ $index + 1 }}</th>
                                <td>{{ $product->product_name }}</td>
                                <td>{{ Str::limit($product->short_description, 50, '...') }}</td>
                                <td>{{ $product->category->category_name }}</td>
                                <td>${{ number_format($product->product_price, 2) }}</td>
                                <td>
                                    @if ($product->availability == 'in stock')
                                        <span class="badge bg-success">In Stock</span>
                                    @else
                                        <span class="badge bg-danger">Out of Stock</span>
                                    @endif
                                </td>
                                <td class="text-center">
                                    @if ($product->product_photo_1)
                                        <div class="image-container" data-bs-toggle="tooltip" data-bs-placement="top"
                                            title="{{ $product->product_name }}">
                                            <!-- Use the stored image URL -->
                                            <img src="{{ asset($product->product_photo_1) }}"
                                                alt="{{ $product->product_name }}" class="service-image"
                                                width="100">
                                        </div>
                                    @else
                                        <span class="text-muted">No Image</span>
                                    @endif
                                </td>
                                <td>
                                    <div class="d-flex flex-column flex-md-row justify-content-center gap-2">
                                        <!-- View Button -->
                                        <a href="{{ route('admin.product.view', $product->product_id) }}"
                                            class="btn btn-pill btn-primary" data-bs-toggle="tooltip"
                                            data-bs-placement="top" title="View">
                                            <i class="bi bi-eye"></i>
                                        </a>

                                        <!-- Edit Button -->
                                        <a href="{{ route('products.edit', $product->product_id) }}"
                                            class="btn btn-pill btn-success" data-bs-toggle="tooltip"
                                            data-bs-placement="top" title="Edit">
                                            <i class="bi bi-pencil-square"></i>
                                        </a>
                                        <!-- Delete Button -->
                                        <button type="button" class="btn btn-pill btn-danger" data-bs-toggle="modal"
                                            data-bs-target="#deleteModal-{{ $product->product_id }}"
                                            data-bs-toggle="tooltip" data-bs-placement="top" title="Delete">
                                            <i class="bi bi-trash-fill"></i>
                                        </button>
                                    </div>
                                    <!-- Delete Confirmation Modal -->
                                    <div class="modal fade" id="deleteModal-{{ $product->product_id }}" tabindex="-1"
                                        aria-labelledby="deleteModalLabel-{{ $product->product_id }}"
                                        aria-hidden="true">
                                        <div class="modal-dialog modal-dialog-centered">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title"
                                                        id="deleteModalLabel-{{ $product->product_id }}">
                                                        <i
                                                            class="bi bi-exclamation-triangle-fill me-2 text-warning"></i>Delete
                                                        Confirmation
                                                    </h5>
                                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                        aria-label="Close"></button>
                                                </div>
                                                <div class="modal-body">
                                                    Are you sure you want to delete the product:
                                                    <strong>{{ $product->product_name }}</strong>?
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-secondary"
                                                        data-bs-dismiss="modal">Cancel</button>
                                                    <form
                                                        action="{{ route('products.delete', $product->product_id) }}"
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
</div>

@include('Admin.footer')

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
<script src="https://cdn.datatables.net/1.11.5/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.11.5/js/dataTables.bootstrap5.min.js"></script>

<script>
    $(document).ready(function() {
        $('#productsTable').DataTable({
            "language": {
                "lengthMenu": "Display _MENU_ records per page",
                "zeroRecords": "No matching records found",
                "info": "Showing page _PAGE_ of _PAGES_",
                "infoEmpty": "No records available",
                "infoFiltered": "(filtered from _MAX_ total records)"
            },
            "paging": true,
            "lengthChange": true,
            "pageLength": 10,
            "searching": true,
            "ordering": true,
            "info": true,
            "autoWidth": false,
            "responsive": true,
            "columnDefs": [{
                "orderable": false,
                "targets": [5, 6]
            }],
            "drawCallback": function(settings) {
                var tooltipTriggerList = [].slice.call(document.querySelectorAll(
                    '[data-bs-toggle="tooltip"]'))
                tooltipTriggerList.map(function(tooltipTriggerEl) {
                    return new bootstrap.Tooltip(tooltipTriggerEl)
                })
            }
        });

        var tooltipTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle="tooltip"]'))
        var tooltipList = tooltipTriggerList.map(function(tooltipTriggerEl) {
            return new bootstrap.Tooltip(tooltipTriggerEl)
        })

        var toastElList = [].slice.call(document.querySelectorAll('.toast'))
        var toastList = toastElList.map(function(toastEl) {
            return new bootstrap.Toast(toastEl, {
                delay: 5000
            })
        })
        toastList.forEach(toast => toast.show())
    });
</script>

<script src="{{ asset('Admin/assets/vendor/apexcharts/apexcharts.min.js') }}"></script>
<script src="{{ asset('Admin/assets/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
<script src="{{ asset('Admin/assets/vendor/chart.js/chart.umd.jss') }}"></script>
<script src="{{ asset('Admin/assets/vendor/echarts/echarts.min.js') }}"></script>
<script src="{{ asset('Admin/assets/vendor/quill/quill.js') }}"></script>
<script src="{{ asset('Admin/assets/vendor/simple-datatables/simple-datatables.js') }}"></script>
<script src="{{ asset('Admin/assets/vendor/tinymce/tinymce.min.js') }}"></script>
<script src="{{ asset('Admin/assets/vendor/php-email-form/validate.js') }}"></script>

<script src="{{ asset('Admin/assets/js/main.js') }}"></script>
