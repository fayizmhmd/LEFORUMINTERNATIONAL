<!doctype html>
<html lang="en">



<head>

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <meta name="title" content="LeForum International | Premier Educational Consultancy in Bangalore">


    <meta name="keywords" content="LeForum International, educational consultancy, Bangalore, academic guidance, university admission, study abroad, student counseling, top universities, education consultancy services, higher education, college admission support, career counseling">


    <meta name="description" content="LeForum International offers expert educational consultancy services, guiding students to achieve academic excellence and gain admission to top universities in banglore.">

    <title>About | Le Forum</title>
    @php
        $path = asset('/');
    @endphp

    <link  rel="shortcut icon" href="{{ $path }}frontstyles/assets/images/le logo gold EMBLEM.png"  type="image/x-icon">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@tabler/icons-webfont@2.36.0/tabler-icons.min.css">

    <link rel="stylesheet" href="{{ $path }}frontstyles/assets/css/style.min.css">
</head>

<body>


    <div id="preloader">

        <img style="width: 150px;" src="{{ $path }}frontstyles/assets/images/le-logo-gold-EMBLEM.png" alt="img" class="bookicon-preloader">
    </div>



    <button class="scrollToTop d-md-flex d-center" aria-label="scroll Bar Button"><i class="mat-icon fas fa-angle-double-up"></i></button>



    <div class="mouse-follower">
        <span class="cursor-outline"></span>
        <span class="cursor-dot"></span>
    </div>


    <header class="header-section">

        <div class="header__topone header__bg">
            <div class="container">
                <div class="top-header d-flex gap-5 align-items-center justify-content-between py-lg-5 py-4">
                    <div class="d-flex gap-lg-10 gap-xl-15 align-items-center">

                        <div class="category__oneadjust gap-6 d-flex align-items-center">
                        </div>
                    </div>


                </div>
            </div>
        </div>
        <div class="one__header bg1-color">

            <div class="container">

                <div class="main-navbar one__mainheader">

                    <nav class="navbar-custom">
                        <div class="d-flex align-items-center justify-content-between">
                            <a href="index.html" class="nav-brand d-block d-lg-none">
                                <img style="width: 200px;" class="d-none d-md-block" src="{{ $path }}frontstyles/assets/images/le-logo-white-12.png" alt="logo">
                                <img  style="width: 200px;" class="d-block d-md-none" src="{{ $path }}frontstyles/assets/images/le-logo-gold-12.png" alt="logo">
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
                                        <a href="{{ route("front.viewAboutUs") }}" class="fw_500">About Us</a>
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

            </div>
        </div>
    </header>



    <section class="about-study pt-120 position-relative">
        <div class="container">
            <div class="row g-6 justify-content-between">
                <div class="col-lg-5 col-md-5" data-aos="zoom-in" data-aos-duration="1600">
                    <div class="about-studyleft">
                        <div class="thumb position-relative mb-xxl-10 mb-xl-8 mb-6">
                            <img src="{{ $path }}frontstyles/assets/images/common/as-student.png" alt="img" class="radius32">
                            <div class="as-counter cmn-btn pt-xxl-3 pt-2 px-xxl-10 px-4 pb-xxl-5 pb-2 tl__posi cus-z1">
                               <span class="d-block fs-three">
                                    10+
                               </span>
                                <span class="n700-color">
                                    years of experience
                                </span>
                            </div>
                            <img src="{{ $path }}frontstyles/assets/images/vectors/cmn-vector1.png" alt="img" class="tl__posi shape-as">
                        </div>
                        <p class="bb-704 pb-xxl-6 pb-5 mb-xxl-6 mb-5">
                            Our courses are guided by seasoned experts and passionate aficionados of their subjects
                        </p>
                        <ul class="as-cate d-flex flex-wrap">
                            <li class="fs20 n700-color d-flex align-items-center gap-xxl-4 gap-2 fw_500">
                                <div class="icon cmn__icon32 p1-bg radius100 d-center">
                                    <i class="ti ti-check n700-color"></i>
                                </div>
                                Curriculum Offerings
                            </li>
                            <li class="fs20 n700-color d-flex align-items-center gap-xxl-4 gap-2 fw_500">
                                <div class="icon cmn__icon32 p1-bg radius100 d-center">
                                    <i class="ti ti-check n700-color"></i>
                                </div>
                                Engaging Education
                            </li>
                            <li class="fs20 n700-color d-flex align-items-center gap-xxl-4 gap-2 fw_500">
                                <div class="icon cmn__icon32 p1-bg radius100 d-center">
                                    <i class="ti ti-check n700-color"></i>
                                </div>
                                Proficient Mentors
                            </li>
                            <li class="fs20 n700-color d-flex align-items-center gap-xxl-4 gap-2 fw_500">
                                <div class="icon cmn__icon32 p1-bg radius100 d-center">
                                    <i class="ti ti-check n700-color"></i>
                                </div>
                                Community Assistance
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-6 col-md-7" data-aos="zoom-in" data-aos-duration="1600">
                    <div class="about-studyright">
                        <div class="sec__titletwo mb-7 mb-lg-10 mb-xl-15">
                            <span class="two__title n700-color mb-4 mb-xl-5">
                                Crafting student learning hubs
                            </span>
                            <p class="pragraph max61 pragraph m-auto">
                                Your dedicated ally in knowledge and self-development
                            </p>
                        </div>
                        <div class="thumb position-relative">
                            <img src="{{ $path }}frontstyles/assets/images/common/study-inner1.jpg" alt="img" class="radius32">

                        </div>
                    </div>
                </div>
            </div>
        </div>
        <img src="{{ $path }}frontstyles/assets/images/vectors/badge-1element.png" alt="img" class="badge1-eleemnt">
    </section>


    <section class="testimonial__two pt-120 pb-120 position-relative">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <div class="section__titl position-relative text-center wow fadeInUp mb-8 mb-xl-10 mb-xxl-15">
                        <span class="display-five sec__title n700-color mb-4 mb-lg-5 mb-xl-6">
                            Students Says About LeForum
                        </span>

                    </div>
                </div>
            </div>
            <div class="row g-4 align-items-center justify-content-between">
                <div class="col-md-6 col-lg-5">
                    <div class="testi-twothumb w-100 radius32 position-relative mb-3 mb-md-0">
                        <img src="{{ $path }}frontstyles/assets/images/common/testi2.jpg" alt="img" class="w-100 radius32">
                        <img src="{{ $path }}frontstyles/assets/images/vectors/vector-top.png" alt="img" class="tr__posi text2__shape">
                        <span class="cmn__icon100 tr__posi radius100 d-center p1-bg">
                            <i class="ti ti-quote fs-two n700-color"></i>
                        </span>
                    </div>
                </div>
                <div class="col-md-6 col-lg-6">
                    <div class="swiper testitwo__wrap">
                        <div class="swiper-wrapper">
                            @foreach ($reviews as $review)
                            <div class="swiper-slide">

                                <div class="testi-twotext">
                                    <ul class="ratting d-flex align-items-center gap-1 gap-xl-2 mb-4">
                                        <li>
                                            <i class="ti ti-star-filled fs20 s1-color"></i>
                                        </li>
                                        <li>
                                            <i class="ti ti-star-filled fs20 s1-color"></i>
                                        </li>
                                        <li>
                                            <i class="ti ti-star-filled fs20 s1-color"></i>
                                        </li>
                                        <li>
                                            <i class="ti ti-star-filled fs20e s1-color"></i>
                                        </li>
                                        <li>
                                            <i class="ti ti-star-half-filled fs20 s1-color"></i>
                                        </li>
                                    </ul>
                                    <p class="n700-color fs20 bb-n40 pb-5 pb-xl-6 mb-5 mb-xl-6">
                                        {{ $review -> review }}
                                    </p>
                                    <h5 class="n700-color mb-1">
                                        {{ $review -> name }}
                                    </h5>

                                </div>

                            </div>
                            @endforeach
                        </div>
                        <div class="slider-btn ps-1 mt-8 mt-xl-10 d-flex gap-5">
                            <button type="button" class=" swiper-button-next3 cmn-btn d-center cmn__icon56 cmn__icon56border">
                                <i class="ti ti-chevron-left fs-five n700-color"></i>
                            </button>
                            <button type="button"  class=" swiper-button-prev3 cmn-btn d-center cmn__icon56">
                                <i class="ti ti-chevron-right fs-five n700-color"></i>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <img src="{{ $path }}frontstyles/assets/images/vectors/light.png" alt="img" class="gorwth__light">
    </section>

    @include('frontend.layouts.footer')
