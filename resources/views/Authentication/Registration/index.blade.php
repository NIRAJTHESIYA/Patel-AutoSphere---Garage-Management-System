<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />

    <title>Registration - Patel Car Care</title>
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

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" integrity="sha384-k6RqeWeci5ZR/Lv4MR0sA0FfDOMV6S4K34pBO9+47l1Tn0Ml3I5iT0/0dgr3mOp" crossorigin="anonymous" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css">

    <style>
        /* Alert box styles */
        .alert {
            position: relative;
            padding: 15px;
            margin-bottom: 20px;
            border: 1px solid transparent;
            border-radius: 4px;
            font-family: 'Arial', sans-serif;
            font-size: 16px;
        }

        /* Success Message Styling */
        .alert-success {
            color: #155724;
            background-color: #d4edda;
            border-color: #c3e6cb;
        }

        /* Error Message Styling */
        .alert-danger {
            color: #721c24;
            background-color: #f8d7da;
            border-color: #f5c6cb;
        }

        /* Smooth fade-out */
        .fade-out {
            opacity: 0;
            transition: opacity 0.5s ease-out;
        }

        /* Button to close alert manually */
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

        /* Alert box styles for success */
        .alert-success {
            position: relative;
            padding: 15px;
            margin-bottom: 20px;
            border: 1px solid transparent;
            border-radius: 4px;
            background-color: #d4edda;
            color: #155724;
            border-color: #c3e6cb;
            font-family: 'Arial', sans-serif;
        }

        /* Error message styling */
        .invalid-feedback {
            color: #dc3545;
            margin-top: 5px;
            font-size: 14px;
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
                                            Create an Account
                                        </h5>
                                        <p class="text-center small">
                                            Enter your personal details to create account
                                        </p>
                                    </div>

                                    <form class="row g-3 needs-validation" novalidate method="POST"
                                        action="{{ route('register') }}">
                                        @csrf

                                        @if (session('success'))
                                            <div class="alert alert-success alert-dismissible fade show" role="alert">
                                                {{ session('success') }}
                                                <button type="button" class="btn-close" data-bs-dismiss="alert"
                                                    aria-label="Close"></button>
                                            </div>
                                        @endif
                                        @if (session('error'))
                                            <div class="alert alert-error alert-dismissible fade show" role="alert">
                                                {{ session('error') }}
                                                <button type="button" class="btn-close" data-bs-dismiss="alert"
                                                    aria-label="Close"></button>
                                            </div>
                                        @endif

                                        <div class="col-12">
                                            <label for="yourName" class="form-label">Your Name</label>
                                            <div class="input-group has-validation">
                                                <span class="input-group-text" id="inputGroupPrepend">
                                                    <i class="fa-solid fa-user"></i>
                                                </span>
                                                <input type="text" name="fullName" class="form-control" id="yourName"
                                                    required value="{{ old('fullName') }}" />
                                                @error('fullName')
                                                    <div class="invalid-feedback d-block">{{ $message }}</div>
                                                @enderror
                                            </div>
                                        </div>

                                        <div class="col-12">
                                            <label for="yourUsername" class="form-label">Email Address</label>
                                            <div class="input-group has-validation">
                                                <span class="input-group-text" id="inputGroupPrepend">
                                                    <i class="fa-solid fa-at"></i>
                                                </span>
                                                <input type="email" name="emailAddress" class="form-control"
                                                    id="yourUsername" required  value="{{ old('emailAddress') }}"/>
                                                @error('emailAddress')
                                                    <div class="invalid-feedback d-block">{{ $message }}</div>
                                                @enderror
                                            </div>
                                        </div>

                                        <div class="col-12">
                                            <label for="yourPassword" class="form-label">Password</label>
                                            <div class="input-group has-validation">
                                                <span class="input-group-text" id="inputGroupPrepend">
                                                    <i class="fa-solid fa-key"></i>
                                                </span>
                                                <input type="password" name="loginPassword" class="form-control"
                                                    id="yourPassword" required />
                                                @error('loginPassword')
                                                    <div class="invalid-feedback d-block">{{ $message }}</div>
                                                @enderror
                                            </div>
                                        </div>

                                        <div class="col-12">
                                            <div class="form-check">
                                                <input class="form-check-input" name="agree" type="checkbox"
                                                    id="acceptTerms" required />
                                                <label class="form-check-label" for="acceptTerms">
                                                    I agree and accept the <a href="#">terms and conditions</a>
                                                </label>
                                                @error('agree')
                                                    <div class="invalid-feedback d-block">{{ $message }}</div>
                                                @enderror
                                            </div>
                                        </div>

                                        <div class="col-12">
                                            <button class="btn btn-primary w-100" type="submit">Create
                                                Account</button>
                                        </div>

                                        <div class="col-12">
                                            <p class="small mb-0">
                                                Already have an account? <a href="{{ route('Login') }}">Log in</a>
                                            </p>
                                        </div>
                                    </form>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </main>

    <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i
            class="bi bi-arrow-up-short"></i></a>

    <script src="{{ asset('Authentication/assets/vendor/apexcharts/apexcharts.min.j') }}s"></script>
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
            setTimeout(function() {
                var successAlert = document.querySelector('.alert-success');
                if (successAlert) {
                    successAlert.classList.add('fade-out');
                    setTimeout(() => successAlert.remove(), 500);
                }
            }, 5000);

            setTimeout(function() {
                var errorMessages = document.querySelectorAll('.invalid-feedback');
                errorMessages.forEach(function(error) {
                    error.classList.add('fade-out');
                    setTimeout(() => error.remove(), 500);
                });
            }, 5000);
        });
    </script>

</body>

</html>
