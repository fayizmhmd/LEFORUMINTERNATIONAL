<!doctype html>
<html lang="en">



<head>

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <meta name="title" content="LeForum International | Premier Educational Consultancy in Bangalore">


    <meta name="keywords" content="LeForum International, educational consultancy, Bangalore, academic guidance, university admission, study abroad, student counseling, top universities, education consultancy services, higher education, college admission support, career counseling">


    <meta name="description" content="LeForum International offers expert educational consultancy services, guiding students to achieve academic excellence and gain admission to top universities in banglore.">

    <title>Contact Us | Le Forum</title>
    @php
        $path = asset('/');
    @endphp

    <link  rel="shortcut icon" href="{{ $path }}frontstyles/assets/images/le-logo-gold-EMBLEM.png"  type="image/x-icon">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@tabler/icons-webfont@2.36.0/tabler-icons.min.css">

    <link rel="stylesheet" href="{{ $path }}frontstyles/assets/css/style.min.css">
</head>

<body class="n20-bg">

    <!-- start preloader -->
    <div id="preloader">
        <img style="width: 150px;" src="{{ $path }}frontstyles/assets/images/le-logo-gold-EMBLEM.png" alt="img" class="bookicon-preloader">
    </div>
    <!-- end preloader -->

    <!-- Scroll To Top Start-->
    <button class="scrollToTop d-md-flex d-center" aria-label="scroll Bar Button"><i class="mat-icon fas fa-angle-double-up"></i></button>
    <!-- Scroll To Top End -->

    <!-- Start Custom Cursor -->
    <div class="mouse-follower">
        <span class="cursor-outline"></span>
        <span class="cursor-dot"></span>
    </div>
    <!-- End Custom Cursor -->

    <!-- header-section start -->
    <header class="header-section">
        <!-- top header start -->
        <div class="header__topone header__bg">
            <div class="container">
                <div class="top-header d-flex gap-5 align-items-center justify-content-between py-lg-5 py-4">
                    <div class="d-flex gap-lg-10 gap-xl-15 align-items-center">
                        <!-- <a href="index.html" class="nav-brand d-none d-lg-block">
                            <img style="width: 150px;" class="" src="assets/images/le logo black-12.png" alt="logo">
                        </a> -->
                        <div class="category__oneadjust gap-6 d-flex align-items-center">


                        </div>
                    </div>


                </div>
            </div>
        </div>
        <div class="one__header bg1-color">
            <!-- top header end -->
            <div class="container">
                <!-- main header start -->
                <div class="main-navbar one__mainheader">
                    <!-- header-section start -->
                    <nav class="navbar-custom">
                        <div class="d-flex align-items-center justify-content-between">
                            <a href="index.html" class="nav-brand d-block d-lg-none">
                                <img style="width: 200px;" class="d-none d-md-block" src="{{ $path }}frontstyles/assets/images/le logo white-12.png" alt="logo">
                                <img style="width: 200px;" class="d-block d-md-none" src="{{ $path }}frontstyles/assets/images/le logo gold-12.png" alt="logo">
                            </a>
                            <div class="d-flex gap-6">
                                <div class="switch-wrapper-top d-flex d-lg-none"></div>
                                <button class="navbar-toggle-btn d-block d-lg-none" type="button">
                                    <span></span>
                                    <span></span>
                                    <span></span>
                                    <span></span>
                                </button>
                            </div>
                        </div>
                        <div class="navbar-toggle-item cus__scroll">
                            <div class="d-flex gap-5 flex-column flex-lg-row align-items-start align-items-lg-center justify-content-between mt-5 mt-lg-0">
                                 <a href="index.html" class="navbar-brand logo">
                                    <img style="width: 70px;" class="" src="{{ $path }}frontstyles/assets/images/le-logo-gold-EMBLEM.png" alt="logo">
                                </a>
                                <ul class="custom-nav d-lg-flex d-grid gap-4 gap-xl-6">
                                    <li class="menu-item itembg__1 position-relative">
                                        <a href="{{ route("admin.home") }}" class="fw_500 n0-color">Home</a>

                                    </li>

                                    <li class="menu-item itembg__1 position-relative">
                                        <a href="{{ route("front.allcolleges") }}" class="fw_500 n0-color">Colleges</a>

                                    </li>
                                    <li class="menu-item itembg__1 position-relative">
                                        <a href="{{ route("front.viewAboutUs") }}" class="fw_500"> About us</a>
                                    </li>

                                    <li class="menu-item itembg__1 position-relative">
                                        <a href="{{ route("front.viewContactUs") }}" class="fw_500">
                                            Contact Us
                                        </a>
                                    </li>
                                </ul>

                            </div>
                        </div>
                    </nav>
                </div>
                <!-- main header end -->
            </div>
        </div>
    </header>
    <!-- header-section end -->

    <!--contact section-->
    <section class="contact-seection pt-120 pb-120 position-relative">
        <div class="container">
              <div class="row g-6">
                <div class="col-lg-4">
                    <div class="contact-left-bar n0-bg n30-border radius16 p-xxl-8 px-lg-6 p-5">
                        <h4 class="n700-color fw_600 pb-xxl-10 pb-7 mb-xxl-10 mb-7 bb-n40dash">
                            Need more help?
                        </h4>
                        <div class="need-box mb-xxl-6 mb-5 d-flex align-items-center gap-xxl-8 gap-xl-6 gap-lg-5 gap-3 cus-border border radius16 n20-bg p-xxl-6 p-lg-5 p-md-4 p-3">
                            <span class="icon cmn__icon80 d-center cus-border border radius100 n0-bg">
                                <i class="ti ti-phone fs-four fw_400"></i>
                            </span>
                            <div class="cont">
                                <span class="fz20 fw_600 n700-color d-block mb-2">
                                    Call Now
                                </span>
                                <a href="{{ $phone_number }}" class="n700-color">
                                    +974 33651797
                                    <!-- <span class="d-block">
                                        (252) 555-0126
                                    </span> -->
                                </a>
                            </div>
                        </div>

                       <div class="need-box mb-xxl-6 mb-5 d-flex align-items-center gap-xxl-8 gap-xl-6 gap-lg-5 gap-3 cus-border border radius16    n20-bg p-xxl-6 p-lg-5 p-md-4 p-3">
                                    <span class="icon cmn__icon80 d-center cus-border border radius100 n0-bg">
                                        <i class="ti ti-mail-opened fs-four fw_400"></i>
                                    </span>
                                    <div class="cont">
                                        <span class="fz20 fw_600 n700-color d-block mb-2">
                                            Email Address
                                        </span>
                                        <a style="font-size: 13.5px;" href="{{ $mail_id }}" class="n700-color">
                                            info@leforuminternational.com
                                        </a>
                                    </div>
                                </div>




                    </div>
                </div>
                <div class="col-lg-8">
                    <div class="contact-right n0-bg n30-border radius16 p-xxl-8 px-lg-6 p-5">
                        <h4 class="n700-color fw_600 pb-xxl-10 pb-7 mb-xxl-10 mb-7 bb-n40dash">
                            Get in touch with us.
                        </h4>
                        <form action="{{ route('front.contactmail') }}" class="writere-v1" method="POST">
                            @csrf
                            <div class="row g-4">
                                <div class="col-lg-6 col-md-6 col-sm-6">
                                    <div class="form-cmn">
                                        <label for="names" class="fs-six fw_500 n700-color mb-xxl-3 mb-2">Name</label>
                                        <input type="text" placeholder="Enter Your Name..." id="name" name="name" class="n20-bg">
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-6">
                                    <div class="form-cmn">
                                        <label for="em" class="fs-six fw_500 n700-color mb-xxl-3 mb-2">Email</label>
                                        <input type="email" placeholder="Enter Your Email..." id="email" name="email" class="n20-bg">
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-6">
                                    <div class="form-cmn">
                                        <label for="numbewr" class="fs-six fw_500 n700-color mb-xxl-3 mb-2">Phone</label>
                                        <input type="number" placeholder="Enter Your Number..." id="phone" name="phone" class="n20-bg">
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <div class="form-cmn mb-xxl-4 mb-3">
                                        <label for="rev" class="fs-six fw_500 n700-color mb-xxl-3 mb-2">Message</label>
                                        <textarea name="subject" id="subject" rows="4" placeholder="Enter Your Message..." class="n20-bg"></textarea>
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <button type="submit" class="cmn-btn fw_600 justify-content-center d-flex align-items-center gap-2 py-3 px-xl-6 px-5 n700-color">
                                        <span>
                                            Send Message
                                        </span>
                                        <i class="ti ti-arrow-up-right fs-six"></i>
                                    </button>
                                </div>
                            </div>
                        </form>

                    </div>
                </div>
              </div>
        </div>
        <img src="{{ $path }}frontstyles/assets/images/vectors/light.png" alt="img" class="light-bulp">
    </section>
    <!--contact section-->

    <!--map section-->
    <section class="map-section overflow-visible">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d497698.7749192471!2d77.3012632998092!3d12.954459536254081!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3bae1670c9b44e6d%3A0xf8dfc3e8517e4fe0!2sBengaluru%2C%20Karnataka!5e0!3m2!1sen!2sin!4v1716377521700!5m2!1sen!2sin" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
    </section>
    @include('frontend.layouts.footer')
