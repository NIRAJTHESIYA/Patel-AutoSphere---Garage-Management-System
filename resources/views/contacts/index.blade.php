@include('Includes.contact')

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

<body
    class="page-template-default page page-id-48 wp-embed-responsive layout-1 theme-car-repair-services woocommerce-no-js elementor-default elementor-kit-2482 elementor-page elementor-page-48">


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
            <h1>Contacts</h1>
            <!-- Breadcrumbs Block -->
            <div class="breadcrumbs">
                <div class="breadcrumb">
                    <div class="breadcrumbs">
                        <div class="breadcrumb">
                            <span><span><a href="../index.html">Home</a></span> / <span class="breadcrumb_last"
                                    aria-current="page">Contacts</span></span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Main title end-->


    <!-- Main Content Start-->
    <div id="pageContent" class="content-area">
        <div id="primary" class="container">

            <div id="post-48" class="post-48 page type-page status-publish hentry">
                <!-- Block -->
                <div class="offset-sm">
                    <div data-elementor-type="wp-page" data-elementor-id="48" class="elementor elementor-48">
                        <section
                            class="elementor-section elementor-top-section elementor-element elementor-element-6fc64d4 elementor-section-stretched elementor-section-full_width elementor-section-height-default elementor-section-height-default"
                            data-id="6fc64d4" data-element_type="section"
                            data-settings="{&quot;stretch_section&quot;:&quot;section-stretched&quot;}">
                            <div class="elementor-container elementor-column-gap-no">
                                <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-7273983"
                                    data-id="7273983" data-element_type="column">
                                    <div class="elementor-widget-wrap elementor-element-populated">
                                        <div class="elementor-element elementor-element-b591a35 elementor-widget elementor-widget-contact_page"
                                            data-id="b591a35" data-element_type="widget"
                                            data-widget_type="contact_page.default">
                                            <div class="elementor-widget-container">
                                                <div class="section-bg01">
                                                    <div class="block">
                                                        <div class="container no-gutters">
                                                            <div class="row ">
                                                                <div
                                                                    class="col-sm-5 col-md-4 col-sm-push-7 col-md-push-8">
                                                                    <div class="info02-wrapper">
                                                                        <div class="info02">
                                                                            <div class="info02__icon"><span
                                                                                    class=" icon-locate"></span></div>
                                                                            <h6 class="info02__title">
                                                                                Post Address </h6>
                                                                            <address>
                                                                                2605 Caton Hill Road, Woodbridge,<br>VA
                                                                                22192 </address>
                                                                        </div>
                                                                        <div class="info02">
                                                                            <div class="info02__icon"><span
                                                                                    class=" icon-phone"></span></div>
                                                                            <h6 class="info02__title">
                                                                                Contact Phone </h6>
                                                                            <address>
                                                                                1-800-123-4567 </address>
                                                                        </div>
                                                                        <div class="info02">
                                                                            <div class="info02__icon"><span
                                                                                    class=" icon-email"></span></div>
                                                                            <h6 class="info02__title">
                                                                                E-mail Address </h6>
                                                                            <address>
                                                                                officeone@youremail.com </address>
                                                                        </div>
                                                                        <div class="info02">
                                                                            <div class="info02__icon"><span
                                                                                    class=" icon-clock"></span></div>
                                                                            <h6 class="info02__title">
                                                                                Opening Hours </h6>
                                                                            <address>
                                                                                Mon-Fri: 7:00 AM - 6:00 PM<br>Saturday:
                                                                                9:00 AM - 5:00 PM<br>Sunday: Closed
                                                                            </address>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="divider-lg hidden-lg hidden-md hidden-sm">
                                                                </div>
                                                                <div
                                                                    class="col-sm-7 col-md-8 col-sm-pull-5 col-md-pull-4">
                                                                    <div class="box-wrapper">
                                                                        <div class="block-title text-left">
                                                                            <h2 class="block-title__title">Get In
                                                                                Touch!
                                                                            </h2>
                                                                            <div class="block-title__description">
                                                                                Get your automotive-related questions
                                                                                answered by a mechanic </div>
                                                                            <div class="title-separator"></div>
                                                                        </div>

                                                                        <div class="wpcf7 no-js"
                                                                            id="wpcf7-f2225-p48-o1" lang="en-US"
                                                                            dir="ltr">
                                                                            <div class="screen-reader-response">
                                                                                <p role="status" aria-live="polite"
                                                                                    aria-atomic="true"></p>
                                                                                <ul></ul>
                                                                            </div>
                                                                            <form
                                                                                action="https://smartdata.tonytemplates.com/car-repair-service-v4/car1/contacts/#wpcf7-f2225-p48-o1"
                                                                                method="post" class="wpcf7-form init"
                                                                                aria-label="Contact form"
                                                                                novalidate="novalidate"
                                                                                data-status="init">
                                                                                <div style="display: none;">
                                                                                    <input type="hidden"
                                                                                        name="_wpcf7"
                                                                                        value="2225" />
                                                                                    <input type="hidden"
                                                                                        name="_wpcf7_version"
                                                                                        value="5.8.5" />
                                                                                    <input type="hidden"
                                                                                        name="_wpcf7_locale"
                                                                                        value="en_US" />
                                                                                    <input type="hidden"
                                                                                        name="_wpcf7_unit_tag"
                                                                                        value="wpcf7-f2225-p48-o1" />
                                                                                    <input type="hidden"
                                                                                        name="_wpcf7_container_post"
                                                                                        value="48" />
                                                                                    <input type="hidden"
                                                                                        name="_wpcf7_posted_data_hash"
                                                                                        value="" />
                                                                                </div>
                                                                                <div class="contact-form form-default">
                                                                                    <div class="row">
                                                                                        <div class="col-md-6">
                                                                                            <div class="input-wrapper">
                                                                                                <p><span class="wpcf7-form-control-wrap"
                                                                                                        data-name="your-name"><input
                                                                                                            size="40"
                                                                                                            class="wpcf7-form-control wpcf7-text wpcf7-validates-as-required form-control input-full"
                                                                                                            aria-required="true"
                                                                                                            aria-invalid="false"
                                                                                                            placeholder="Your name"
                                                                                                            value=""
                                                                                                            type="text"
                                                                                                            name="your-name" /></span>
                                                                                                </p>
                                                                                            </div>
                                                                                        </div>
                                                                                        <div class="col-md-6">
                                                                                            <div class="input-wrapper">
                                                                                                <p><span class="wpcf7-form-control-wrap"
                                                                                                        data-name="your-email"><input
                                                                                                            size="40"
                                                                                                            class="wpcf7-form-control wpcf7-email wpcf7-validates-as-required wpcf7-text wpcf7-validates-as-email form-control input-full"
                                                                                                            aria-required="true"
                                                                                                            aria-invalid="false"
                                                                                                            placeholder="address@youremail.com"
                                                                                                            value=""
                                                                                                            type="email"
                                                                                                            name="your-email" /></span>
                                                                                                </p>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="input-wrapper">
                                                                                        <p><span class="wpcf7-form-control-wrap"
                                                                                                data-name="your-message">
                                                                                                <textarea cols="40" rows="10"
                                                                                                    class="wpcf7-form-control wpcf7-textarea wpcf7-validates-as-required input-full form-control" aria-required="true"
                                                                                                    aria-invalid="false" placeholder="Your Question..." name="your-message"></textarea>
                                                                                            </span>
                                                                                        </p>
                                                                                    </div>
                                                                                    <div>
                                                                                        <p><button type="submit"
                                                                                                id="submit-contact"
                                                                                                class="btn btn-border btn-invert btn-wide wpcf7-form-control wpcf7-submit"><span>Contact
                                                                                                    Us</span></button>
                                                                                        </p>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="wpcf7-response-output"
                                                                                    aria-hidden="true"></div>
                                                                            </form>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </section>
                    </div>
                </div>
                <!-- //Block -->
            </div>
        </div><!-- #primary -->
    </div>
    <!-- Main Content end-->


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
    <!-- Footer section end-->


    <!-- Back-to-top Button Start -->
    <div class="back-to-top" style="bottom: 15px;">
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
                            To access our scheduling system and make an appointment, please log in to your account. If
                            you don’t have an account yet, you can easily create one. Logging in will also allow you to
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
                            href="{{ route('Contact') }}">contact us</a>. We’re here to help you get your vehicle back
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


</body>
