<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />

    <title>Login - Patel Car Care</title>
    <meta content="" name="description" />
    <meta content="" name="keywords" />

    <link href="assets/img/Veriton_logo.png" rel="icon" />
    <link href="assets/img/Veriton_logo.png" rel="apple-touch-icon" />

    <link href="https://fonts.gstatic.com" rel="preconnect" />
    <link
        href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i"
        rel="stylesheet" />

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css">


    <link href="{{ asset('Authentication/assets/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet" />
    <link href="{{ asset('Authentication/assets/vendor/bootstrap-icons/bootstrap-icons.css') }}" rel="stylesheet" />
    <link href="{{ asset('Authentication/assets/vendor/boxicons/css/boxicons.min.css') }}" rel="stylesheet" />
    <link href="{{ asset('Authentication/assets/vendor/quill/quill.snow.css') }}" rel="stylesheet" />
    <link href="{{ asset('Authentication/assets/vendor/quill/quill.bubble.css') }}" rel="stylesheet" />
    <link href="{{ asset('Authentication/assets/vendor/remixicon/remixicon.css') }}" rel="stylesheet" />
    <link href="{{ asset('Authentication/assets/vendor/simple-datatables/style.css') }}" rel="stylesheet" />

    <link href="{{ asset('Authentication/assets/css/style.css') }}" rel="stylesheet" />

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
                                            Login to Your Account
                                        </h5>
                                        <p class="text-center small">
                                            Enter your username & password to login
                                        </p>
                                    </div>


                                    <form class="row g-3 needs-validation" novalidate
                                        action="{{ route('login.post') }}" method="POST">
                                        @csrf

                                        @if (session('success'))
                                            <div class="alert alert-success alert-dismissible fade show col-12"
                                                role="alert">
                                                {{ session('success') }}
                                                <button type="button" class="btn-close" data-bs-dismiss="alert"
                                                    aria-label="Close"></button>
                                            </div>
                                        @endif

                                        @if (session('error'))
                                            <div class="alert alert-danger alert-dismissible fade show col-12"
                                                role="alert">
                                                {{ session('error') }}
                                                <button type="button" class="btn-close" data-bs-dismiss="alert"
                                                    aria-label="Close"></button>
                                            </div>
                                        @endif

                                        <div class="col-12">
                                            <label for="emailAddress" class="form-label">Email Address</label>
                                            <div class="input-group has-validation">
                                                <span class="input-group-text" id="inputGroupPrepend">
                                                    <i class="fa-solid fa-at"></i>
                                                </span>
                                                <input type="email" name="emailAddress"
                                                    class="form-control @error('emailAddress') is-invalid @enderror"
                                                    id="emailAddress" value="{{ old('emailAddress') }}" required />
                                                @error('emailAddress')
                                                    <div class="invalid-feedback">{{ $message }}</div>
                                                @enderror
                                            </div>
                                        </div>

                                        <div class="col-12">
                                            <label for="loginPassword" class="form-label">Password</label>
                                            <div class="input-group has-validation">
                                                <span class="input-group-text" id="inputGroupPrepend">
                                                    <i class="fa-solid fa-key"></i>
                                                </span>
                                                <input type="password" name="loginPassword"
                                                    class="form-control @error('loginPassword') is-invalid @enderror"
                                                    id="loginPassword" required />
                                                @error('loginPassword')
                                                    <div class="invalid-feedback">{{ $message }}</div>
                                                @enderror
                                            </div>
                                        </div>

                                        <div class="col-12">
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" name="remember"
                                                    value="true" id="rememberMe" />
                                                <label class="form-check-label" for="rememberMe">Remember me</label>
                                                <a href="{{ route('ForgotPassword') }}"
                                                    class="small float-end">Forgot Password?</a>
                                            </div>
                                        </div>

                                        <div class="col-12">
                                            <button class="btn btn-primary w-100" type="submit">
                                                Login
                                            </button>
                                        </div>

                                        <div class="col-12">
                                            <p class="small mb-0">
                                                Don't have an account?
                                                <a href="{{ route('Registration') }}">Create an account</a>
                                            </p>
                                        </div>
                                        <div class="col-12">
                                            <a href="{{ route('Home') }}" class="btn btn-home w-100">
                                                <i class="fas fa-home me-2"></i> Home
                                            </a>
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
            var alerts = document.querySelectorAll('.alert');
            if (alerts) {
                setTimeout(function() {
                    alerts.forEach(function(alert) {
                        alert.classList.remove('show');
                        alert.classList.add('fade');
                        setTimeout(function() {
                            alert.remove();
                        }, 500);
                    });
                }, 5000);
            }
        });
    </script>

    <style>
        .btn-home {
            background-color: #28a745;
            color: #fff;
            transition: background-color 0.3s, transform 0.3s;
        }

        .btn-home:hover {
            background-color: #28a745;
            transform: translateY(-2px);
        }

        .btn-home:focus {
            box-shadow: 0 0 0 0.2rem rgba(28, 157, 33, 0.5);
        }

        .btn-home .fa-home {
            font-size: 1.2rem;
        }
    </style>


</body>

</html>
