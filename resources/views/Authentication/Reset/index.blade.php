<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />

    <title>Reset Password - Patel Car Care</title>
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
    <link href="{{ asset('Authentication/assets/vendor/quill/quill.snow.css') }}" rel="stylesheet" />
    <link href="{{ asset('Authentication/assets/vendor/quill/quill.snow.css') }}" rel="stylesheet" />
    <link href="{{ asset('Authentication/assets/vendor/quill/quill.bubble.css') }}" rel="stylesheet" />
    <link href="{{ asset('Authentication/assets/vendor/remixicon/remixicon.css') }}" rel="stylesheet" />
    <link href="{{ asset('Authentication/assets/vendor/simple-datatables/style.css') }}" rel="stylesheet" />

    <link href="{{ asset('Authentication/assets/css/style.css') }}" rel="stylesheet" />

    <style>
        .reset-container {
            display: flex;
            flex-direction: column;
            align-items: center;
            gap: 1rem;
        }

        .reset-input {
            width: 100%;
            padding: 0.5rem;
            font-size: 1rem;
            border: 1px solid #ced4da;
            border-radius: 0.375rem;
        }

        .reset-input:focus {
            border-color: #007bff;
            outline: none;
        }

        .reset-button {
            width: 100%;
            padding: 0.5rem;
            font-size: 1rem;
            color: #fff;
            background-color: #007bff;
            border: none;
            border-radius: 0.375rem;
            cursor: pointer;
            transition: background-color 0.3s;
        }

        .reset-button:hover {
            background-color: #0056b3;
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
                                            Reset Your Password
                                        </h5>
                                        <p class="text-center small">Enter your new password</p>
                                    </div>


                                    <form class="row g-3 needs-validation" method="POST"
                                        action="{{ route('processResetPassword') }}" novalidate>
                                        @csrf

                                        <input type="hidden" name="token" value="{{ $token }}">

                                        @if (session('success'))
                                            <div class="alert alert-success alert-dismissible fade show" role="alert">
                                                {{ session('success') }}
                                                <button type="button" class="btn-close" data-bs-dismiss="alert"
                                                    aria-label="Close"></button>
                                            </div>
                                        @endif

                                        @if ($errors->any())
                                            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                                                <ul>
                                                    @foreach ($errors->all() as $error)
                                                        <li>{{ $error }}</li>
                                                    @endforeach
                                                </ul>
                                                <button type="button" class="btn-close" data-bs-dismiss="alert"
                                                    aria-label="Close"></button>
                                            </div>
                                        @endif

                                        <div class="col-12">
                                            <label for="yourPassword" class="form-label">New Password</label>
                                            <div class="input-group has-validation">
                                                <span class="input-group-text" id="inputGroupPrepend">
                                                    <i class="fa-solid fa-key"></i>
                                                </span>
                                                <input type="password" name="password"
                                                    class="form-control @error('password') is-invalid @enderror"
                                                    id="yourPassword" required />
                                                @error('password')
                                                    <div class="invalid-feedback">
                                                        {{ $message }}
                                                    </div>
                                                @enderror
                                            </div>
                                        </div>

                                        <div class="col-12">
                                            <label for="yourPasswordConfirmation" class="form-label">Confirm
                                                Password</label>
                                            <div class="input-group has-validation">
                                                <span class="input-group-text" id="inputGroupPrepend">
                                                    <i class="fa-solid fa-key"></i>
                                                </span>
                                                <input type="password" name="password_confirmation"
                                                    class="form-control @error('password_confirmation') is-invalid @enderror"
                                                    id="yourPasswordConfirmation" required />
                                                    @error('password_confirmation')
                                                        <div class="invalid-feedback">
                                                            {{ $message }}
                                                        </div>
                                                    @enderror
                                                </div>
                                            </div>

                                            <div class="col-12">
                                                <button class="reset-button btn btn-primary w-100" type="submit">
                                                    Submit
                                                </button>
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
            const successAlert = document.getElementById('successAlert');
            if (successAlert) {
                setTimeout(function() {
                    successAlert.classList.remove('show');
                    successAlert.classList.add('fade');
                }, 5000);
            }

            const errorAlert = document.getElementById('errorAlert');
            if (errorAlert) {
                setTimeout(function() {
                    errorAlert.classList.remove('show');
                    errorAlert.classList.add('fade');
                }, 5000);
            }
        });
    </script>
</body>

</html>
