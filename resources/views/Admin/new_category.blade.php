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

    .btn-primary {
        background-color: #007bff;
        border: none;
    }

    .btn-primary:hover {
        background-color: #0056b3;
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

    @if (session('success'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            {{ session('success') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    @elseif(session('error'))
        <div class="alert alert-danger alert-dismissible fade show" role="alert">
            {{ session('error') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    @endif

    <div class="pagetitle mb-4">
        <h1 style="font-size: 35px">
            <i class="bi bi-tags me-1"></i> Product Categories
        </h1><br>
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb bg-transparent mb-0">
                <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}"><i class="bi bi-house-door-fill me-1"></i>Home</a></li>
                <li class="breadcrumb-item active" aria-current="page"><i class="bi bi-plus-circle me-1"></i>Add Product</li>
            </ol>
        </nav>
    </div>

    <div class="card">
        <div class="card-body">
            <h5 class="card-title">New Category Details</h5>
            <form action="{{ route('categories.store') }}" method="POST">
                @csrf
                <div class="mb-3">
                    <label for="category_name" class="form-label">Category Name</label>
                    <input type="text" class="form-control @error('category_name') is-invalid @enderror" id="category_name" name="category_name" value="{{ old('category_name') }}" required>
                    @error('category_name')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>

                <div class="d-flex justify-content-between">
                    <button type="submit" class="btn btn-success">Add Category</button>
                    <a href="{{ route('admin.categories') }}" class="btn btn-danger">Cancel</a>
                </div>
            </form>
        </div>
    </div>

</div>

@include('Admin.footer')

<script src="https://stackpath.bootstrapcdn.com/bootstrap/5.3.0/js/bootstrap.bundle.min.js"></script>

<script src="{{ asset('Admin/assets/vendor/apexcharts/apexcharts.min.js') }}"></script>
<script src="{{ asset('Admin/assets/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
<script src="{{ asset('Admin/assets/vendor/chart.js/chart.umd.js') }}"></script>
<script src="{{ asset('Admin/assets/vendor/echarts/echarts.min.js') }}"></script>
<script src="{{ asset('Admin/assets/vendor/quill/quill.js') }}"></script>
<script src="{{ asset('Admin/assets/vendor/simple-datatables/simple-datatables.js') }}"></script>
<script src="{{ asset('Admin/assets/vendor/tinymce/tinymce.min.js') }}"></script>
<script src="{{ asset('Admin/assets/vendor/php-email-form/validate.js') }}"></script>

<script src="{{ asset('Admin/assets/js/main.js') }}"></script>
