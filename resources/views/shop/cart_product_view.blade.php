<style>
    @import url('https://fonts.googleapis.com/css2?family=Merriweather:wght@300;700&family=Raleway:wght@400;600&display=swap');

    .container-p {
        max-width: 1200px;
        margin: 0 auto;
        padding: 2rem;
        font-family: 'Raleway', sans-serif;
    }

    .section-title {
        font-family: 'Merriweather', serif;
        font-size: 2rem;
        font-weight: 700;
        margin-bottom: 1rem;
        color: #333;
        text-align: center;
    }

    .product-page {
        display: grid;
        grid-template-columns: 1fr;
        gap: 2rem;
        background-color: #fdfdfd;
        padding: 2rem;
        border-radius: 12px;
        box-shadow: 0 4px 14px rgba(0, 0, 0, 0.1);
    }

    @media (min-width: 768px) {
        .product-page {
            grid-template-columns: 1fr 1fr;
        }
    }

    .gallery {
        display: flex;
        flex-direction: column;
        gap: 1rem;
    }

    .main-image {
        width: 100%;
        height: auto;
        max-height: 450px;
        border-radius: 8px;
        object-fit: cover;
        transition: transform 0.3s ease;
    }

    .gallery img:hover {
        transform: scale(1.05);
    }

    .thumbnails {
        display: flex;
        gap: 1rem;
        justify-content: center;
    }

    .thumbnail img {
        width: 80px;
        height: 80px;
        border-radius: 5px;
        cursor: pointer;
        transition: border 0.3s;
    }

    .thumbnail img:hover {
        border: 2px solid #007bff;
    }

    .product-details {
        display: flex;
        flex-direction: column;
        gap: 1.5rem;
        align-items: center;
        text-align: center;
    }

    .product-name {
        font-family: 'Merriweather', serif;
        font-size: 2.8rem;
        color: #333;
        margin: 0;
    }

    .price {
        font-size: 2.4rem;
        color: #007bff;
        font-weight: 700;
    }

    .availability {
        position: relative;
        display: inline-block;
        font-size: 16px;
        font-weight: bold;
    }

    .in-stock-label {
        padding: 5px 10px;
        background-color: #28a745;
        color: white;
        border-radius: 5px;
        position: relative;
        overflow: hidden;
        display: inline-block;
        font-size: 18px;
        text-transform: uppercase;
    }

    @keyframes glow-scale {
        0% {
            text-shadow: 0 0 5px #28a745, 0 0 10px #28a745, 0 0 15px #28a745, 0 0 20px #28a745;
            transform: scale(1);
        }

        50% {
            text-shadow: 0 0 10px #28a745, 0 0 20px #28a745, 0 0 30px #28a745, 0 0 40px #28a745;
            transform: scale(1.1);
        }

        100% {
            text-shadow: 0 0 5px #28a745, 0 0 10px #28a745, 0 0 15px #28a745, 0 0 20px #28a745;
            transform: scale(1);
        }
    }

    .in-stock-label {
        animation: glow-scale 2s infinite ease-in-out;
    }


    .description {
        line-height: 1.8;
        color: #555;
        font-size: 1.6rem;
        font-family: 'Raleway', sans-serif;
        max-width: 600px;
    }

    .specs-table {
        width: 100%;
        margin-top: 1.5rem;
        border-collapse: collapse;
        font-size: 1.3rem;
    }

    .specs-table th,
    .specs-table td {
        padding: 1rem;
        border: 1px solid #ddd;
        text-align: left;
    }

    .specs-table th {
        background-color: #f8f8f8;
        font-weight: 600;
        color: #333;
    }

    .reviews {
        margin-top: 2rem;
    }

    .review {
        padding: 1.5rem;
        border-bottom: 1px solid #ddd;
    }

    .review .stars {
        color: #ffc107;
        font-size: 1.6rem;
        margin-right: 5px;
    }

    .quantity-selector {
        display: flex;
        align-items: center;
        gap: 1rem;
        flex-wrap: wrap;
        margin-top: 1.5rem;
        font-family: 'Arial', sans-serif;
    }

    .quantity-selector label {
        font-size: 1.4rem;
        color: #333;
        font-weight: 600;
    }

    .quantity-controls {
        display: flex;
        align-items: center;
        gap: 0.5rem;
    }

    .quantity-btn {
        background-color: #f0f0f0;
        border: 1px solid #ccc;
        padding: 0.8rem 1.4rem;
        font-size: 1.6rem;
        font-weight: bold;
        color: #333;
        cursor: pointer;
        border-radius: 8px;
        transition: background-color 0.3s ease, transform 0.2s;
    }

    .quantity-btn:hover {
        background-color: #e0e0e0;
        transform: scale(1.1);
    }

    .quantity-controls input {
        width: 80px;
        text-align: center;
        font-size: 2rem;
        padding: 0.5rem;
        border: 1px solid #ccc;
        border-radius: 8px;
    }

    .add-to-cart {
        background-color: #28a745;
        color: #fff;
        padding: 1rem 2.4rem;
        font-size: 1.4rem;
        font-weight: 600;
        border-radius: 8px;
        border: none;
        cursor: pointer;
        margin-top: 1rem;
        display: flex;
        align-items: center;
        gap: 0.5rem;
        transition: background-color 0.3s ease, transform 0.2s;
    }

    .add-to-cart:hover {
        background-color: #218838;
        transform: scale(1.05);
    }

    .add-to-cart i {
        font-size: 1.6rem;
    }

    @media (max-width: 768px) {
        .quantity-selector {
            flex-direction: column;
            align-items: flex-start;
            gap: 0.8rem;
        }

        .quantity-controls {
            width: 100%;
            justify-content: space-between;
        }

        .quantity-controls input {
            width: 100%;
            max-width: 100px;
        }

        .add-to-cart {
            width: 100%;
            justify-content: center;
        }
    }

    @media (max-width: 480px) {
        .product-name {
            font-size: 2.2rem;
        }

        .price {
            font-size: 2rem;
        }

        .description {
            font-size: 1.2rem;
        }
    }

    .product-description {
        max-width: 600px;
        margin: 30px auto;
        padding: 25px 30px;
        background-color: #f7f7f7;
        border-radius: 10px;
        box-shadow: 0px 6px 15px rgba(0, 0, 0, 0.1);
        border: 1px solid #ddd;
    }

    .description-title {
        font-family: 'Georgia', serif;
        font-size: 26px;
        color: #333;
        margin-bottom: 15px;
        text-align: center;
        letter-spacing: 1px;
    }

    .description-text {
        font-family: 'Arial', sans-serif;
        font-size: 17px;
        line-height: 1.7;
        color: #444;
        text-align: justify;
        text-indent: 15px;
        padding-left: 5px;
        padding-right: 5px;
    }

    .description-text strong {
        font-weight: bold;
        color: #333;
        display: inline-block;
    }

    .product-description p+p {
        margin-top: 10px;
    }

    .alert {
        position: relative;
        max-width: 90%;
        margin: 20px auto;
        padding: 15px 30px;
        border-radius: 8px;
        font-size: 18px;
        font-family: 'Arial', sans-serif;
        opacity: 1;
        transition: opacity 0.5s ease-out;
        animation: fadeIn 0.5s ease-out;
    }

    .alert-success {
        background-color: #dff0d8;
        color: #3c763d;
        border-left: 5px solid #3c763d;
    }

    .alert-danger {
        background-color: #f8d7da;
        color: #721c24;
        border-left: 5px solid #721c24;
    }

    @keyframes fadeIn {
        from {
            opacity: 0;
        }

        to {
            opacity: 1;
        }
    }

    .alert {
        animation: fadeIn 0.5s ease-out, fadeOut 0.5s ease-out 4.5s forwards;
    }

    @keyframes fadeOut {
        from {
            opacity: 1;
        }

        to {
            opacity: 0;
        }
    }

    .back-to-cart {
        margin-top: 20px;
        text-align: left;
    }

    .btn-back-to-cart {
        display: inline-block;
        padding: 12px 24px;
        font-size: 16px;
        font-weight: bold;
        color: #ffffff;
        background-color: #007bff;
        border: none;
        border-radius: 5px;
        text-decoration: none;
        transition: background-color 0.3s ease, transform 0.2s ease;
        cursor: pointer;
    }

    .btn-back-to-cart:hover {
        background-color: #0056b3;
        transform: translateY(-2px);
    }

    .btn-back-to-cart i {
        margin-right: 8px;
    }
</style>

<style>
    .logout-form {
        margin: 0;
        padding: 0;
    }

    .logout-form button {

        border: none;
        color: #333333;
        /* font-size: 14px; */
        /* font-weight: 600; */
        padding: 10px 20px;
        text-align: center;
        text-decoration: none;
        display: inline-block;
        cursor: pointer;
        outline: none;
        background-color: white;
    }

    @media (max-width: 768px) {
        .logout-form button {
            font-size: 12px;
            padding: 10px 16px;
            border: none;
        }
    }

    @media (max-width: 480px) {
        .logout-form button {
            font-size: 10px;
            padding: 6px 12px;
            border: none;
        }
    }

    @media (max-width: 600px) {
        .menu-link {
            font-size: 14px;
            padding: 8px 10px;
            border: none;
        }

        .logout-form button {
            font-size: 14px;
            padding: 8px 10px;
            border: none;
        }
    }
</style>


<!-- Main Content Start -->
<div class="container-p">
    <div class="product-page">
        <div class="gallery">
            <!-- Main Image -->
            <img src="{{ $product->product_photo_1 ? asset($product->product_photo_1) : asset('logo/log_b.png') }}"
                alt="Product Main Image" class="main-image">
            <div class="thumbnails">
                <div class="thumbnail"><img
                        src="{{ $product->product_photo_1 ? asset($product->product_photo_1) : asset('logo/log_b.png') }}"
                        alt="Thumbnail 1"></div>
                <div class="thumbnail"><img
                        src="{{ $product->product_photo_2 ? asset($product->product_photo_2) : asset('logo/log_b.png') }}"
                        alt="Thumbnail 2"></div>
                <div class="thumbnail"><img
                        src="{{ $product->product_photo_3 ? asset($product->product_photo_3) : asset('logo/log_b.png') }}"
                        alt="Thumbnail 3"></div>
                <div class="thumbnail"><img
                        src="{{ $product->product_photo_4 ? asset($product->product_photo_4) : asset('logo/log_b.png') }}"
                        alt="Thumbnail 4"></div>
                <div class="thumbnail"><img
                        src="{{ $product->product_photo_5 ? asset($product->product_photo_5) : asset('logo/log_b.png') }}"
                        alt="Thumbnail 5"></div>
            </div>
        </div>
        <div class="product-details">
            <h1 class="product-name">{{ $product->product_name }}</h1>
            <div class="price">₹{{ number_format($product->product_price, 2) }}</div>
            <div class="availability">
                <span class="in-stock-label">
                    {{ $product->availability === 'in stock' ? 'In Stock' : 'Out of Stock' }}
                </span>
            </div>
            <div class="section-title" style="font-size: 24px; font-weight: bold;">Specifications</div>
            <table class="specs-table" style="font-size: 18px; width: 100%; border-collapse: collapse;">
                <tr>
                    <th style="padding: 10px; text-align: left;">Car Model</th>
                    <td style="padding: 10px; text-align: left;">{{ $product->car_model }}</td>
                </tr>
                <tr>
                    <th style="padding: 10px; text-align: left;">Brand</th>
                    <td style="padding: 10px; text-align: left;">{{ $product->brand }}</td>
                </tr>
                <tr>
                    <th style="padding: 10px; text-align: left;">Size</th>
                    <td style="padding: 10px; text-align: left;">{{ $product->product_dimensions }}</td>
                </tr>
                <tr>
                    <th style="padding: 10px; text-align: left;">Color</th>
                    <td style="padding: 10px; text-align: left;">{{ $product->color }}</td>
                </tr>
                <tr>
                    <th style="padding: 10px; text-align: left;">Warranty</th>
                    <td style="padding: 10px; text-align: left;">{{ $product->warranty }}</td>
                </tr>
            </table>
        </div>
        <div class="back-to-cart">
            <a href="{{ route('shop.cart') }}" class="btn-back-to-cart">
                <i class="fas fa-arrow-left"></i> Back to Cart
            </a>
        </div>


    </div>
</div>
<!-- Main Content End -->

<script>
    const mainImage = document.querySelector('.main-image');
    const thumbnails = document.querySelectorAll('.thumbnail img');

    thumbnails.forEach(thumbnail => {
        thumbnail.addEventListener('click', () => {
            mainImage.src = thumbnail.src;
        });
    });
</script>
