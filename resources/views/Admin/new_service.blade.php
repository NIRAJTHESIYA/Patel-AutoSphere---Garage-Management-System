@include('Admin.header')

<link href="https://stackpath.bootstrapcdn.com/bootstrap/5.3.0/css/bootstrap.min.css" rel="stylesheet">
<style>
    body {
        background-color: #f0f2f5;
        font-family: 'Arial', sans-serif;
    }

    .container {
        margin-top: 2rem;
        padding: 2.5rem;
        border-radius: 12px;
        background: #ffffff;
        box-shadow: 0 10px 40px rgba(0, 0, 0, 0.1);
    }

    .pagetitle h1 {
        font-size: 2.5rem;
        font-weight: 600;
        color: #007bff;
        margin-bottom: 1.5rem;
        text-shadow: 1px 1px 2px rgba(0, 123, 255, 0.2);
    }

    .breadcrumb {
        background-color: transparent;
        padding: 0;
    }

    .breadcrumb-item + .breadcrumb-item::before {
        color: #6c757d;
        content: ">";
    }

    .card {
        border: none;
        border-radius: 12px;
        overflow: hidden;
    }

    .card-title {
        font-size: 1.75rem;
        font-weight: 600;
        color: #343a40;
        margin-bottom: 1.2rem;
        position: relative;
    }

    .card-title::after {
        content: '';
        display: block;
        width: 50px;
        height: 4px;
        background-color: #007bff;
        border-radius: 5px;
        margin-top: 5px;
    }

    .form-label {
        font-weight: bold;
        color: #343a40;
        font-size: 1.1rem;
    }

    .form-control {
        border-radius: 5px;
        border: 1px solid #ced4da;
        transition: border-color 0.3s ease-in-out, box-shadow 0.3s ease-in-out;
        padding: 10px;
    }

    .form-control:focus {
        border-color: #007bff;
        box-shadow: 0 0 5px rgba(0, 123, 255, 0.5);
    }

    .btn {
        border-radius: 30px;
        padding: 10px 25px;
        font-weight: bold;
        font-size: 1rem;
        transition: background-color 0.3s, transform 0.3s;
        box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
    }

    .btn-success {
        background-color: #28a745;
        border: none;
    }

    .btn-success:hover {
        background-color: #218838;
        transform: translateY(-2px);
    }

    .btn-secondary {
        background-color: #6c757d;
        border: none;
    }

    .btn-secondary:hover {
        background-color: #5a6268;
        transform: translateY(-2px);
    }

    .invalid-feedback {
        font-size: 0.875rem;
        margin-top: 0.25rem;
    }

    @media (max-width: 768px) {
        .pagetitle h1 {
            font-size: 2rem;
        }

        .card-title {
            font-size: 1.5rem;
        }

        .form-control {
            font-size: 0.9rem;
        }

        .btn {
            padding: 8px 20px;
        }
    }
</style>


<div class="container mt-4">
    <div class="pagetitle mb-4">
        <h1 style="font-size: 35px">
            <i class="bi bi-tools"></i> Services
        </h1><br>
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb bg-transparent mb-0">
                <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}"><i
                            class="bi bi-house-door-fill me-1"></i>Home</a></li>
                <li class="breadcrumb-item active" aria-current="page"><i class="bi bi-plus-circle me-1"></i>Add
                    Services</li>
            </ol>
        </nav>
    </div>

    <div class="card">
        <div class="card-body">
            <h5 class="card-title">Add New Service Details</h5>

            <form action="{{ route('services.store') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="mb-3">
                    <label for="service_name" class="form-label">Service Name</label>
                    <input type="text" class="form-control @error('service_name') is-invalid @enderror"
                        id="service_name" name="service_name" value="{{ old('service_name') }}" required>
                    @error('service_name')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>

                <div class="mb-3">
                    <label for="service_description" class="form-label">Description</label>
                    <textarea class="form-control @error('service_description') is-invalid @enderror" id="service_description"
                        name="service_description" rows="3" required>{{ old('service_description') }}</textarea>
                    @error('service_description')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>

                <div class="mb-3">
                    <label for="service_topic" class="form-label">Topic</label>
                    <input type="text" class="form-control @error('service_topic') is-invalid @enderror"
                        id="service_topic" name="service_topic" value="{{ old('service_topic') }}" required>
                    @error('service_topic')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>

                <div class="mb-3">
                    <label for="price_range" class="form-label">Price Range</label>
                    <input type="text" class="form-control @error('price_range') is-invalid @enderror"
                        id="price_range" name="price_range" value="{{ old('price_range') }}" required>
                    @error('price_range')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>

                <div class="mb-3">
                    <label for="service_image" class="form-label">Service Image</label>
                    <input type="file" class="form-control @error('service_image') is-invalid @enderror"
                        id="service_image" name="service_image">
                    @error('service_image')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>

                <div class="d-flex justify-content-between">
                    <button type="submit" class="btn btn-success">Save Service</button>
                    <a href="{{ route('admin.services') }}" class="btn btn-danger">Cancel</a>
                </div>
            </form>
        </div>
    </div>
</div>

@include('Admin.footer')

<script src="https://stackpath.bootstrapcdn.com/bootstrap/5.3.0/js/bootstrap.bundle.min.js"></script>

<script src="{{ asset('Admin/assets/vendor/apexcharts/apexcharts.min.js') }}"></script>
<script src="{{ asset('Admin/assets/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
<script src="{{ asset('Admin/assets/vendor/chart.js/chart.umd.jss') }}"></script>
<script src="{{ asset('Admin/assets/vendor/echarts/echarts.min.js') }}"></script>
<script src="{{ asset('Admin/assets/vendor/quill/quill.js') }}"></script>
<script src="{{ asset('Admin/assets/vendor/simple-datatables/simple-datatables.js') }}"></script>
<script src="{{ asset('Admin/assets/vendor/tinymce/tinymce.min.js') }}"></script>
<script src="{{ asset('Admin/assets/vendor/php-email-form/validate.js') }}"></script>

<script src="{{ asset('Admin/assets/js/main.js') }}"></script>
