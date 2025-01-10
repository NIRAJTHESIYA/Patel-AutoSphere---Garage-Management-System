<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Appointment Form - Patel Car Care</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Lato:wght@400;500;700&display=swap" rel="stylesheet">

    <style>
        body {
            font-family: 'Lato', sans-serif;
            font-size: 16px;
            background: linear-gradient(135deg, #ece9e6, #ffffff);
            padding-top: 50px;
        }

        .appointment-form {
            background: #ffffff;
            padding: 50px;
            border-radius: 15px;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.1);
            animation: fadeIn 1s ease-in-out;
            position: relative;
            overflow: hidden;
        }

        .appointment-form::before {
            content: '';
            position: absolute;
            top: -50px;
            right: -50px;
            width: 100px;
            height: 100px;
            background: rgba(0, 123, 255, 0.1);
            border-radius: 50%;
            z-index: 0;
        }

        .appointment-form h2 {
            position: relative;
            z-index: 1;
        }

        .form-section {
            margin-bottom: 40px;
            opacity: 0;
            transform: translateY(30px);
            animation: fadeInUp 0.8s forwards;
        }

        .form-section:nth-child(1) {
            animation-delay: 0.3s;
        }

        .form-section:nth-child(2) {
            animation-delay: 0.5s;
        }

        .form-section:nth-child(3) {
            animation-delay: 0.7s;
        }

        @keyframes fadeInUp {
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        .form-label {
            font-weight: 500;
            color: #333333;
            margin-bottom: 8px;
        }

        .input-group-text {
            background-color: #f0f2f5;
            border: none;
            color: #6c757d;
            border-radius: 5px 0 0 5px;
        }

        .form-control {
            border-left: none;
            border-radius: 0 5px 5px 0;
            transition: border-color 0.3s, box-shadow 0.3s;
        }

        .form-control:focus {
            border-color: #007bff;
            box-shadow: 0 0 5px rgba(0, 123, 255, 0.5);
        }

        .dropdown-toggle::after {
            margin-left: 0.255em;
        }

        .dropdown-menu {
            border-radius: 10px;
            box-shadow: 0 8px 16px rgba(0, 0, 0, 0.1);
            animation: slideDown 0.5s forwards;
        }

        @keyframes slideDown {
            from {
                opacity: 0;
                transform: translateY(-10px);
            }

            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        h2,
        h4 {
            font-family: 'Lato', sans-serif;
            /* Ensures headings also use Lato */
        }

        .btn {
            font-family: 'Lato', sans-serif;
            /* Button text */
        }

        .btn-primary {
            background: linear-gradient(135deg, #007bff, #0056b3);
            border: none;
            transition: background 0.3s ease, transform 0.2s ease, box-shadow 0.3s;
            box-shadow: 0 4px 6px rgba(0, 123, 255, 0.3);

        }

        .btn-primary:hover {
            background: linear-gradient(135deg, #0056b3, #004080);
            transform: translateY(-2px);
            box-shadow: 0 6px 10px rgba(0, 123, 255, 0.4);
        }

        .btn-primary:active {
            transform: translateY(0);
            box-shadow: 0 4px 6px rgba(0, 123, 255, 0.3);
        }

        .btn-secondary {
            background-color: #6c757d;
            border: none;
            transition: background-color 0.3s ease, transform 0.2s ease, box-shadow 0.3s;
            box-shadow: 0 4px 6px rgba(108, 117, 125, 0.3);
        }

        .btn-secondary:hover {
            background-color: #5a6268;
            transform: translateY(-2px);
            box-shadow: 0 6px 10px rgba(108, 117, 125, 0.4);
        }

        .btn-secondary:active {
            transform: translateY(0);
            box-shadow: 0 4px 6px rgba(108, 117, 125, 0.3);
        }

        .form-check-input:checked {
            background-color: #007bff;
            border-color: #007bff;
        }

        .form-check-input:focus {
            border-color: #0056b3;
            box-shadow: 0 0 0 0.2rem rgba(0, 123, 255, .25);
        }

        .btn-lg.animate__pulse {
            animation: pulse 2s infinite;
        }

        footer {
            background-color: #282c34;
            color: white;
            padding: 30px 0;
            text-align: center;
            margin-top: 40px;
        }

        footer a {
            color: #61dafb;
        }

        footer a:hover {
            text-decoration: underline;
        }

        @keyframes pulse {
            0% {
                transform: scale(1);
                box-shadow: 0 0 0 0 rgba(0, 123, 255, 0.7);
            }

            70% {
                transform: scale(1.05);
                box-shadow: 0 0 0 10px rgba(0, 123, 255, 0);
            }

            100% {
                transform: scale(1);
                box-shadow: 0 0 0 0 rgba(0, 123, 255, 0);
            }
        }

        .home-button {
            position: absolute;
            top: 20px;
            left: 20px;
            z-index: 2;
            animation: bounceIn 1s;
            display: flex;
            align-items: center;
        }

        @keyframes bounceIn {
            0% {
                opacity: 0;
                transform: scale(0.3) translateY(-100px);
            }

            50% {
                opacity: 1;
                transform: scale(1.05) translateY(30px);
            }

            70% {
                transform: scale(0.9) translateY(-10px);
            }

            100% {
                transform: scale(1) translateY(0);
            }
        }

        @media (max-width: 576px) {
            .appointment-form {
                padding: 30px;
            }

            .form-section h4 {
                font-size: 1.2rem;
            }

            .btn-lg {
                width: 100%;
            }

            .home-button {
                top: 10px;
                left: 10px;
            }
        }

        .centered-text {
            text-align: center;
            margin-top: 50px;
            animation: fadeIn 2s ease-in-out infinite alternate;
            font-size: 2rem;
            color: rgb(0, 0, 0);
            position: relative;
        }

        .icon-box {
            display: inline-block;
            color: rgb(0, 0, 0);
            border-radius: 8px;
            padding: 10px;
            margin-right: 10px;
            vertical-align: middle;
        }

        .time-picker {
            margin-top: 10px;
            border: 1px solid #ddd;
            padding: 10px;
            border-radius: 5px;
            background-color: #f9f9f9;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
        }

        .time-picker select {
            width: 30%;
            margin-right: 5%;
        }

        .btn-dropdown-toggle {
            background-color: #2f81ce;
            Bootstrap primary color border: 2px solid;
            color: #fff;
            border-radius: 0.5rem;
            transition: background-color 0.3s ease, transform 0.2s ease;
        }

        .btn-dropdown-toggle:hover {
            transform: translateY(-2px);
        }

        .dropdown-menu {
            border-radius: 0.5rem;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
            background-color: #f8f9fa;
            transition: opacity 0.3s ease, visibility 0.3s ease;
        }

        .form-check {
            padding: 0.5rem 1rem;
            transition: background-color 0.3s ease;
        }

        .form-check:hover {
            background-color: rgba(0, 123, 255, 0.1);
            border-radius: 0.3rem;
        }

        .form-check-input {
            cursor: pointer;
            accent-color: #007bff;
        }

        .form-check-label {
            font-size: 1rem;
            font-weight: 500;
            color: #333;
        }

        @media (max-width: 576px) {
            .form-check {
                padding: 0.5rem;
            }

            .btn-dropdown-toggle {
                font-size: 0.9rem;
            }
        }

        .dropdown-menu {
            background-color: #fff;
            border: 1px solid #ddd;
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
            border-radius: 8px;
            max-width: 100%;
            min-width: 250px;
            animation: fadeIn 0.3s ease;
        }

        .form-check {
            padding: 10px;
            border: 1px solid #ddd;
            border-radius: 6px;
            margin-bottom: 10px;
            transition: border-color 0.3s ease;
        }

        .form-check:hover {
            border-color: #28a745;
        }

        .form-check-input {
            accent-color: #28a745;
            width: 1.3rem;
            height: 1.3rem;
            border: 2px solid #ddd;
            border-radius: 4px;
            transition: all 0.3s ease;
        }

        .form-check-input:checked {
            background-color: #28a745;
            border-color: #28a745;
        }

        .form-check-label {
            margin-left: 10px;
            color: #555;
            font-size: 14px;
            transition: color 0.3s ease;
        }

        .form-check:hover .form-check-label {
            color: #333;
        }

        @keyframes fadeIn {
            0% {
                opacity: 0;
                transform: translateY(-10px);
            }

            100% {
                opacity: 1;
                transform: translateY(0);
            }
        }

        .slot-grid {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(150px, 1fr));
            gap: 15px;
            padding: 10px 0;
        }

        .slot-button {
            display: flex;
            align-items: center;
            justify-content: center;
            padding: 15px;
            background-color: #f8f9fa;
            border: 2px solid #007bff;
            border-radius: 10px;
            cursor: pointer;
            font-size: 16px;
            font-weight: 500;
            color: #007bff;
            transition: background-color 0.3s ease, color 0.3s ease, transform 0.3s ease;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        }

        .slot-button:hover {
            background-color: #007bff;
            color: #fff;
            transform: scale(1.05);
        }

        .slot-button.selected {
            background-color: #007bff;
            color: #fff;
            border: 2px solid #0056b3;
        }

        .slot-button:active {
            transform: scale(0.95);
        }

        .form-section {
            margin-bottom: 30px;
            padding: 20px;
            background-color: #ffffff;
            border: 1px solid #e0e0e0;
            border-radius: 15px;
            box-shadow: 0 8px 15px rgba(0, 0, 0, 0.1);
        }

        .status-boxes {
            display: flex;
            justify-content: flex-end;
            /* Aligns the boxes to the right */
            margin-bottom: 10px;
        }

        .status-box {
            display: flex;
            align-items: center;
            padding: 5px 10px;
            border-radius: 5px;
            margin-left: 10px;
            /* Space between the boxes */
            color: #fff;
            /* Text color */
            font-size: 0.875rem;
            /* Font size */
        }

        .unavailable-slot {
            background-color: #dc3545;
            /* Red color for unavailable slots */
        }

        .booked-slot {
            background-color: #28a745;
            /* Green color for booked slots */
        }
    </style>

</head>

<body>

    <div class="centered-text">
        <span class="icon-box">
            <i class="bi bi-car-front"></i>
        </span>
        Patel Car Care
    </div>


    <div class="container position-relative">
        <div class="row justify-content-center">
            <div class="col-lg-8 col-md-10 appointment-form animate__animated animate__fadeIn">

                <a href="{{ route('Home') }}" class="btn btn-success home-button animate__animated animate__bounceIn"
                    aria-label="Go to Home Page">
                    <i class="bi bi-house-fill me-2"></i>Home
                </a>

                <h2 class="mb-4 text-center text-primary animate__animated animate__fadeInDown">
                    <i class="bi bi-calendar-check-fill me-2"></i>Book an Appointment
                </h2>

                @if (session('success'))
                    <div class="alert alert-success text-center animate__animated animate__fadeIn" role="alert">
                        {{ session('success') }}
                    </div>
                @endif

                @if ($errors->any())
                    <div class="alert alert-danger text-center animate__animated animate__fadeIn" role="alert">
                        Please check the form below for errors
                    </div>
                @endif

                <form action="{{ route('appointment.submit') }}" method="POST">
                    @csrf
                    <div class="form-section">
                        <h4><i class="bi bi-person-fill me-2 text-secondary"></i>Personal Information</h4>

                        <div class="mb-4">
                            <label for="userName" class="form-label">Name</label>
                            <div class="input-group">
                                <span class="input-group-text"><i class="bi bi-person"></i></span>
                                <input type="text"
                                    class="form-control animate__animated animate__fadeIn @error('name') is-invalid @enderror"
                                    name="name" id="userName" placeholder="Enter your name"
                                    value="{{ old('name') }}">
                                @error('name')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                        </div>

                        <div class="mb-4">
                            <label for="userPhone" class="form-label">Phone Number</label>
                            <div class="input-group">
                                <span class="input-group-text"><i class="bi bi-telephone-fill"></i></span>
                                <input type="tel"
                                    class="form-control animate__animated animate__fadeIn @error('phone') is-invalid @enderror"
                                    name="phone" id="userPhone" placeholder="Enter your phone number"
                                    value="{{ old('phone') }}">
                                @error('phone')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                        </div>

                        <div class="mb-4">
                            <label for="userEmail" class="form-label">Email Address</label>
                            <div class="input-group">
                                <span class="input-group-text"><i class="bi bi-envelope-fill"></i></span>
                                <input type="email" class="form-control animate__animated animate__fadeIn"
                                    id="userEmail" value="{{ session('email') }}" readonly>
                                <input type="hidden" name="email" value="{{ session('email') }}">
                            </div>
                        </div>
                    </div>

                    <div class="form-section">
                        <h4><i class="bi bi-car-front-fill me-2 text-secondary"></i>Vehicle Information</h4>

                        <div class="mb-4">
                            <label for="vehicleName" class="form-label">Vehicle Name</label>
                            <div class="input-group">
                                <span class="input-group-text"><i class="bi bi-car-front"></i></span>
                                <input type="text"
                                    class="form-control animate__animated animate__fadeIn @error('vehicle_name') is-invalid @enderror"
                                    name="vehicle_name" id="vehicleName" placeholder="Enter vehicle name"
                                    value="{{ old('vehicle_name') }}">
                                @error('vehicle_name')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                        </div>

                        <div class="mb-4">
                            <label for="vehicleModel" class="form-label">Vehicle Model</label>
                            <div class="input-group">
                                <span class="input-group-text"><i class="bi bi-gear-fill"></i></span>
                                <input type="text"
                                    class="form-control animate__animated animate__fadeIn @error('vehicle_model') is-invalid @enderror"
                                    name="vehicle_model" id="vehicleModel" placeholder="Enter vehicle model"
                                    value="{{ old('vehicle_model') }}">
                                @error('vehicle_model')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                        </div>

                        <div class="mb-4">
                            <label for="vehicleYear" class="form-label">Year</label>
                            <div class="input-group">
                                <span class="input-group-text"><i class="bi bi-calendar-fill"></i></span>
                                <select
                                    class="form-select animate__animated animate__fadeIn @error('vehicle_year') is-invalid @enderror"
                                    name="vehicle_year" id="vehicleYear">
                                    <option selected disabled>Select Year</option>
                                    <script>
                                        const currentYear = new Date().getFullYear();
                                        let options = '<option selected disabled>Select Year</option>';
                                        for (let year = currentYear + 1; year >= 1990; year--) {
                                            const selected = "{{ old('vehicle_year') }}" == year ? 'selected' : '';
                                            options += `<option value="${year}" ${selected}>${year}</option>`;
                                        }
                                        document.write(options);
                                    </script>
                                </select>
                                @error('vehicle_year')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                        </div>

                    </div>

                    <div class="form-section">
                        <h4><i class="bi bi-clock-fill me-2 text-secondary"></i>Schedule Information</h4>

                        <div class="mb-4">
                            <label for="setDate" class="form-label">Date</label>
                            <div class="input-group">
                                <span class="input-group-text"><i class="bi bi-calendar-date-fill"></i></span>
                                <input type="text"
                                    class="form-control animate__animated animate__fadeIn @error('appointment_date') is-invalid @enderror"
                                    name="appointment_date" id="setDate" value="{{ old('appointment_date') }}">
                                @error('appointment_date')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                        </div>

                        <div class="mb-4">
                            <label class="form-label">Available Time Slots</label>

                            <div class="status-boxes mb-2">
                                <div class="status-box booked-slot">
                                    <span>Booked Slot</span>
                                </div>
                            </div>

                            <div id="timeSlotContainer" class="slot-grid">
                            </div>

                            <input type="hidden" name="appointment_time_slot" id="selectedSlot">
                            @error('appointment_time_slot')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                    </div>

                    <div class="mb-4">
                        <label class="form-label">Services</label>
                        <div class="dropdown">
                            <button
                                class="btn btn-dropdown-toggle dropdown-toggle w-100 d-flex align-items-center justify-content-between animate__animated animate__fadeIn @error('services') is-invalid @enderror"
                                type="button" id="servicesDropdown" data-bs-toggle="dropdown"
                                aria-expanded="false">
                                <span><i class="bi bi-tools me-2"></i>Select Services</span>
                            </button>
                            @error('services')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                            <div class="dropdown-menu p-3" aria-labelledby="servicesDropdown">
                                <div class="form-check mb-2">
                                    <input class="form-check-input service-checkbox" type="checkbox"
                                        name="services[]" value="Engine Care Services" id="serviceOilChange"
                                        {{ in_array('Engine Care Services', old('services', [])) ? 'checked' : '' }}>
                                    <label class="form-check-label" for="serviceOilChange">Engine Care Services</label>
                                </div>
                                <div class="form-check mb-2">
                                    <input class="form-check-input service-checkbox" type="checkbox"
                                        name="services[]" value="Transmission Services" id="serviceTireRotation"
                                        {{ in_array('Transmission Services', old('services', [])) ? 'checked' : '' }}>
                                    <label class="form-check-label" for="serviceTireRotation">Transmission Services</label>
                                </div>
                                <div class="form-check mb-2">
                                    <input class="form-check-input service-checkbox" type="checkbox"
                                        name="services[]" value="Brake Services" id="serviceBrakeInspection"
                                        {{ in_array('Brake Services', old('services', [])) ? 'checked' : '' }}>
                                    <label class="form-check-label" for="serviceBrakeInspection">Brake Services</label>
                                </div>
                                <div class="form-check mb-2">
                                    <input class="form-check-input service-checkbox" type="checkbox"
                                        name="services[]" value="Tire and Wheel Services" id="serviceBatteryCheck"
                                        {{ in_array('Tire and Wheel Services', old('services', [])) ? 'checked' : '' }}>
                                    <label class="form-check-label" for="serviceBatteryCheck">Tire and Wheel Services</label>
                                </div>
                                <div class="form-check mb-2">
                                    <input class="form-check-input service-checkbox" type="checkbox"
                                        name="services[]" value="Battery Service" id="serviceEngineDiagnostic"
                                        {{ in_array('Battery Service', old('services', [])) ? 'checked' : '' }}>
                                    <label class="form-check-label" for="serviceEngineDiagnostic">Battery Service</label>
                                </div>
                                <div class="form-check mb-2">
                                    <input class="form-check-input service-checkbox" type="checkbox"
                                        name="services[]" value="Cooling System Services" id="serviceCoolingSystemServices"
                                        {{ in_array('Cooling System Services', old('services', [])) ? 'checked' : '' }}>
                                    <label class="form-check-label" for="serviceCoolingSystemServices">Cooling System Services</label>
                                </div>
                            </div>
                        </div>
                    </div>


                    <div class="text-center">
                        <button type="submit" class="btn btn-primary btn-lg animate__animated animate__pulse">
                            <i class="bi bi-calendar-plus-fill me-2"></i>Book Appointment
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <footer>
        <div class="container">
            <p class="mb-0">&copy; 2024 My Custom Company. All rights reserved.</p>
            <p>
                <a href="https://example.com/privacy-policy">Privacy Policy</a> |
                <a href="https://example.com/terms-of-service">Terms of Service</a> |
                <a href="https://example.com/contact">Contact Us</a>
            </p>
        </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/flatpickr/dist/flatpickr.min.css">
    <script src="https://cdn.jsdelivr.net/npm/flatpickr"></script>

    <script>
        const servicesDropdown = document.getElementById('servicesDropdown');
        const serviceCheckboxes = document.querySelectorAll('.service-checkbox');

        serviceCheckboxes.forEach(checkbox => {
            checkbox.addEventListener('change', updateServicesDropdown);
        });

        function updateServicesDropdown() {
            const selected = Array.from(serviceCheckboxes)
                .filter(i => i.checked)
                .map(i => i.value);

            const dropdownButton = servicesDropdown.querySelector('span');
            dropdownButton.innerHTML = selected.length > 0 ?
                `<i class="bi bi-tools me-2"></i>${selected.join(', ')}` :
                '<i class="bi bi-tools me-2"></i>Select Services';
        }

        document.addEventListener("DOMContentLoaded", () => {
            const timePickerBtn = document.getElementById("timePickerBtn");
            const timePicker = document.getElementById("timePicker");
            const setTimeBtn = document.getElementById("setTimeBtn");
            const setTimeInput = document.getElementById("setTime");
            const hoursSelect = document.getElementById("hours");
            const minutesSelect = document.getElementById("minutes");
            const ampmSelect = document.getElementById("ampm");

            timePickerBtn.addEventListener("click", () => {
                timePicker.style.display = timePicker.style.display === "none" ? "block" : "none";
            });

            setTimeBtn.addEventListener("click", (event) => {
                event.preventDefault();
                const hours = hoursSelect.value;
                const minutes = minutesSelect.value;
                const ampm = ampmSelect.value;

                if (hours && minutes && ampm) {
                    setTimeInput.value = `${hours}:${minutes} ${ampm}`;
                    timePicker.style.display = "none";
                } else {
                    alert("Please select a valid time.");
                }
            });
        });

        document.addEventListener('DOMContentLoaded', function() {
            const setTimeInput = document.getElementById('setTime');
            const oldTime = "{{ old('appointment_time') }}";

            if (oldTime) {
                const [time, period] = oldTime.split(' ');
                const [hour, minute] = time.split(':');

                document.getElementById('hours').value = parseInt(hour);
                document.getElementById('minutes').value = parseInt(minute);
                document.getElementById('ampm').value = period;

                setTimeInput.value = oldTime;
            }
        });

        setTimeout(() => {
            const alerts = document.querySelectorAll('.alert');
            alerts.forEach(alert => {
                alert.classList.add('animate__fadeOut');
                setTimeout(() => {
                    alert.style.display = 'none';
                }, 1000);
            });
        }, 4000);

        document.addEventListener("DOMContentLoaded", function() {
            flatpickr("#setDate", {
                dateFormat: "Y-m-d",
                allowInput: true,
            });
        });
    </script>

    <script>

        async function fetchAvailableSlots(date) {
            return new Promise((resolve) => {
                setTimeout(() => {
                    resolve([
                        "9:00 AM", "10:00 AM", "11:00 AM", "12:00 PM",
                        "1:00 PM", "2:00 PM", "3:00 PM", "4:00 PM",
                        "5:00 PM", "6:00 PM"
                    ]);
                }, 500);
            });
        }

        async function fetchBookSlots(date) {
            const response = await fetch("{{ route('fetchBookSlots') }}", {
                method: "POST",
                headers: {
                    'Content-Type': 'application/json',
                    'X-CSRF-TOKEN': '{{ csrf_token() }}'
                },
                body: JSON.stringify({
                    date: date
                })
            });

            if (!response.ok) {
                throw new Error('Network response was not ok');
            }

            return await response.json();
        }

        document.getElementById('setDate').addEventListener('change', async function() {
            const selectedDate = new Date(this.value);
            const timeSlotContainer = document.getElementById('timeSlotContainer');
            const selectedSlotInput = document.getElementById('selectedSlot');

            timeSlotContainer.innerHTML = '';
            selectedSlotInput.value = '';

            try {
                const bookedSlots = await fetchBookSlots(this.value);
                const availableSlots = await fetchAvailableSlots(this.value);
                const currentDate = new Date();
                const currentHour = currentDate.getHours();
                const currentMinutes = currentDate.getMinutes();

                if (selectedDate.toDateString() === currentDate.toDateString()) {
                    availableSlots.forEach(slot => {
                        const [hourString, period] = slot.split(' ');
                        let hour = parseInt(hourString, 10);
                        if (period === 'PM' && hour !== 12) {
                            hour += 12;
                        } else if (period === 'AM' && hour === 12) {
                            hour = 0;
                        }

                        if (hour < currentHour || (hour === currentHour && currentMinutes > 0)) {
                            bookedSlots.push(slot);
                        }
                    });
                }

                availableSlots.forEach(slot => {
                    const slotButton = document.createElement('div');
                    slotButton.className = 'slot-button' + (bookedSlots.includes(slot) ? ' booked' :
                        '');
                    slotButton.textContent = slot;

                    if (bookedSlots.includes(slot)) {
                        slotButton.style.backgroundColor = '#28a745';
                        slotButton.style.color = '#ffffff';
                        slotButton.style.pointerEvents = 'none';
                    } else {
                        slotButton.addEventListener('click', function() {
                            document.querySelectorAll('.slot-button').forEach(btn => btn
                                .classList.remove('selected'));
                            slotButton.classList.add('selected');

                            selectedSlotInput.value = slot;
                        });
                    }

                    timeSlotContainer.appendChild(slotButton);
                });
            } catch (error) {
                console.error('Error fetching booked slots:', error);
            }
        });
    </script>




</body>

</html>
