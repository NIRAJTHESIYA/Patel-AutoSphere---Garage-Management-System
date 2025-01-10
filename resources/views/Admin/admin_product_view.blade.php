@include('Admin.header')

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
<link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-icons/1.10.5/font/bootstrap-icons.min.css" rel="stylesheet">

<style>
    body {
        background-color: #f8f9fa;
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

    .product-photo {
        width: 100%;
        border-radius: 12px;
        object-fit: cover;
        margin-bottom: 1rem;
        box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
    }

    @media (max-width: 576px) {
        .pagetitle h1 {
            font-size: 2rem;
        }

        .avatar {
            width: 60px;
            height: 60px;
        }

        .product-photo {
            width: 100%;
        }
    }

    .avatar {
        transition: transform 0.3s ease-in-out;
    }
</style>

<div class="container">
    <div class="pagetitle mb-4 d-flex align-items-center">
        <img src="{{ asset($product->product_photo_1) }}" alt="{{ $product->product_name }}" class="avatar">
        <div>
            <h1><i class="bi bi-box-seam"></i> {{ $product->product_name }}</h1>
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb mb-0">
                    <li class="breadcrumb-item">
                        <a href="{{ route('admin.dashboard') }}"><i class="bi bi-house-door-fill me-1"></i> Home</a>
                    </li>
                    <li class="breadcrumb-item active" aria-current="page"><i class="bi bi-box-seam"></i> View Product
                    </li>
                </ol>
            </nav>
        </div>
    </div>

    <div class="card">
        <div class="card-body">
            <h5 class="card-title">Product Details</h5>
            <div class="row">
                <!-- Column 1 -->
                <div class="col-md-6">
                    <div class="form-group">
                        <label class="field-label"><i class="bi bi-box-seam"></i> Product Name</label>
                        <input type="text" readonly class="form-control-plaintext"
                            value="{{ $product->product_name }}">
                    </div>

                    <div class="form-group">
                        <label class="field-label"><i class="bi bi-currency-dollar"></i> Price</label>
                        <input type="text" readonly class="form-control-plaintext"
                            value="{{ $product->product_price }}">
                    </div>

                    <div class="form-group">
                        <label class="field-label"><i class="bi bi-tags"></i> Brand</label>
                        <input type="text" readonly class="form-control-plaintext" value="{{ $product->brand }}">
                    </div>

                    <div class="form-group">
                        <label class="field-label"><i class="bi bi-palette"></i> Color</label>
                        <input type="text" readonly class="form-control-plaintext" value="{{ $product->color }}">
                    </div>

                    <div class="form-group">
                        <label class="field-label"><i class="bi bi-car-front"></i> Vehicle Type</label>
                        <input type="text" readonly class="form-control-plaintext"
                            value="{{ $product->vehicle_type }}">
                    </div>

                    <div class="form-group">
                        <label class="field-label"><i class="bi bi-file-earmark-spreadsheet"></i> Product
                            Dimensions</label>
                        <input type="text" readonly class="form-control-plaintext"
                            value="{{ $product->product_dimensions }}">
                    </div>
                </div>

                <!-- Column 2 -->
                <div class="col-md-6">
                    <div class="form-group">
                        <label class="field-label"><i class="bi bi-clipboard-check"></i> Warranty</label>
                        <input type="text" readonly class="form-control-plaintext" value="{{ $product->warranty }}">
                    </div>

                    <div class="form-group">
                        <label class="field-label"><i class="bi bi-archive"></i> Availability</label>
                        <input type="text" readonly class="form-control-plaintext"
                            value="{{ $product->availability }}">
                    </div>

                    <div class="form-group">
                        <label class="field-label"><i class="bi bi-car-front-fill"></i> Car Model</label>
                        <input type="text" readonly class="form-control-plaintext"
                            value="{{ $product->car_model }}">
                    </div>

                    <div class="form-group">
                        <label class="field-label"><i class="bi bi-card-text"></i> Status</label>
                        <input type="text" readonly class="form-control-plaintext" value="{{ $product->status }}">
                    </div>

                    <div class="form-group">
                        <label class="field-label"><i class="bi bi-list-task"></i> Category</label>
                        <input type="text" readonly class="form-control-plaintext"
                            value="{{ $product->category->name ?? 'N/A' }}">
                    </div>

                    <div class="form-group">
                        <label class="field-label"><i class="bi bi-box2-heart"></i> Short Description</label>
                        <textarea class="form-control-plaintext" rows="3" readonly>{{ $product->short_description }}</textarea>
                    </div>
                </div>
            </div>

            <div class="form-group mt-3">
                <label class="field-label"><i class="bi bi-file-text"></i> Full Description</label>
                <textarea class="form-control-plaintext" rows="4" readonly>{{ $product->description }}</textarea>
            </div>

            <div class="form-group text-end mt-4">
                <a href="{{ route('admin.products') }}" class="btn btn-danger">
                    <i class="bi bi-arrow-left-circle me-2"></i> Back to Products
                </a>
            </div>
        </div>
    </div>
</div>

<script>
    document.addEventListener('DOMContentLoaded', () => {
        const image = document.querySelector('.avatar');

        // Add event listener for mouse enter
        image.addEventListener('mouseenter', () => {
            image.style.transform = 'scale(1.2)';
        });

        // Add event listener for mouse leave
        image.addEventListener('mouseleave', () => {
            image.style.transform = 'scale(1)';
        });
    });
</script>

@include('Admin.footer')
