<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />

    <title>Verify OTP - Patel Car Care</title>
    <meta content="" name="description" />
    <meta content="" name="keywords" />

    <link href="assets/img/Veriton_logo.png" rel="icon" />
    <link href="assets/img/Veriton_logo.png" rel="apple-touch-icon" />

    <link href="https://fonts.gstatic.com" rel="preconnect" />
    <link
        href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i"
        rel="stylesheet" />

    <link href="{{ asset('Authentication/assets/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet" />
    <link href="{{ asset('Authentication/assets/vendor/bootstrap-icons/bootstrap-icons.css') }}" rel="stylesheet" />
    <link href="{{ asset('Authentication/assets/vendor/boxicons/css/boxicons.min.css') }}" rel="stylesheet" />
    <link href="{{ asset('Authentication/assets/vendor/quill/quill.snow.css') }}" rel="stylesheet" />
    <link href="{{ asset('Authentication/assets/vendor/quill/quill.bubble.css') }}" rel="stylesheet" />
    <link href="{{ asset('Authentication/assets/vendor/remixicon/remixicon.css') }}" rel="stylesheet" />
    <link href="{{ asset('Authentication/assets/vendor/simple-datatables/style.css') }}" rel="stylesheet" />

    <link href="{{ asset('Authentication/assets/css/style.css') }}" rel="stylesheet" />

    <style>
        .otp-container {
            display: flex;
            justify-content: center;
            gap: 0.5rem;
        }

        .otp-input {
            width: 2.5rem;
            height: 2.5rem;
            text-align: center;
            font-size: 1.5rem;
            border: 1px solid #ced4da;
            border-radius: 0.375rem;
        }

        .otp-input:focus {
            border-color: #007bff;
            outline: none;
        }

        .resend-otp {
            display: inline-block;
            padding: 0.5rem 1rem;
            font-size: 1rem;
            color: #007bff;
            border: 1px solid #007bff;
            border-radius: 0.375rem;
            text-decoration: none;
            transition: background-color 0.3s, color 0.3s;
        }

        .resend-otp:hover {
            background-color: #007bff;
            color: #ffffff;
        }

        .text-center {
            text-align: center;
        }
    </style>

    <style>
        .alert {
            position: relative;
            padding: 15px;
            margin-bottom: 20px;
            border: 1px solid transparent;
            border-radius: 4px;
            font-family: 'Arial', sans-serif;
            font-size: 16px;
        }

        .alert-success {
            color: #155724;
            background-color: #d4edda;
            border-color: #c3e6cb;
        }

        .alert-danger {
            color: #721c24;
            background-color: #f8d7da;
            border-color: #f5c6cb;
        }

        .btn-close {
            position: absolute;
            top: 10px;
            right: 10px;
            background: transparent;
            border: none;
            font-size: 20px;
            line-height: 1;
            cursor: pointer;
            color: #000;
        }

        .fade-out {
            opacity: 0;
            transition: opacity 0.5s ease-out;
        }
    </style>

</head>

<body>
    <main>
        <div class="container">
            <section
                class="section register min-vh-100 d-flex flex-column align-items-center justify-content-center py-4">
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-lg-4 col-md-6 d-flex flex-column align-items-center justify-content-center">
                            <div class="d-flex justify-content-center py-4">
                                <a href="{{ route('Home') }}" class="logo d-flex align-items-center w-auto">
                                    <img src="{{ asset('logo/log_b.png') }}" alt="Logo" style="width: 50px; height: auto; margin-right: 10px; object-fit: cover;">
                                    <span class="d-none d-lg-block">Patel Car Care</span>
                                </a>
                            </div>

                            <div class="card mb-3">
                                <div class="card-body">
                                    <div class="pt-4 pb-2">
                                        <h5 class="card-title text-center pb-0 fs-4">
                                            Enter OTP
                                        </h5>
                                        <p class="text-center small">
                                            We have sent a One-Time Password (OTP) to your email.
                                            Please enter it below to verify your identity.
                                        </p>
                                    </div>

                                    <form class="row g-3 needs-validation" novalidate method="POST" action="{{ route('otp.verify.post') }}">
                                        @csrf

                                        @if (session('success'))
                                            <div class="alert alert-success alert-dismissible fade show" role="alert">
                                                {{ session('success') }}
                                                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                                            </div>
                                        @endif

                                        @if (session('error'))
                                            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                                                {{ session('error') }}
                                                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                                            </div>
                                        @endif

                                        <div class="col-12">
                                            <div class="otp-container">
                                                <input type="text" maxlength="1" class="otp-input form-control" name="otp[]" required oninput="moveFocus(this, 1)" />
                                                <input type="text" maxlength="1" class="otp-input form-control" name="otp[]" required oninput="moveFocus(this, 2)" />
                                                <input type="text" maxlength="1" class="otp-input form-control" name="otp[]" required oninput="moveFocus(this, 3)" />
                                                <input type="text" maxlength="1" class="otp-input form-control" name="otp[]" required oninput="moveFocus(this, 4)" />
                                            </div><br>
                                            @error('otp')
                                                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                                                    {{ $message }}
                                                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                                                </div>
                                            @enderror
                                        </div>

                                        <div class="col-12">
                                            <button class="btn btn-primary w-100" type="submit">Verify OTP</button>
                                        </div>

                                        <div class="col-12 text-center mt-3">
                                            <p class="timer-text">OTP will expire in <span id="timer">02:00</span></p>
                                        </div>
                                    </form>

                                    <script>
                                        function moveFocus(currentInput, nextIndex) {
                                            // If the current input is filled, move focus to the next input field
                                            if (currentInput.value.length == currentInput.maxLength) {
                                                // Move focus to the next input field if there is one
                                                const nextInput = document.querySelectorAll('.otp-input')[nextIndex];
                                                if (nextInput) {
                                                    nextInput.focus();
                                                }
                                            }
                                        }
                                    </script>


                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </main>

    <a href="#" class="back-to-top d-flex align-items-center justify-content-center">
        <i class="bi bi-arrow-up-short"></i>
    </a>

    <script src="{{ asset('Authentication/assets/vendor/apexcharts/apexcharts.min.js') }}"></script>
    <script src="{{ asset('Authentication/assets/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('Authentication/assets/vendor/chart.js/chart.umd.js') }}"></script>
    <script src="{{ asset('Authentication/assets/vendor/echarts/echarts.min.js') }}"></script>
    <script src="{{ asset('Authentication/assets/vendor/quill/quill.js') }}"></script>
    <script src="{{ asset('Authentication/assets/vendor/simple-datatables/simple-datatables.js') }}"></script>
    <script src="{{ asset('Authentication/assets/vendor/tinymce/tinymce.min.js') }}"></script>
    <script src="{{ asset('Authentication/assets/vendor/php-email-form/validate.js') }}"></script>

    <script src="{{ asset('Authentication/assets/js/main.js') }}"></script>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const otpDuration = 120;

            let expirationTime = localStorage.getItem('otpExpiresAt');

            if (!expirationTime || new Date().getTime() > expirationTime) {
                const newExpirationTime = new Date().getTime() + otpDuration * 1000;
                localStorage.setItem('otpExpiresAt', newExpirationTime);
                expirationTime = newExpirationTime;
            }

            const expiresAt = parseInt(expirationTime);

            function updateTimer() {
                const now = new Date().getTime();
                const timeLeft = Math.max(0, (expiresAt - now) / 1000);

                const minutes = Math.floor(timeLeft / 60);
                const seconds = Math.floor(timeLeft % 60);

                const timerElement = document.getElementById('timer');
                if (timerElement) {
                    timerElement.innerHTML =
                        (minutes < 10 ? '0' : '') + minutes + ":" +
                        (seconds < 10 ? '0' : '') + seconds;
                }

                if (timeLeft <= 0) {
                    clearInterval(countdown);
                    document.querySelector('.btn-primary').disabled = true;
                    alert("Your OTP has expired. Redirecting to the registration page...");

                    window.location.href =
                    "{{ route('register') }}?error=otp_expired";

                    localStorage.removeItem('otpExpiresAt');
                }
            }

            const countdown = setInterval(updateTimer, 1000);
            updateTimer();

            setTimeout(function() {
                const successAlert = document.querySelector('.alert-success');
                if (successAlert) {
                    successAlert.classList.add('fade-out');
                    setTimeout(() => successAlert.remove(), 500);
                }
            }, 5000);

            setTimeout(function() {
                const errorMessages = document.querySelectorAll('.alert.alert-danger');
                errorMessages.forEach(function(error) {
                    error.classList.add('fade-out');
                    setTimeout(() => error.remove(), 500);
                });
            }, 5000);
        });
    </script>


</body>

</html>
