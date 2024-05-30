<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <meta name="title" content="LeForum International | Premier Educational Consultancy in Bangalore">


    <meta name="keywords"
        content="LeForum International, educational consultancy, Bangalore, academic guidance, university admission, study abroad, student counseling, top universities, education consultancy services, higher education, college admission support, career counseling">


    <meta name="description"
        content="LeForum International offers expert educational consultancy services, guiding students to achieve academic excellence and gain admission to top universities in banglore.">

    <title>Colleges| Le Forum</title>
    @php
        $path = asset('/');
    @endphp

    <link rel="shortcut icon" href="{{ $path }}frontstyles/assets/images/le-logo-gold-EMBLEM.png"
        type="image/x-icon" />

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@tabler/icons-webfont@2.36.0/tabler-icons.min.css" />

    <link rel="stylesheet" href="{{ $path }}frontstyles/assets/css/style.min.css" />
</head>

<body class="n0-bg">

    {{-- <div id="preloader">

        <img style="width: 150px" src="{{ $path }}frontstyles/assets/images/le-logo-gold-EMBLEM.png"
            alt="img" class="bookicon-preloader" />
    </div> --}}
    <!-- end preloader -->

    <!-- Scroll To Top Start-->
    <button class="scrollToTop d-md-flex d-center" aria-label="scroll Bar Button">
        <i class="mat-icon fas fa-angle-double-up"></i>
    </button>

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
                            <a href="{{ route('front.allcolleges') }}" class="nav-brand d-block d-lg-none">
                                <img style="width: 200px" class="d-none d-md-block"
                                    src="{{ $path }}frontstyles/assets/images/le-logo-white-12.png"
                                    alt="logo" />
                                <img style="width: 200px" class="d-block d-md-none"
                                    src="{{ $path }}frontstyles/assets/images/le-logo-gold-12.png"
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
                                <a href="{{ route('front.allcolleges') }}" class="navbar-brand logo">
                                    <img style="width: 70px" class=""
                                        src="{{ $path }}frontstyles/assets/images/le-logo-gold-EMBLEM.png"
                                        alt="logo" />
                                </a>
                                <ul class="custom-nav d-lg-flex d-grid gap-4 gap-xl-6">
                                    <li class="menu-item itembg__1 position-relative">
                                        <a href="{{ route('admin.home') }}" class="fw_500 n0-color">Home</a>

                                    </li>

                                    <li class="menu-item itembg__1 position-relative">
                                        <a href="{{ route('front.allcolleges') }}" class="fw_500 n0-color">Colleges</a>


                                    </li>
                                    <li class="menu-item itembg__1 position-relative">
                                        <a href="{{ route('front.viewAboutUs') }}" class="fw_500 n0-color">About Us</a>

                                    </li>

                                    <li class="menu-item itembg__1 position-relative">
                                        <a href="{{ route('front.viewContactUs') }}" class="fw_500"> Contact Us </a>
                                    </li>
                                </ul>

                            </div>
                        </div>
                    </nav>
                </div>

            </div>
        </div>
    </header>



    <section class="community-section pt-6 mb-20 overflow-visible">

        <div class="courses-profile-body">
            <div class="container">
                <div class="row g-6">
                    <div class="col-lg-12">
                        <div class="commutiny-leftside">
                            <div class="explore__filter frontend-overview group-profile-wrapper">
                                <div class="singletab">
                                    <!-- <div
                      class="community-userhead course-profile-before radius32 mb-xxl-15 mb-lg-12 mb-10"
                    >
                      <div
                        class="d-grid d-xl-flex align-items-end justify-content-between gap-xxl-2 gap-3"
                      >



                        <div
                          class="explore__tab position-relative mb-xxl-8 mb-lg-3 mb-3 course-profile-tab n20-bg radius16 py-xxl-3 py-2 px-xxl-3 px-2"
                        >
                          <ul class="tablinks">
                            <li class="nav-links active">
                              <button
                                class="tablink d-flex align-items-center gap-2"
                              >
                                <i class="ti ti-versions"></i>
                                All Colleges
                              </button>
                            </li>

                          </ul>
                        </div>

                      </div>
                    </div> -->
                                    <div class="tabcontents">
                                        <div class="tabitem active">
                                            <div class="row gx-xxl-8 gx-xl-6 gx-5 gy-xxl-7 py-5 top-view">

                                                @foreach ($colleges as $college)

                                                <div class="col-lg-4 col-md-6 col-sm-6">
                                                    <div class="explore__item cmnhover">
                                                        <div class="thumb over w-100 position-relative">
                                                            <img style="height: 200px;"
                                                                src="{{ $path . json_decode($college->image, true)[0] }}"
                                                                class="w-100 radius32 mimg" alt="img" />
                                                        </div>
                                                        <div
                                                            class="content pt-5 pt-xxl-6 px-0 px-xl-3 px-xxl-4 pb-xxl-4 pb-3">

                                                            <h4 class="mb-4 mb-xl-5">
                                                                <a href="{{ route('front.viewOneColleges', ['id' => $college->id]) }}" class="ptext">
                                                                    {{ $college -> name }}
                                                                </a>
                                                            </h4>
                                                            <div
                                                                class="d-flex align-items-center justify-start mb-2 mb-xl-6">
                                                                <span
                                                                    style="background-color: rgb(100, 200, 100); color:white; font-size: 10px; padding: 0.5em;"
                                                                    class="rounded fw_600 py-1 py-xl-2 px-1 px-xl-2">
                                                                    {{ $college -> rating }}
                                                                </span>

                                                                <span style="color: black;"
                                                                    class="py-1 py-xl-2 px-3 px-xl-4">
                                                                    4 rating
                                                                </span>

                                                            </div>
                                                            <div
                                                                class="d-flex align-items-center justify-content-between bb-704 pb-4 pb-xxl-4 mb-3 mb-xxl-3">
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
    <section class="subscribtion">
        <div class="container">
            <div class="subscribtion__wrap p1-bg radius16">
                <div class="row g-4 justify-content-center">
                    <div class="col-xxl-5 col-xl-6 col-lg-8">
                        <div class="subscrib__content text-center">
                            <h3 style="color: #a87648" class="mb-3 mb-xl-4">
                                Subscribe for newsletters
                            </h3>
                            <!-- <p class="n700-color mb-6 mb-xl-10"> -->
                            <p style="color: #a87648" class="mb-6 mb-xl-10">
                                Subscribe Our Newsletter For Latest Updates
                            </p>
                            <form action="#0" class="mb-5 mb-xl-6 d-flex align-items-center">
                                <input type="text" placeholder="Enter Email..." />
                                <button class="d-center btn__v4">
                                    <span>
                                        <i class="ti ti-send n0-color"></i>
                                    </span>
                                </button>
                            </form>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- subscribe end -->

    <!-- footer Start -->
    @include('frontend.layouts.footer')
