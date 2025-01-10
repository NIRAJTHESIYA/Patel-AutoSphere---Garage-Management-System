@include('Admin.header')

<link href="https://cdn.datatables.net/1.11.5/css/dataTables.bootstrap5.min.css" rel="stylesheet">

<style>
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
        font-size: 1.5rem;
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
    <div class="pagetitle mb-4">
        <h1 style="font-size: 35px">
            <i class="bi bi-box-seam"></i> Orders
        </h1>
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb bg-transparent mb-0">
                <li class="breadcrumb-item">
                    <a href="{{ route('admin.dashboard') }}">
                        <i class="bi bi-house-door-fill me-1"></i> Home
                    </a>
                </li>
                <li class="breadcrumb-item active" aria-current="page">
                    <i class="bi bi-box-seam me-1"></i> Orders
                </li>
            </ol>
        </nav>
    </div>

    <div class="card">
        <div class="card-header">
            <h5 class="card-title"><i class="bi bi-table me-2"></i>Order Table</h5>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table id="ordersTable" class="table table-hover table-bordered table-striped align-middle">
                    <thead class="table-dark">
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Customer Name</th>
                            <th scope="col">Product Name</th>
                            <th scope="col">Quantity</th>
                            <th scope="col">Price</th>
                            <th scope="col">Total Price</th>
                            <th scope="col">Created At</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($orders as $index => $order)
                            <tr>
                                <th scope="row">{{ $index + 1 }}</th>
                                <td>{{ $order->customer->customer_name ?? 'N/A' }}</td>
                                <td>{{ $order->product->product_name ?? 'N/A' }}</td>
                                <td>{{ $order->quantity }}</td>
                                <td>${{ number_format($order->product->product_price ?? 0, 2) }}</td>
                                <td>${{ number_format($order->total_price, 2) }}</td>
                                <td>{{ $order->created_at->format('d M Y, H:i:s') }}</td>
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
<script src="https://cdn.datatables.net/1.11.5/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.11.5/js/dataTables.bootstrap5.min.js"></script>

<script>
    $(document).ready(function() {
        $('#ordersTable').DataTable({
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
            "responsive": true
        });
    });
</script>
