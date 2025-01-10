@include('Admin.header')

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
<link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-icons/1.10.5/font/bootstrap-icons.min.css" rel="stylesheet">

<style>
    body {
        background-color: #f0f4f8;
        font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
    }

    .container {
        margin-top: 3rem;
        padding: 2rem;
        border-radius: 12px;
        background: #ffffff;
        box-shadow: 0 8px 30px rgba(0, 0, 0, 0.05);
    }

    .pagetitle h1 {
        font-size: 2.5rem;
        font-weight: 700;
        color: #343a40;
        margin-bottom: 0.5rem;
        display: flex;
        align-items: center;
    }

    .pagetitle h1 i {
        margin-right: 0.75rem;
        color: #007bff;
    }

    .breadcrumb {
        background: none;
        padding-left: 0;
    }

    .breadcrumb-item a {
        color: #6c757d;
        text-decoration: none;
        transition: color 0.3s;
    }

    .breadcrumb-item a:hover {
        color: #007bff;
    }

    .card {
        border: none;
        border-radius: 15px;
        background: #f8f9fa;
        transition: transform 0.3s, box-shadow 0.3s;
    }

    .card:hover {
        transform: translateY(-8px);
        box-shadow: 0 12px 24px rgba(0, 0, 0, 0.1);
    }

    .card-title {
        font-size: 2rem;
        font-weight: 600;
        color: #495057;
        margin-bottom: 1.5rem;
        position: relative;
    }

    .card-title::after {
        content: '';
        width: 50px;
        height: 3px;
        background-color: #007bff;
        position: absolute;
        left: 0;
        bottom: -10px;
        border-radius: 2px;
    }

    .field-label {
        font-weight: 600;
        color: #495057;
        margin-bottom: 0.5rem;
        display: flex;
        align-items: center;
        cursor: pointer; 
    }

    .field-label i {
        margin-right: 0.5rem;
        color: #6c757d;
    }

    .form-control-plaintext {
        color: #343a40;
        background-color: #e9ecef;
        border-radius: 8px;
        padding: 0.75rem 1rem;
        font-size: 1rem;
    }

    .form-group {
        margin-bottom: 1.75rem;
    }

    .btn-danger {
        background-color: #dc3545;
        border-color: #dc3545;
        padding: 0.75rem 1.5rem;
        font-size: 1rem;
        border-radius: 50px;
        transition: background-color 0.3s, transform 0.2s;
    }

    .btn-danger:hover {
        background-color: #c82333;
        border-color: #bd2130;
        transform: translateY(-2px);
    }

    .avatar {
        width: 80px;
        height: 80px;
        border-radius: 50%;
        margin-right: 1rem;
        object-fit: cover;
        border: 2px solid #007bff;
    }

    @media (max-width: 576px) {
        .pagetitle h1 {
            font-size: 2rem;
        }

        .avatar {
            width: 60px;
            height: 60px;
        }
    }
</style>

<div class="container">
    <div class="pagetitle mb-4 d-flex align-items-center">
        <img src="{{ asset('Authentication/Account/images/6.jpg') }}" alt="{{ $customer->customer_name }}" class="avatar">
        <div>
            <h1><i class="bi bi-person-fill"></i> {{ $customer->customer_name }}</h1>
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb mb-0">
                    <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}"><i class="bi bi-house-door-fill me-1"></i> Home</a></li>
                    <li class="breadcrumb-item active" aria-current="page"><i class="bi bi-person-fill me-1"></i> View Customer</li>
                </ol>
            </nav>
        </div>
    </div>

    <div class="card">
        <div class="card-body">
            <h5 class="card-title">Customer Details</h5>
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <label class="field-label" for="firstName" ><i class="bi bi-person-circle"></i> First Name</label>
                        <input type="text" readonly class="form-control-plaintext" id="firstName" value="{{ $customer->first_name }}">
                    </div>

                    <div class="form-group">
                        <label class="field-label" for="lastName" ><i class="bi bi-person-circle"></i> Last Name</label>
                        <input type="text" readonly class="form-control-plaintext" id="lastName" value="{{ $customer->last_name }}">
                    </div>

                    <div class="form-group">
                        <label class="field-label" for="email"><i class="bi bi-envelope"></i> Email</label>
                        <input type="email" readonly class="form-control-plaintext" id="email" value="{{ $customer->email }}">
                    </div>

                    <div class="form-group">
                        <label class="field-label" for="contactNo"><i class="bi bi-telephone"></i> Contact No</label>
                        <input type="text" readonly class="form-control-plaintext"  id="contactNo" value="{{ $customer->contact_no }}">
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="form-group">
                        <label class="field-label" for="address"><i class="bi bi-geo-alt"></i> Address</label>
                        <textarea class="form-control-plaintext" id="address" rows="3" readonly>{{ $customer->address }}</textarea>
                    </div>

                    <div class="form-group">
                        <label class="field-label" for="city"><i class="bi bi-building"></i> City</label>
                        <input type="text" readonly class="form-control-plaintext" id="city" value="{{ $customer->city }}">
                    </div>

                    <div class="form-group">
                        <label class="field-label" for="pincode"><i class="bi bi-postcard"></i> Pincode</label>
                        <input type="text" readonly class="form-control-plaintext" id="pincode" value="{{ $customer->pincode }}">
                    </div>
                </div>
            </div>

            <div class="form-group text-end mt-4">
                <a href="{{ route('users') }}" class="btn btn-danger" ><i class="bi bi-arrow-left-circle me-2"></i> Back to Customers</a>
            </div>
        </div>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

<script src="{{ asset('Admin/assets/vendor/apexcharts/apexcharts.min.js') }}"></script>
<script src="{{ asset('Admin/assets/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
<script src="{{ asset('Admin/assets/vendor/chart.js/chart.umd.jss') }}"></script>
<script src="{{ asset('Admin/assets/vendor/echarts/echarts.min.js') }}"></script>
<script src="{{ asset('Admin/assets/vendor/quill/quill.js') }}"></script>
<script src="{{ asset('Admin/assets/vendor/simple-datatables/simple-datatables.js') }}"></script>
<script src="{{ asset('Admin/assets/vendor/tinymce/tinymce.min.js') }}"></script>
<script src="{{ asset('Admin/assets/vendor/php-email-form/validate.js') }}"></script>
<script src="{{ asset('Admin/assets/js/main.js') }}"></script>



@include('Admin.footer')
