@include('Includes.about')

<style>
    /* General Styles */
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

    /* Responsive Styles */
    @media (max-width: 768px) {
        .logout-form button {
            font-size: 12px;
            padding: 10px 16px;
            border: none;
            /* background-color: white; */
        }
    }

    @media (max-width: 480px) {
        .logout-form button {
            font-size: 10px;
            padding: 6px 12px;
            border: none;
            /* background-color: white; */
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


<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">

<style>
    .cart-container {
    display: flex;
    flex-direction: column;
    justify-content: center;
    align-items: center;
    background: linear-gradient(to bottom, #ffffff, #f9f9f9);
    text-align: center;
    font-family: 'Arial', sans-serif;
}

.cart-logo {
    font-size: 100px;
    color: #aa0707;
    margin-bottom: 20px;
    animation: bounceGlow 2.5s ease-in-out forwards;
}

h1 {
    font-size: 36px;
    color: #333;
    margin-bottom: 10px;
    opacity: 0;
    animation: fadeInText 1.5s ease-in 2.5s forwards;
}

h3 {
    font-size: 20px;
    color: #666;
    opacity: 0;
    animation: fadeInText 1.5s ease-in 3s forwards;
}

/* Bounce and glow effect for the cart logo */
@keyframes bounceGlow {
    0% {
        transform: scale(1);
    }
    30% {
        transform: scale(1.2) translateY(-10px);
    }
    60% {
        transform: scale(0.9) translateY(5px);
    }
    100% {
        transform: scale(1);
    }
}

/* Smooth fade-in for text */
@keyframes fadeInText {
    0% {
        opacity: 0;
        transform: translateY(20px);
    }
    100% {
        opacity: 1;
        transform: translateY(0);
    }
}

</style>

<body
    class="page-template-default page page-id-1520 wp-embed-responsive layout-1 theme-car-repair-services woocommerce-no-js elementor-default elementor-kit-2482 elementor-page elementor-page-1520">

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
                                class="cart-contents icon icon-shop-cart" title="View your shopping cart"
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
                        <a href="{{ route('Home') }}"><img src="{{ asset('logo/r.png') }}" style="width: 200%; "
                                alt="Logo">
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
                                    class="cart-contents icon icon-shop-cart" title="View your shopping cart"
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
    <div id="pageTitle" class="page-title-wrapper">
        <div class="container">
            <!-- //Breadcrumbs Block -->
            <h1>Empty <span class="color">Cart</span></h1>

            <!-- Block -->
            <div class="breadcrumbs">
                <div class="breadcrumb">
                    <div class="breadcrumbs">
                        <div class="breadcrumb">
                            <span><span><a href="{{ route('Home') }}">Home</a></span> / <span class="breadcrumb_last"
                                    aria-current="page">Empty Cart</span></span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Main title end-->


    <div class="cart-container">
        <div class="cart-logo">
            <i class="fas fa-shopping-cart"></i>
        </div>
        <h1>Cart is Empty</h1>
        <h3>Your cart is waiting for items!</h3>
    </div>



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
                    var js_script = document.createElement('script');
                    js_script.type = "text/javascript";
                    js_script.src =
                        "http://maps.google.com/maps/api/js?sensor=true&amp;callback=init&amp;key=AIzaSyCa33WY3EJObzo592BJKG6JFabx_qo4dtA";
                    js_script.async = true;
                    document.getElementsByTagName('head')[0].appendChild(js_script);
                    window.removeEventListener("scroll", lazyLoadGoogleMap);
                }

                function init() {

                    var locations = [];
                    locations.push(['{"lat":"37.36274700000004","lng":"-122.03525300000001"}'])
                    locations.push([
                        '{"lat":"37.36274700000004","lng":"-122.03525300000001","marker":"https:\/\/smartdata.tonytemplates.com\/car-repair-service-v4\/car1\/wp-content\/uploads\/sites\/5\/2018\/11\/map-marker-1.png"}'
                    ])
                    var mapOptions = {
                        zoom: parseInt(14),
                        center: new google.maps.LatLng(37.36274700000004, -122.03525300000001),
                        styles: [{
                            "featureType": "water",
                            "elementType": "geometry",
                            "stylers": [{
                                "color": "#e9e9e9"
                            }, {
                                "lightness": 17
                            }]
                        }, {
                            "featureType": "landscape",
                            "elementType": "geometry",
                            "stylers": [{
                                "color": "#f5f5f5"
                            }, {
                                "lightness": 20
                            }]
                        }, {
                            "featureType": "road.highway",
                            "elementType": "geometry.fill",
                            "stylers": [{
                                "color": "#ffffff"
                            }, {
                                "lightness": 17
                            }]
                        }, {
                            "featureType": "road.highway",
                            "elementType": "geometry.stroke",
                            "stylers": [{
                                "color": "#ffffff"
                            }, {
                                "lightness": 29
                            }, {
                                "weight": 0.2
                            }]
                        }, {
                            "featureType": "road.arterial",
                            "elementType": "geometry",
                            "stylers": [{
                                "color": "#ffffff"
                            }, {
                                "lightness": 18
                            }]
                        }, {
                            "featureType": "road.local",
                            "elementType": "geometry",
                            "stylers": [{
                                "color": "#ffffff"
                            }, {
                                "lightness": 16
                            }]
                        }, {
                            "featureType": "poi",
                            "elementType": "geometry",
                            "stylers": [{
                                "color": "#f5f5f5"
                            }, {
                                "lightness": 21
                            }]
                        }, {
                            "featureType": "poi.park",
                            "elementType": "geometry",
                            "stylers": [{
                                "color": "#dedede"
                            }, {
                                "lightness": 21
                            }]
                        }, {
                            "elementType": "labels.text.stroke",
                            "stylers": [{
                                "visibility": "on"
                            }, {
                                "color": "#ffffff"
                            }, {
                                "lightness": 16
                            }]
                        }, {
                            "elementType": "labels.text.fill",
                            "stylers": [{
                                "saturation": 36
                            }, {
                                "color": "#333333"
                            }, {
                                "lightness": 40
                            }]
                        }, {
                            "elementType": "labels.icon",
                            "stylers": [{
                                "visibility": "off"
                            }]
                        }, {
                            "featureType": "transit",
                            "elementType": "geometry",
                            "stylers": [{
                                "color": "#f2f2f2"
                            }, {
                                "lightness": 19
                            }]
                        }, {
                            "featureType": "administrative",
                            "elementType": "geometry.fill",
                            "stylers": [{
                                "color": "#fefefe"
                            }, {
                                "lightness": 20
                            }]
                        }, {
                            "featureType": "administrative",
                            "elementType": "geometry.stroke",
                            "stylers": [{
                                "color": "#fefefe"
                            }, {
                                "lightness": 17
                            }, {
                                "weight": 1.2
                            }]
                        }]
                    };

                    var mapElement = document.getElementById('footer-map');
                    var map = new google.maps.Map(mapElement, mapOptions);
                    for (count = 1; count < locations.length; count++) {
                        var locations_obj = JSON.parse(locations[count]);
                        if (locations_obj.lat != '') {
                            var marker = new google.maps.Marker({
                                position: new google.maps.LatLng(locations_obj.lat, locations_obj.lng),
                                map: map,
                                icon: locations_obj.marker
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
                            2605 Caton Hill Road, Woodbridge, VA 22192 </div>
                    </address>
                    <address class="contact-info-item">
                        <div class="item-icon">
                            <i class="icon icon-phone"></i>
                        </div>
                        <div class="item-description">
                            1-800-1234567 </div>
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
                            Mon-Fri: <span>7:00 AM - 6:00 PM</span><br> Saturday: <span>9:00 AM - 5:00 PM</span><br>
                            Sunday: <span>Closed</span> </div>
                    </address>
                </div>
            </div>
        </div>
        <div class="footer-section03">
            <div class="container container-tablet-md">
                <div class="copyright">© 2022 Car Repair Services, <span class="clearfix visible-xs"></span>All Rights
                    Reserved</div>
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
    <!-- Footer section end -->


    <!-- Back-to-top Button Start -->
    <div class="back-to-top" style="bottom: 15px;">
        <a href="#top">
            <span class="icon icon-arrow_up"></span>
        </a>
    </div>
    <!-- Back-to-top Button end -->
</body>
