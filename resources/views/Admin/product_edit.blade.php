@include('Admin.header')

<link href="https://stackpath.bootstrapcdn.com/bootstrap/5.3.0/css/bootstrap.min.css" rel="stylesheet">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">

<style>
    body {
        background-color: #f8f9fa;
        font-family: 'Helvetica Neue', sans-serif; /* Modern font family */
    }

    .container {
        margin-top: 3rem; /* Increased margin for top spacing */
        padding: 2rem; /* Added padding for better spacing */
        border-radius: 15px; /* Rounded corners */
        background: #ffffff; /* White background for card */
        box-shadow: 0 8px 30px rgba(0, 0, 0, 0.15); /* Deeper shadow for card */
    }

    .pagetitle h1 {
        font-size: 2.5rem; /* Increased font size for prominence */
        margin-bottom: 1rem; /* Spacing below title */
        font-weight: 700; /* Bold font for titles */
        color: #007bff; /* Blue color for main title */
        text-shadow: 1px 1px 2px rgba(0, 123, 255, 0.2); /* Soft shadow */
    }

    .breadcrumb {
        background-color: transparent; /* Transparent background */
        padding: 0; /* No padding */
    }

    .breadcrumb-item + .breadcrumb-item::before {
        color: #6c757d; /* Color for breadcrumb separator */
        content: ">";
    }

    .card {
        box-shadow: 0 8px 20px rgba(0, 0, 0, 0.15); /* Deeper shadow for card */
        border-radius: 10px; /* Rounded corners */
        background: #ffffff; /* White background */
        border: none; /* No border */
    }

    .card-title {
        font-size: 1.8rem; /* Increased font size for card title */
        font-weight: bold; /* Bold font for title */
        color: #343a40; /* Darker text color */
        margin-bottom: 1rem; /* Spacing below title */
        position: relative; /* For positioning decorative line */
    }

    .card-title::after {
        content: ''; /* Decorative line */
        display: block; /* Block display */
        width: 50px; /* Width of line */
        height: 4px; /* Thickness of line */
        background-color: #007bff; /* Blue line */
        border-radius: 5px; /* Rounded corners */
        margin-top: 5px; /* Spacing above line */
    }

    .form-label {
        font-weight: bold; /* Bold labels */
        color: #343a40; /* Dark color for better readability */
    }

    .form-control {
        border-radius: 5px; /* Rounded corners */
        border: 1px solid #ced4da; /* Light border */
        transition: border-color 0.3s ease-in-out, box-shadow 0.3s ease-in-out; /* Smooth transitions */
    }

    .form-control:focus {
        border-color: #007bff; /* Focused border color */
        box-shadow: 0 0 0 0.2rem rgba(0, 123, 255, 0.25); /* Soft glow on focus */
    }

    .btn-pill {
        border-radius: 50px; /* Pill-shaped buttons */
        padding: 10px 25px; /* Comfortable padding */
        font-weight: bold; /* Bold button text */
        font-size: 1rem; /* Consistent font size */
        transition: background-color 0.3s, transform 0.3s; /* Smooth transition */
    }

    .btn-success {
        background-color: #28a745; /* Green background */
        border: none; /* No border */
    }

    .btn-success:hover {
        background-color: #218838; /* Darker green on hover */
        transform: scale(1.05); /* Slightly enlarge button on hover */
    }

    .btn-danger {
        background-color: #dc3545; /* Red background */
        border: none; /* No border */
    }

    .btn-danger:hover {
        background-color: #c82333; /* Darker red on hover */
        transform: scale(1.05); /* Slightly enlarge button on hover */
    }

    .invalid-feedback {
        font-size: 0.875rem; /* Font size for error messages */
        margin-top: 0.25rem; /* Spacing above error messages */
    }

    /* Responsive adjustments for mobile view */
    @media (max-width: 768px) {
        .pagetitle h1 {
            font-size: 2rem; /* Adjusted font size for smaller screens */
        }

        .card-title {
            font-size: 1.5rem; /* Adjusted font size for card title */
        }

        .form-control {
            font-size: 0.875rem; /* Slightly smaller for mobile */
        }

        .btn-pill {
            padding: 8px 20px; /* Adjusted button padding */
        }
    }

</style>

<div class="container mt-4">
    <div class="pagetitle mb-4">
        <h1 style="font-size: 35px">
            <i class="bi bi-box-fill me-1"></i> Edit Products
        </h1><br>
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb bg-transparent mb-0">
                <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}"><i class="bi bi-house-door-fill me-1"></i>Home</a></li>
                <li class="breadcrumb-item active" aria-current="page"><i class="bi bi-list-check me-1"></i>Products</li>
            </ol>
        </nav>
    </div>

    <div class="card">
        <div class="card-body">
            <h5 class="card-title">Edit Product Details</h5>

            <form action="{{ route('products.update', $product->product_id) }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')

                <div class="mb-3">
                    <label for="product_name" class="form-label">Product Name</label>
                    <input type="text" name="product_name" class="form-control @error('product_name') is-invalid @enderror" id="product_name" value="{{ old('product_name', $product->product_name) }}" required>
                    @error('product_name')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>

                <div class="mb-3">
                    <label for="product_price" class="form-label">Product Price</label>
                    <input type="number" name="product_price" class="form-control @error('product_price') is-invalid @enderror" id="product_price" step="0.01" value="{{ old('product_price', $product->product_price) }}" required>
                    @error('product_price')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>

                <div class="mb-3">
                    <label for="description" class="form-label">Description</label>
                    <textarea name="description" class="form-control @error('description') is-invalid @enderror" id="description" rows="3">{{ old('description', $product->description) }}</textarea>
                    @error('description')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>

                <div class="mb-3">
                    <label for="short_description" class="form-label">Short Description</label>
                    <textarea name="short_description" class="form-control @error('short_description') is-invalid @enderror" id="short_description" rows="2">{{ old('short_description', $product->short_description) }}</textarea>
                    @error('short_description')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>

                <!-- Product Photos -->
                @for($i = 1; $i <= 5; $i++)
                    <div class="mb-3">
                        <label for="product_photo_{{ $i }}" class="form-label">Product Photo {{ $i }}</label>
                        <input type="file" name="product_photo_{{ $i }}" class="form-control @error('product_photo_' . $i) is-invalid @enderror" id="product_photo_{{ $i }}" accept="image/*">
                        @if($product->{'product_photo_' . $i})
                            <img src="{{ asset('storage/' . $product->{'product_photo_' . $i}) }}" alt="Current Image {{ $i }}" width="100" class="mt-2">
                        @endif
                        @error('product_photo_' . $i)
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                @endfor

                <div class="mb-3">
                    <label for="availability" class="form-label">Availability</label>
                    <select name="availability" id="availability" class="form-control @error('availability') is-invalid @enderror" required>
                        <option value="in stock" {{ old('availability', $product->availability) == 'in stock' ? 'selected' : '' }}>In Stock</option>
                        <option value="out of stock" {{ old('availability', $product->availability) == 'out of stock' ? 'selected' : '' }}>Out of Stock</option>
                    </select>
                    @error('availability')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>

                <div class="mb-3">
                    <label for="brand" class="form-label">Brand</label>
                    <input type="text" name="brand" class="form-control @error('brand') is-invalid @enderror" id="brand" value="{{ old('brand', $product->brand) }}">
                    @error('brand')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>

                <div class="mb-3">
                    <label for="color" class="form-label">Color</label>
                    <input type="text" name="color" class="form-control @error('color') is-invalid @enderror" id="color" value="{{ old('color', $product->color) }}">
                    @error('color')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>

                <div class="mb-3">
                    <label for="product_dimensions" class="form-label">Product Dimensions</label>
                    <input type="text" name="product_dimensions" class="form-control @error('product_dimensions') is-invalid @enderror" id="product_dimensions" value="{{ old('product_dimensions', $product->product_dimensions) }}">
                    @error('product_dimensions')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>

                <div class="mb-3">
                    <label for="vehicle_type" class="form-label">Vehicle Type</label>
                    <input type="text" name="vehicle_type" class="form-control @error('vehicle_type') is-invalid @enderror" id="vehicle_type" value="{{ old('vehicle_type', $product->vehicle_type) }}">
                    @error('vehicle_type')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>

                <div class="mb-3">
                    <label for="warranty" class="form-label">Warranty</label>
                    <input type="text" name="warranty" class="form-control @error('warranty') is-invalid @enderror" id="warranty" value="{{ old('warranty', $product->warranty) }}">
                    @error('warranty')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>

                <div class="mb-3">
                    <label for="car_model" class="form-label">Car Model</label>
                    <input type="text" name="car_model" class="form-control @error('car_model') is-invalid @enderror" id="car_model" value="{{ old('car_model', $product->car_model) }}">
                    @error('car_model')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>

                <div class="mb-3">
                    <label for="status" class="form-label">Status</label>
                    <select name="status" id="status" class="form-control @error('status') is-invalid @enderror">
                        <option value="best seller" {{ old('status', $product->status) == 'best seller' ? 'selected' : '' }}>Best Seller</option>
                        <option value="trending product" {{ old('status', $product->status) == 'trending product' ? 'selected' : '' }}>Trending Product</option>
                        <option value="popular product" {{ old('status', $product->status) == 'popular product' ? 'selected' : '' }}>Popular Product</option>
                    </select>
                    @error('status')
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
                            <option value="{{ $category->category_id }}" {{ old('category_id', $product->category_id) == $category->category_id ? 'selected' : '' }}>
                                {{ $category->category_name }}
                            </option>
                        @endforeach
                    </select>
                    @error('category_id')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>

                <div class="d-flex justify-content-between">
                    <button type="submit" class="btn btn-success btn-pill">Update Product</button>
                    <a href="{{ route('admin.products') }}" class="btn btn-danger btn-pill">Cancel</a>
                </div>
            </form>


        </div>
    </div>
</div>

@include('Admin.footer')

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
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
