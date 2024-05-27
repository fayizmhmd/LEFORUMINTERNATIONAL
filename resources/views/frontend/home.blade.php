{{-- @extends('frontend.layouts.master') --}}
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


    <title>Home | Le Forum</title>
    @php
        $path = asset('/');
    @endphp
    <link rel="shortcut icon" href="{{ asset('frontstyles/assets/images/le-logo-gold-EMBLEM.png') }}"
        type="image/x-icon">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@tabler/icons-webfont@2.36.0/tabler-icons.min.css">

    <link rel="stylesheet" href="{{ asset('frontstyles/assets/css/style.min.css') }}">
</head>

<body>

    <!-- start preloader -->
    <div id="preloader">
        <!-- <img src="assets/images/icon/boki.png" alt="img" class="bookicon-preloader"> -->
        <img style="width: 150px;" src="{{ asset('frontstyles/assets/images/le-logo-gold-EMBLEM.png') }}" alt="img"
            class="bookicon-preloader">
    </div>
    <!-- end preloader -->

    <!-- Scroll To Top Start-->
    <button class="scrollToTop d-md-flex d-center" aria-label="scroll Bar Button"><i
            class="mat-icon fas fa-angle-double-up"></i></button>
    <!-- Scroll To Top End -->

    <!-- Start Custom Cursor -->
    <div class="mouse-follower">
        <span class="cursor-outline"></span>
        <span class="cursor-dot"></span>
    </div>
    <!-- End Custom Cursor -->

    <!-- header-section start -->
    <header class="header-section cmn-s2color-header header-v3 header-v5">
        <!-- top header start -->
        <div class="one__header header-cmnbg-added head-border">
            <!-- top header end -->
            <div class="container">
                <!-- main header start -->
                <div class="main-navbar one__mainheader">
                    <!-- header-section start -->
                    <nav class="navbar-custom">
                        <div class="d-flex align-items-center justify-content-between">
                            <a href="index.html" class="nav-brand d-block d-lg-none">
                                <!-- <img style="width: 100px;" class="d-none d-md-block" src="assets/images/le logo white-12.png" alt="logo"> -->
                                <img style="width: 200px;" class="d-block d-md-none"
                                    src="{{ asset('frontstyles/assets/images/le-logo-gold-12.png') }}" alt="logo">
                            </a>
                            <div class="d-flex gap-3 align-items-center position-relative">
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
                                <div class="left__navbox d-flex align-items-center gap-4 gap-xl-6 gap-xxl-10">
                                    <a href="index.html" class="navbar-brand d-none d-lg-block">
                                        <img style="width: 200px;" class=""
                                            src="{{ asset('frontstyles/assets/images/le-logo-gold-12.png') }}"
                                            alt="logo">
                                    </a>
                                    <ul class="custom-nav d-lg-flex d-grid gap-4 gap-xl-6">
                                        <li class="menu-item itembg__1 position-relative">
                                            <a href="index.html" class="fw_500 n500-color below991px">Home</a>

                                        </li>
                                        <li class="menu-item itembg__1 position-relative">
                                            <a href="{{ route('front.allcolleges') }}"
                                                class="fw_500 n500-color below991px">Colleges</a>

                                        </li>
                                        <li class="menu-item itembg__1 position-relative">
                                            <a href="{{ route('front.viewAboutUs') }}"
                                                class="fw_500 n500-color below991px">About Us</a>

                                        </li>
                                        <li class="menu-item itembg__1 position-relative">
                                            <a href="{{ route('front.viewContactUs') }}"
                                                class="fw_500 n500-color below991px">Contact us</a>

                                        </li>

                                    </ul>

                                </div>




                            </div>
                        </div>
                    </nav>
                </div>

            </div>
        </div>
    </header>
    <!-- header-section end -->

    <!-- hero section start -->
    <section class="hero__fivesection position-relative">
        <div class="container">
            <div class="bn__five-cont">
                <div class="row g-4 align-items-center justify-content-between">
                    <div class="col-xxl-6 col-xl-6 col-lg-6">
                        <span
                            class="n700-color empower fw_600 fs20 d-block mb-4 d-inline-flex align-items-center gap-2 gap-xl-3"
                            data-aos="zoom-out-down" data-aos-duration="1400">
                            <i class="ti ti-star-filled s2-color"></i> Enlighten Your Path
                        </span>
                        <h1 class="textcus text-capitalize mb-5 mb-lg-5 mb-xl-6" data-aos="zoom-in"
                            data-aos-duration="1400">
                            Step into the Future of
                            <span class="suc s2-color designers" data-text="Learning">Learning</span>
                        </h1>
                        <p class="pragraph n700-color mb-8 mb-xxl-10" data-aos="zoom-out-down" data-aos-duration="1400">
                            Embark on a Modern Era of Education! Reveal your potential, absorb from experts, and
                            progress with us.
                        </p>
                        <div class="d-flex align-items-center gap-4 gap-xxl-6">
                            <a href="about.html"
                                class="cmn-btn n700-color gap-2 d-flex align-items-center radius30 py-2 py-xxl-4 px-xxl-8 px-5"
                                data-aos="zoom-in-left" data-aos-duration="1400">
                                <span>
                                    Explore More
                                </span>
                                <i class="ti ti-arrow-up-right fs-six"></i>
                            </a>
                            <a href="contact.html"
                                class="cmn-btn d-none d-sm-block second-alt n700-color gap-2 d-flex align-items-center radius30 py-2 py-xxl-4 px-xxl-8 px-5"
                                data-aos="zoom-in-left" data-aos-duration="1400">
                                <span>
                                    Contact Us
                                </span>
                                <i class="ti ti-arrow-up-right"></i>
                            </a>
                        </div>
                    </div>
                    <div class="col-xxl-5 col-xl-6 col-lg-6">
                        <div class="banner__rightv5 position-relative">
                            <div class="bn5-one">
                                <img src="{{ asset('frontstyles/assets/images/banner/bn5-1.png') }}" alt="img"
                                    data-aos="zoom-out-down" data-aos-duration="1400">

                            </div>

                            <div class="bn5-two">
                                <img src="{{ asset('frontstyles/assets/images/banner/bn5-2s.png') }}" alt="img"
                                    data-aos="zoom-out-down" data-aos-duration="1400">

                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="online-courses-v2 pt-120 pb-120">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-7">
                    <div class="sec__titletwo text-center mb-10 mb-xl-15" data-aos="zoom-out-down"
                        data-aos-duration="1400">
                        <span
                            class="bcate fs20 fw_600 n700-color py-2 px-6 d-inline-flex gap-3 mb-5 mb-xxl-6 radius30">
                            <i class="ti ti-star-filled s2-color mt-1"></i>
                            Explore Categories
                        </span>
                        <span class="two__title n700-color mb-4 mb-xl-5">
                            Chart Your Course in In-Demand Careers
                        </span>
                        <p class="pragraph max61 n500-color  m-auto">
                            Forge Your Path in High-Demand Careers
                        </p>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row g-6 justify-content-center">
                @foreach ($categories as $category)
                    <div class="col-xxl-3 col-xl-3 col-lg-3 col-md-4 col-sm-6" data-aos="zoom-in-right"
                        data-aos-duration="1200">
                        <div
                            class="chart-your-course online-courseitem online-courseitem-v2  radius16 cus-border border py-5 py-xl-8 py-xxl-10 px-4">
                            <!-- //online-courseitem online-courseitem-v2 -->
                            <div class="icon cmn__icon88 n0-bg d-center radius100 mb-4 mb-lg-5 mb-xl-6 mb-xxl-8">
                                <img src="{{ $path . $category->image }}" alt="Example SVG">
                            </div>
                            <div class="contbox d-flex align-items-center justify-content-between gap-2">
                                <div class="cont">
                                    <h5 class="n700-color mb-2">
                                        {{ $category->name }}
                                    </h5>
                                    <!-- <a href="browse-courses.html" class="cor n700-color">
                                    1,956 Courses
                                </a> -->
                                </div>
                                <a href="itcolleges.html" class="">
                                    <i class="ti ti-arrow-up-right s2-color fs-five"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>

            <div class="m-auto text-center mt-8 mt-xl-10" data-aos="zoom-in" data-aos-duration="1800">
                <a href="#"
                    class="cmn-btn d-inline-flex justify-content-center second-alt n700-color gap-2 d-flex align-items-center radius30 py-2 py-xxl-3 px-xxl-6 px-5">
                    <span>
                        See All
                    </span>
                    <i class="ti ti-arrow-up-right"></i>
                </a>
            </div>
        </div>
    </section>
    <!-- online courses end -->

    <!-- excelent two start -->
    <section class=" pt-120 pb-120 n20-bg">
        <div class="container">
            <div class="row g-6 justify-content-between">
                <div class="col-lg-5">
                    <div class=" w-100 position-relative">
                        <div class="radius100 d-center s2-bg">
                            <!-- <img src="assets/images/icon/idea.png" alt="img"> -->
                        </div>
                        <div class="d-inline-flex align-items-center">
                            <div class="">
                                <i class="ti ti-versions fs-six n0-color"></i>
                            </div>
                            <div class="cont-job">

                            </div>
                        </div>
                        <div class=" d-inline-flex align-items-center">
                            <div class="">

                            </div>

                        </div>
                        <div class="">
                            <div class="excel-skill position-relative">

                            </div>
                            <div class="cont-job">

                                <span>

                                </span>
                            </div>
                        </div>
                        <img src="{{ asset('frontstyles/assets/images/common/excelent2.jpg') }}" alt="img"
                            class="w-100">
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="excelent__conttwo">
                        <div class="section__title wow fadeInUp">

                            <span class="display-six sec__title n700-color mb-5 mb-xl-6">
                                The Gateway to
                                <span class="sucbadge">Success</span>
                            </span>
                            <p class="n700-color pragraph mb-7 mb-xl-8 mb-xxl-10">
                                Our narrative is an odyssey of fervor, steadfastness, and unwavering devotion to
                                empowering learners like yourself.
                            </p>
                            <ul class="excelent__list mb-7 mb-xl-10">
                                <li class="d-flex gap-3 gap-xxl-7 mb-xl-5 mb-xxl-8">
                                    <div class="cmn__icon80 n0-bg radius100 d-center">
                                        <img src="{{ asset('frontstyles/assets/images/icon/mission.png') }}"
                                            alt="img">
                                    </div>
                                    <div class="cont">
                                        <h5 class="n500-color mb-3">
                                            Our Mission
                                        </h5>
                                        <p class="n500-color">
                                            Revolutionizing education with immersive experiences, empowering active
                                            learners to thrive in a changing world, fostering creativity, critical
                                            thinking, and collaboration for lifelong learning.
                                        </p>
                                    </div>
                                </li>
                                <li class="d-flex gap-3 gap-xxl-7">
                                    <div class="cmn__icon80 n0-bg radius100 d-center">
                                        <img src="{{ asset('frontstyles/assets/images/icon/vission.png') }}"
                                            alt="img">
                                    </div>
                                    <div class="cont">
                                        <h5 class="n500-color mb-3">
                                            Our Vision
                                        </h5>
                                        <p class="n500-color">
                                            LeForum envisions a future where education transcends boundaries, empowering
                                            every learner to realize their full potential and become catalysts for
                                            positive change in an ever-evolving world.
                                        </p>
                                    </div>
                                </li>
                            </ul>
                            <a href="{{ route('front.viewAboutUs') }}"
                                class="cmn-btn n700-color gap-2 d-inline-flex align-items-center radius30 py-2 py-xxl-4 px-xxl-8 px-5">
                                <span>
                                    Read More
                                </span>
                                <i class="ti ti-arrow-up-right fs-six"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="instructor2__section position-relative">
        <div class="container">
            <div class="instructor2__wrap p1-bg radius16 overflow-hidden">
                <div class="row g-4 justify-content-between align-items-center">
                    <div class="col-lg-6">
                        <div class="instructor__thumb position-relative wow fadeInRight" data-wow-delay="0.5s">
                            <img src="{{ asset('frontstyles/assets/images/leforum_img.png') }}" alt="img"
                                class="instrc">
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="instructor__content position-relative">
                            <div class="sec__titletwo mb-7 mb-xl-10">
                                <span style="color: #a87648;" class="two__title n700-color mb-4 mb-xl-5">
                                    Discover Your Perfect college Today!
                                </span>
                                <p style="color:  #a87648;" class="pragraph">
                                    Bringing you closer to achieving your learning goals with the guidance of our expert
                                    tutors!
                                </p>
                            </div>
                            <a href="{{ route('front.viewContactUs') }}" class="kewta-btn d-inline-flex align-items-center"
                                data-aos="zoom-in-right" data-aos-duration="1000">
                                <span class="kew-text n0-color">
                                    Contact Us
                                </span>
                                <div class="kew-arrow">
                                    <div class="kt-one">
                                        <i class="ti ti-arrow-right n0-color"></i>

                                    </div>
                                    <div class="kt-two">
                                        <i class="ti ti-arrow-right n0-color"></i>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- instructor end -->

    <!-- trending courses start -->
    <section class="trending courses position-relative pt-120 pb-120">
        <div class="container">
            <div class="row justify-content-center wow fadeInDown">
                <div class="col-lg-7">
                    <div class="sec__titletwo text-center mb-10 mb-xl-15">
                        <span
                            class="bcate fs20 fw_600 n700-color py-2 px-6 d-inline-flex gap-3 mb-5 mb-xxl-6 radius30">
                            <i class="ti ti-star-filled s2-color mt-1"></i>
                            Master Your Future
                        </span>
                        <span class="two__title n700-color mb-4 mb-xl-5">
                            Our Trending Colleges
                        </span>
                        <p class="pragraph max61 n500-color  m-auto">
                            Explore the trendiest Colleges available
                        </p>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="swiper educational__wrap position-relative">
                <div class="swiper-wrapper">
                    @foreach ($colleges as $college)
                    <div class="swiper-slide wow fadeInUp" data-wow-delay="0.5s">
                        <div class="explore__item cmnhover" data-aos="zoom-in" data-aos-duration="1500">
                            <div class="thumb over w-100 position-relative">
                                <img style="height: 200px;"
                                    src="{{ $path . json_decode($college->image, true)[0] }}"
                                    class="w-100 radius32 mimg " alt="img">
                            </div>
                            <div class="content pt-5 pt-xxl-6 px-0 px-xl-3 px-xxl-4 pb-xxl-4 pb-3">

                                <h4 class="mb-4 mb-xl-5">
                                    <a href="{{ route('front.viewOneColleges', ['id' => $college->id]) }}" class="ptext">
                                        {{ $college->name }}
                                    </a>
                                </h4>

                                <div class="d-flex align-items-center justify-start mb-2 mb-xl-6">
                                    <span
                                        style="background-color: rgb(100, 200, 100); color:white; font-size: 10px; padding: 0.5em;"
                                        class="rounded fw_600 py-1 py-xl-2 px-1 px-xl-2">
                                        {{ $college->rating }}
                                    </span>

                                    <span style="color: black;" class="py-1 py-xl-2 px-3 px-xl-4">
                                        4 rating
                                    </span>

                                </div>
                                <div class="d-flex align-items-center justify-content-between mb-1 mb-xl-1">
                                    <div class="d-flex align-items-center gap-1 gap-xl-2">

                                        <h6 class="n700-color fw_500"
                                            style="overflow: hidden; text-overflow: ellipsis; display: -webkit-box; -webkit-line-clamp: 5; -webkit-box-orient: vertical;">
                                            {{ substr(strip_tags($college->description), 0, 300) }}
                                        </h6>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
            <div class="slider-btn freeclick mt-8 mt-xl-10 d-flex gap-5 justify-content-center">
                <button type="button"
                    class=" swiper-button-next2 cmn-btn-cilicon d-center cmn__icon56 cmn__icon56border">
                    <i class="ti ti-chevron-left fs-five n700-color"></i>
                </button>
                <button type="button" class=" swiper-button-prev2 cmn-btn-cilicon d-center cmn__icon56">
                    <i class="ti ti-chevron-right fs-five n700-color"></i>
                </button>
            </div>
        </div>
    </section>

    <section class="testimonial__one pt-120 pb-120">
        <div class="container">
            <div class="row justify-content-center wow fadeInDown">
                <div class="col-lg-7">
                    <div class="sec__titletwo text-center mb-10 mb-xl-15">
                        <span class="two__title n700-color mb-4 mb-xl-5" data-aos="zoom-out-down"
                            data-aos-duration="1400">
                            What our Students say
                        </span>
                        <p class="pragraph max61 pragraph m-auto" data-aos="zoom-in-down" data-aos-duration="1200">
                            We are incredibly proud of the positive influence our courses and community have on
                            enriching learners' lives
                        </p>
                    </div>
                </div>
            </div>
            <div class="swiper testimonial__onewrap">
                <div class="swiper-wrapper">
                    @foreach ($reviews as $review)
                    <div class="swiper-slide">
                        <div class="testi__oneitem radius32 py-5 py-xxl-8 px-4 px-xxl-8 position-relative"
                            data-aos="zoom-in" data-aos-duration="1500">
                            <ul class="ratting d-flex align-items-center gap-1 gap-xl-2">
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
                            <p class="mb-5 mt-8 mb-xxl-8 pragraph n700-color">
                                {{ $review -> review }}
                            </p>
                            <div class="d-flex align-items-center gap-2 gap-xxl-6">
                                <!-- <img src="assets/images/common/cameron.png" alt="img" class="radius100"> -->
                                <div class="cont">
                                    <span class="n700-color cameron d-block mb-0 mb-xl-1">
                                        {{ $review -> name }}
                                    </span>

                                </div>
                            </div>
                            <img src="{{ asset('frontstyles/assets/images/vectors/vector-white.png') }}"
                                alt="img" class="cmn__white">
                            <a href="#0"
                                class="quote radius100 d-flex align-items-center justify-content-center">
                                <i class="ti ti-quote fs-five n700-color"></i>
                            </a>
                        </div>
                    </div>
                    @endforeach
                </div>

                <div class="slider-btn mt-6 mt-lg-10 mb-2 px-5 d-center justify-content-center gap-3">
                    <button type="button" aria-label="Slide Prev"
                        class="ara-prev cmn-btn-cilicon d-center cmn__icon56 cmn__icon56border">
                        <!-- <i class="ti ti-chevron-left fs-five"></i> -->
                        <svg style="z-index: 99999;" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"
                            width="26" height="26" fill="#a87648">
                            <path
                                d="M14.7 5.3a1 1 0 0 1 1.4 1.4L10.42 12l5.66 5.3a1 1 0 1 1-1.32 1.5l-6-5.63a1 1 0 0 1-.05-1.45l6-7a1 1 0 0 1 1.37-.12z" />
                        </svg>

                    </button>
                    <button type="button" aria-label="Slide Next"
                        class="ara-next cmn-btn-cilicon d-center cmn__icon56">
                        <i class="ti ti-chevron-right fs-five"></i>
                    </button>
                </div>


            </div>
        </div>
    </section>
    <!-- testimonial end -->

    <!-- footer Start -->
    <footer class="footer__one bg1-color">
        <div class="footer__topone pt-120 pb-120">
            <div class="container">
                <div class="row g-4 justify-content-between">
                    <div class="col-xxl-5 col-xl-5 col-lg-5 col-md-6 col-sm-6">
                        <div class="footer__onewidget">
                            <span class="display-five n0-color mb-5 mb-md-8">
                                <span class="p1-color">
                                    Let’s
                                </span> Work Together
                            </span>
                            <p class="n0-color mb-5 mb-md-8">
                                Explore LeForum's dynamic courses, where excellence meets opportunity. Elevate your
                                personal and professional growth with top-tier education.
                            </p>
                            <ul class="social-area d-flex gap-3 gap-xl-4">
                                <li>
                                    <a href="{{ $facebook }}"
                                        target="_blank" class="d-center">
                                        <i class="ti ti-brand-facebook fw_400 fs-five"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="{{ $instagram }}" target="_blank"
                                        class="d-center">
                                        <i class="ti ti-brand-instagram fw_400 fs-five"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="{{ $whatsapp }}" target="_blank" class="d-center">
                                        <i class="fab fa-whatsapp fw_400 fs-five"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="{{ $youtube }}" target="_blank"
                                        class="d-center">
                                        <i class="fab fa-youtube fw_400 fs-five"></i>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-xxl-3  col-xl-3 col-lg-3 col-md-4 col-sm-4" data-aos="zoom-out"
                        data-aos-duration="1600">

                    </div>
                    <div class="col-xxl-3 col-xl-3 col-lg-3 col-md-6">
                        <div class="footer__onewidget__link">
                            <h4 class="n0-color mb-5 mb-md-8">
                                Contact Us
                            </h4>
                            <ul class="widget__contactone">
                                <li class="d-flex gap-3 gap-xl-5 mb-4 mb-xl-6">
                                    <span class="icon cmn__social d-center">
                                        <i class="ti ti-phone fs-five fw_400"></i>
                                    </span>
                                    <a href="#" class="p1hover">
                                        {{-- {{ \App\Models\Setting::where('key','phone_number')->first()->value }} --}}
                                        {{ $phone_number }}
                                    </a>
                                </li>
                                <li class="d-flex gap-3 gap-xl-5 mb-4 mb-xl-6">
                                    <span class="icon cmn__social d-center">
                                        <i class="ti ti-mail-opened fs-five fw_400"></i>
                                    </span>
                                    <a href="#0" class="p1hover">
                                        {{ $mail_id }}

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
                    class="footer__bottomone__content bt-dash d-grid justify-content-center text-center  py-6 py-lg-10 d-md-flex align-items-center justify-content-lg-between gap-2 gap-md-15">
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
    <script src="{{ asset('frontstyles/assets/js/plugins/plugins.js') }}"></script>
    <script src="{{ asset('frontstyles/assets/js/plugins/plugin-custom.js') }}"></script>
    <script src="{{ asset('frontstyles/assets/js/apexcharts.js') }}"></script>
    <script src="{{ asset('frontstyles/assets/js/plugins/aos.js') }}"></script>
    <script src="{{ asset('frontstyles/assets/js/main.js') }}"></script>

</body>



</html>
