<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />

    <title>Forgot Password - Patel Car Care</title>
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

    <style>
        .custom-alert-success {
            background-color: #d4edda;
            color: #155724;
            padding: 15px;
            border-radius: 5px;
            border: 1px solid #c3e6cb;
            margin-bottom: 10px;
        }

        .custom-alert-danger {
            background-color: #f8d7da;
            color: #721c24;
            padding: 15px;
            border-radius: 5px;
            border: 1px solid #f5c6cb;
            margin-bottom: 10px;
        }

        .custom-alert-close {
            background: transparent;
            border: none;
            font-size: 20px;
            float: right;
            color: inherit;
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
                            <!-- End Logo -->

                            <div class="card mb-3">
                                <div class="card-body">
                                    <div class="pt-4 pb-2">
                                        <h5 class="card-title text-center pb-0 fs-4">
                                            Forgot to Your Password
                                        </h5>
                                        <p class="text-center small">
                                            Enter your Email to Forgot Password
                                        </p>
                                    </div>

                                    <form class="row g-3 needs-validation" method="POST"
                                        action="{{ route('sendResetLink') }}" novalidate>
                                        @csrf
                                        <!-- Display success message -->
                                        @if (session('success'))
                                            <div class="alert alert-success">
                                                {{ session('success') }}
                                            </div>
                                        @endif

                                        <!-- Display error message -->
                                        @if ($errors->any())
                                            <div class="alert alert-danger">
                                                <ul>
                                                    @foreach ($errors->all() as $error)
                                                        <li>{{ $error }}</li>
                                                    @endforeach
                                                </ul>
                                            </div>
                                        @endif

                                        <div class="col-12">
                                            <label for="emailAddress" class="form-label">Email</label>
                                            <div class="input-group has-validation">
                                                <span class="input-group-text" id="inputGroupPrepend">
                                                    <i class="fa-solid fa-at"></i>
                                                </span>
                                                <input type="email" name="emailAddress"
                                                    class="form-control @error('emailAddress') is-invalid @enderror"
                                                    id="emailAddress" value="{{ old('emailAddress') }}" required />

                                                @error('emailAddress')
                                                    <div class="invalid-feedback">
                                                        {{ $message }}
                                                    </div>
                                                @enderror
                                            </div>
                                        </div>

                                        <div class="col-12">
                                            <button class="btn btn-primary w-100" type="submit">
                                                Submit
                                            </button>
                                        </div>

                                        <div class="col-12">
                                            <p class="small mb-0">
                                                Back to
                                                <a href="{{ route('Login') }}">Login? </a>
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

    <script src="Authentication/assets/vendor/apexcharts/apexcharts.min.js"></script>
    <script src="Authentication/assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="Authentication/assets/vendor/chart.js/chart.umd.js"></script>
    <script src="Authentication/assets/vendor/echarts/echarts.min.js"></script>
    <script src="Authentication/assets/vendor/quill/quill.js"></script>
    <script src="Authentication/assets/vendor/simple-datatables/simple-datatables.js"></script>
    <script src="Authentication/assets/vendor/tinymce/tinymce.min.js"></script>
    <script src="Authentication/assets/vendor/php-email-form/validate.js"></script>

    <script src="assets/js/main.js"></script>

    <script>
        setTimeout(function() {
        let successAlert = document.getElementById('success-alert');
        let errorAlert = document.getElementById('error-alert');

        if (successAlert) {
            successAlert.style.transition = 'opacity 0.5s ease-out';
            successAlert.style.opacity = '0';
            setTimeout(() => successAlert.remove(), 500);
        }

        if (errorAlert) {
            errorAlert.style.transition = 'opacity 0.5s ease-out';
            errorAlert.style.opacity = '0';
            setTimeout(() => errorAlert.remove(), 500);
        }
    }, 5000);
    </script>

</body>

</html>
