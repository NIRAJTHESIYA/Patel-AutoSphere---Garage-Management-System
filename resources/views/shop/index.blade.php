@include('Includes.shop')

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">

<style>
    .alert {
        position: absolute;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
        max-width: 90%;
        padding: 15px 30px;
        border-radius: 8px;
        font-size: 18px;
        font-family: 'Arial', sans-serif;
        opacity: 1;
        transition: opacity 0.5s ease-out;
        animation: fadeIn 0.5s ease-out, fadeOut 0.5s ease-out 4.5s forwards;
        text-align: center;
        z-index: 1000;
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

    @keyframes fadeOut {
        from {
            opacity: 1;
        }

        to {
            opacity: 0;
        }
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

<body
    class="archive post-type-archive post-type-archive-product wp-embed-responsive layout-1 theme-car-repair-services woocommerce-shop woocommerce woocommerce-page woocommerce-no-js hfeed elementor-default elementor-kit-2482">


<!-- mobile menu start -->
<nav class="panel-menu" id="mobile-menu">
    <ul>
    </ul>
    <div class="mm-navbtn-names">
        <div class="mm-closebtn">Close</div>
        <div class="mm-backbtn">Back</div>
    </div>

</nav>
<!-- mobile menu end -->


<!-- Loader start -->
<div id="loader-wrapper">
    <div class="loader">
        <div class="line"></div>
        <div class="line"></div>
        <div class="line"></div>
        <div class="line"></div>
        <div class="line"></div>
        <div class="line"></div>
        <div class="subline"></div>
        <div class="subline"></div>
        <div class="subline"></div>
        <div class="subline"></div>
        <div class="subline"></div>
        <div class="loader-circle-1">
            <div class="loader-circle-2"></div>
        </div>
        <div class="needle"></div>
        <div class="loading">Loading</div>
    </div>
</div>
<!-- Loader end -->


<!-- Header section start -->
<header class="page-header page-header-1 sticky">
    <nav class="navbar" id="slide-nav">
        <div class="container">
            <div class="header-info-mobile">
                <div class="header-info-mobile-inside">
                    <p><i class="icon icon-locate"></i>
                        3261 Anmoore Road Brooklyn, NY 11230 </p>
                    <p><i class="icon icon-phone"></i>
                        800-123-4567, Fax: 718-724-3312 </p>
                    <p><i class="icon icon-email"></i>
                        officeone@youremail.com </p>
                    <p><i class="icon icon-clock"></i>
                        Mon-Fri: 9:00 am – 5:00 </p>
                </div>
            </div>
            <div class="heade-mobile-top">
                <div class="header-info-toggle"><i class="icon-arrow_down js-info-toggle"></i></div>
                <a href="#" class="appointment" data-toggle="modal" data-target="#appointmentForm"><i
                        class="icon-shape icon"></i>
                    <span>Appointment</span> </a>
            </div>
            <div class="heade-mobile">
                <div class="col-left mr-auto">
                    <div class="logo">
                        <a href="{{ route('Home') }}">
                            <img src="{{ asset('logo/logo.png') }}" alt="Logo"
                                style="width: 400px; height: auto;">
                        </a>
                    </div>
                </div>
                <div class="col-right">
                    <div class="address">
                        Mon-Fri: 9:00 am – 5:00 </div>
                    <a href="#" class="appointment" data-toggle="modal" data-target="#appointmentForm"><i
                            class="icon-shape icon"></i>
                        <span>Appointment</span> </a>

                    <div class="search-container">
                        <form role="search" method="get"
                            action="https://smartdata.tonytemplates.com/car-repair-service-v4/car1/">

                            <input type="search" id="search-form-66cb524066328" placeholder="Search &hellip;"
                                value="" name="s" />
                            <button type="submit" class="button"><i class="icon icon-search"></i></button>

                        </form>
                    </div>
                    <!-- start mini  cart-->
                    <div class="header-cart">
                        <a href="{{ session()->has('login') ? route('shop.cart') : '#' }}"
                           class="cart-contents icon icon-shop-cart"
                           title="View your shopping cart"
                           @unless (session()->has('login'))
                               data-toggle="modal" data-target="#modelCartform"
                           @endunless>
                        </a>
                    </div>
                    <button type="button" class="navbar-toggle" style="">
                        <span></span>
                        <span></span>
                        <span></span>
                    </button>
                </div>
            </div>
            <div class="header-row">
                <div class="header-info-toggle"><i class="icon-arrow_down js-info-toggle"></i></div>

                <div class="logo">
                    <a href="{{ route('Home') }}"><img src="{{ asset('logo/r.png') }}"
                            style="width: 200%; " alt="Logo">
                    </a>
                </div>

                <div class="header-right">
                    <div class="header-right-top">
                        <div class="address">
                            Monday-Saturday <span class="custom-color">7:00AM - 6:00PM</span>
                        </div>

                        <a href="{{ session()->has('login') ? route('appointment') : '#' }}" class="appointment"
                            @unless (session()->has('login'))
                                data-toggle="modal" data-target="#modelform"
                            @endunless>
                            <i class="icon-shape icon"></i>
                            <span>Appointment</span>
                        </a>


                        <button type="button" class="navbar-toggle"><i class="icon icon-lines-menu"></i></button>
                    </div>
                    <div class="header-right-bottom">
                        <div class="header-phone">
                            <span class="text">Schedule Your Appointment Today</span> <span
                                class="phone-number">+91<span class="code">78178</span>59959</span>
                        </div>

                        <!-- start mini  cart-->
                        <div class="header-cart">
                            <a href="{{ session()->has('login') ? route('shop.cart') : '#' }}"
                               class="cart-contents icon icon-shop-cart"
                               title="View your shopping cart"
                               @unless (session()->has('login'))
                                   data-toggle="modal" data-target="#modelCartform"
                               @endunless>
                            </a>
                        </div>
                        <!--stop mini cart-->
                    </div>




                </div>
            </div>
            <div id="slidemenu">
                <div class="row">
                    <div class="col-md-11">
                        <div class="close-menu"><i class="icon-close-cross"></i></div>
                        <ul id="menu-primary-menu" class="nav navbar-nav">
                            <li id="nav-menu-item-1566"
                                class="main-menu-item  menu-item-even menu-item-depth-0 menu-item menu-item-type-post_type menu-item-object-page menu-item-home current-menu-item page_item page-item-56 current_page_item">
                                <a href="{{ route('Home') }}" class="menu-link main-menu-link">Home</a>
                            </li>
                            <li id="nav-menu-item-1569"
                                class="main-menu-item  menu-item-even menu-item-depth-0 menu-item menu-item-type-post_type menu-item-object-page">
                                <a href="{{ route('About') }}" class="menu-link main-menu-link">About Us</a>
                            </li>

                            <li id="nav-menu-item-1568"
                                class="main-menu-item menu-item-even menu-item-depth-0 menu-item menu-item-type-post_type menu-item-object-page menu-item-has-children dropdown">
                                <a href="{{ route('Services') }}" class="menu-link main-menu-link">Services<span
                                        class="ecaret"></span>
                                </a>
                            </li>

                            <li id="nav-menu-item-1565"
                                class="main-menu-item  menu-item-even menu-item-depth-0 menu-item menu-item-type-post_type menu-item-object-page menu-item-has-children dropdown">
                                <a href="{{ route('Blog') }}" class="menu-link main-menu-link">Blog
                                    <span class="ecaret"></span>
                                </a>
                            </li>
                            <li id="nav-menu-item-1571"
                                class="main-menu-item  menu-item-even menu-item-depth-0 menu-item menu-item-type-post_type menu-item-object-page menu-item-has-children dropdown">
                                <a href="{{ route('Gallery') }}" class="menu-link main-menu-link">Gallery
                                    <span class="ecaret"></span>
                                </a>
                            </li>
                            <li id="nav-menu-item-1574"
                                class="main-menu-item  menu-item-even menu-item-depth-0 menu-item menu-item-type-post_type menu-item-object-page">
                                <a href="{{ route('Testimonials') }}"
                                    class="menu-link main-menu-link">Testimonials</a>
                            </li>
                            <li id="nav-menu-item-1573"
                                class="main-menu-item  menu-item-even menu-item-depth-0 menu-item menu-item-type-post_type menu-item-object-page">
                                <a href="{{ route('Shop') }}" class="menu-link main-menu-link">Shop</a>
                            </li>
                            <li id="nav-menu-item-1567"
                                class="main-menu-item  menu-item-even menu-item-depth-0 menu-item menu-item-type-post_type menu-item-object-page">
                                <a href="{{ route('Contact') }}" class="menu-link main-menu-link">Contacts</a>
                            </li>
                            <li id="nav-menu-item-1567"
                                class="main-menu-item  menu-item-even menu-item-depth-0 menu-item menu-item-type-post_type menu-item-object-page">
                                <a href="{{ route('Contact') }}" class="menu-link main-menu-link"></a>
                            </li>

                            @if (session('login'))
                                <li id="nav-menu-item-1568"
                                    class="main-menu-item  menu-item-even menu-item-depth-0 menu-item menu-item-type-post_type menu-item-object-page menu-item-has-children dropdown">
                                    <a href="#" class="menu-link main-menu-link"><i
                                            class="fa-solid fa-user"></i>{{ session('fullName') }}
                                    </a>
                                    <ul class="dropdown-menu menu-odd  menu-depth-1">
                                        <li id="nav-menu-item-1521"
                                            class="sub-menu-item menu-item-odd menu-item-depth-1 menu-item menu-item-type-post_type menu-item-object-car_services">
                                            <a href="{{ route('account') }}"
                                                class="menu-link sub-menu-link">Account</a>
                                        </li>
                                        <li id="nav-menu-item-logout"
                                            class="sub-menu-item menu-item-odd menu-item-depth-1 menu-item menu-item-type-post_type menu-item-object-car_services">
                                            <form action="{{ route('logout') }}" method="POST"
                                                class="logout-form">
                                                @csrf
                                                <button type="submit" class="menu-link sub-menu-link"
                                                    style="font-family: 'Poppins', sans-serif; font-size: 16px; margin-left: 2%">Logout</button>
                                            </form>
                                        </li>
                                    </ul>
                                </li>
                            @else
                                <li id="nav-menu-item-1567"
                                    class="main-menu-item  menu-item-even menu-item-depth-0 menu-item menu-item-type-post_type menu-item-object-page">
                                    <a href="{{ route('Login') }}" class="menu-link main-menu-link">
                                        <i class="fa-solid fa-user"></i>
                                        Login
                                    </a>
                                </li>
                            @endif
                        </ul>
                    </div>
                    <div class="col-md-1">

                        {{-- <div class="search-container">
                            <form role="search" method="get"
                                action="https://smartdata.tonytemplates.com/car-repair-service-v4/car1/">

                                <input type="search" id="search-form-66cb5240676eb"
                                    placeholder="Search &hellip;" value="" name="s" />
                                <button type="submit" class="button"><i class="icon icon-search"></i></button>

                            </form>
                        </div> --}}
                    </div>
                </div>
            </div>
        </div>
    </nav>
</header>
<!-- Header section end-->




    <!-- Main title Start-->
    <div id="pageTitle">
        <div class="container">
            <h1 class="woocommerce-products-header__title page-title">
                Our Shop
            </h1>
            <div class="breadcrumbs">
                <div class="breadcrumb">
                    <nav class="woocommerce-breadcrumb" aria-label="Breadcrumb">
                        <a
                            href="https://smartdata.tonytemplates.com/car-repair-service-v4/car1">Home</a>&nbsp;&#047;&nbsp;<span>Our
                            Shop</span>
                    </nav>
                </div>
            </div>
        </div>
    </div>
    <!-- Main title end-->


    @if (session('success'))
        <div class="alert alert-success alert-center">{{ session('success') }}</div>
    @endif

    @if (session('error'))
        <div class="alert alert-danger alert-center">{{ session('error') }}</div>
    @endif

    <!-- Main Content Start -->
    {{-- <div class="filters">
        <div class="line"></div>
        <label for="sort-select">Sort By:</label>
        <select id="sort-select" onchange="sortProducts()">
            <option value="newest">Newest First</option>
            <option value="price-low-high">Price: Low to High</option>
            <option value="price-high-low">Price: High to Low</option>
        </select>
    </div> --}}

    <div class="container-product">
        @foreach ($products as $product)
            <div class="product-card">
                <div class="badge">{{ $product->status }}</div>
                <div class="image-container">
                    <img src="{{ $product->product_photo_1 ? asset($product->product_photo_1) : asset('logo/log_b.png') }}"
                        alt="{{ $product->product_name }}" class="product-image" id="mainImage">
                </div>

                <h2 class="product-name">{{ $product->product_name }}</h2>
                <p class="product-price">₹{{ number_format($product->product_price, 2) }}</p>
                {{-- <div class="rating">
                    ⭐⭐⭐⭐⭐
                    <span class="reviews">(250 reviews)</span>
                </div> --}}
                <p class="availability {{ strtolower($product->availability) }}">
                    {{ ucfirst($product->availability) }}</p>
                <div class="button-container">
                    <a href="{{ route('product_details', ['product_id' => $product->product_id]) }}">
                        <button class="add-to-more-btn" data-tooltip="View More">
                            <i class="fas fa-eye"></i>
                        </button>
                    </a>
                </div>
            </div>
        @endforeach
    </div>
    <!-- Main Content End-->


    <!-- Footer section start-->
    <div class="page-footer page-footer-2">
        <div class="footer-section02">
            <!-- map -->
            <div id="footer-map" class="footer-map"></div>
            <!-- /map -->
            <!-- Google map -->
            <script type="text/javascript">
                window.addEventListener("scroll", lazyLoadGoogleMap);

                function lazyLoadGoogleMap() {
                    var js_script = document.createElement("script");
                    js_script.type = "text/javascript";
                    js_script.src =
                        "http://maps.google.com/maps/api/js?sensor=true&amp;callback=init&amp;key=AIzaSyCa33WY3EJObzo592BJKG6JFabx_qo4dtA";
                    js_script.async = true;
                    document
                        .getElementsByTagName("head")[0]
                        .appendChild(js_script);
                    window.removeEventListener("scroll", lazyLoadGoogleMap);
                }

                function init() {
                    var locations = [];
                    locations.push([
                        '{"lat":"37.36274700000004","lng":"-122.03525300000001"}',
                    ]);
                    locations.push([
                        '{"lat":"37.36274700000004","lng":"-122.03525300000001","marker":"https:\/\/smartdata.tonytemplates.com\/car-repair-service-v4\/car1\/wp-content\/uploads\/sites\/5\/2018\/11\/map-marker-1.png"}',
                    ]);
                    var mapOptions = {
                        zoom: parseInt(14),
                        center: new google.maps.LatLng(
                            37.36274700000004,
                            -122.03525300000001
                        ),
                        styles: [{
                                featureType: "water",
                                elementType: "geometry",
                                stylers: [{
                                        color: "#e9e9e9"
                                    },
                                    {
                                        lightness: 17
                                    },
                                ],
                            },
                            {
                                featureType: "landscape",
                                elementType: "geometry",
                                stylers: [{
                                        color: "#f5f5f5"
                                    },
                                    {
                                        lightness: 20
                                    },
                                ],
                            },
                            {
                                featureType: "road.highway",
                                elementType: "geometry.fill",
                                stylers: [{
                                        color: "#ffffff"
                                    },
                                    {
                                        lightness: 17
                                    },
                                ],
                            },
                            {
                                featureType: "road.highway",
                                elementType: "geometry.stroke",
                                stylers: [{
                                        color: "#ffffff"
                                    },
                                    {
                                        lightness: 29
                                    },
                                    {
                                        weight: 0.2
                                    },
                                ],
                            },
                            {
                                featureType: "road.arterial",
                                elementType: "geometry",
                                stylers: [{
                                        color: "#ffffff"
                                    },
                                    {
                                        lightness: 18
                                    },
                                ],
                            },
                            {
                                featureType: "road.local",
                                elementType: "geometry",
                                stylers: [{
                                        color: "#ffffff"
                                    },
                                    {
                                        lightness: 16
                                    },
                                ],
                            },
                            {
                                featureType: "poi",
                                elementType: "geometry",
                                stylers: [{
                                        color: "#f5f5f5"
                                    },
                                    {
                                        lightness: 21
                                    },
                                ],
                            },
                            {
                                featureType: "poi.park",
                                elementType: "geometry",
                                stylers: [{
                                        color: "#dedede"
                                    },
                                    {
                                        lightness: 21
                                    },
                                ],
                            },
                            {
                                elementType: "labels.text.stroke",
                                stylers: [{
                                        visibility: "on"
                                    },
                                    {
                                        color: "#ffffff"
                                    },
                                    {
                                        lightness: 16
                                    },
                                ],
                            },
                            {
                                elementType: "labels.text.fill",
                                stylers: [{
                                        saturation: 36
                                    },
                                    {
                                        color: "#333333"
                                    },
                                    {
                                        lightness: 40
                                    },
                                ],
                            },
                            {
                                elementType: "labels.icon",
                                stylers: [{
                                    visibility: "off"
                                }],
                            },
                            {
                                featureType: "transit",
                                elementType: "geometry",
                                stylers: [{
                                        color: "#f2f2f2"
                                    },
                                    {
                                        lightness: 19
                                    },
                                ],
                            },
                            {
                                featureType: "administrative",
                                elementType: "geometry.fill",
                                stylers: [{
                                        color: "#fefefe"
                                    },
                                    {
                                        lightness: 20
                                    },
                                ],
                            },
                            {
                                featureType: "administrative",
                                elementType: "geometry.stroke",
                                stylers: [{
                                        color: "#fefefe"
                                    },
                                    {
                                        lightness: 17
                                    },
                                    {
                                        weight: 1.2
                                    },
                                ],
                            },
                        ],
                    };

                    var mapElement = document.getElementById("footer-map");
                    var map = new google.maps.Map(mapElement, mapOptions);
                    for (count = 1; count < locations.length; count++) {
                        var locations_obj = JSON.parse(locations[count]);
                        if (locations_obj.lat != "") {
                            var marker = new google.maps.Marker({
                                position: new google.maps.LatLng(
                                    locations_obj.lat,
                                    locations_obj.lng
                                ),
                                map: map,
                                icon: locations_obj.marker,
                            });
                        }
                    }
                }
            </script>

            <div class="container container-tablet-md container-tablet-nogutter">
                <div class="footer-section02__box01">
                    <div class="footer-section02__title">Contact Info</div>
                    <address class="contact-info-item">
                        <div class="item-icon">
                            <i class="icon icon-locate"></i>
                        </div>
                        <div class="item-description">
                            2605 Caton Hill Road, Woodbridge, VA 22192
                        </div>
                    </address>
                    <address class="contact-info-item">
                        <div class="item-icon">
                            <i class="icon icon-phone"></i>
                        </div>
                        <div class="item-description">1-800-1234567</div>
                    </address>
                    <address class="contact-info-item">
                        <div class="item-icon">
                            <i class="icon icon-email"></i>
                        </div>
                        <div class="item-description">
                            <a href="mailto:officeone@youremail.com">officeone@youremail.com</a>
                        </div>
                    </address>
                    <div class="footer-section02__title">Opening Hours</div>
                    <address class="contact-info-item">
                        <div class="item-icon">
                            <i class="icon icon-clock"></i>
                        </div>
                        <div class="item-description">
                            Mon-Fri: <span>7:00 AM - 6:00 PM</span><br />
                            Saturday: <span>9:00 AM - 5:00 PM</span><br />
                            Sunday: <span>Closed</span>
                        </div>
                    </address>
                </div>
            </div>
        </div>
        <div class="footer-section03">
            <div class="container container-tablet-md">
                <div class="copyright">
                    © 2022 Car Repair Services,
                    <span class="clearfix visible-xs"></span>All Rights
                    Reserved
                </div>
                <div class="footer-bottom-right">
                    <div class="social-links">
                        <ul>
                            <li>
                                <a class="icon icon-facebook-logo" target="_blank" href="#"></a>
                            </li>

                            <li>
                                <a class="icon icon-twitter-logo" target="_blank" href="#"></a>
                            </li>

                            <li>
                                <a class="icon icon-instagram-logo" target="_blank" href="#"></a>
                            </li>

                            <li>
                                <a class="icon icon-google-plus-logo" target="_blank" href="#"></a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Footer section end-->


    <!-- Back-to-top Button Start -->
    <div class="back-to-top" style="bottom: 15px">
        <a href="#top">
            <span class="icon icon-arrow_up"></span>
        </a>
    </div>
    <!-- Back-to-top Button end -->


    <!-- modelform start-->
    <div class="modal fade" id="modelform">
        <div class="modal-dialog container">
            <div class="modal-content">
                <div class="modal-header">
                    <a href="#" class="appointment" data-toggle="modal" data-target="#modelform">
                        <i class="fas fa-arrow-left"></i> <!-- Added Font Awesome Back Icon -->
                        <span>Back</span>
                    </a>
                </div>
                <div class="modal-body">
                    <div class="container-fluid">
                        <h2 class="modal-title-main">
                            <i class="fas fa-calendar-alt"></i> <!-- Added Calendar Icon -->
                            Schedule &nbsp;<span class="color">Appointment</span>
                        </h2>
                        <p class="login-warning">
                            <i class="fas fa-exclamation-circle"></i> <!-- Added Warning Icon -->
                            You must be logged in to schedule an appointment. Please log in to proceed.
                        </p>
                        <p>
                            Scheduling an auto service is quick and easy, ensuring your vehicle remains in optimal
                            condition. Our expert team is ready to assist you with various services, including oil
                            changes, tire rotations, and more.
                        </p>
                        <p>
                            To access our scheduling system and make an appointment, please log in to your account.
                            If
                            you don’t have an account yet, you can easily create one. Logging in will also allow you
                            to
                            view your past appointments and manage your service history.
                        </p>
                        <button class="btn-schedule"><a href="{{ route('Login') }}"><i
                                    class="fas fa-sign-in-alt"></i> Login</a></button> <!-- Added Login Icon -->
                    </div>
                </div>
                <div class="modal-footer">
                    <p class="footer-text">
                        <i class="fas fa-info-circle"></i> <!-- Added Info Icon -->
                        If you have any questions or need assistance, feel free to <a
                            href="{{ route('Contact') }}">contact us</a>. We’re here to help you get your vehicle
                        back
                        on the road safely!
                    </p>
                </div>
            </div>
        </div>
    </div>
    <!-- modelform End-->

    <!-- modelCartform start-->
    <div class="modal fade" id="modelCartform">
        <div class="modal-dialog container">
            <div class="modal-content">
                <div class="modal-header">
                    <a href="#" class="appointment" data-toggle="modal" data-target="#modelCartform">
                        <i class="fas fa-arrow-left"></i>
                        <span>Back</span>
                    </a>
                </div>
                <div class="modal-body">
                    <div class="container-fluid">
                        <h2 class="modal-title-main">
                            <i class="fas fa-shopping-cart"></i>
                            Your &nbsp;<span class="color">Cart</span>
                        </h2>
                        <p class="login-warning">
                            <i class="fas fa-exclamation-circle"></i>
                            You must be logged in to view items in your cart. Please log in to proceed.
                        </p>
                        <p>
                            Our cart feature allows you to save and review items you’re interested in purchasing.
                            Logging in will give you access to your selected products, making it easy to finalize your
                            purchase.
                        </p>
                        <p>
                            To view and manage your cart, please log in to your account. If you don’t have an account,
                            you can easily create one. Once logged in, you’ll be able to keep track of your chosen
                            items, making checkout faster and simpler.
                        </p>
                        <button class="btn-schedule"><a href="{{ route('Login') }}"><i
                                    class="fas fa-sign-in-alt"></i> Login</a></button>
                    </div>
                </div>
                <div class="modal-footer">
                    <p class="footer-text">
                        <i class="fas fa-info-circle"></i> <!-- Added Info Icon -->
                        If you have any questions or need assistance, feel free to <a
                            href="{{ route('Contact') }}">contact us</a>. We’re here to help make your shopping
                        experience as smooth as possible!
                    </p>
                </div>
            </div>
        </div>
    </div>
    <!-- modelCartform End-->

    <!-- CSS for modelform -->
    <style>
        .modal-content {
            background-color: #f9f9f9;
            border-radius: 15px;
            padding: 20px;
            box-shadow: 0 8px 30px rgba(0, 0, 0, 0.2);
        }

        .modal-header {
            border-bottom: none;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .modal-header .appointment {
            font-size: 18px;
            color: #000000;
            text-decoration: none;
            display: flex;
            align-items: center;
        }

        .modal-header .appointment i {
            margin-right: 8px;
            font-size: 18px;
        }

        .modal-header .close {
            background: none;
            border: none;
            font-size: 24px;
            color: #555;
        }

        .modal-header .close i {
            font-size: 24px;
        }

        .modal-title-main {
            font-size: 28px;
            font-weight: bold;
            color: #333;
            display: flex;
            align-items: center;
        }

        .modal-title-main i {
            margin-right: 10px;
            color: #007bff;
        }

        .modal-title-main .color {
            color: #007bff;
        }

        .login-warning {
            font-size: 16px;
            color: #dc3545;
            margin-top: 10px;
        }

        .login-warning i {
            margin-right: 8px;
            color: #dc3545;
        }

        .btn-schedule {
            background-color: #007bff;
            color: #fff;
            border: none;
            border-radius: 25px;
            padding: 12px 25px;
            font-size: 16px;
            font-weight: bold;
            text-align: center;
            text-decoration: none;
            display: inline-block;
            transition: background 0.3s ease, transform 0.3s ease;
            cursor: pointer;
            box-shadow: 0 4px 10px rgba(0, 123, 255, 0.3);
        }

        .btn-schedule a {
            color: #fff;
            text-decoration: none;
            display: flex;
            align-items: center;
        }

        .btn-schedule a i {
            margin-right: 8px;
        }

        .btn-schedule:hover {
            background-color: #0056b3;
            transform: translateY(-2px);
        }

        .btn-schedule:active {
            transform: translateY(1px);
            box-shadow: 0 2px 5px rgba(0, 123, 255, 0.3);
        }

        .modal-footer {
            padding: 15px;
            border-top: 1px solid #e9ecef;
            text-align: center;
        }

        .footer-text {
            font-size: 14px;
            color: #6c757d;
        }

        .footer-text i {
            margin-right: 6px;
        }

        .footer-text a {
            color: #007bff;
            text-decoration: underline;
        }

        .footer-text a:hover {
            text-decoration: none;
        }


        .modal-header {
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .appointment {
            font-size: 18px;
            color: #007bff;
            text-decoration: none;
            display: flex;
            align-items: center;
            justify-content: flex-end;
            /* Push content to the right */
            margin-left: auto;
            /* Align to the right */
        }

        .appointment i {
            margin-right: 8px;
            font-size: 18px;
        }

        .modal-header .close {
            background: none;
            border: none;
            font-size: 24px;
            color: #555;
            margin-left: 15px;
        }

        .modal-header .close i {
            font-size: 24px;
        }
    </style>

    <!-- CSS for Product card -->
    <style>
        .container-product {
            width: 90%;
            max-width: 1200px;
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 20px;
            margin: 20px auto;
        }

        .product-card {
            position: relative;
            background: #ffffff;
            border-radius: 12px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            padding: 20px;
            text-align: center;
            width: 300px;
            transition: transform 0.3s ease;
        }

        .product-card:hover {
            transform: translateY(-5px);
        }

        .badge {
            position: absolute;
            top: 10px;
            right: 10px;
            background-color: #ff5733;
            color: #ffffff;
            font-size: 0.8em;
            font-weight: bold;
            padding: 5px 10px;
            border-radius: 8px;
            text-transform: uppercase;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.15);
            z-index: 1;
            /* Ensure the badge is above the image */
        }

        .badge.new {
            background-color: #4CAF50;
        }

        .badge.limited-stock {
            background-color: #f39c12;
        }

        .image-container {
            overflow: hidden;
            border-radius: 10px;
            margin-bottom: 15px;
            position: relative;
            height: 200px;
            /* Set a fixed height for the image container */
        }

        .product-image {
            width: 100%;
            height: 100%;
            /* Ensure the image fills the container */
            object-fit: cover;
            /* Maintain aspect ratio without distorting the image */
            transition: transform 0.3s ease;
        }

        .image-container:hover .product-image {
            transform: scale(1.1);
        }

        .product-name {
            font-size: 1.5em;
            color: #333;
            font-weight: 600;
            margin-bottom: 10px;
        }

        .product-price {
            font-size: 1.2em;
            color: #2c3e50;
            margin-bottom: 8px;
        }

        .rating {
            font-size: 1em;
            color: #f39c12;
            margin-bottom: 8px;
        }

        .reviews {
            font-size: 0.9em;
            color: #555;
        }

        .availability {
            font-size: 0.9em;
            color: #27ae60;
            margin-bottom: 15px;
            padding: 8px 12px;
            border: 2px solid #27ae60;
            border-radius: 8px;
            display: inline-block;
            animation: fadeInPulse 1.5s ease-in-out infinite alternate;
            background-color: #eafaf1;
        }

        @keyframes fadeInPulse {
            0% {
                opacity: 0;
                transform: scale(0.95);
            }

            100% {
                opacity: 1;
                transform: scale(1.05);
            }
        }

        .short-description {
            font-size: 0.95em;
            color: #666;
            margin-bottom: 15px;
        }

        .main-description-btn {
            font-size: 1em;
            font-weight: bold;
            color: #fff;
            background-color: #7d3cff;
            border: none;
            border-radius: 8px;
            padding: 10px 20px;
            cursor: pointer;
            margin-top: 8px;
            transition: background-color 0.3s ease;
        }

        .main-description-btn:hover {
            background-color: #5e2ab6;
        }

        .button-container {
            display: flex;
            gap: 10px;
            align-items: center;
            justify-content: center;
            padding: 0 20px;
        }

        .add-to-cart-btn {
            position: relative;
            cursor: pointer;
            background-color: #ff5733;
            color: #fff;
            border: none;
            border-radius: 50%;
            padding: 12px;
            width: 48px;
            height: 48px;
            font-size: 1.2em;
            display: flex;
            align-items: center;
            justify-content: center;
            transition: background-color 0.3s ease, transform 0.2s ease;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.2);
        }

        .add-to-cart-btn:hover {
            background-color: #e04b2b;
            transform: scale(1.05);
        }

        .add-to-cart-btn::after {
            content: attr(data-tooltip);
            position: absolute;
            bottom: 110%;
            left: 50%;
            transform: translateX(-50%);
            background-color: #333;
            color: #fff;
            padding: 6px 10px;
            border-radius: 5px;
            font-size: 0.75em;
            white-space: nowrap;
            opacity: 0;
            visibility: hidden;
            transform-origin: bottom center;
            transition: opacity 0.3s ease, visibility 0.3s ease, transform 0.3s ease;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.2);
            z-index: 10;
        }

        .add-to-cart-btn::before {
            content: "";
            position: absolute;
            bottom: 100%;
            left: 50%;
            transform: translateX(-50%);
            border-width: 6px;
            border-style: solid;
            border-color: transparent transparent #333 transparent;
            opacity: 0;
            visibility: hidden;
            transition: opacity 0.3s ease, visibility 0.3s ease;
        }

        .add-to-cart-btn:hover::after,
        .add-to-cart-btn:hover::before {
            opacity: 1;
            visibility: visible;
            transform: translateX(-50%) translateY(-4px);
        }

        .add-to-more-btn {
            position: relative;
            cursor: pointer;
            background-color: #007bff;
            color: #fff;
            border: none;
            border-radius: 50%;
            padding: 12px;
            width: 48px;
            height: 48px;
            font-size: 1.2em;
            display: flex;
            align-items: center;
            justify-content: center;
            transition: background-color 0.3s ease, transform 0.2s ease;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.2);
        }

        .add-to-more-btn:hover {
            background-color: #0768ce;
            transform: scale(1.05);
        }

        .add-to-more-btn::after {
            content: attr(data-tooltip);
            position: absolute;
            bottom: 110%;
            left: 50%;
            transform: translateX(-50%);
            background-color: #333;
            color: #fff;
            padding: 6px 10px;
            border-radius: 5px;
            font-size: 0.75em;
            white-space: nowrap;
            opacity: 0;
            visibility: hidden;
            transform-origin: bottom center;
            transition: opacity 0.3s ease, visibility 0.3s ease, transform 0.3s ease;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.2);
            z-index: 10;
        }

        .add-to-more-btn::before {
            content: "";
            position: absolute;
            bottom: 100%;
            left: 50%;
            transform: translateX(-50%);
            border-width: 6px;
            border-style: solid;
            border-color: transparent transparent #333 transparent;
            opacity: 0;
            visibility: hidden;
            transition: opacity 0.3s ease, visibility 0.3s ease;
        }

        .add-to-more-btn:hover::after,
        .add-to-more-btn:hover::before {
            opacity: 1;
            visibility: visible;
            transform: translateX(-50%) translateY(-4px);
        }
    </style>


    <style>
        .filters {
            display: flex;
            align-items: center;
            justify-content: flex-end;
            /* Aligns elements to the right */
            margin: 20px;
            /* Add some margin */
            position: relative;
            /* Needed for absolute positioning of the title */
        }

        .title {
            position: absolute;
            /* Allows it to move independently */
            right: 100%;
            /* Start from the right of the container */
            animation: moveText 5s linear infinite;
            /* Animation for moving text */
            font-family: 'Arial', sans-serif;
            /* Customize font family */
            font-size: 24px;
            /* Font size for the title */
            color: #333;
            /* Color for the title */
            white-space: nowrap;
            /* Prevents text wrapping */
        }

        @keyframes moveText {
            0% {
                transform: translateX(100%);
                /* Start off-screen right */
            }

            50% {
                transform: translateX(-50%);
                /* Move to the middle */
            }

            100% {
                transform: translateX(-100%);
                /* End off-screen left */
            }
        }

        .filters label {
            margin-right: 10px;
            /* Space between label and select */
        }

        #sort-select {
            padding: 10px;
            /* Add padding to select */
            border-radius: 5px;
            /* Rounded corners */
            border: 1px solid #ccc;
            /* Light border */
            font-size: 16px;
            /* Font size */
            transition: all 0.3s ease;
            /* Transition for smooth effects */
            cursor: pointer;
            /* Change cursor on hover */
        }

        #sort-select:hover {
            border-color: #007bff;
            /* Change border color on hover */
            box-shadow: 0 0 5px rgba(0, 123, 255, 0.5);
            /* Add shadow on hover */
        }
    </style>


    <script>
        const products = [{
                name: 'Product A',
                price: 99.99,
                date: '2024-10-30'
            },
            {
                name: 'Product B',
                price: 79.99,
                date: '2024-10-29'
            },
            {
                name: 'Product C',
                price: 89.99,
                date: '2024-10-28'
            },
            // Add more products as needed
        ];

        function sortProducts() {
            const select = document.getElementById('sort-select');
            const value = select.value;

            let sortedProducts;

            switch (value) {
                case 'newest':
                    sortedProducts = products.sort((a, b) => new Date(b.date) - new Date(a.date));
                    break;
                case 'price-low-high':
                    sortedProducts = products.sort((a, b) => a.price - b.price);
                    break;
                case 'price-high-low':
                    sortedProducts = products.sort((a, b) => b.price - a.price);
                    break;
                default:
                    sortedProducts = products;
            }

            displayProducts(sortedProducts);
        }

        function displayProducts(products) {
            const container = document.querySelector('.container-product');
            container.innerHTML = ''; // Clear existing products

            products.forEach(product => {
                const productCard = `
                <div class="product-card">
                    <div class="badge">Best Seller</div>
                    <div class="image-container">
                        <img src="{{ asset('logo/log_b.png') }}" alt="Product Image" class="product-image" id="mainImage">
                    </div>
                    <h2 class="product-name">${product.name}</h2>
                    <p class="product-price">$${product.price.toFixed(2)}</p>
                    <div class="rating">
                        ⭐⭐⭐⭐⭐
                        <span class="reviews">(250 reviews)</span>
                    </div>
                    <p class="availability">In Stock</p>
                    <p class="short-description">This is a short description of the product highlighting key features.</p>
                    <div class="button-container">
                        <button class="add-to-more-btn" data-tooltip="View More">
                            <i class="fas fa-eye"></i>
                        </button>
                        <button class="add-to-cart-btn" data-tooltip="Add to Cart">
                            <i class="fas fa-shopping-cart"></i>
                        </button>
                    </div>
                </div>`;
                container.insertAdjacentHTML('beforeend', productCard);
            });
        }
    </script>


</body>
