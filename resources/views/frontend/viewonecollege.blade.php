<!doctype html>
<html lang="en">



<head>

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <meta name="title" content="LeForum International | Premier Educational Consultancy in Bangalore">


    <meta name="keywords"
        content="LeForum International, educational consultancy, Bangalore, academic guidance, university admission, study abroad, student counseling, top universities, education consultancy services, higher education, college admission support, career counseling">


    <meta name="description"
        content="LeForum International offers expert educational consultancy services, guiding students to achieve academic excellence and gain admission to top universities in banglore.">

    <title>Colleges | Le Forum</title>
    @php
        $path = asset('/');
    @endphp

    <link rel="shortcut icon" href="{{ $path }}frontstyles/assets/images/le-logo-gold-EMBLEM.png"
        type="image/x-icon">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@tabler/icons-webfont@2.36.0/tabler-icons.min.css" />

    <link rel="stylesheet" href="{{ $path }}frontstyles/assets/css/style.min.css">

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>



    <link rel="stylesheet" href="{{ $path }}frontstyles/vendors/slick/slick.css">

    <link rel="stylesheet" type="text/css" href="{{ $path }}frontstyles/path/to/slick.css">

    <link rel="stylesheet" type="text/css" href="{{ $path }}frontstyles/path/to/slick-theme.css">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

    <script src="{{ $path }}frontstyles/path/to/slick.min.js"></script>



</head>

<body>

    {{--
    <div id="preloader">
        <img style="width: 150px;" src="{{ $path }}frontstyles/assets/images/le-logo-gold-EMBLEM.png" alt="img" class="bookicon-preloader">
    </div> --}}



    <button class="scrollToTop d-md-flex d-center" aria-label="scroll Bar Button"><i
            class="mat-icon fas fa-angle-double-up"></i></button>



    <div class="mouse-follower">
        <span class="cursor-outline"></span>
        <span class="cursor-dot"></span>
    </div>



    <div class="global-scale">
        <div class="overall-activeoverlay"></div>
    </div>



    <header class="header-section">

        <div class="header__topone header__bg">
            <div class="container">
                <div class="top-header d-flex gap-5 align-items-center justify-content-between py-lg-5 py-4">
                    <div class="d-flex gap-lg-10 gap-xl-15 align-items-center">

                    </div>

                </div>
            </div>
        </div>
        <div class="one__header bg1-color">

            <div class="container">
                <!-- main header start -->
                <div class="main-navbar one__mainheader">
                    <!-- header-section start -->
                    <nav class="navbar-custom">
                        <div class="d-flex align-items-center justify-content-between">
                            <a href="index.html" class="nav-brand d-block d-lg-none">
                                <img style="width: 100px" class="d-none d-md-block"
                                    src="{{ $path }}frontstyles/assets/images/le-logo-white-12.png"
                                    alt="logo" />
                                <img style="width: 70px" class="d-block d-md-none"
                                    src="{{ $path }}frontstyles/assets/images/le-logo-gold-EMBLEM.png"
                                    alt="logo" />
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
                            <div
                                class="d-flex gap-5 flex-column flex-lg-row align-items-start align-items-lg-center justify-content-between mt-5 mt-lg-0">
                                <a href="index.html" class="navbar-brand logo">
                                    <img style="width: 70px" class=""
                                        src="{{ $path }}frontstyles/assets/images/le-logo-gold-EMBLEM.png"
                                        alt="logo" />
                                </a>
                                <ul class="custom-nav d-lg-flex d-grid gap-4 gap-xl-6">
                                    <li class="menu-item itembg__1 position-relative">
                                        <a href="index.html" class="fw_500 n0-color">Home</a>

                                    </li>

                                    <li class="menu-item itembg__1 position-relative">
                                        <a href="course-profile.html" class="fw_500 n0-color">Colleges</a>


                                    </li>
                                    <li class="menu-item itembg__1 position-relative">
                                        <a href="about.html" class="fw_500 n0-color">About Us</a>
                                    </li>

                                    <li class="menu-item itembg__1 position-relative">
                                        <a href="contact.html" class="fw_500"> Contact Us </a>
                                    </li>
                                </ul>

                            </div>
                        </div>
                    </nav>
                </div>

            </div>
        </div>
    </header>
    <!-- header-section end -->

    <!-- courses details start -->
    <section class="courses-details position-relative cmn__rightclick pt-20 pb-20">

        <div class="container container1600">

            <div class="thumb-courses position-relative">
                <div class="slick-carousel">
                    <img style="height: 450px;" src="{{ $path . json_decode($college->image, true)[0] }}" alt="img"
                        class="w-100 radius32">
                </div>

            </div>






            <div id="wrapper-content" class="wrapper-content pb-0 pt-0">




            </div>


            <div class="container">
                <div class="row g-6">
                    <div class="col-lg-12">
                        <div class="courses-details-left pt-sm-10">
                            <div class="sec__titletwo bb-704 pb-5 mb-5">
                                <span class="two__title n700-color mb-4 mb-xl-5">
                                    {{ $college->name }}
                                </span>
                                <ul class="list-inline store-meta d-flex flex-wrap align-items-center">
                                    <li class="list-inline-item">
                                        <span
                                            style="background-color: rgb(100, 200, 100); color:white; font-size: 10px; padding: 0.5em;"
                                            class="rounded fw_600 py-1 py-xl-2 px-1 px-xl-2">
                                            5.0
                                        </span>
                                        <span class="rating">4 rating</span>
                                    </li>
                                </ul>
                                <p style="margin-top: 20px;" class="fs-seven n700-color">

                                </p>

                                <div class="website-link">
                                    <i class="fas fa-globe"></i>
                                    <a class="webcolor" href="https://mccblr.edu.in/"
                                        target="_blank">https://mccblr.edu.in/</a>
                                </div>

                            </div>
                            <div class="explore__filter frontend-overview">
                                <div class="singletab">
                                    <div
                                        class="explore__tab mb-6 mb-xxl-10 n20-bg radius16 py-xxl-3 py-2 px-xxl-3 px-2">
                                        <ul class="tablinks">
                                            <li class="nav-links active">
                                                <button class="tablink d-flex align-items-center gap-2">
                                                    <i class="ti ti-chart-pie"></i>
                                                    Overview
                                                </button>
                                            </li>

                                            <li class="nav-links">
                                                <button class="tablink d-flex align-items-center gap-2">
                                                    <i class="ti ti-user-question"></i>
                                                    FAQs
                                                </button>
                                            </li>
                                            <li class="nav-links">
                                                <button class="tablink d-flex align-items-center gap-2">
                                                    <i class="ti ti-chart-pie"></i>
                                                    Reviews
                                                </button>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="tabcontents">
                                        <div class="tabitem active">
                                            <div class="frontend-webview">
                                                <div class="text-box mb-xxl-8 mb-7">
                                                    <h5 class="head mb-xxl-4 mb-3">
                                                        Introduction
                                                    </h5>
                                                    <div class="fs-seven">
                                                        <div class="n700-color" style="margin-bottom: 20px;">
                                                            {{ substr(strip_tags($college->description), 0, 20000) }}
                                                        </div>
                                                    </div>
                                                </div>


                                            </div>
                                        </div>



                                        <div class="tabitem">
                                            @foreach ($faqs as $faq)
                                                <div class="tab-faq faq mb-xxl-8 mb-7">
                                                    <div class="accordion-section">
                                                        <div
                                                            class="accordion-single mb-xxl-6 mb-5 cus-border border radius16 n20-bg py-4 px-4 px-xxl-7">
                                                            <h5 class="header-area fs-six">
                                                                <button
                                                                    class="accordion-btn d-flex align-items-center n700-color fs-six fw_500 text-start d-flex position-relative w-100"
                                                                    type="button">
                                                                    {{ $faq->question }}
                                                                </button>
                                                            </h5>
                                                            <div class="content-area">
                                                                <div class="content-body tb-n50dash pt-4 mt-4">
                                                                    <p>
                                                                        {{ $faq->answer }}
                                                                    </p>
                                                                </div>
                                                            </div>
                                                        </div>

                                                    </div>
                                                </div>
                                            @endforeach
                                        </div>
                                        <div class="tabitem">
                                            <div
                                                class="average-review-v1 box-shadow4 py-xxl-10 py-xl-8 py-lg-6 py-5 px-xxl-10 px-xl-8 px-lg-6 px-5 n20-bg radius16">
                                                {{-- <div class="write-reviewbox">
                                                <h5 class="bb-n40dash pb-xxl-8 pb-6 mb-xxl-8 mb-6">
                                                    Average Reviews
                                                </h5>
                                                <div class="ratting-box bb-n40dash pb-xxl-8 pb-6 mb-xxl-8 mb-6 d-grid d-sm-flex align-items-center gap-xxl-10 gap-lg-8 gap-6">
                                                    <div class="cirbox py-6 px-11 text-center s1-bg radius16">
                                                        <h3 class="d-flex justify-content-center align-items-end n700-color mb-2">
                                                            4
                                                            <span class="fs-five">
                                                                /5
                                                            </span>
                                                        </h3>
                                                        <ul class="start d-flex mb-2 justify-content-center align-items-center gap-1">
                                                            <li>
                                                                <i class="ti ti-star-filled fw_400 n700-color"></i>
                                                            </li>
                                                            <li>
                                                                <i class="ti ti-star-filled fw_400 n700-color"></i>
                                                            </li>
                                                            <li>
                                                                <i class="ti ti-star-filled fw_400 n700-color"></i>
                                                            </li>
                                                            <li>
                                                                <i class="ti ti-star-filled fw_400 n700-color"></i>
                                                            </li>
                                                            <li>
                                                                <i class="ti ti-star-half-filled fw_400 n700-color"></i>
                                                            </li>
                                                        </ul>
                                                        <span class="n700-color text-center">
                                                            26 Rating
                                                        </span>
                                                    </div>
                                                    <div class="progress-box w-100">
                                                        <div class="consulting__progresswrap wow fadeInUp" data-wow-duration="1.9s">
                                                            <div class="consulting-progress mb-xl-2 mb-1 d-flex align-items-center gap-xxl-5 gap-3 w-100">
                                                            <span class="conssub d-flex align-items-center gap-1">
                                                                    <i class="ti ti-star-filled s1-color"></i>
                                                                    5
                                                            </span>
                                                                <div class="progress">
                                                                    <div class="progress-bar wow slideInLeft" data-wow-duration=".8s"
                                                                        role="progressbar" style="width: 90%;" aria-valuenow="90" aria-valuemin="0"
                                                                        aria-valuemax="100"></div>
                                                                </div>
                                                                <span class="n500-color">
                                                                    90%
                                                                </span>
                                                            </div>
                                                            <div class="consulting-progress mb-xl-2 mb-1 d-flex align-items-center gap-xxl-5 gap-3 w-100">
                                                                <span class="conssub d-flex align-items-center gap-1">
                                                                    <i class="ti ti-star-filled s1-color"></i>
                                                                    4
                                                                </span>
                                                                <div class="progress">
                                                                    <div class="progress-bar wow slideInLeft" data-wow-duration=".8s"
                                                                        role="progressbar" style="width: 75%;" aria-valuenow="75" aria-valuemin="0"
                                                                        aria-valuemax="100"></div>
                                                                </div>
                                                                <span class="n500-color">
                                                                    75%
                                                                </span>
                                                            </div>
                                                            <div class="consulting-progress mb-xl-2 mb-1 d-flex align-items-center gap-xxl-5 gap-3 w-100">
                                                                <span class="conssub d-flex align-items-center gap-1">
                                                                    <i class="ti ti-star-filled s1-color"></i>
                                                                    3
                                                                </span>
                                                                <div class="progress">
                                                                    <div class="progress-bar wow slideInLeft" data-wow-duration=".8s"
                                                                        role="progressbar" style="width: 67%;" aria-valuenow="67" aria-valuemin="0"
                                                                        aria-valuemax="100"></div>
                                                                </div>
                                                                <span class="n500-color">
                                                                    67%
                                                                </span>
                                                            </div>
                                                            <div class="consulting-progress mb-xl-2 mb-1 d-flex align-items-center gap-xxl-5 gap-3 w-100">
                                                                <span class="conssub d-flex align-items-center gap-1">
                                                                    <i class="ti ti-star-filled s1-color"></i>
                                                                    2
                                                                </span>
                                                                <div class="progress">
                                                                    <div class="progress-bar wow slideInLeft" data-wow-duration=".8s"
                                                                        role="progressbar" style="width: 44%;" aria-valuenow="44" aria-valuemin="0"
                                                                        aria-valuemax="100"></div>
                                                                </div>
                                                                <span class="n500-color">
                                                                    44%
                                                                </span>
                                                            </div>
                                                            <div class="consulting-progress mb-xl-2 mb-1 d-flex align-items-center gap-xxl-5 gap-3 w-100">
                                                                <span class="conssub d-flex align-items-center gap-1">
                                                                    <i class="ti ti-star-filled s1-color"></i>
                                                                    1
                                                                </span>
                                                                <div class="progress">
                                                                    <div class="progress-bar wow slideInLeft" data-wow-duration=".8s"
                                                                        role="progressbar" style="width: 21%;" aria-valuenow="21" aria-valuemin="0"
                                                                        aria-valuemax="100"></div>
                                                                </div>
                                                                <span class="n500-color">
                                                                    21%
                                                                </span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div> --}}
                                                <div
                                                    class="d-flex flex-wrap gap-3 newest__filter align-items-center justify-content-between mb-xxl-10 mb-6">
                                                    <span class="fs20 n700-color fw_600">
                                                        All Reviews
                                                    </span>

                                                </div>
                                                @foreach ($collegereviews as $collegereview)
                                                <div
                                                    class="comments__box radius16 mb-xxl-8 mb-6 cus-border border py-xl-6 py-5 px-xl-6 px-5 n0-bg">
                                                        <div
                                                            class="d-flex fw-400 gap-4 bb-n50dash align-items-center pb-xxl-6 pb-5 mb-5 mb-xxl-6 mb-5">
                                                            <span
                                                                class="n700-color">{{ $collegereview->created_at->format('M d, Y') }}</span>
                                                            <span class="dot-fixed"></span>
                                                            <span
                                                                class="n700-color fw-400">{{ $collegereview->created_at->format('h:i a') }}</span>
                                                        </div>
                                                        <div
                                                            class="bb-n50dash pb-24 mb-24 pb-xxl-6 pb-5 mb-5 mb-xxl-6 mb-5">
                                                            <ul
                                                                class="start d-flex mb-xxl-4 mb-2 align-items-center gap-2">
                                                                <li>
                                                                    <i
                                                                        class="ti ti-star-filled fs-six fw_400 s1-color"></i>
                                                                </li>
                                                                <li>
                                                                    <i
                                                                        class="ti ti-star-filled fs-six fw_400 s1-color"></i>
                                                                </li>
                                                                <li>
                                                                    <i
                                                                        class="ti ti-star-filled fs-six fw_400 s1-color"></i>
                                                                </li>
                                                                <li>
                                                                    <i
                                                                        class="ti ti-star-filled fs-six fw_400 s1-color"></i>
                                                                </li>
                                                                <li>
                                                                    <i
                                                                        class="ti ti-star-half-filled fs-six fw_400 s1-color"></i>
                                                                </li>
                                                            </ul>
                                                            <p class="n700-color">
                                                                {{ $collegereview->review }}
                                                            </p>
                                                        </div>
                                                        <div
                                                            class="author__attach bb-n50dash pb-xxl-6 pb-5 mb-5 mb-xxl-6 mb-5 gap-xxl-6 gap-xl-5 gap-3 d-flex align-items-center">
                                                            <div class="author">
                                                                <img src="{{ asset($collegereview->image) }}"
                                                                    class="radius100" alt="img">
                                                            </div>
                                                            <div class="cont__box">
                                                                <span class="fs20 fw_500 n700-color d-block mb-0">
                                                                    {{ $collegereview->name }}
                                                                </span>
                                                                <span
                                                                    class="fs-eight fw_400 n700-color">{{ $collegereview->college->name }}</span>
                                                            </div>
                                                        </div>
                                                        <div class="comment__boxcontent">
                                                            <div
                                                                class="feedback__content d-flex align-items-center gap-xxl-10 gap-8">
                                                                {{-- <a href="javascript:void(0)" class="like d-flex align-items-center n500-color fw-400 gap-2 fs18">
                                                        <i class="ti ti-thumb-up n500-color fs-22 fw-400"></i>
                                                        178
                                                    </a>
                                                    <a href="javascript:void(0)" class="reply d-flex align-items-center n500-color fw-400 gap-2 fs18">
                                                        <i class="ti ti-message n500-color fs20 fw-400"></i>
                                                        Reply
                                                    </a> --}}
                                                            </div>
                                                            <div class="reply__content">
                                                                <div
                                                                    class="d-flex small__author gap-xl-3 gap-2 align-items-center">
                                                                    <div class="author__thumbs">
                                                                        <img src="{{ $path }}frontstyles/assets/images/common/coms1.png"
                                                                            class="radius100" alt="Author">
                                                                    </div>
                                                                    <form action="#"
                                                                        class="d-flex discussion-box align-items-center cus-border border radius100 n20-bg w-100 py-0">
                                                                        <input type="text" name="replytext"
                                                                            placeholder="Join the discussion..."
                                                                            required class="radius100">
                                                                    </form>
                                                                </div>
                                                            </div>
                                                        </div>
                                                </div>
                                                @endforeach
                                                <a href="#0"
                                                    class="cmn-btn mb-lg-2 mt-2 fw_600 justify-content-center d-inline-flex align-items-center gap-2 py-3 px-xxl-6 px-5 n700-color">
                                                    <span>
                                                        See All Reviews
                                                    </span>
                                                    <i class="ti ti-arrow-up-right fs-six"></i>
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
    <!-- courses details end -->



    <!-- subscribe start -->


    <!-- footer Start -->
    <footer class="footer__one bg1-color">
        <div class="footer__topone pt-120 pb-120">
            <div class="container">
                <div class="row g-4 justify-content-between">
                    <div class="col-xxl-5 col-xl-5 col-lg-5 col-md-6 col-sm-6">
                        <div class="footer__onewidget">
                            <span class="display-five n0-color mb-5 mb-md-8">
                                <span class="p1-color"> Let’s </span> Work Together
                            </span>
                            <p class="n0-color mb-5 mb-md-8">
                                Explore LeForum's dynamic courses, where excellence meets
                                opportunity. Elevate your personal and professional growth
                                with top-tier education.
                            </p>
                            <ul class="social-area d-flex gap-3 gap-xl-4">
                                <li>
                                    <a href="https://www.facebook.com/leforuminternational?mibextid=ZbWKwL"
                                        target="_blank" class="d-center">
                                        <i class="ti ti-brand-facebook fw_400 fs-five"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="https://www.instagram.com/leforuminternational/" target="_blank"
                                        class="d-center">
                                        <i class="ti ti-brand-instagram fw_400 fs-five"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="https://wa.me/+97433651797" target="_blank" class="d-center">
                                        <i class="fab fa-whatsapp fw_400 fs-five"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="https://www.youtube.com/@LeForumInternational" target="_blank"
                                        class="d-center">
                                        <i class="fab fa-youtube fw_400 fs-five"></i>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>



                    <div class="col-xxl-3 col-xl-3 col-lg-3 col-md-6">
                        <div class="footer__onewidget__link">
                            <h4 class="n0-color mb-5 mb-md-8">Contact Us</h4>
                            <ul class="widget__contactone">
                                <li class="d-flex gap-3 gap-xl-5 mb-4 mb-xl-6">
                                    <span class="icon cmn__social d-center">
                                        <i class="ti ti-phone fs-five fw_400"></i>
                                    </span>
                                    <a href="#" class="p1hover">
                                        +974 33651797

                                    </a>
                                </li>
                                <li class="d-flex gap-3 gap-xl-5 mb-4 mb-xl-6">
                                    <span class="icon cmn__social d-center">
                                        <i class="ti ti-mail-opened fs-five fw_400"></i>
                                    </span>
                                    <a href="#0" class="p1hover">
                                        info@leforuminternational.com

                                    </a>
                                </li>

                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="footer__bottomone">
            <div class="container">
                <div
                    class="footer__bottomone__content bt-dash d-grid justify-content-center text-center py-6 py-lg-10 d-md-flex align-items-center justify-content-lg-between gap-2 gap-md-15">
                    <p class="fs-seven n0-color">
                        © 2024 Le Forum | Powered by <a href="https://howincloud.com/"
                            class="link-hover-dark-primary font-weight-semibold" target="_blank"><span
                                style="font-size: 16px; font-weight: bolder; color: white">Howin </span><span
                                style="font-size: 13px; font-weight: 600; color: white">CLOUD</span></a>
                    </p>

                </div>
            </div>
        </div>
    </footer>
    <!-- footer end -->


    <!-- ==== js dependencies start ==== -->
    <script src="{{ $path }}frontstyles/assets/js/plugins/plugins.js"></script>
    <script src="{{ $path }}frontstyles/assets/js/plugins/plugin-custom.js"></script>
    <script src="{{ $path }}frontstyles/assets/js/apexcharts.js"></script>
    <script src="{{ $path }}frontstyles/assets/js/plugins/aos.js"></script>
    <script src="{{ $path }}frontstyles/assets/js/main.js"></script>

    <script src="{{ $path }}frontstyles/vendors/slick/slick.js"></script>



</body>



</html>
