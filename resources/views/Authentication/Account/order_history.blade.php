<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <title>Order History</title>

    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" />


    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-icons/1.10.5/font/bootstrap-icons.min.css"
        integrity="sha512-KOV+NejhGWeHIkDAldxnax0iJgm7TjvhqaW9Bm9Hm8ydIDt3T5Z9t5vCniI89IYDK5nBj2fIRlLMqx+FfBYEOQ=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">

    <link rel="stylesheet" href="{{ asset('Authentication/Account/css/account.css') }}" />

    <style>
        body {
            background-color: #f8f9fa;
        }

        .card {
            border: none;
            border-radius: 12px;
            box-shadow: 0 6px 12px rgba(0, 0, 0, 0.1);
        }

        .img-account-profile {
            width: 160px;
            height: 160px;
            object-fit: cover;
            border: 4px solid #0d6efd;
            border-radius: 50%;
        }

        .form-label {
            font-weight: bold;
            color: #333;
            font-size: 1rem;
        }

        .form-control {
            font-size: 1rem;
            padding: 1rem;
            border-radius: 0.5rem;
            font-weight: 500;
        }

        /* Table Styles */
        table {
            width: 100%;
            margin-top: 20px;
        }

        th, td {
            text-align: left;
            padding: 12px;
        }

        th {
            background-color: #0d6efd;
            color: white;
        }

        tr:nth-child(even) {
            background-color: #f2f2f2;
        }

        .table-bordered {
            border: 1px solid #ddd;
        }

        .table-bordered th, .table-bordered td {
            border: 1px solid #ddd;
        }
    </style>
</head>

<body>
    <div class="container-xl px-4 mt-5">

        <nav class="nav nav-borders mb-4">
            <a class="btn btn-outline-success ms-2" href="{{ route('Home') }}">
                <i class="fas fa-arrow-left"></i> Back
            </a>
            <a class="nav-link active" href="{{ route('account') }}">Profile</a>
            <a class="nav-link" href="{{ route('order_history') }}">Order History</a>
            <a class="nav-link" href="{{ route('appointment_history') }}">Appointment History</a>
        </nav>

        <div class="col-xl-8">
            <div class="card mb-4">
                <div class="card-header bg-success text-white d-flex justify-content-between align-items-center">
                    <span>Order History</span>
                    <i class="fas fa-shopping-cart"></i>
                </div>
                    @if($orders->isEmpty())
                        <p>No orders found for this customer.</p>
                    @else
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th>Order No.</th>
                                    <th>Customer Name</th>
                                    <th>Product Name</th>
                                    <th>Total Price</th>
                                    <th>Order Date</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($orders as $order)
                                    <tr>
                                        <td>{{ $order->order_id }}</td>
                                        <td>{{ $order->customer->customer_name }}</td>
                                        <td>{{ $order->product->product_name }}</td>
                                        <td>{{ $order->total_price }}</td>

                                        <td>{{ $order->created_at->format('Y-m-d') }}</td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    @endif
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
