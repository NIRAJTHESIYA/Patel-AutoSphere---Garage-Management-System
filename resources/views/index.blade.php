@include('Includes.header')

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

<style>
    .main-menu-link {
        color: #333;
        text-decoration: none;
        display: flex;
        align-items: center;
        transition: color 0.3s ease;
    }

    .main-menu-link i {
        margin-right: 8px;
        font-size: 18px;
        transition: transform 0.3s ease;
    }

    .main-menu-link:hover i {
        transform: rotate(20deg);
    }

    .logout-form button:hover {
        color: #ca0011;
    }
</style>



<body
    class="home page-template-default page page-id-56 wp-embed-responsive layout-1 theme-car-repair-services woocommerce-no-js elementor-default elementor-kit-2482 elementor-page elementor-page-56">


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


    <!-- Main Content Start-->
    <div id="pageContent" class="content-area">
        <div id="primary" class="container">
            <div id="post-56" class="post-56 page type-page status-publish hentry">

                <!-- Block Start -->
                <div class="offset-sm">
                    <div data-elementor-type="wp-page" data-elementor-id="56" class="elementor elementor-56">


                        <!-- Slider Section Start -->
                        <section
                            class="elementor-section elementor-top-section elementor-element elementor-element-bf3fa0b elementor-section-stretched elementor-section-full_width elementor-section-height-default elementor-section-height-default"
                            data-id="bf3fa0b" data-element_type="section"
                            data-settings="{&quot;stretch_section&quot;:&quot;section-stretched&quot;}">
                            <div class="elementor-container elementor-column-gap-no">
                                <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-aa37ef8"
                                    data-id="aa37ef8" data-element_type="column">
                                    <div class="elementor-widget-wrap elementor-element-populated">
                                        <div class="elementor-element elementor-element-ed40625 elementor-widget elementor-widget-csr_slickslider"
                                            data-id="ed40625" data-element_type="widget"
                                            data-settings="{&quot;autoplay_speed&quot;:7000,&quot;speed&quot;:500}"
                                            data-widget_type="csr_slickslider.default">
                                            <div class="elementor-widget-container">
                                                <div id="mainSliderWrapper"
                                                    data-slickslider='{"autoplay":true,"autoplay_speed":7000,"arrows":true,"dots":false,"fade":false,"speed":500,"pause_on_hover":true,"pause_on_dots_hover":true}'>
                                                    <div id="mainSlider">

                                                        <div class="slide" id="66cb524068d9e850">
                                                            <div class="img--holder"
                                                                style="background-image: url(wp-content/uploads/sites/5/2020/04/slide1.jpg); min-height: 526px;">
                                                            </div>
                                                            <div class="slide-content center">
                                                                <div class="vert-wrap container">
                                                                    <div class="vert">
                                                                        <div class="container">
                                                                            <h4 data-animation="zoomIn"
                                                                                data-animation-delay="0.5s">Looking for
                                                                                Right Vehicle</h4>
                                                                            <h3 data-animation="scaleOut"
                                                                                data-animation-delay="0.2">Repair
                                                                                Service?</h3>
                                                                            <p data-animation="fadeIn"
                                                                                data-animation-delay="0.9s">Get your
                                                                                fair-price repair estimates</p>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <div class="slide" id="66cb524068eb9436">
                                                            <div class="img--holder"
                                                                style="background-image: url(wp-content/uploads/sites/5/2020/03/slide2-1.jpg); min-height: 526px;">
                                                            </div>
                                                            <div class="slide-content left">
                                                                <div class="vert-wrap container">
                                                                    <div class="vert">
                                                                        <div class="container">
                                                                            <h4 data-animation="zoomIn"
                                                                                data-animation-delay="0.5s">Full
                                                                                Service of</h4>
                                                                            <h3 data-animation="scaleOut"
                                                                                data-animation-delay="0.2">Auto Repair
                                                                            </h3>
                                                                            <h3 data-animation=""
                                                                                data-animation-delay="">& Maintenance
                                                                            </h3>
                                                                            <p data-animation="fadeIn"
                                                                                data-animation-delay="0.9s">Over
                                                                                Successful 10
                                                                                Years Of Quality Auto Service</p>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <div class="slide" id="66cb524068f6b398">
                                                            <div class="img--holder"
                                                                style="background-image: url(wp-content/uploads/sites/5/2020/04/slide3.jpg); min-height: 526px;">
                                                            </div>
                                                            <div class="slide-content center">
                                                                <div class="vert-wrap container">
                                                                    <div class="vert">
                                                                        <div class="container">
                                                                            <h4 data-animation="zoomIn"
                                                                                data-animation-delay="0.5s">Trust Your
                                                                                Vehicle to</h4>
                                                                            <h3 data-animation="scaleOut"
                                                                                data-animation-delay="0.2">Qualified
                                                                            </h3>
                                                                            <h3 data-animation=""
                                                                                data-animation-delay="">Technicians
                                                                            </h3>
                                                                            <p data-animation="fadeIn"
                                                                                data-animation-delay="0.9s">SERVICE,
                                                                                MAINTENANCE & REPAIR BY THE QUALIFIED
                                                                                SERVICE EXPERTS</p>
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
                        <!-- Slider Section End -->


                        <!-- Key Section Start -->
                        <section
                            class="elementor-section elementor-top-section elementor-element elementor-element-16e0903 elementor-section-stretched elementor-section-full_width elementor-section-height-default elementor-section-height-default"
                            data-id="16e0903" data-element_type="section"
                            data-settings="{&quot;stretch_section&quot;:&quot;section-stretched&quot;}">
                            <div class="elementor-container elementor-column-gap-no">
                                <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-0da4b6c"
                                    data-id="0da4b6c" data-element_type="column">
                                    <div class="elementor-widget-wrap elementor-element-populated">
                                        <div class="elementor-element elementor-element-b918cb4 elementor-widget elementor-widget-banner_under_slider"
                                            data-id="b918cb4" data-element_type="widget"
                                            data-widget_type="banner_under_slider.default">
                                            <div class="elementor-widget-container">

                                                <div class="block block-wrapper-01 ">
                                                    <div class="container container-tablet-md">
                                                        <div class="promo-01">
                                                            <div class="promo-01__col-left">
                                                                <div class="promo-01__title">
                                                                    <div class="text-01">After Hours</div>
                                                                    <div class="text-02">Drop-OFF</div>
                                                                </div>
                                                            </div>
                                                            <div class="promo-01__col-center">
                                                                <div class="promo-01__description">We realize that you
                                                                    lead a busy life, so we have made it easy for you to
                                                                    drop off your vehicle 24/7.
                                                                </div>
                                                                <div class="promo-01__img"><img decoding="async"
                                                                        src="wp-content/uploads/sites/5/2017/12/banner-key-new.png"
                                                                        alt="">
                                                                </div>
                                                            </div>
                                                            <div class="promo-01__col-right">
                                                                <a href="contacts/index.html"
                                                                    class="btn btn-border"><span>Get Estimate</span>
                                                                </a>
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
                        <!-- Key Section End -->


                        <!-- Services Section Start -->
                        <section
                            class="elementor-section elementor-top-section elementor-element elementor-element-c12d689 elementor-section-stretched elementor-section-full_width elementor-section-height-default elementor-section-height-default"
                            data-id="c12d689" data-element_type="section"
                            data-settings="{&quot;stretch_section&quot;:&quot;section-stretched&quot;}">
                            <div class="elementor-container elementor-column-gap-no">
                                <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-ca12d6b"
                                    data-id="ca12d6b" data-element_type="column">
                                    <div class="elementor-widget-wrap elementor-element-populated">
                                        <div class="elementor-element elementor-element-d1a2ffb elementor-widget elementor-widget-crs_banner"
                                            data-id="d1a2ffb" data-element_type="widget"
                                            data-widget_type="crs_banner.default">
                                            <div class="elementor-widget-container">
                                                <div class="block">
                                                    <div class="container">
                                                        <div class="block-title">
                                                            <h2 class="block-title__title">What We Do</h2>
                                                            <div class="block-title__description">We offer full service
                                                                auto repair &amp; maintenance
                                                            </div>
                                                            <div class="title-separator"></div>
                                                        </div>
                                                        <div class="services-block">
                                                            <div class="service ">
                                                                <div class="image">
                                                                    <a>
                                                                        <img fetchpriority="high" fetchpriority="high"
                                                                            decoding="async" width="390"
                                                                            height="390"
                                                                            src="wp-content/uploads/sites/5/2017/03/service-1-bg-1.png"
                                                                            class="attachment-car-repair-services-thumbnail-carousel size-car-repair-services-thumbnail-carousel"
                                                                            alt=""
                                                                            sizes="(max-width: 390px) 100vw, 390px" />
                                                                    </a>
                                                                </div>

                                                                <div class="caption" id="service-box-one">
                                                                    <div
                                                                        class="services__text-background text-color-01">
                                                                        Services
                                                                    </div>
                                                                    <div class="vert-wrap">
                                                                        <div class="vert">
                                                                            <h3 id="service_name_one">
                                                                                {{ $service->service_name ?? 'TIRE & WHEELS' }}
                                                                            </h3>
                                                                            <div class="text"
                                                                                id="service_topic_one">
                                                                                {{ $service->service_topic ?? 'Ensure a smooth and safe ride by keeping your wheels and tires in top condition with regular inspections and maintenance.' }}
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>

                                                            </div>
                                                            <div class="service hidden-xs">
                                                                <a class="image image-scale">
                                                                    <img decoding="async" width="390"
                                                                        height="390"
                                                                        src="wp-content/uploads/sites/5/2017/03/service-2-bg-1.jpg"
                                                                        class="attachment-car-repair-services-thumbnail-carousel size-car-repair-services-thumbnail-carousel"
                                                                        alt=""
                                                                        sizes="(max-width: 390px) 100vw, 390px" />
                                                                </a>
                                                            </div>
                                                            <div class="service ">
                                                                <div class="image">
                                                                    <a>
                                                                        <img decoding="async" width="390"
                                                                            height="390"
                                                                            src="wp-content/uploads/sites/5/2017/03/service-3-bg-1.jpg"
                                                                            class="attachment-car-repair-services-thumbnail-carousel size-car-repair-services-thumbnail-carousel"
                                                                            alt=""
                                                                            sizes="(max-width: 390px) 100vw, 390px" />
                                                                    </a>
                                                                </div>

                                                                <div class="caption" id="service-box-two">
                                                                    <div
                                                                        class="services__text-background text-color-02">
                                                                        Services
                                                                    </div>
                                                                    <div class="vert-wrap">
                                                                        <div class="vert">
                                                                            <h3 id="service_name_two">
                                                                                {{ $service->service_name ?? 'ENGINE SERVICES' }}
                                                                            </h3>
                                                                            <div class="text"
                                                                                id="service_topic_two">
                                                                                {{ $service->service_topic ?? 'Extend your engine’s lifespan with timely inspections and tune-ups..' }}
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>

                                                            <div class="service hidden-xs">
                                                                <a class="image image-scale">
                                                                    <img loading="lazy" loading="lazy"
                                                                        decoding="async" width="390"
                                                                        height="390"
                                                                        src="wp-content/uploads/sites/5/2017/03/service-6-bg-1.jpg"
                                                                        class="attachment-car-repair-services-thumbnail-carousel size-car-repair-services-thumbnail-carousel"
                                                                        alt=""
                                                                        sizes="(max-width: 390px) 100vw, 390px" />
                                                                </a>
                                                            </div>
                                                            <div class="service dark">
                                                                <div class="image">
                                                                    <a>
                                                                        <img loading="lazy" loading="lazy"
                                                                            decoding="async" width="390"
                                                                            height="390"
                                                                            src="wp-content/uploads/sites/5/2017/03/service-5-bg-1.jpg"
                                                                            class="attachment-car-repair-services-thumbnail-carousel size-car-repair-services-thumbnail-carousel"
                                                                            alt=""
                                                                            sizes="(max-width: 390px) 100vw, 390px" />
                                                                    </a>
                                                                </div>

                                                                <div class="caption" id="service-box-three">
                                                                    <div
                                                                        class="services__text-background text-color-03">
                                                                        Service
                                                                    </div>
                                                                    <div class="vert-wrap">
                                                                        <div class="vert">
                                                                            <h3 id="service_name_three">
                                                                                {{ $service->service_name ?? 'AC SERVICES' }}
                                                                            </h3>
                                                                            <div class="text"
                                                                                id="service_topic_three">
                                                                                {{ $service->service_topic ?? 'Ensure peak performance and extend the life of your AC with regular maintenance and timely repairs..' }}
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>

                                                            </div>
                                                            <div class="service hidden-xs">
                                                                <a class="image image-scale">
                                                                    <img loading="lazy" loading="lazy"
                                                                        decoding="async" width="390"
                                                                        height="390"
                                                                        src="wp-content/uploads/sites/5/2020/02/service-6-bg-1.jpg"
                                                                        class="attachment-car-repair-services-thumbnail-carousel size-car-repair-services-thumbnail-carousel"
                                                                        alt=""
                                                                        sizes="(max-width: 390px) 100vw, 390px" />
                                                                </a>
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
                        <!-- Services Section End -->


                        <!-- Guarantee Section Start -->
                        <section
                            class="elementor-section elementor-top-section elementor-element elementor-element-5d3abfe elementor-section-stretched elementor-section-full_width elementor-section-height-default elementor-section-height-default"
                            data-id="5d3abfe" data-element_type="section"
                            data-settings="{&quot;stretch_section&quot;:&quot;section-stretched&quot;}">
                            <div class="elementor-container elementor-column-gap-no">
                                <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-d0a5f9d"
                                    data-id="d0a5f9d" data-element_type="column">
                                    <div class="elementor-widget-wrap elementor-element-populated">
                                        <div class="elementor-element elementor-element-afba501 elementor-widget elementor-widget-crs-icon-box"
                                            data-id="afba501" data-element_type="widget"
                                            data-widget_type="crs-icon-box.default">
                                            <div class="elementor-widget-container">
                                                <div class="block">
                                                    <div class="container">
                                                        <div class="block-title">
                                                            <h2 class="block-title__title">100% Result Guarantee</h2>
                                                            <div class="block-title__description">We offer full service
                                                                auto repair &amp; maintenance
                                                            </div>
                                                        </div>
                                                        <div class="box01-listing">
                                                            <div class="row">

                                                                <div class="col-sm-4">
                                                                    <div class="box01">
                                                                        <div class="box01__icon">
                                                                            <i class="icon  icon-wrech1"></i>
                                                                        </div>
                                                                        <div class="box01__content">
                                                                            <h6 class="box01__title">All Car Makes</h6>
                                                                            <p>We provide a variety of repair and
                                                                                maintenance services for all car makes
                                                                                and models, even for exotic and vintage
                                                                                ones.</p>
                                                                        </div>
                                                                    </div>
                                                                </div>

                                                                <div class="col-sm-4">
                                                                    <div class="box01">
                                                                        <div class="box01__icon">
                                                                            <i class="icon  icon-gear"></i>
                                                                        </div>
                                                                        <div class="box01__content">
                                                                            <h6 class="box01__title">Variety Services
                                                                            </h6>
                                                                            <p>The main principle of our work is to
                                                                                offer a wide range of quality car repair
                                                                                services and we’ve been doing it since
                                                                                our first day.</p>
                                                                        </div>
                                                                    </div>
                                                                </div>

                                                                <div class="col-sm-4">
                                                                    <div class="box01">
                                                                        <div class="box01__icon">
                                                                            <i class="icon  icon-259477"></i>
                                                                        </div>
                                                                        <div class="box01__content">
                                                                            <h6 class="box01__title">Quality Support
                                                                            </h6>
                                                                            <p>Car Repair Services offers quality
                                                                                support programs for any vehicles that
                                                                                allow them to always stay fully
                                                                                functional.</p>
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
                        <!-- Guarantee Section End -->


                        <!-- Repair Services Offer Section Start -->
                        <section
                            class="elementor-section elementor-top-section elementor-element elementor-element-4d83e15 elementor-section-stretched elementor-section-full_width elementor-section-height-default elementor-section-height-default"
                            data-id="4d83e15" data-element_type="section"
                            data-settings="{&quot;stretch_section&quot;:&quot;section-stretched&quot;}">
                            <div class="elementor-container elementor-column-gap-no">
                                <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-fa0ac3e"
                                    data-id="fa0ac3e" data-element_type="column">
                                    <div class="elementor-widget-wrap elementor-element-populated">
                                        <div class="elementor-element elementor-element-a2445e1 elementor-widget elementor-widget-our_services"
                                            data-id="a2445e1" data-element_type="widget"
                                            data-widget_type="our_services.default">
                                            <div class="elementor-widget-container">
                                                <div class="block bg-1">
                                                    <div class="container position-relative">
                                                        <div class="section__text-background text-color01">Services
                                                        </div>
                                                        <div class="row" id="slideMobile">
                                                            <div class="col-sm-6 col-md-4">
                                                                <div class="block-title text-left">
                                                                    <h2 class="block-title__title">Repair Services That
                                                                        <span class="color">We Offer</span>
                                                                    </h2>
                                                                    <div class="title-separator"></div>
                                                                </div>
                                                                <p>We provide a full range of front end mechanical
                                                                    repairs for all makes and models of cars, no matter
                                                                    the cause. This includes everything from struts,
                                                                    shocks, and tie rod ends to ball joints, springs,
                                                                    and basically everything that is included in
                                                                    repairing the front end of the vehicle.</p>
                                                                <a href="#" data-toggle="modal"
                                                                    data-target="#appointmentForm"
                                                                    class="btn btn-top btn-border hide-onlymobile"><span>Book
                                                                        an Appointment</span></a>
                                                            </div>
                                                            <div class="col-sm-6 col-md-4 ">
                                                                <ul class="marker-list">

                                                                    <li>General Auto Repair &amp; Maintenance</li>
                                                                    <li>Transmission Repair &amp; Replacement</li>
                                                                    <li>Fuel System Repair</li>
                                                                    <li>Exhaust System Repair</li>
                                                                    <li>Engine Cooling System Maintenance</li>
                                                                    <li>Electrical Diagnostics</li>
                                                                    <li>Starting and Charging Repair</li>
                                                                    <li>Wheel Alignment</li>
                                                                    <li>CV Axles</li>
                                                                    <li>Computer Diagnostic Testing</li>
                                                                    <li class="list-hidden">Manufacturer Recommended
                                                                        Service</li>
                                                                    <li class="list-hidden">Brake Repair and
                                                                        Replacement</li>
                                                                    <li class="list-hidden">Air Conditioning A/C Repair
                                                                    </li>
                                                                    <li class="list-hidden">Tire Repair and Replacement
                                                                    </li>
                                                                    <li class="list-hidden">Vehicle Preventative
                                                                        Maintenance</li>


                                                                    <li class="list-hidden">Emission Repair Facility
                                                                    </li>

                                                                    <li class="list-hidden">Oil Change</li>
                                                                    <li class="list-hidden">Brake Job / Brake Service
                                                                    </li>
                                                                    <li class="list-hidden">Engine Cooling System Flush
                                                                        &amp; Repair</li>
                                                                    <li class="list-hidden">Steering and Suspension
                                                                        Work</li>
                                                                </ul>
                                                                <a href="#"
                                                                    class="js-add-points show-tablet btn-add btn-top">+
                                                                    More Services</a><br>
                                                                <a href="#" data-toggle="modal"
                                                                    data-target="#appointmentForm"
                                                                    class="btn btn-top btn-border show-onlymobile"><span>Book
                                                                        an Appointment</span></a>
                                                            </div>
                                                            <div
                                                                class="col-sm-6 col-md-4 view-more-mobile view-more-tablet">
                                                                <ul class="marker-list">
                                                                    <li>Manufacturer Recommended Service</li>
                                                                    <li>Brake Repair and Replacement</li>
                                                                    <li>Air Conditioning A/C Repair</li>
                                                                    <li>Tire Repair and Replacement</li>
                                                                    <li>Vehicle Preventative Maintenance</li>

                                                                    <li>Emission Repair Facility</li>

                                                                    <li>Oil Change</li>
                                                                    <li>Brake Job / Brake Service</li>
                                                                    <li>Engine Cooling System Flush &amp; Repair</li>
                                                                    <li>Steering and Suspension Work</li>
                                                                </ul>
                                                                <a href="#"
                                                                    class="js-add-points show-tablet btn-add btn-top">+
                                                                    More Services</a><br>
                                                                <a href="#" data-toggle="modal"
                                                                    data-target="#appointmentForm"
                                                                    class="btn btn-top btn-border show-onlymobile"><span>Book
                                                                        an Appointment</span></a>
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
                        <!-- Repair Services Offer Section End -->


                        <!-- Quality Service Section Start -->
                        <section
                            class="elementor-section elementor-top-section elementor-element elementor-element-858f7ed elementor-section-stretched elementor-section-full_width elementor-section-height-default elementor-section-height-default"
                            data-id="858f7ed" data-element_type="section"
                            data-settings="{&quot;stretch_section&quot;:&quot;section-stretched&quot;}">
                            <div class="elementor-container elementor-column-gap-no">
                                <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-9adb327"
                                    data-id="9adb327" data-element_type="column">
                                    <div class="elementor-widget-wrap elementor-element-populated">
                                        <div class="elementor-element elementor-element-572b349 elementor-widget elementor-widget-about_us"
                                            data-id="572b349" data-element_type="widget"
                                            data-widget_type="about_us.default">
                                            <div class="elementor-widget-container">
                                                <div class="block">
                                                    <div class="container container-tablet-md no-indent">
                                                        <div class="wrapper-parallax-left">
                                                            <div class="col-img">
                                                                <div class="parallax-img">
                                                                    <img decoding="async"
                                                                        src="wp-content/uploads/sites/5/2020/03/img-parallax01-img01-1.jpg"
                                                                        class="js-init-parallax" data-orientation="up"
                                                                        data-overflow="false" data-scale="1.4"
                                                                        alt="">
                                                                </div>
                                                                <div class="img-tablet">
                                                                    <img loading="lazy" loading="lazy"
                                                                        decoding="async" width="322"
                                                                        height="426"
                                                                        src="wp-content/uploads/sites/5/2020/03/img-parallax01-img02-1.jpg"
                                                                        class="attachment-full size-full"
                                                                        alt=""
                                                                        sizes="(max-width: 322px) 100vw, 322px" />
                                                                </div>
                                                                <div data-elementor-type="page"
                                                                    data-elementor-id="1721"
                                                                    class="elementor elementor-1721">
                                                                    <section
                                                                        class="elementor-section elementor-top-section elementor-element elementor-element-63b1082 elementor-section-boxed elementor-section-height-default elementor-section-height-default"
                                                                        data-id="63b1082" data-element_type="section">
                                                                        <div
                                                                            class="elementor-container elementor-column-gap-default">
                                                                            <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-927c409"
                                                                                data-id="927c409"
                                                                                data-element_type="column">
                                                                                <div
                                                                                    class="elementor-widget-wrap elementor-element-populated">
                                                                                    <div class="elementor-element elementor-element-18cdbfd elementor-widget elementor-widget-home_page_coupns"
                                                                                        data-id="18cdbfd"
                                                                                        data-element_type="widget"
                                                                                        data-widget_type="home_page_coupns.default">
                                                                                        <div
                                                                                            class="elementor-widget-container">
                                                                                            <div
                                                                                                class="tt-box-custom01">
                                                                                                <div class="promo01">
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                    </section>
                                                                </div>
                                                            </div>
                                                            <div class="col-description">
                                                                <div class="block-title text-left">
                                                                    <h3 class="block-title__title">Quality Service and
                                                                        Customer <span
                                                                            class="color">Satisfaction!</span></h3>
                                                                    <div class="title-separator"></div>
                                                                </div>
                                                                <p>Our garage management system offers a comprehensive
                                                                    suite of features designed to adress the unique
                                                                    challenges of garage operations.

                                                                </p>
                                                                <ul class="marker-list-sm">
                                                                    <li>24 Month / 24,000km Nationwide Warranty</li>
                                                                    <li>Courtesy Local Shuttle Service</li>
                                                                    <li>Customer Rewards Program</li>
                                                                    <li>ASE Certified Technicians</li>
                                                                    <li>24-Hour Roadside Assistance</li>
                                                                    <li>Courtesy Loaner Vehicle</li>
                                                                </ul>
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
                        <!-- Quality Service Section End -->


                        <!-- How to Work Section Start -->
                        <section
                            class="elementor-section elementor-top-section elementor-element elementor-element-814327d elementor-section-stretched elementor-section-full_width elementor-section-height-default elementor-section-height-default"
                            data-id="814327d" data-element_type="section"
                            data-settings="{&quot;stretch_section&quot;:&quot;section-stretched&quot;}">
                            <div class="elementor-container elementor-column-gap-no">
                                <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-e1d913c"
                                    data-id="e1d913c" data-element_type="column">
                                    <div class="elementor-widget-wrap elementor-element-populated">
                                        <div class="elementor-element elementor-element-066866c elementor-widget elementor-widget-electrician-brands-2"
                                            data-id="066866c" data-element_type="widget"
                                            data-widget_type="electrician-brands-2.default">
                                            <div class="elementor-widget-container">
                                                <div class="block bg-2">
                                                    <div class="container">
                                                        <div class="block-title">
                                                            <h2 class="block-title__title">How It <span
                                                                    class="color">Works</span></h2>
                                                            <div class="block-title__description">These few steps will
                                                                help you understand how our service works</div>
                                                        </div>
                                                    </div>
                                                    <div class="container-fluid">
                                                        <div class="promo02-wrapper">
                                                            <div class="row js-promo02-carousel">
                                                                <div class="col-sm-6 col-w1500-3">
                                                                    <div class="promo02">
                                                                        <div class="promo02__marker">1</div>
                                                                        <div class="promo02__content">
                                                                            <div class="promo02__img"
                                                                                data-bg="https://smartdata.tonytemplates.com/car-repair-service-v4/car1/wp-content/uploads/sites/5/2020/03/promo02-img-01-1.jpg">
                                                                                <div class="promo02__description">
                                                                                    <h6 class="promo02__title"></h6>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="col-sm-6 col-w1500-3">
                                                                    <div class="promo02">
                                                                        <div class="promo02__marker">2</div>
                                                                        <div class="promo02__content">
                                                                            <div class="promo02__img"
                                                                                data-bg="https://smartdata.tonytemplates.com/car-repair-service-v4/car1/wp-content/uploads/sites/5/2020/03/promo02-img-02-1.jpg">
                                                                                <div class="promo02__description">
                                                                                    <h6 class="promo02__title"></h6>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="col-sm-6 col-w1500-3">
                                                                    <div class="promo02">
                                                                        <div class="promo02__marker">3</div>
                                                                        <div class="promo02__content">
                                                                            <div class="promo02__img"
                                                                                data-bg="https://smartdata.tonytemplates.com/car-repair-service-v4/car1/wp-content/uploads/sites/5/2020/03/promo02-img-03-1.jpg">
                                                                                <div class="promo02__description">
                                                                                    <h6 class="promo02__title"></h6>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="col-sm-6 col-w1500-3">
                                                                    <div class="promo02">
                                                                        <div class="promo02__marker">4</div>
                                                                        <div class="promo02__content">
                                                                            <div class="promo02__img"
                                                                                data-bg="https://smartdata.tonytemplates.com/car-repair-service-v4/car1/wp-content/uploads/sites/5/2020/03/promo02-img-04-1.jpg">
                                                                                <div class="promo02__description">
                                                                                    <h6 class="promo02__title"></h6>
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
                                </div>
                            </div>
                        </section>
                        <!-- How to Work Section End -->


                        <!-- Why Choose us Section Start -->
                        <section
                            class="elementor-section elementor-top-section elementor-element elementor-element-fcfd09c elementor-section-stretched elementor-section-full_width elementor-section-height-default elementor-section-height-default"
                            data-id="fcfd09c" data-element_type="section"
                            data-settings="{&quot;stretch_section&quot;:&quot;section-stretched&quot;}">
                            <div class="elementor-container elementor-column-gap-no">
                                <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-b050cb9"
                                    data-id="b050cb9" data-element_type="column">
                                    <div class="elementor-widget-wrap elementor-element-populated">
                                        <div class="elementor-element elementor-element-8fbbc59 elementor-widget elementor-widget-crs-icon-thumb-box"
                                            data-id="8fbbc59" data-element_type="widget"
                                            data-widget_type="crs-icon-thumb-box.default">
                                            <div class="elementor-widget-container">
                                                <div class="block">
                                                    <div class="container">
                                                        <div class="block-title">
                                                            <h2 class="block-title__title">Why Choose Certified
                                                                Service?</h2>
                                                            <div class="block-title__description">We partnered with
                                                                RepairPal to bring you the most sophisticated fair-price
                                                                estimates</div>
                                                            <div class="title-separator"></div>
                                                        </div>
                                                        <div class="text-icon-wrapper">
                                                            <div class="row">
                                                                <div class="col-sm-4 col-md-4">
                                                                    <div class="text-icon ">
                                                                        <div class="icon-wrapper"><span><i
                                                                                    class="icon  icon-808728"></i><span
                                                                                    class="icon-hover"></span></span>
                                                                        </div>
                                                                        <h3 class="title">Estimates</h3>
                                                                        <p class="text">We bring you the most
                                                                            accurate and fair-price service estimates
                                                                        </p>
                                                                    </div>
                                                                </div>
                                                                <div class="col-sm-4 col-md-4">
                                                                    <div class="text-icon active">
                                                                        <div class="icon-wrapper"><span><i
                                                                                    class="icon  icon-tool"></i><span
                                                                                    class="icon-hover"></span></span>
                                                                        </div>
                                                                        <h3 class="title">Trusted</h3>
                                                                        <p class="text">Trusted Service Centers <br>
                                                                            are qualified for high quality</p>
                                                                    </div>
                                                                </div>
                                                                <div class="col-sm-4 col-md-4">
                                                                    <div class="text-icon ">
                                                                        <div class="icon-wrapper"><span><i
                                                                                    class="icon  icon-612844"></i><span
                                                                                    class="icon-hover"></span></span>
                                                                        </div>
                                                                        <h3 class="title">Perfomance</h3>
                                                                        <p class="text">we provide better perfomance
                                                                            services with qualified techinicians.</p>
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
                        <!-- Why Choose us Section End -->


                        <!-- Testimonials Section Start -->
                        {{-- <section
                            class="elementor-section elementor-top-section elementor-element elementor-element-6e0b4e0 elementor-section-stretched elementor-section-full_width elementor-section-height-default elementor-section-height-default"
                            data-id="6e0b4e0" data-element_type="section"
                            data-settings="{&quot;stretch_section&quot;:&quot;section-stretched&quot;}">
                            <div class="elementor-container elementor-column-gap-no">
                                <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-6fb4182"
                                    data-id="6fb4182" data-element_type="column">
                                    <div class="elementor-widget-wrap elementor-element-populated">
                                        <div class="elementor-element elementor-element-4b4a845 elementor-widget elementor-widget-crs_testimonials"
                                            data-id="4b4a845" data-element_type="widget"
                                            data-settings="{&quot;slides_to_show&quot;:1,&quot;slides_to_scroll&quot;:1,&quot;autoplay_speed&quot;:2500}"
                                            data-widget_type="crs_testimonials.default">
                                            <div class="elementor-widget-container">
                                                <div class="block section-bg-wrapper text-white">
                                                    <div class="container-fluid position-relative">
                                                        <div class="section-blog section-blog__color02">
                                                            <div
                                                                class="section__text-background text-background__top text-center text-color01">
                                                                Testimonials</div>
                                                            <div class="testimonials-carousel"
                                                                data-testimonialslider='{"slides_to_show":1,"slides_to_scroll":1,"infinite":true,"autoplay":true,"autoplay_speed":2500,"arrows":false,"dots":true,"fade":false}'>
                                                                <div class="item text-center">
                                                                    <div class="item__img">
                                                                        <img loading="lazy" loading="lazy"
                                                                            decoding="async" width="178"
                                                                            height="179"
                                                                            src="wp-content/uploads/sites/5/2017/06/section-blog-img01-1.jpg"
                                                                            class="attachment-car-repair-services-testimonial-2 size-car-repair-services-testimonial-2"
                                                                            alt=""
                                                                            sizes="(max-width: 178px) 100vw, 178px" />
                                                                        <span class="icon"></span>
                                                                    </div>
                                                                    <div class="item__description">
                                                                        <p>I took my car there to get fixed after I was
                                                                            hit and my rear upper controler arm was
                                                                            bent. They gave me the best estimate, and
                                                                            had the work done super quick! The customer
                                                                            service was amazing, and they were very
                                                                            polite and knowledgable!</p>
                                                                    </div>
                                                                    <div class="item__autor"><span
                                                                            class="color">Silvia R. Brown</span>
                                                                        Manager</div>
                                                                </div>
                                                                <div class="item text-center">
                                                                    <div class="item__img">
                                                                        <img loading="lazy" loading="lazy"
                                                                            decoding="async" width="178"
                                                                            height="179"
                                                                            src="wp-content/uploads/sites/5/2017/06/testimonial1-178x179.jpg"
                                                                            class="attachment-car-repair-services-testimonial-2 size-car-repair-services-testimonial-2"
                                                                            alt=""
                                                                            sizes="(max-width: 178px) 100vw, 178px" />
                                                                        <span class="icon"></span>
                                                                    </div>
                                                                    <div class="item__description">
                                                                        <p>I would recommend Car Repair Service to
                                                                            anyone without a doubt! Very professional
                                                                            and reliable. The best customer service and
                                                                            reasonable prices. My go to auto shop from
                                                                            now on!!!</p>
                                                                    </div>
                                                                    <div class="item__autor"><span
                                                                            class="color">Joseph C. Billups</span>
                                                                        Electrician</div>
                                                                </div>
                                                                <div class="item text-center">
                                                                    <div class="item__img">
                                                                        <img loading="lazy" loading="lazy"
                                                                            decoding="async" width="178"
                                                                            height="179"
                                                                            src="wp-content/uploads/sites/5/2017/06/testimonial2-178x179.jpg"
                                                                            class="attachment-car-repair-services-testimonial-2 size-car-repair-services-testimonial-2"
                                                                            alt=""
                                                                            sizes="(max-width: 178px) 100vw, 178px" />
                                                                        <span class="icon"></span>
                                                                    </div>
                                                                    <div class="item__description">
                                                                        <p>Told them to replace my belt tensioner due to
                                                                            frequent squeaking after replacing my belt.
                                                                            They looked around and said, &#8220;nope,
                                                                            take the belt back and ask for a new one
                                                                            under warranty&#8221;.. Charged me $12, and
                                                                            after installing a new belt, turns out they
                                                                            were right.</p>
                                                                    </div>
                                                                    <div class="item__autor"><span class="color">Rod
                                                                            N. Clay</span> Industrial photographer</div>
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
                        </section> --}}
                        <!-- Testimonials Section End -->


                        <!-- Statistics Section Start -->
                        <section
                            class="elementor-section elementor-top-section elementor-element elementor-element-50c43bd elementor-section-stretched elementor-section-full_width elementor-section-height-default elementor-section-height-default"
                            data-id="50c43bd" data-element_type="section"
                            data-settings="{&quot;stretch_section&quot;:&quot;section-stretched&quot;}">
                            <div class="elementor-container elementor-column-gap-no">
                                <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-35f52cf"
                                    data-id="35f52cf" data-element_type="column">
                                    <div class="elementor-widget-wrap elementor-element-populated">
                                        <div class="elementor-element elementor-element-4f359fe elementor-widget elementor-widget-CounterBlock"
                                            data-id="4f359fe" data-element_type="widget"
                                            data-widget_type="CounterBlock.default">
                                            <div class="elementor-widget-container">
                                                <div class="block">
                                                    <div class="container">
                                                        <div class="row text-center-tablet" id="counterBlock">
                                                            <div class="col-lg-6">
                                                                <div
                                                                    class="block-title text-left block-title__small-indent">
                                                                    <h2 class="block-title__title">The Car Repair
                                                                        Statistics</h2>
                                                                </div>
                                                                <p>Auto repair technical statistics you must to know.
                                                                    Whether you're coming in for a routine inspection,
                                                                    oil change or a repair service, we promise that you
                                                                    will be completely satisfied with our
                                                                    we priotirize your needs and offer exceptional
                                                                    support to ensure your success.</p>
                                                                <div class="row stat-box02-wrapper" id="counterBlock">
                                                                    <div class="col-sm-6">
                                                                        <div class="stat-box02">
                                                                            <div class="stat-box02__value">
                                                                                <span class="number">
                                                                                    <span class="count"
                                                                                        data-to="20"
                                                                                        data-speed="1000">10</span>
                                                                                </span>
                                                                            </div>
                                                                            <div class="stat-box02__title">
                                                                                <h5>Years of experience</h5>
                                                                            </div>
                                                                        </div>
                                                                    </div>

                                                                    <div class="col-sm-6">
                                                                        <div class="stat-box02">
                                                                            <div class="stat-box02__value"><span
                                                                                    class="number">
                                                                                    <span class="count"
                                                                                        data-to="100"
                                                                                        data-speed="1000">100</span>%
                                                                                </span></div>
                                                                            <div class="stat-box02__title">
                                                                                <h5>Satisfied Customers</h5>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="divider-lg hidden-lg"></div>
                                                            <div class="col-lg-6">
                                                                <div class="video-block">
                                                                    <a href="https://maps.google.com/maps?q=221B+Baker+Street,+London,+United+Kingdom&amp;hl=en&amp;t=v&amp;hnear=221B+Baker+St,+London+NW1+6XE,+United+Kingdom"
                                                                        class="video-block__icon js-popup">
                                                                        <span class="icon">
                                                                            <svg version="1.1" id="Capa_1" x="0px"
                                                                                y="0px" viewBox="0 0 191.255 191.255"
                                                                                style="enable-background:new 0 0 191.255 191.255;"
                                                                                xml:space="preserve">
                                                                                <path
                                                                                    d="M162.929,66.612c-2.814-1.754-6.514-0.896-8.267,1.917s-0.895,6.513,1.917,8.266c6.544,4.081,10.45,11.121,10.45,18.833
                                    s-3.906,14.752-10.45,18.833l-98.417,61.365c-6.943,4.329-15.359,4.542-22.512,0.573c-7.154-3.97-11.425-11.225-11.425-19.406
                                    V34.262c0-8.181,4.271-15.436,11.425-19.406c7.153-3.969,15.569-3.756,22.512,0.573l57.292,35.723
                                    c2.813,1.752,6.513,0.895,8.267-1.917c1.753-2.812,0.895-6.513-1.917-8.266L64.512,5.247c-10.696-6.669-23.661-7-34.685-0.883
                                    C18.806,10.48,12.226,21.657,12.226,34.262v122.73c0,12.605,6.58,23.782,17.602,29.898c5.25,2.913,10.939,4.364,16.616,4.364
                                    c6.241,0,12.467-1.754,18.068-5.247l98.417-61.365c10.082-6.287,16.101-17.133,16.101-29.015S173.011,72.899,162.929,66.612z" />
                                                                                <g></g>
                                                                                <g></g>
                                                                                <g></g>
                                                                                <g></g>
                                                                                <g></g>
                                                                                <g></g>
                                                                                <g></g>
                                                                                <g></g>
                                                                                <g></g>
                                                                                <g></g>
                                                                                <g></g>
                                                                                <g></g>
                                                                                <g></g>
                                                                                <g></g>
                                                                                <g></g>
                                                                            </svg>
                                                                        </span>
                                                                    </a>
                                                                    <img loading="lazy" loading="lazy"
                                                                        decoding="async" width="604"
                                                                        height="381"
                                                                        src="wp-content/uploads/sites/5/2020/03/video-img-01-1.jpg"
                                                                        class="attachment-full size-full"
                                                                        alt=""
                                                                        sizes="(max-width: 604px) 100vw, 604px" />
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
                        <!-- Statistics Section End -->


                        <!-- Schedule Section Start -->
                        <section
                            class="elementor-section elementor-top-section elementor-element elementor-element-90f60d6 elementor-section-stretched elementor-section-full_width elementor-section-height-default elementor-section-height-default"
                            data-id="90f60d6" data-element_type="section"
                            data-settings="{&quot;stretch_section&quot;:&quot;section-stretched&quot;}">
                            <div class="elementor-container elementor-column-gap-no">
                                <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-698727f"
                                    data-id="698727f" data-element_type="column">
                                    <div class="elementor-widget-wrap elementor-element-populated">
                                        <div class="elementor-element elementor-element-5219494 elementor-widget elementor-widget-appointment_schedule"
                                            data-id="5219494" data-element_type="widget"
                                            data-widget_type="appointment_schedule.default">
                                            <div class="elementor-widget-container">
                                                <div class="block schedule_one">
                                                    <div class="container position-relative">
                                                        <div
                                                            class="section__text-background text-color02 text-center text-background__center">
                                                            Schedule</div>
                                                        <div class="row">
                                                            <div class="col-md-6">
                                                                <div class="text-appointment">
                                                                    <h2 class="h-lg">Schedule <span
                                                                            class="color">Your Appointment</span>
                                                                        Today</h2>
                                                                    <p class="info">Your Automotive Repair &amp;
                                                                        Maintenance Service Specialist</p>
                                                                    <h2 class="h-phone">1-800-123-4567</h2>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-6">
                                                                <div class="img-move animation animated fadeInRight"
                                                                    data-animation="fadeInRight"
                                                                    data-animation-delay="0s">
                                                                    <img loading="lazy" loading="lazy"
                                                                        decoding="async" width="745"
                                                                        height="253"
                                                                        src="wp-content/uploads/sites/5/2017/03/img-car-move-1.png"
                                                                        class="attachment-full size-full"
                                                                        alt=""
                                                                        sizes="(max-width: 745px) 100vw, 745px" />
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
                        <!-- Schedule Section End -->


                    </div>
                </div>
                <!-- Block End -->
            </div>
        </div>
    </div>
    <!-- Main Content End-->


    <!-- Footer Start-->
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


            <!-- Contect Infromation Start -->
            <div class="container container-tablet-md container-tablet-nogutter">
                <div class="footer-section02__box01">
                    <div class="footer-section02__title">Contact Info</div>
                    <address class="contact-info-item">
                        <div class="item-icon">
                            <i class="icon icon-locate"></i>
                        </div>
                        <div class="item-description">2605 Caton Hill Road, Woodbridge, VA 22192</div>
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
                        <div class="item-description">Mon-Fri:
                            <span>7:00 AM - 6:00 PM</span><br> Saturday:
                            <span>9:00 AM - 5:00 PM</span><br> Sunday:
                            <span>Closed</span>
                        </div>
                    </address>
                </div>
            </div>
        </div>
        <!-- Contect Infromation End -->


        <div class="footer-section03">
            <div class="container container-tablet-md">
                <div class="copyright">© 2022 Car Repair Services,
                    <span class="clearfix visible-xs"></span>All Rights Reserved
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
    <!-- Footer End-->


    <!-- Back-to-top Button Start -->
    <div class="back-to-top" style="bottom: 15px;">
        <a href="#top">
            <span class="icon icon-arrow_up"></span>
        </a>
    </div>
    <!-- Back-to-top Button End -->


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


    <!-- Javascript for fetch random services -->
    <script>
        $(document).ready(function() {
            function fetchRandomServices() {
                $.ajax({
                    url: "{{ route('services.random') }}",
                    method: "GET",
                    success: function(response) {
                        // Update the first service box
                        $('#service_name_one').text(response[0].service_name);
                        $('#service_topic_one').text(response[0].service_topic);

                        // Update the second service box
                        $('#service_name_two').text(response[1].service_name);
                        $('#service_topic_two').text(response[1].service_topic);

                        // Update the third service box
                        $('#service_name_three').text(response[2].service_name);
                        $('#service_topic_three').text(response[2].service_topic);
                    }
                });
            }

            // Fetch random services every 5 seconds
            setInterval(fetchRandomServices, 5000);

            // Initial fetch
            fetchRandomServices();
        });
    </script>



</body>
