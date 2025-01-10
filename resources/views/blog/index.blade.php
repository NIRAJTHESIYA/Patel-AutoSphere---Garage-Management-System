@include('Includes.blog')


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
    class="blog wp-embed-responsive layout-1 theme-car-repair-services woocommerce-no-js hfeed elementor-default elementor-kit-2482">


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
    <div id="pageTitle" class="">
        <div class="container">
            <h1>Blog Posts</h1>
            <div class="breadcrumbs">
                <div class="breadcrumb">
                    <div class="breadcrumbs">
                        <div class="breadcrumb">
                            <span><span><a href="{{ route('Home') }}">Home</a></span> / <span
                                    class="breadcrumb_last" aria-current="page">Blog Posts</span></span>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
    <!-- Main title end-->


    <!-- Main Content Start-->
    <div id="pageContent">
        <div class="container">
            <div class="row">
                <div class="col-md-7 col-lg-8 column-center">

                    <div class="blog-post">
                        <div class="post-image">
                            <a href="../troubleshooting-anti-lock-brakes/index.html">
                                <img fetchpriority="high" fetchpriority="high" width="770" height="478"
                                    src="../wp-content/uploads/sites/5/2017/04/blog-post-img-01.jpg"
                                    class="attachment-post-thumbnail size-post-thumbnail wp-post-image" alt=""
                                    decoding="async"
                                    srcset="https://smartdata.tonytemplates.com/car-repair-service-v4/car1/wp-content/uploads/sites/5/2017/04/blog-post-img-01.jpg 770w, https://smartdata.tonytemplates.com/car-repair-service-v4/car1/wp-content/uploads/sites/5/2017/04/blog-post-img-01-300x186.jpg 300w, https://smartdata.tonytemplates.com/car-repair-service-v4/car1/wp-content/uploads/sites/5/2017/04/blog-post-img-01-768x477.jpg 768w, https://smartdata.tonytemplates.com/car-repair-service-v4/car1/wp-content/uploads/sites/5/2017/04/blog-post-img-01-600x372.jpg 600w"
                                    sizes="(max-width: 770px) 100vw, 770px" /> </a>
                        </div>
                        <ul class="post-meta">
                            <li class="author"><span class="author__img"><img alt=''
                                        src='https://secure.gravatar.com/avatar/f4ff641779aed807bf6d8927c255668f?s=63&amp;d=mm&amp;r=g'
                                        class='avatar avatar-63 photo' height='63' width='63' /></span><span
                                    class="author__text">admin</span></li>
                            <li><span class="posted-on"><time class="entry-date published"
                                        datetime="2017-04-19T11:21:47+00:00">April 19, 2017</time><time
                                        class="updated" datetime="2020-06-14T13:48:03+00:00">June 14,
                                        2020</time></span></li>
                            <li><span>3</span> comments</li>
                        </ul>
                        <h2 class="post-title"><a
                                href="../troubleshooting-anti-lock-brakes/index.html">Troubleshooting
                                Anti-Lock Brakes</a></h2>
                        <div class="post-teaser">
                            <p>The brakes on your vehicle work hard every time you drive. When you slow down in traffic,
                                stop at a red light, or must maneuver a quick hard stop because of an obstruction in the
                                road your brakes are at work. Over time the use of your brakes causes normal wear and
                                tear, which can [&hellip;]</p>
                        </div>
                        <a href="../troubleshooting-anti-lock-brakes/index.html"
                            class="btn btn-border btn-invert"><span>Read More</span></a>
                    </div>
                    <div class="blog-post">

                        <div class="post-image">
                        </div>
                        <ul class="post-meta">
                            <li class="author"><span class="author__img"><img alt=''
                                        src='https://secure.gravatar.com/avatar/f4ff641779aed807bf6d8927c255668f?s=63&amp;d=mm&amp;r=g'
                                        class='avatar avatar-63 photo' height='63' width='63' /></span><span
                                    class="author__text">admin</span></li>
                            <li><span class="posted-on"><time class="entry-date published updated"
                                        datetime="2017-04-08T09:26:42+00:00">April 8, 2017</time></span></li>
                            <li><span>2</span> comments</li>
                        </ul>
                        <h2 class="post-title"><a
                                href="../abs-has-become-pretty-much-standard-equipment-on-most-vehicles/index.html">ABS
                                has become pretty much standard equipment on most vehicles</a></h2>
                        <div class="post-teaser">
                            <p>This process repeats many times per second until the vehicle stops or you lift your foot
                                off the brake pedal. The ABS computer does a power-on self test every time you cycle the
                                ignition.</p>
                        </div>
                        <a href="../abs-has-become-pretty-much-standard-equipment-on-most-vehicles/index.html"
                            class="btn btn-border btn-invert"><span>Read More</span></a>
                    </div>
                    <div class="blog-post">

                        <div class="post-image">
                            <a href="../car-power-self-test-every-time-cycle-ignition/index.html"></a>
                            <div class="quote">
                            </div>
                            </a>
                        </div>
                        <ul class="post-meta">
                            <li class="author"><span class="author__img"><img alt=''
                                        src='https://secure.gravatar.com/avatar/f4ff641779aed807bf6d8927c255668f?s=63&amp;d=mm&amp;r=g'
                                        class='avatar avatar-63 photo' height='63' width='63' /></span><span
                                    class="author__text">admin</span></li>
                            <li><span class="posted-on"><time class="entry-date published updated"
                                        datetime="2017-04-07T09:55:18+00:00">April 7, 2017</time></span></li>
                            <li><span>0</span> comments</li>
                        </ul>
                        <h2 class="post-title"><a
                                href="../car-power-self-test-every-time-cycle-ignition/index.html">How
                                to Diagnose Car Problems If You Don&#8217;t Know Much About Cars</a></h2>
                        <div class="post-teaser">
                            <p>If something goes wrong with your car and you don&#8217;t know much about car repair,
                                then it&#8217;s time to go to the shop and find out what&#8217;s wrong. However, lots of
                                people are understandably worried about getting ripped off—mechanics are pretty good at
                                detecting when a customer doesn&#8217;t know anything about cars. To avoid this,
                                [&hellip;]</p>
                        </div>
                        <a href="../car-power-self-test-every-time-cycle-ignition/index.html"
                            class="btn btn-border btn-invert"><span>Read More</span></a>
                    </div>
                    <div class="blog-post">
                        <div class="post-image">
                            <a href="../whats-wrong-cars-heater/index.html">
                                <img width="870" height="483"
                                    src="../wp-content/uploads/sites/5/2017/03/blog-post-img-2-3.jpg"
                                    class="attachment-post-thumbnail size-post-thumbnail wp-post-image" alt=""
                                    decoding="async"
                                    srcset="https://smartdata.tonytemplates.com/car-repair-service-v4/car1/wp-content/uploads/sites/5/2017/03/blog-post-img-2-3.jpg 870w, https://smartdata.tonytemplates.com/car-repair-service-v4/car1/wp-content/uploads/sites/5/2017/03/blog-post-img-2-3-300x167.jpg 300w, https://smartdata.tonytemplates.com/car-repair-service-v4/car1/wp-content/uploads/sites/5/2017/03/blog-post-img-2-3-768x426.jpg 768w, https://smartdata.tonytemplates.com/car-repair-service-v4/car1/wp-content/uploads/sites/5/2017/03/blog-post-img-2-3-600x333.jpg 600w"
                                    sizes="(max-width: 870px) 100vw, 870px" /> </a>
                        </div>
                        <ul class="post-meta">
                            <li class="author"><span class="author__img"><img alt=''
                                        src='https://secure.gravatar.com/avatar/f4ff641779aed807bf6d8927c255668f?s=63&amp;d=mm&amp;r=g'
                                        class='avatar avatar-63 photo' height='63' width='63' /></span><span
                                    class="author__text">admin</span></li>
                            <li><span class="posted-on"><time class="entry-date published updated"
                                        datetime="2017-04-06T11:35:43+00:00">April 6, 2017</time></span></li>
                            <li><span>2</span> comments</li>
                        </ul>
                        <h2 class="post-title"><a href="../whats-wrong-cars-heater/index.html">What&#8217;s Wrong With
                                My Car&#8217;s Heater?</a></h2>
                        <div class="post-teaser">
                            <p>Colder days are on their way, so it&#8217;s time to make sure your car&#8217;s heater is
                                pumping out all the hot air you need. Here&#8217;s what to do if&#8230;</p>
                        </div>
                        <a href="../whats-wrong-cars-heater/index.html" class="btn btn-border btn-invert"><span>Read
                                More</span></a>
                    </div>
                    <div class="blog-post">

                        <div class="post-image">
                            <div class="post-music">
                            </div>
                        </div>
                        <ul class="post-meta">
                            <li class="author"><span class="author__img"><img alt=''
                                        src='https://secure.gravatar.com/avatar/f4ff641779aed807bf6d8927c255668f?s=63&amp;d=mm&amp;r=g'
                                        class='avatar avatar-63 photo' height='63' width='63' /></span><span
                                    class="author__text">admin</span></li>
                            <li><span class="posted-on"><time class="entry-date published updated"
                                        datetime="2017-04-05T09:28:28+00:00">April 5, 2017</time></span></li>
                            <li><span>2</span> comments</li>
                        </ul>
                        <h2 class="post-title"><a
                                href="../brakes-have-overpowered-the-available-traction/index.html">5
                                Genius Car Accessories You Should Never Drive Without</a></h2>
                        <div class="post-teaser">
                            <p>You don&#8217;t need to spend a fortune on aftermarket installations to upgrade your
                                car&#8217;s amenities. We&#8217;ve rounded up the best deals on gear for a safer,
                                smarter, and cleaner commute.</p>
                        </div>
                        <a href="../brakes-have-overpowered-the-available-traction/index.html"
                            class="btn btn-border btn-invert"><span>Read More</span></a>
                    </div>
                    <div class="blog-post">

                        <div class="post-image">
                            <a href="../become-pretty-much-standard-equipment-on-most-vehicles-2/index.html"><img
                                    width="870" height="483"
                                    src="../wp-content/uploads/sites/5/2017/03/blog-post-img-3-1.jpg"
                                    class="attachment-post-thumbnail size-post-thumbnail wp-post-image" alt=""
                                    decoding="async"
                                    srcset="https://smartdata.tonytemplates.com/car-repair-service-v4/car1/wp-content/uploads/sites/5/2017/03/blog-post-img-3-1.jpg 870w, https://smartdata.tonytemplates.com/car-repair-service-v4/car1/wp-content/uploads/sites/5/2017/03/blog-post-img-3-1-300x167.jpg 300w, https://smartdata.tonytemplates.com/car-repair-service-v4/car1/wp-content/uploads/sites/5/2017/03/blog-post-img-3-1-768x426.jpg 768w, https://smartdata.tonytemplates.com/car-repair-service-v4/car1/wp-content/uploads/sites/5/2017/03/blog-post-img-3-1-600x333.jpg 600w"
                                    sizes="(max-width: 870px) 100vw, 870px" /></a>
                            <div class="post-link-wrapper">
                                <div class="vert-wrapper">
                                    <div class="vert"> <a href="http://www.carserviceslink.com/"
                                            class="post-link">http://www.carserviceslink.com</a> </div>
                                </div>
                            </div>
                        </div>
                        <ul class="post-meta">
                            <li class="author"><span class="author__img"><img alt=''
                                        src='https://secure.gravatar.com/avatar/f4ff641779aed807bf6d8927c255668f?s=63&amp;d=mm&amp;r=g'
                                        class='avatar avatar-63 photo' height='63' width='63' /></span><span
                                    class="author__text">admin</span></li>
                            <li><span class="posted-on"><time class="entry-date published updated"
                                        datetime="2016-04-08T07:12:10+00:00">April 8, 2016</time></span></li>
                            <li><span>2</span> comments</li>
                        </ul>
                        <h2 class="post-title"><a
                                href="../become-pretty-much-standard-equipment-on-most-vehicles-2/index.html">Make Your
                                Headlights Shine Like New</a></h2>
                        <div class="post-teaser">
                            <p>Over time, the plastic that makes up your headlights will degrade and cloud over. If
                                yours aren&#8217;t shining quite like they used to, here&#8217;s how to clean your
                                headlights.Over the river and through the woods was more dangerous back when cars had
                                crummy bias-ply tires, rear-wheel</p>
                        </div>
                        <a href="../become-pretty-much-standard-equipment-on-most-vehicles-2/index.html"
                            class="btn btn-border btn-invert"><span>Read More</span></a>
                    </div>
                    <div class="blog-post">
                        <div class="post-image content-gallery">
                            <div class="post-carousel">
                                <a href="../wp-content/uploads/sites/5/2017/03/blog-post-img-1-1.jpg">
                                    <img width="870" height="483"
                                        src="../wp-content/uploads/sites/5/2017/03/blog-post-img-1-1.jpg"
                                        class="attachment-post-thumbnail size-post-thumbnail" alt=""
                                        decoding="async"
                                        srcset="https://smartdata.tonytemplates.com/car-repair-service-v4/car1/wp-content/uploads/sites/5/2017/03/blog-post-img-1-1.jpg 870w, https://smartdata.tonytemplates.com/car-repair-service-v4/car1/wp-content/uploads/sites/5/2017/03/blog-post-img-1-1-300x167.jpg 300w, https://smartdata.tonytemplates.com/car-repair-service-v4/car1/wp-content/uploads/sites/5/2017/03/blog-post-img-1-1-768x426.jpg 768w, https://smartdata.tonytemplates.com/car-repair-service-v4/car1/wp-content/uploads/sites/5/2017/03/blog-post-img-1-1-600x333.jpg 600w"
                                        sizes="(max-width: 870px) 100vw, 870px" /> </a>
                            </div>
                        </div>
                        <ul class="post-meta">
                            <li class="author"><span class="author__img"><img alt=''
                                        src='https://secure.gravatar.com/avatar/f4ff641779aed807bf6d8927c255668f?s=63&amp;d=mm&amp;r=g'
                                        class='avatar avatar-63 photo' height='63' width='63' /></span><span
                                    class="author__text">admin</span></li>
                            <li><span class="posted-on"><time class="entry-date published updated"
                                        datetime="2016-04-08T07:05:08+00:00">April 8, 2016</time></span></li>
                            <li><span>2</span> comments</li>
                        </ul>
                        <h2 class="post-title"><a
                                href="../blow-straight-past-it-with-the-wheels-skidding/index.html">blow straight past
                                it with the wheels skidding</a></h2>
                        <div class="post-teaser">
                            <p>Over the river and through the woods was more dangerous back when cars had crummy
                                bias-ply tires, rear-wheel drive and ordinary brakes. So, tonight you feel confident
                                driving home through several inches of freshly fallen snow after a sumptuous holiday
                                dinner.</p>
                        </div>
                        <a href="../blow-straight-past-it-with-the-wheels-skidding/index.html"
                            class="btn btn-border btn-invert"><span>Read More</span></a>
                    </div>
                    <div class="blog-post">
                        <div class="post-image">
                            <a href="../483-2/index.html">
                                <img width="870" height="483"
                                    src="../wp-content/uploads/sites/5/2017/03/blog-post-img-3-1.jpg"
                                    class="attachment-post-thumbnail size-post-thumbnail wp-post-image" alt=""
                                    decoding="async"
                                    srcset="https://smartdata.tonytemplates.com/car-repair-service-v4/car1/wp-content/uploads/sites/5/2017/03/blog-post-img-3-1.jpg 870w, https://smartdata.tonytemplates.com/car-repair-service-v4/car1/wp-content/uploads/sites/5/2017/03/blog-post-img-3-1-300x167.jpg 300w, https://smartdata.tonytemplates.com/car-repair-service-v4/car1/wp-content/uploads/sites/5/2017/03/blog-post-img-3-1-768x426.jpg 768w, https://smartdata.tonytemplates.com/car-repair-service-v4/car1/wp-content/uploads/sites/5/2017/03/blog-post-img-3-1-600x333.jpg 600w"
                                    sizes="(max-width: 870px) 100vw, 870px" /> </a>
                        </div>
                        <ul class="post-meta">
                            <li class="author"><span class="author__img"><img alt=''
                                        src='https://secure.gravatar.com/avatar/f4ff641779aed807bf6d8927c255668f?s=63&amp;d=mm&amp;r=g'
                                        class='avatar avatar-63 photo' height='63' width='63' /></span><span
                                    class="author__text">admin</span></li>
                            <li><span class="posted-on"><time class="entry-date published updated"
                                        datetime="2016-04-06T09:17:12+00:00">April 6, 2016</time></span></li>
                            <li><span>2</span> comments</li>
                        </ul>
                        <h2 class="post-title"><a href="../483-2/index.html">Over the river and through the woods was
                                mor</a></h2>
                        <div class="post-teaser">
                            <p>Over the river and through the woods was more dangerous back when cars had crummy
                                bias-ply tires, rear-wheel drive and ordinary brakes.</p>
                        </div>
                        <a href="../483-2/index.html" class="btn btn-border btn-invert"><span>Read More</span></a>
                    </div>
                    <div class="blog-post">
                        <div class="post-image">
                            <a href="../this-process-repeats-many-times-per-second-until/index.html">
                                <img width="870" height="483"
                                    src="../wp-content/uploads/sites/5/2017/03/blog-post-img-3-1.jpg"
                                    class="attachment-post-thumbnail size-post-thumbnail wp-post-image" alt=""
                                    decoding="async"
                                    srcset="https://smartdata.tonytemplates.com/car-repair-service-v4/car1/wp-content/uploads/sites/5/2017/03/blog-post-img-3-1.jpg 870w, https://smartdata.tonytemplates.com/car-repair-service-v4/car1/wp-content/uploads/sites/5/2017/03/blog-post-img-3-1-300x167.jpg 300w, https://smartdata.tonytemplates.com/car-repair-service-v4/car1/wp-content/uploads/sites/5/2017/03/blog-post-img-3-1-768x426.jpg 768w, https://smartdata.tonytemplates.com/car-repair-service-v4/car1/wp-content/uploads/sites/5/2017/03/blog-post-img-3-1-600x333.jpg 600w"
                                    sizes="(max-width: 870px) 100vw, 870px" /> </a>
                        </div>
                        <ul class="post-meta">
                            <li class="author"><span class="author__img"><img alt=''
                                        src='https://secure.gravatar.com/avatar/f4ff641779aed807bf6d8927c255668f?s=63&amp;d=mm&amp;r=g'
                                        class='avatar avatar-63 photo' height='63' width='63' /></span><span
                                    class="author__text">admin</span></li>
                            <li><span class="posted-on"><time class="entry-date published updated"
                                        datetime="2016-04-06T09:13:58+00:00">April 6, 2016</time></span></li>
                            <li><span>2</span> comments</li>
                        </ul>
                        <h2 class="post-title"><a
                                href="../this-process-repeats-many-times-per-second-until/index.html">This process
                                repeats many times per second until</a></h2>
                        <div class="post-teaser">
                            <p>Over the river and through the woods was more dangerous back when cars had crummy
                                bias-ply tires, rear-wheel drive and ordinary brakes.</p>
                        </div>
                        <a href="../this-process-repeats-many-times-per-second-until/index.html"
                            class="btn btn-border btn-invert"><span>Read More</span></a>
                    </div>

                </div>
                <div class="col-md-5 col-lg-4 column-right">
                    <div class="column-wrapper-right">
                        <div class="widget_search side-block widget" id="search-3">
                            <h3>Search</h3>
                            <div class="side-search">
                                <form class="form-default" role="search" method="get"
                                    action="https://smartdata.tonytemplates.com/car-repair-service-v4/car1/">
                                    <div class="form-group">
                                        <input type="search" id="search-form-66cb5257bf009" class="form-control"
                                            placeholder="Search &hellip;" value="" name="s" />
                                        <button type="submit" class="btn-custom"><i
                                                class="icon icon-search"></i></button>
                                    </div>
                                </form>
                            </div>
                        </div>
                        <div class="widget_categories side-block widget" id="categories-3">
                            <h3>Categories</h3>
                            <ul>
                                <li class="cat-item cat-item-16"><a href="../category/audios/index.html">Audios</a>
                                    (9)
                                </li>
                                <li class="cat-item cat-item-17"><a
                                        href="../category/daily-inspiration/index.html">Daily Inspiration</a> (9)
                                </li>
                                <li class="cat-item cat-item-18"><a
                                        href="../category/freelance/index.html">Freelance</a> (2)
                                </li>
                                <li class="cat-item cat-item-19"><a href="../category/links/index.html">Links</a> (1)
                                </li>
                                <li class="cat-item cat-item-20"><a href="../category/mobile/index.html">Mobile</a>
                                    (1)
                                </li>
                                <li class="cat-item cat-item-21"><a
                                        href="../category/photography/index.html">Photography</a> (2)
                                </li>
                                <li class="cat-item cat-item-22"><a href="../category/quotes/index.html">Quotes</a>
                                    (2)
                                </li>
                                <li class="cat-item cat-item-23"><a
                                        href="../category/resources/index.html">Resources</a> (3)
                                </li>
                                <li class="cat-item cat-item-24"><a href="../category/status/index.html">Status</a>
                                    (2)
                                </li>
                                <li class="cat-item cat-item-1"><a
                                        href="../category/uncategorized/index.html">Uncategorized</a> (1)
                                </li>
                            </ul>

                        </div>
                        <div class="widget_calendar side-block widget" id="calendar-1">
                            <h3>Archives</h3>
                            <div id="calendar_wrap" class="calendar_wrap">
                                <table id="wp-calendar" class="wp-calendar-table">
                                    <caption>August 2024</caption>
                                    <thead>
                                        <tr>
                                            <th scope="col" title="Monday">M</th>
                                            <th scope="col" title="Tuesday">T</th>
                                            <th scope="col" title="Wednesday">W</th>
                                            <th scope="col" title="Thursday">T</th>
                                            <th scope="col" title="Friday">F</th>
                                            <th scope="col" title="Saturday">S</th>
                                            <th scope="col" title="Sunday">S</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td colspan="3" class="pad">&nbsp;</td>
                                            <td>1</td>
                                            <td>2</td>
                                            <td>3</td>
                                            <td>4</td>
                                        </tr>
                                        <tr>
                                            <td>5</td>
                                            <td>6</td>
                                            <td>7</td>
                                            <td>8</td>
                                            <td>9</td>
                                            <td>10</td>
                                            <td>11</td>
                                        </tr>
                                        <tr>
                                            <td>12</td>
                                            <td>13</td>
                                            <td>14</td>
                                            <td>15</td>
                                            <td>16</td>
                                            <td>17</td>
                                            <td>18</td>
                                        </tr>
                                        <tr>
                                            <td>19</td>
                                            <td>20</td>
                                            <td>21</td>
                                            <td>22</td>
                                            <td>23</td>
                                            <td>24</td>
                                            <td id="today">25</td>
                                        </tr>
                                        <tr>
                                            <td>26</td>
                                            <td>27</td>
                                            <td>28</td>
                                            <td>29</td>
                                            <td>30</td>
                                            <td>31</td>
                                            <td class="pad" colspan="1">&nbsp;</td>
                                        </tr>
                                    </tbody>
                                </table>
                                <nav aria-label="Previous and next months" class="wp-calendar-nav">
                                    <span class="wp-calendar-nav-prev"><a href="../2017/04/index.html">&laquo;
                                            Apr</a></span>
                                    <span class="pad">&nbsp;</span>
                                    <span class="wp-calendar-nav-next">&nbsp;</span>
                                </nav>
                            </div>
                        </div>
                        <div class="widget_tag_cloud side-block widget" id="tag_cloud-1">
                            <h3>Tags</h3>
                            <div class="tagcloud"><a href="../tag/auto/index.html"
                                    class="tag-cloud-link tag-link-25 tag-link-position-1" style="font-size: 16.4pt;"
                                    aria-label="Auto (2 items)">Auto</a>
                                <a href="../tag/auto-body/index.html"
                                    class="tag-cloud-link tag-link-26 tag-link-position-2" style="font-size: 8pt;"
                                    aria-label="Auto Body (1 item)">Auto Body</a>
                                <a href="../tag/brakes/index.html"
                                    class="tag-cloud-link tag-link-27 tag-link-position-3" style="font-size: 8pt;"
                                    aria-label="Brakes (1 item)">Brakes</a>
                                <a href="../tag/car/index.html" class="tag-cloud-link tag-link-28 tag-link-position-4"
                                    style="font-size: 22pt;" aria-label="Car (3 items)">Car</a>
                                <a href="../tag/car-service/index.html"
                                    class="tag-cloud-link tag-link-29 tag-link-position-5" style="font-size: 22pt;"
                                    aria-label="Car Service (3 items)">Car Service</a>
                                <a href="../tag/mechanics/index.html"
                                    class="tag-cloud-link tag-link-30 tag-link-position-6" style="font-size: 8pt;"
                                    aria-label="Mechanics (1 item)">Mechanics</a>
                                <a href="../tag/oil-change/index.html"
                                    class="tag-cloud-link tag-link-31 tag-link-position-7" style="font-size: 8pt;"
                                    aria-label="Oil Change (1 item)">Oil Change</a>
                                <a href="../tag/repair/index.html"
                                    class="tag-cloud-link tag-link-32 tag-link-position-8" style="font-size: 8pt;"
                                    aria-label="Repair (1 item)">Repair</a>
                                <a href="../tag/sound/index.html"
                                    class="tag-cloud-link tag-link-34 tag-link-position-9" style="font-size: 8pt;"
                                    aria-label="Sound (1 item)">Sound</a>
                                <a href="../tag/transmissions/index.html"
                                    class="tag-cloud-link tag-link-35 tag-link-position-10" style="font-size: 8pt;"
                                    aria-label="Transmissions (1 item)">Transmissions</a>
                            </div>
                        </div>
                        <div class="widget_smart_posts_grid side-block widget" id="smart_posts_grid-1">
                            <h3>Resent Posts</h3>
                            <div class="side-post-wrapper">

                                <a href="../troubleshooting-anti-lock-brakes/index.html" class="side-post">
                                    <div class="side-post__img">
                                        <img width="92" height="85"
                                            src="../wp-content/uploads/sites/5/2017/04/blog-post-img-01-92x85.jpg"
                                            class="attachment-car-repair-services-sidebar-post-img size-car-repair-services-sidebar-post-img wp-post-image"
                                            alt="" decoding="async" />
                                    </div>
                                    <div class="side-post__content">
                                        <h6 class="side-post__title">Troubleshooting Anti-Lock Brakes</h6>
                                        <div class="side-post__meta">April 19, 2017</div>
                                    </div>
                                </a>


                                <a href="../abs-has-become-pretty-much-standard-equipment-on-most-vehicles/index.html"
                                    class="side-post">
                                    <div class="side-post__img">
                                        <img width="92" height="85"
                                            src="../wp-content/uploads/sites/5/2017/04/blog-post-img-02-92x85.jpg"
                                            class="attachment-car-repair-services-sidebar-post-img size-car-repair-services-sidebar-post-img wp-post-image"
                                            alt="" decoding="async" />
                                    </div>
                                    <div class="side-post__content">
                                        <h6 class="side-post__title">ABS has become pretty much standard equipment on
                                            most vehicles</h6>
                                        <div class="side-post__meta">April 8, 2017</div>
                                    </div>
                                </a>

                            </div>
                        </div>
                    </div>
                </div>
            </div>


        </div>
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
