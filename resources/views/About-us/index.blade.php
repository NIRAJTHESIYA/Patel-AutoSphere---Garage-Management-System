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
            <h1>About<span class="color">Us</span></h1>

            <!-- Block -->
            <div class="breadcrumbs">
                <div class="breadcrumb">
                    <div class="breadcrumbs">
                        <div class="breadcrumb">
                            <span><span><a href="{{ route('Home') }}">Home</a></span> / <span class="breadcrumb_last"
                                    aria-current="page">About Us</span></span>
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

            <div id="post-1520" class="post-1520 page type-page status-publish hentry">
                <!-- Block -->
                <div class="offset-sm">
                    <div data-elementor-type="wp-page" data-elementor-id="1520" class="elementor elementor-1520">
                        <section
                            class="elementor-section elementor-top-section elementor-element elementor-element-cef3218 elementor-section-stretched elementor-section-full_width elementor-section-height-default elementor-section-height-default"
                            data-id="cef3218" data-element_type="section"
                            data-settings="{&quot;stretch_section&quot;:&quot;section-stretched&quot;}">
                            <div class="elementor-container elementor-column-gap-no">
                                <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-45c630c"
                                    data-id="45c630c" data-element_type="column">
                                    <div class="elementor-widget-wrap elementor-element-populated">
                                        <div class="elementor-element elementor-element-349161e elementor-widget elementor-widget-about_us_1"
                                            data-id="349161e" data-element_type="widget"
                                            data-widget_type="about_us_1.default">
                                            <div class="elementor-widget-container">

                                                <div class="block">
                                                    <div class="container no-indent">
                                                        <div class="wrapper-parallax-left02">
                                                            <div class="col-img">
                                                                <img fetchpriority="high" fetchpriority="high"
                                                                    decoding="async" width="615" height="501"
                                                                    src="../wp-content/uploads/sites/5/2020/03/img-parallax02-img01-1.png"
                                                                    class="attachment-full size-full" alt=""
                                                                    srcset="https://smartdata.tonytemplates.com/car-repair-service-v4/car1/wp-content/uploads/sites/5/2020/03/img-parallax02-img01-1.png 615w, https://smartdata.tonytemplates.com/car-repair-service-v4/car1/wp-content/uploads/sites/5/2020/03/img-parallax02-img01-1-300x244.png 300w, https://smartdata.tonytemplates.com/car-repair-service-v4/car1/wp-content/uploads/sites/5/2020/03/img-parallax02-img01-1-603x491.png 603w, https://smartdata.tonytemplates.com/car-repair-service-v4/car1/wp-content/uploads/sites/5/2020/03/img-parallax02-img01-1-600x489.png 600w"
                                                                    sizes="(max-width: 615px) 100vw, 615px" />
                                                            </div>
                                                            <div class="col-description">
                                                                <div class="block-title text-left">
                                                                    <h3 class="block-title__title">
                                                                        <span class="color">A Reputation</span> 25
                                                                        Years in the Making
                                                                    </h3>
                                                                    <div class="title-separator"></div>
                                                                </div>
                                                                <p> The family has been involved in general automotive
                                                                    repair for over two decades, and the business
                                                                    continues to grow.</p>
                                                                <p> Car Repair Service is a family owned and operated
                                                                    auto repair service in USA serving our local
                                                                    community and surrounding areas for 24 years. Our
                                                                    ASE certified technicians are ready to deal with any
                                                                    car repair needed or vehicle issues you may be
                                                                    experiencing. Adam Smith, Owner, inherited the shop
                                                                    from his father. </p>
                                                                <p><img decoding="async"
                                                                        src="../wp-content/uploads/sites/5/2020/03/img-logo.png"
                                                                        alt=""
                                                                        class="alignnone size-full wp-image-2047" />
                                                                </p>
                                                            </div>
                                                        </div>
                                                        <div class="divider-md"></div>
                                                        <div class="row">
                                                            <div class="col-md-4">
                                                                <h6 class="subtitle">Mission Statement</h6>
                                                                <p>Our Mission is to serve our customers and always
                                                                    deliver the highest level of customer service; to
                                                                    develop our team and strive to constantly improve;
                                                                    and to conduct ourselves in an environmentally
                                                                    responsible manner.</p>
                                                            </div>
                                                            <div class="divider-md hidden-lg hidden-md"></div>
                                                            <div class="col-md-4">
                                                                <h6 class="subtitle">Our Vision</h6>
                                                                <p>To be the world’s most exciting leader in automotive
                                                                    business intelligence solutions. We will generate
                                                                    excitement through implementing pioneering ideas,
                                                                    problem solving &amp; going beyond our customers’
                                                                    expectations.</p>
                                                            </div>
                                                            <div class="divider-md hidden-lg hidden-md"></div>
                                                            <div class="col-md-4">
                                                                <h6 class="subtitle">Core Values</h6>
                                                                <ul class="marker-list-sm">
                                                                    <li>Teamwork through Trust and Respect.</li>
                                                                    <li>Commitment to Customer Enthusiasm.</li>
                                                                    <li>Accountability at all Levels.</li>
                                                                    <li>Passion for Winning.</li>
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
                        <section
                            class="elementor-section elementor-top-section elementor-element elementor-element-f5a0648 elementor-section-stretched elementor-section-full_width elementor-section-height-default elementor-section-height-default"
                            data-id="f5a0648" data-element_type="section"
                            data-settings="{&quot;stretch_section&quot;:&quot;section-stretched&quot;}">
                            <div class="elementor-container elementor-column-gap-no">
                                <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-992ef6c"
                                    data-id="992ef6c" data-element_type="column">
                                    <div class="elementor-widget-wrap elementor-element-populated">
                                        <div class="elementor-element elementor-element-983111a elementor-widget elementor-widget-advantages_our_services"
                                            data-id="983111a" data-element_type="widget"
                                            data-widget_type="advantages_our_services.default">
                                            <div class="elementor-widget-container">
                                                <div class="block position-relative overflow-hidden">
                                                    <div class="container-fluid no-gutters">
                                                        <div class="services-item-wrapper">
                                                            <div
                                                                class="section__text-background text-color03 text-center">
                                                                Advantages</div>
                                                            <div class="services-item">
                                                                <div class="services-title">
                                                                    <h2 class="services-title__title">Advantages <br>
                                                                        of <span class="color">Our Service</span></h2>
                                                                    <div class="title-separator"></div>
                                                                </div>
                                                                <p>
                                                                    Auto servicing your car is an essential task that
                                                                    should not be ignored or forgotten. </p>
                                                                <a href="#" data-toggle="modal"
                                                                    data-target="#appointmentForm"
                                                                    class="btn btn-border btn-top"><span>Get a
                                                                        Quote</span></a>
                                                            </div>

                                                            <div class="services-item services-bg-01">
                                                                <div class="services-box">
                                                                    <div class="services-box__icon">
                                                                        <span class=" icon-271045"></span>
                                                                    </div>
                                                                    <h6 class="services-box__title">
                                                                        Customer-Oriented Service </h6>
                                                                    <p>
                                                                        We value the service we provide and our loyal
                                                                        returning customers can always expect some
                                                                        appreciation from us, like a future service
                                                                        discount or a </p>
                                                                </div>
                                                            </div>

                                                            <div class="services-item services-bg-02">
                                                                <div class="services-box">
                                                                    <div class="services-box__icon">
                                                                        <span class=" icon-808728"></span>
                                                                    </div>
                                                                    <h6 class="services-box__title">
                                                                        Affordable Prices </h6>
                                                                    <p>
                                                                        We value the service we provide and our loyal
                                                                        returning customers can always expect some
                                                                        appreciation from us, like a future service
                                                                        discount or a </p>
                                                                </div>
                                                            </div>

                                                            <div class="services-item services-bg-03">
                                                                <div class="services-box">
                                                                    <div class="services-box__icon">
                                                                        <span class=" icon-598823"></span>
                                                                    </div>
                                                                    <h6 class="services-box__title">
                                                                        High-Quality Car Parts </h6>
                                                                    <p>
                                                                        We value the service we provide and our loyal
                                                                        returning customers can always expect some
                                                                        appreciation from us, like a future service
                                                                        discount or a </p>
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
                        <section
                            class="elementor-section elementor-top-section elementor-element elementor-element-32fb560 elementor-section-stretched elementor-section-full_width elementor-section-height-default elementor-section-height-default"
                            data-id="32fb560" data-element_type="section"
                            data-settings="{&quot;stretch_section&quot;:&quot;section-stretched&quot;}">
                            <div class="elementor-container elementor-column-gap-no">
                                <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-4e67d0f"
                                    data-id="4e67d0f" data-element_type="column">
                                    <div class="elementor-widget-wrap elementor-element-populated">
                                        <div class="elementor-element elementor-element-32ce9a9 elementor-widget elementor-widget-team_carousel"
                                            data-id="32ce9a9" data-element_type="widget"
                                            data-settings="{&quot;slides_to_show&quot;:3,&quot;slides_to_scroll&quot;:1,&quot;autoplay_speed&quot;:4000}"
                                            data-widget_type="team_carousel.default">
                                            <div class="elementor-widget-container">
                                                <div class="block position-relative overflow-hidden">
                                                    <div class="container">
                                                        <div class="block-title">
                                                            <h2 class="block-title__title">Meet the Team</h2>
                                                            <div class="block-title__description">
                                                                By working on many makes, our technicians can be trusted
                                                                to properly<br> diagnose different repairs </div>
                                                            <div class="title-separator"></div>
                                                        </div>
                                                        <div
                                                            class="section__text-background text-color02 text-center text-background__center">
                                                            Meet the Team</div>
                                                        <div class="card01-wrapper">
                                                            <div class="js-slick-init team-carousel slick-style01"
                                                                data-slick='{
					"slidesToShow": 3,
					"slidesToScroll": 1,
					"dots": true,
					"arrows": false,
					"autoplay": true,
					"autoplaySpeed": 4000,
					"responsive":[
							{"breakpoint": 992,
								"settings":{"slidesToShow": 2}
							},
							{"breakpoint": 576,
								"settings":{"slidesToShow": 1}
							}
						]
					}'>
                                                                <div class="item">
                                                                    <div class="card01">
                                                                        <div class="card01__img">
                                                                            <img decoding="async" width="370"
                                                                                height="395"
                                                                                src="../wp-content/uploads/sites/5/2020/03/card01-img01-1.png"
                                                                                class="attachment-full size-full"
                                                                                alt=""
                                                                                srcset="https://smartdata.tonytemplates.com/car-repair-service-v4/car1/wp-content/uploads/sites/5/2020/03/card01-img01-1.png 370w, https://smartdata.tonytemplates.com/car-repair-service-v4/car1/wp-content/uploads/sites/5/2020/03/card01-img01-1-281x300.png 281w"
                                                                                sizes="(max-width: 370px) 100vw, 370px" />
                                                                            <ul class="card01__social-icon">
                                                                                <li>
                                                                                    <a class="icon icon-59439"
                                                                                        target="_blank"
                                                                                        href="#"></a>
                                                                                </li>
                                                                                <li>
                                                                                    <a class="icon icon-8800"
                                                                                        target="_blank"
                                                                                        href="#"></a>
                                                                                </li>
                                                                                <li>
                                                                                    <a class="icon icon-733614"
                                                                                        target="_blank"
                                                                                        href="#"></a>
                                                                                </li>
                                                                            </ul>
                                                                        </div>
                                                                        <div class="card01__wrapper">
                                                                            <h6 class="card01__title"><a
                                                                                    href="#">Robert Piedra</a>
                                                                            </h6>
                                                                            <div class="card01__description">Service
                                                                                Advisor</div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="item">
                                                                    <div class="card01">
                                                                        <div class="card01__img">
                                                                            <img decoding="async" width="370"
                                                                                height="395"
                                                                                src="../wp-content/uploads/sites/5/2020/03/card01-img02-1.png"
                                                                                class="attachment-full size-full"
                                                                                alt=""
                                                                                srcset="https://smartdata.tonytemplates.com/car-repair-service-v4/car1/wp-content/uploads/sites/5/2020/03/card01-img02-1.png 370w, https://smartdata.tonytemplates.com/car-repair-service-v4/car1/wp-content/uploads/sites/5/2020/03/card01-img02-1-281x300.png 281w"
                                                                                sizes="(max-width: 370px) 100vw, 370px" />
                                                                            <ul class="card01__social-icon">
                                                                                <li>
                                                                                    <a class="icon icon-59439"
                                                                                        target="_blank"
                                                                                        href="#"></a>
                                                                                </li>
                                                                                <li>
                                                                                    <a class="icon icon-8800"
                                                                                        target="_blank"
                                                                                        href="#"></a>
                                                                                </li>
                                                                                <li>
                                                                                    <a class="icon icon-733614"
                                                                                        target="_blank"
                                                                                        href="#"></a>
                                                                                </li>
                                                                            </ul>
                                                                        </div>
                                                                        <div class="card01__wrapper">
                                                                            <h6 class="card01__title"><a
                                                                                    href="#">Charles Weaver</a>
                                                                            </h6>
                                                                            <div class="card01__description">First
                                                                                Mechanic</div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="item">
                                                                    <div class="card01">
                                                                        <div class="card01__img">
                                                                            <img loading="lazy" loading="lazy"
                                                                                decoding="async" width="370"
                                                                                height="395"
                                                                                src="../wp-content/uploads/sites/5/2020/03/card01-img03-1.png"
                                                                                class="attachment-full size-full"
                                                                                alt=""
                                                                                srcset="https://smartdata.tonytemplates.com/car-repair-service-v4/car1/wp-content/uploads/sites/5/2020/03/card01-img03-1.png 370w, https://smartdata.tonytemplates.com/car-repair-service-v4/car1/wp-content/uploads/sites/5/2020/03/card01-img03-1-281x300.png 281w"
                                                                                sizes="(max-width: 370px) 100vw, 370px" />
                                                                            <ul class="card01__social-icon">
                                                                                <li>
                                                                                    <a class="icon icon-59439"
                                                                                        target="_blank"
                                                                                        href="#"></a>
                                                                                </li>
                                                                                <li>
                                                                                    <a class="icon icon-8800"
                                                                                        target="_blank"
                                                                                        href="#"></a>
                                                                                </li>
                                                                                <li>
                                                                                    <a class="icon icon-733614"
                                                                                        target="_blank"
                                                                                        href="#"></a>
                                                                                </li>
                                                                            </ul>
                                                                        </div>
                                                                        <div class="card01__wrapper">
                                                                            <h6 class="card01__title"><a
                                                                                    href="#">Kevin Goodwin</a>
                                                                            </h6>
                                                                            <div class="card01__description">General
                                                                                Manager</div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="item">
                                                                    <div class="card01">
                                                                        <div class="card01__img">
                                                                            <img loading="lazy" loading="lazy"
                                                                                decoding="async" width="370"
                                                                                height="395"
                                                                                src="../wp-content/uploads/sites/5/2020/04/card01-img04.png"
                                                                                class="attachment-full size-full"
                                                                                alt=""
                                                                                srcset="https://smartdata.tonytemplates.com/car-repair-service-v4/car1/wp-content/uploads/sites/5/2020/04/card01-img04.png 370w, https://smartdata.tonytemplates.com/car-repair-service-v4/car1/wp-content/uploads/sites/5/2020/04/card01-img04-281x300.png 281w"
                                                                                sizes="(max-width: 370px) 100vw, 370px" />
                                                                            <ul class="card01__social-icon">
                                                                                <li>
                                                                                    <a class="icon icon-59439"
                                                                                        target="_blank"
                                                                                        href="#"></a>
                                                                                </li>
                                                                                <li>
                                                                                    <a class="icon icon-8800"
                                                                                        target="_blank"
                                                                                        href="#"></a>
                                                                                </li>
                                                                                <li>
                                                                                    <a class="icon icon-733614"
                                                                                        target="_blank"
                                                                                        href="#"></a>
                                                                                </li>
                                                                            </ul>
                                                                        </div>
                                                                        <div class="card01__wrapper">
                                                                            <h6 class="card01__title"><a
                                                                                    href="#">Robert Kennelly</a>
                                                                            </h6>
                                                                            <div class="card01__description">Certified
                                                                                Technician</div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="item">
                                                                    <div class="card01">
                                                                        <div class="card01__img">
                                                                            <img loading="lazy" loading="lazy"
                                                                                decoding="async" width="370"
                                                                                height="395"
                                                                                src="../wp-content/uploads/sites/5/2020/04/card01-img05.png"
                                                                                class="attachment-full size-full"
                                                                                alt=""
                                                                                srcset="https://smartdata.tonytemplates.com/car-repair-service-v4/car1/wp-content/uploads/sites/5/2020/04/card01-img05.png 370w, https://smartdata.tonytemplates.com/car-repair-service-v4/car1/wp-content/uploads/sites/5/2020/04/card01-img05-281x300.png 281w"
                                                                                sizes="(max-width: 370px) 100vw, 370px" />
                                                                            <ul class="card01__social-icon">
                                                                                <li>
                                                                                    <a class="icon icon-59439"
                                                                                        target="_blank"
                                                                                        href="#"></a>
                                                                                </li>
                                                                                <li>
                                                                                    <a class="icon icon-8800"
                                                                                        target="_blank"
                                                                                        href="#"></a>
                                                                                </li>
                                                                                <li>
                                                                                    <a class="icon icon-733614"
                                                                                        target="_blank"
                                                                                        href="#"></a>
                                                                                </li>
                                                                            </ul>
                                                                        </div>
                                                                        <div class="card01__wrapper">
                                                                            <h6 class="card01__title"><a
                                                                                    href="#">Robert Kennelly</a>
                                                                            </h6>
                                                                            <div class="card01__description">Certified
                                                                                Technician</div>
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
                        <section
                            class="elementor-section elementor-top-section elementor-element elementor-element-a558aa9 elementor-section-stretched elementor-section-full_width elementor-section-height-default elementor-section-height-default"
                            data-id="a558aa9" data-element_type="section"
                            data-settings="{&quot;stretch_section&quot;:&quot;section-stretched&quot;}">
                            <div class="elementor-container elementor-column-gap-default">
                                <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-fd9851e"
                                    data-id="fd9851e" data-element_type="column">
                                    <div class="elementor-widget-wrap elementor-element-populated">
                                        <div class="elementor-element elementor-element-3ee1e0c elementor-widget elementor-widget-service_gallery"
                                            data-id="3ee1e0c" data-element_type="widget"
                                            data-settings="{&quot;slides_to_show&quot;:4,&quot;slides_to_scroll&quot;:1,&quot;autoplay_speed&quot;:4000}"
                                            data-widget_type="service_gallery.default">
                                            <div class="elementor-widget-container">

                                                <div class="block">
                                                    <div class="block-title">
                                                        <h2 class="block-title__title">Our Service <span
                                                                class="color">Gallery</span></h2>
                                                        <div class="block-title__description">
                                                            These photos will help you learn more about our car service
                                                            and services provided </div>
                                                    </div>
                                                    <div class="js-slick-init service-gallery-carousel slick-style01"
                                                        data-slick='{
				                                                        "slidesToShow": 4,
				                                                        "slidesToScroll": 1,
				                                                        "dots": true,
				                                                        "arrows": false,
				                                                        "autoplay": true,
				                                                        "autoplaySpeed": 4000,
				                                                        "responsive":[{"breakpoint": 992,"settings":{"slidesToShow": 3}}, {"breakpoint": 576,"settings":{"slidesToShow": 2}}]}'>

                                                        <div class="item">
                                                            <a href="../wp-content/uploads/sites/5/2020/03/popup-img01-1.jpg"
                                                                class="popup-img">
                                                                <img loading="lazy" loading="lazy" decoding="async"
                                                                    width="384" height="384"
                                                                    src="../wp-content/uploads/sites/5/2020/03/popup-img01-1.jpg"
                                                                    class="attachment-full size-full" alt=""
                                                                    srcset="https://smartdata.tonytemplates.com/car-repair-service-v4/car1/wp-content/uploads/sites/5/2020/03/popup-img01-1.jpg 384w, https://smartdata.tonytemplates.com/car-repair-service-v4/car1/wp-content/uploads/sites/5/2020/03/popup-img01-1-300x300.jpg 300w, https://smartdata.tonytemplates.com/car-repair-service-v4/car1/wp-content/uploads/sites/5/2020/03/popup-img01-1-150x150.jpg 150w, https://smartdata.tonytemplates.com/car-repair-service-v4/car1/wp-content/uploads/sites/5/2020/03/popup-img01-1-370x370.jpg 370w, https://smartdata.tonytemplates.com/car-repair-service-v4/car1/wp-content/uploads/sites/5/2020/03/popup-img01-1-178x179.jpg 178w, https://smartdata.tonytemplates.com/car-repair-service-v4/car1/wp-content/uploads/sites/5/2020/03/popup-img01-1-63x63.jpg 63w, https://smartdata.tonytemplates.com/car-repair-service-v4/car1/wp-content/uploads/sites/5/2020/03/popup-img01-1-100x100.jpg 100w"
                                                                    sizes="(max-width: 384px) 100vw, 384px" /> </a>
                                                        </div>

                                                        <div class="item">
                                                            <a href="../wp-content/uploads/sites/5/2020/04/popup-img02.jpg"
                                                                class="popup-img">
                                                                <img loading="lazy" loading="lazy" decoding="async"
                                                                    width="384" height="384"
                                                                    src="../wp-content/uploads/sites/5/2020/04/popup-img02.jpg"
                                                                    class="attachment-full size-full" alt=""
                                                                    srcset="https://smartdata.tonytemplates.com/car-repair-service-v4/car1/wp-content/uploads/sites/5/2020/04/popup-img02.jpg 384w, https://smartdata.tonytemplates.com/car-repair-service-v4/car1/wp-content/uploads/sites/5/2020/04/popup-img02-300x300.jpg 300w, https://smartdata.tonytemplates.com/car-repair-service-v4/car1/wp-content/uploads/sites/5/2020/04/popup-img02-150x150.jpg 150w, https://smartdata.tonytemplates.com/car-repair-service-v4/car1/wp-content/uploads/sites/5/2020/04/popup-img02-370x370.jpg 370w, https://smartdata.tonytemplates.com/car-repair-service-v4/car1/wp-content/uploads/sites/5/2020/04/popup-img02-178x179.jpg 178w, https://smartdata.tonytemplates.com/car-repair-service-v4/car1/wp-content/uploads/sites/5/2020/04/popup-img02-63x63.jpg 63w, https://smartdata.tonytemplates.com/car-repair-service-v4/car1/wp-content/uploads/sites/5/2020/04/popup-img02-100x100.jpg 100w"
                                                                    sizes="(max-width: 384px) 100vw, 384px" /> </a>
                                                        </div>

                                                        <div class="item">
                                                            <a href="../wp-content/uploads/sites/5/2020/04/popup-img03.jpg"
                                                                class="popup-img">
                                                                <img loading="lazy" loading="lazy" decoding="async"
                                                                    width="384" height="384"
                                                                    src="../wp-content/uploads/sites/5/2020/04/popup-img03.jpg"
                                                                    class="attachment-full size-full" alt=""
                                                                    srcset="https://smartdata.tonytemplates.com/car-repair-service-v4/car1/wp-content/uploads/sites/5/2020/04/popup-img03.jpg 384w, https://smartdata.tonytemplates.com/car-repair-service-v4/car1/wp-content/uploads/sites/5/2020/04/popup-img03-300x300.jpg 300w, https://smartdata.tonytemplates.com/car-repair-service-v4/car1/wp-content/uploads/sites/5/2020/04/popup-img03-150x150.jpg 150w, https://smartdata.tonytemplates.com/car-repair-service-v4/car1/wp-content/uploads/sites/5/2020/04/popup-img03-370x370.jpg 370w, https://smartdata.tonytemplates.com/car-repair-service-v4/car1/wp-content/uploads/sites/5/2020/04/popup-img03-178x179.jpg 178w, https://smartdata.tonytemplates.com/car-repair-service-v4/car1/wp-content/uploads/sites/5/2020/04/popup-img03-63x63.jpg 63w, https://smartdata.tonytemplates.com/car-repair-service-v4/car1/wp-content/uploads/sites/5/2020/04/popup-img03-100x100.jpg 100w"
                                                                    sizes="(max-width: 384px) 100vw, 384px" /> </a>
                                                        </div>

                                                        <div class="item">
                                                            <a href="../wp-content/uploads/sites/5/2020/04/popup-img04.jpg"
                                                                class="popup-img">
                                                                <img loading="lazy" loading="lazy" decoding="async"
                                                                    width="384" height="384"
                                                                    src="../wp-content/uploads/sites/5/2020/04/popup-img04.jpg"
                                                                    class="attachment-full size-full" alt=""
                                                                    srcset="https://smartdata.tonytemplates.com/car-repair-service-v4/car1/wp-content/uploads/sites/5/2020/04/popup-img04.jpg 384w, https://smartdata.tonytemplates.com/car-repair-service-v4/car1/wp-content/uploads/sites/5/2020/04/popup-img04-300x300.jpg 300w, https://smartdata.tonytemplates.com/car-repair-service-v4/car1/wp-content/uploads/sites/5/2020/04/popup-img04-150x150.jpg 150w, https://smartdata.tonytemplates.com/car-repair-service-v4/car1/wp-content/uploads/sites/5/2020/04/popup-img04-370x370.jpg 370w, https://smartdata.tonytemplates.com/car-repair-service-v4/car1/wp-content/uploads/sites/5/2020/04/popup-img04-178x179.jpg 178w, https://smartdata.tonytemplates.com/car-repair-service-v4/car1/wp-content/uploads/sites/5/2020/04/popup-img04-63x63.jpg 63w, https://smartdata.tonytemplates.com/car-repair-service-v4/car1/wp-content/uploads/sites/5/2020/04/popup-img04-100x100.jpg 100w"
                                                                    sizes="(max-width: 384px) 100vw, 384px" /> </a>
                                                        </div>

                                                        <div class="item">
                                                            <a href="../wp-content/uploads/sites/5/2020/04/popup-img05.jpg"
                                                                class="popup-img">
                                                                <img loading="lazy" loading="lazy" decoding="async"
                                                                    width="384" height="384"
                                                                    src="../wp-content/uploads/sites/5/2020/04/popup-img05.jpg"
                                                                    class="attachment-full size-full" alt=""
                                                                    srcset="https://smartdata.tonytemplates.com/car-repair-service-v4/car1/wp-content/uploads/sites/5/2020/04/popup-img05.jpg 384w, https://smartdata.tonytemplates.com/car-repair-service-v4/car1/wp-content/uploads/sites/5/2020/04/popup-img05-300x300.jpg 300w, https://smartdata.tonytemplates.com/car-repair-service-v4/car1/wp-content/uploads/sites/5/2020/04/popup-img05-150x150.jpg 150w, https://smartdata.tonytemplates.com/car-repair-service-v4/car1/wp-content/uploads/sites/5/2020/04/popup-img05-370x370.jpg 370w, https://smartdata.tonytemplates.com/car-repair-service-v4/car1/wp-content/uploads/sites/5/2020/04/popup-img05-178x179.jpg 178w, https://smartdata.tonytemplates.com/car-repair-service-v4/car1/wp-content/uploads/sites/5/2020/04/popup-img05-63x63.jpg 63w, https://smartdata.tonytemplates.com/car-repair-service-v4/car1/wp-content/uploads/sites/5/2020/04/popup-img05-100x100.jpg 100w"
                                                                    sizes="(max-width: 384px) 100vw, 384px" /> </a>
                                                        </div>

                                                        <div class="item">
                                                            <a href="../wp-content/uploads/sites/5/2020/03/popup-img01-1.jpg"
                                                                class="popup-img">
                                                                <img loading="lazy" loading="lazy" decoding="async"
                                                                    width="384" height="384"
                                                                    src="../wp-content/uploads/sites/5/2020/03/popup-img01-1.jpg"
                                                                    class="attachment-full size-full" alt=""
                                                                    srcset="https://smartdata.tonytemplates.com/car-repair-service-v4/car1/wp-content/uploads/sites/5/2020/03/popup-img01-1.jpg 384w, https://smartdata.tonytemplates.com/car-repair-service-v4/car1/wp-content/uploads/sites/5/2020/03/popup-img01-1-300x300.jpg 300w, https://smartdata.tonytemplates.com/car-repair-service-v4/car1/wp-content/uploads/sites/5/2020/03/popup-img01-1-150x150.jpg 150w, https://smartdata.tonytemplates.com/car-repair-service-v4/car1/wp-content/uploads/sites/5/2020/03/popup-img01-1-370x370.jpg 370w, https://smartdata.tonytemplates.com/car-repair-service-v4/car1/wp-content/uploads/sites/5/2020/03/popup-img01-1-178x179.jpg 178w, https://smartdata.tonytemplates.com/car-repair-service-v4/car1/wp-content/uploads/sites/5/2020/03/popup-img01-1-63x63.jpg 63w, https://smartdata.tonytemplates.com/car-repair-service-v4/car1/wp-content/uploads/sites/5/2020/03/popup-img01-1-100x100.jpg 100w"
                                                                    sizes="(max-width: 384px) 100vw, 384px" /> </a>
                                                        </div>

                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </section>
                        <section
                            class="elementor-section elementor-top-section elementor-element elementor-element-334dec0 elementor-section-stretched elementor-section-full_width elementor-section-height-default elementor-section-height-default"
                            data-id="334dec0" data-element_type="section"
                            data-settings="{&quot;stretch_section&quot;:&quot;section-stretched&quot;}">
                            <div class="elementor-container elementor-column-gap-no">
                                <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-5d1a577"
                                    data-id="5d1a577" data-element_type="column">
                                    <div class="elementor-widget-wrap elementor-element-populated">
                                        <div class="elementor-element elementor-element-a37abd9 elementor-widget elementor-widget-appointment_schedule"
                                            data-id="a37abd9" data-element_type="widget"
                                            data-widget_type="appointment_schedule.default">
                                            <div class="elementor-widget-container">
                                                <div class="block position-relative overflow-hidden ">
                                                    <div
                                                        class="section__text-background text-color02 text-center text-background__center">
                                                        Schedule</div>
                                                    <div class="text-center">
                                                        <h2 class="h-lg">Need Help With Your Car? <span
                                                                class="color">We'll fix it</span></h2>
                                                        <p class="info">We specialise in repairing accident damage to
                                                            vehicles. In fact, we're the second largest accident damage
                                                            repair network.</p>
                                                        <h2 class="h-phone">1-800-123-4567</h2>
                                                        <div class="btn-inline">
                                                            <a class="btn btn-border btn-invert btn-wide"
                                                                href="#" data-toggle="modal"
                                                                data-target="#appointmentForm"><span>Appointment</span></a>
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
    <!-- Footer section end -->


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
