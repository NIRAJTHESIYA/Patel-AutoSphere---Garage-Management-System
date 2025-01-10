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

    .btn-danger {
        background-color: #dc3545;
        border: none;
    }

    .btn-danger:hover {
        background-color: #c82333;
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
        <h1><i class="bi bi-box"></i> Products</h1>
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb bg-transparent mb-0">
                <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}"><i class="bi bi-house-door-fill me-1"></i>Home</a></li>
                <li class="breadcrumb-item active" aria-current="page"><i class="bi bi-plus-circle me-1"></i>Add Product</li>
            </ol>
        </nav>
    </div>

    <div class="card">
        <div class="card-body">
            <h5 class="card-title">New Product Details</h5>

            <form action="{{ route('products.store') }}" method="POST" enctype="multipart/form-data">
                @csrf

                <div class="mb-3">
                    <label for="product_name" class="form-label">Product Name</label>
                    <input type="text" name="product_name" class="form-control @error('product_name') is-invalid @enderror" id="product_name" value="{{ old('product_name') }}" required>
                    @error('product_name')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>

                <div class="mb-3">
                    <label for="product_price" class="form-label">Product Price</label>
                    <input type="number" name="product_price" class="form-control @error('product_price') is-invalid @enderror" id="product_price" step="0.01" value="{{ old('product_price') }}" required>
                    @error('product_price')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>

                <div class="mb-3">
                    <label for="description" class="form-label">Description</label>
                    <textarea name="description" class="form-control @error('description') is-invalid @enderror" id="description" rows="3" required>{{ old('description') }}</textarea>
                    @error('description')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>

                <div class="mb-3">
                    <label for="description" class="form-label">Short Description</label>
                    <textarea name="short_description" class="form-control @error('short_description') is-invalid @enderror" id="short_description" rows="3" required>{{ old('short_description') }}</textarea>
                    @error('short_description')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>

                <div class="mb-3">
                    <label for="category_id" class="form-label">Category</label>
                    <select name="category_id" id="category_id" class="form-control @error('category_id') is-invalid @enderror" required>
                        <option value="">Select Category</option>
                        @foreach($categories as $category)
                            <option value="{{ $category->category_id }}">{{ $category->category_name }}</option>
                        @endforeach
                    </select>
                    @error('category_id')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>

                <!-- Images for Product -->
                <div class="mb-3">
                    <label for="product_photo_1" class="form-label">Product Photo 1</label>
                    <input type="file" name="product_photo_1" class="form-control @error('product_photo_1') is-invalid @enderror" id="product_photo_1" accept="image/*">
                    @error('product_photo_1')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="product_photo_1" class="form-label">Product Photo 2</label>
                    <input type="file" name="product_photo_2" class="form-control @error('product_photo_2') is-invalid @enderror" id="product_photo_2" accept="image/*">
                    @error('product_photo_2')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="product_photo_1" class="form-label">Product Photo 3</label>
                    <input type="file" name="product_photo_3" class="form-control @error('product_photo_3') is-invalid @enderror" id="product_photo_3" accept="image/*">
                    @error('product_photo_3')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="product_photo_1" class="form-label">Product Photo 4</label>
                    <input type="file" name="product_photo_4" class="form-control @error('product_photo_4') is-invalid @enderror" id="product_photo_4" accept="image/*">
                    @error('product_photo_4')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="product_photo_1" class="form-label">Product Photo 5</label>
                    <input type="file" name="product_photo_5" class="form-control @error('product_photo_5') is-invalid @enderror" id="product_photo_5" accept="image/*">
                    @error('product_photo_5')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>

                <div class="mb-3">
                    <label for="availability" class="form-label">Availability</label>
                    <select name="availability" id="availability" class="form-control @error('availability') is-invalid @enderror" required>
                        <option value="in stock">In Stock</option>
                        <option value="out of stock">Out of Stock</option>
                    </select>
                    @error('availability')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>

                <div class="mb-3">
                    <label for="brand" class="form-label">Brand</label>
                    <input type="text" name="brand" class="form-control @error('brand') is-invalid @enderror" id="brand" value="{{ old('brand') }}">
                    @error('brand')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>

                <div class="mb-3">
                    <label for="color" class="form-label">Color</label>
                    <input type="text" name="color" class="form-control @error('color') is-invalid @enderror" id="color" value="{{ old('color') }}">
                    @error('color')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>

                <div class="mb-3">
                    <label for="product_dimensions" class="form-label">Product Dimensions</label>
                    <input type="text" name="product_dimensions" class="form-control @error('product_dimensions') is-invalid @enderror" id="product_dimensions" value="{{ old('product_dimensions') }}">
                    @error('product_dimensions')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>

                <div class="mb-3">
                    <label for="vehicle_type" class="form-label">Vehicle Type</label>
                    <input type="text" name="vehicle_type" class="form-control @error('vehicle_type') is-invalid @enderror" id="vehicle_type" value="{{ old('vehicle_type') }}">
                    @error('vehicle_type')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>

                <div class="mb-3">
                    <label for="warranty" class="form-label">Warranty</label>
                    <input type="text" name="warranty" class="form-control @error('warranty') is-invalid @enderror" id="warranty" value="{{ old('warranty') }}">
                    @error('warranty')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>

                <div class="mb-3">
                    <label for="car_model" class="form-label">Car Model</label>
                    <input type="text" name="car_model" class="form-control @error('car_model') is-invalid @enderror" id="car_model" value="{{ old('car_model') }}">
                    @error('car_model')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>

                <div class="mb-3">
                    <label for="status" class="form-label">Status</label>
                    <select name="status" id="status" class="form-control @error('status') is-invalid @enderror" required>
                        <option value="best seller">Best Seller</option>
                        <option value="trending product">Trending Product</option>
                        <option value="popular product">Popular Product</option>
                    </select>
                    @error('status')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>

                <div class="d-flex justify-content-between">
                    <button type="submit" class="btn btn-success">Add Product</button>
                    <a href="{{ route('admin.products') }}" class="btn btn-danger">Cancel</a>
                </div>
            </form>

        </div>
    </div>
</div>

@include('Admin.footer')

<script src="{{ asset('Admin/assets/vendor/apexcharts/apexcharts.js') }}"></script>
<script src="{{ asset('Admin/assets/js/pages/dashboard.js') }}"></script>
<script src="{{ asset('Admin/assets/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>


    <script src="{{ asset('Admin/assets/vendor/apexcharts/apexcharts.min.js') }}"></script>
    <script src="{{ asset('Admin/assets/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('Admin/assets/vendor/chart.js/chart.umd.jss') }}"></script>
    <script src="{{ asset('Admin/assets/vendor/echarts/echarts.min.js') }}"></script>
    <script src="{{ asset('Admin/assets/vendor/quill/quill.js') }}"></script>
    <script src="{{ asset('Admin/assets/vendor/simple-datatables/simple-datatables.js') }}"></script>
    <script src="{{ asset('Admin/assets/vendor/tinymce/tinymce.min.js') }}"></script>
    <script src="{{ asset('Admin/assets/vendor/php-email-form/validate.js') }}"></script>

    <script src="{{ asset('Admin/assets/js/main.js') }}"></script>
