<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <title>Appointement History</title>

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

        table {
            width: 100%;
            margin-top: 20px;
            border-collapse: collapse;
        }

        th,
        td {
            padding: 10px;
            text-align: left;
            border: 1px solid #ddd;
        }

        th {
            color: rgb(0, 0, 0);
        }

        .card-header {
            font-size: 1.25rem;
            font-weight: bold;
        }
    </style>
</head>

<body>
    <div class="container-xl px-4 mt-5">
        <nav class="nav nav-borders mb-4">
            <a class="btn btn-outline-success ms-2" href="{{ route('Home') }}">
                <i class="fas fa-arrow-left"></i> Back
            </a>
            <a class="nav-link" href="{{ route('account') }}">Profile</a>
            <a class="nav-link" href="{{ route('order_history') }}">Order History</a>
            <a class="nav-link active" href="{{ route('appointment_history') }}">Appointment History</a>
        </nav>

        <div class="col-xl-8">
            <div class="card mb-4">
                <div class="card-header bg-success text-white d-flex justify-content-between align-items-center">
                    <span>Appointment History</span>
                    <i class="fas fa-calendar-check"></i>
                </div>
                <div class="card-body">
                    @if (!empty($message))
                        <p class="text-center text-danger">{{ $message }}</p>
                    @else
                        <table>
                            <thead>
                                <tr>
                                    <th>Appointment No.</th>
                                    <th>Name</th>
                                    <th>Vehicle</th>
                                    <th>Model</th>
                                    <th>Date</th>
                                    <th>Time Slot</th>
                                    <th>Status</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($appointments as $appointment)
                                    <tr>
                                        <td>{{ $appointment->appointment_id }}</td>
                                        <td>{{ $appointment->name }}</td>
                                        <td>{{ $appointment->vehicle_name }}</td>
                                        <td>{{ $appointment->vehicle_model }}</td>
                                        <td>{{ $appointment->appointment_date }}</td>
                                        <td>{{ $appointment->appointment_time_slot }}</td>
                                        <td>
                                            @if ($appointment->status == 1)
                                                <span class="badge bg-success">Success</span>
                                            @else
                                                <span class="badge bg-danger">Pending</span>
                                            @endif
                                        </td>
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
