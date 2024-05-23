<!DOCTYPE html>
<html lang="en">
  <head>

    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <meta name="title" content="LeForum International | Premier Educational Consultancy in Bangalore">


    <meta name="keywords" content="LeForum International, educational consultancy, Bangalore, academic guidance, university admission, study abroad, student counseling, top universities, education consultancy services, higher education, college admission support, career counseling">


    <meta name="description" content="LeForum International offers expert educational consultancy services, guiding students to achieve academic excellence and gain admission to top universities in banglore.">

    <title>Colleges| Le Forum</title>
    @php
        $path = asset('/');
    @endphp

    <link
      rel="shortcut icon"
      href="{{ $path }}frontstyles/assets/images/le-logo-gold-EMBLEM.png"
      type="image/x-icon"
    />

    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/@tabler/icons-webfont@2.36.0/tabler-icons.min.css"
    />

    <link rel="stylesheet" href="{{ $path }}frontstyles/assets/css/style.min.css" />
  </head>

  <body class="n0-bg">

    <div id="preloader">

      <img
        style="width: 150px"
        src="{{ $path }}frontstyles/assets/images/le-logo-gold-EMBLEM.png"
        alt="img"
        class="bookicon-preloader"
      />
    </div>
    <!-- end preloader -->

    <!-- Scroll To Top Start-->
    <button
      class="scrollToTop d-md-flex d-center"
      aria-label="scroll Bar Button"
    >
      <i class="mat-icon fas fa-angle-double-up"></i>
    </button>

    <div class="mouse-follower">
      <span class="cursor-outline"></span>
      <span class="cursor-dot"></span>
    </div>

    <header class="header-section">

      <div class="header__topone header__bg">
        <div class="container">
          <div
            class="top-header d-flex gap-5 align-items-center justify-content-between py-lg-5 py-4"
          >
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
                  <img
                    style="width: 200px"
                    class="d-none d-md-block"
                    src="{{ $path }}frontstyles/assets/images/le-logo-white-12.png"
                    alt="logo"
                  />
                  <img
                    style="width: 200px"
                    class="d-block d-md-none"
                    src="{{ $path }}frontstyles/assets/images/le-logo-gold-12.png"
                    alt="logo"
                  />
                </a>
                <div class="d-flex gap-6">
                  <div class="switch-wrapper-top d-flex d-lg-none"></div>
                  <button
                    class="navbar-toggle-btn d-block d-lg-none"
                    type="button"
                  >
                    <span></span>
                    <span></span>
                    <span></span>
                    <span></span>
                  </button>
                </div>
              </div>
              <div class="navbar-toggle-item cus__scroll">
                <div
                  class="d-flex gap-5 flex-column flex-lg-row align-items-start align-items-lg-center justify-content-between mt-5 mt-lg-0"
                >
                  <a href="index.html" class="navbar-brand logo">
                    <img
                      style="width: 70px"
                      class=""
                      src="{{ $path }}frontstyles/assets/images/le-logo-gold-EMBLEM.png"
                      alt="logo"
                    />
                  </a>
                  <ul class="custom-nav d-lg-flex d-grid gap-4 gap-xl-6">
                    <li class="menu-item itembg__1 position-relative">
                      <a href="{{ route('admin.home') }}" class="fw_500 n0-color">Home</a>

                    </li>

                    <li class="menu-item itembg__1 position-relative">
                      <a href="{{ route("front.allcolleges") }}" class="fw_500 n0-color"
                        >Colleges</a>


                    </li>
                    <li class="menu-item itembg__1 position-relative">
                      <a href="{{ route("front.viewAboutUs") }}" class="fw_500 n0-color">About Us</a>

                    </li>

                    <li class="menu-item itembg__1 position-relative">
                      <a href="{{ route("front.viewContactUs") }}" class="fw_500"> Contact Us </a>
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
                <div
                  class="explore__filter frontend-overview group-profile-wrapper"
                >
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

                          <div class="col-lg-4 col-md-6 col-sm-6">
                            <div
                              class="explore__item cmnhover"
                              data-aos="zoom-in"
                              data-aos-duration="1500"
                            >
                              <div class="thumb over w-100 position-relative">
                                <img style="height: 200px;"
                                  src="{{ $path }}frontstyles/assets/images/colleges/mcc.jpeg"
                                  class="w-100 radius32 mimg"
                                  alt="img"
                                />


                              </div>
                              <div
                                class="content pt-5 pt-xxl-6 px-0 px-xl-3 px-xxl-4 pb-xxl-4 pb-3"
                              >

                                <h4 class="mb-4 mb-xl-5">
                                  <a href="colleges-details1.html" class="ptext">
                                    MOUNT CARMEL COLLEGE (MCC)
                                  </a>
                                </h4>
                                <div class="d-flex align-items-center justify-start mb-2 mb-xl-6">
                                    <span style="background-color: rgb(100, 200, 100); color:white; font-size: 10px; padding: 0.5em;" class="rounded fw_600 py-1 py-xl-2 px-1 px-xl-2">
                                        5.0
                                    </span>

                                    <span style="color: black;" class="py-1 py-xl-2 px-3 px-xl-4">
                                        4 rating
                                    </span>

                                </div>
                                <div
                                  class="d-flex align-items-center justify-content-between bb-704 pb-4 pb-xxl-4 mb-3 mb-xxl-3"
                                >
                                  <div
                                    class="d-flex align-items-center gap-1 gap-xl-2"
                                  >

                                    <h6 class="n700-color fw_500" style="overflow: hidden; text-overflow: ellipsis; display: -webkit-box; -webkit-line-clamp: 5; -webkit-box-orient: vertical;">
                                        Established in 1948, MCC empowers students to excel and become global citizens. Offering diverse undergraduate and postgraduate programs in arts, commerce, science, and business management, MCC blends tradition with innovation.
                                    </h6>
                                  </div>

                                </div>

                              </div>
                            </div>
                          </div>


                          <div class="col-lg-4 col-md-6 col-sm-6">
                            <div
                              class="explore__item cmnhover"
                              data-aos="zoom-in"
                              data-aos-duration="1500"
                            >
                              <div class="thumb over w-100 position-relative">
                                <img style="height: 200px;"
                                  src="{{ $path }}frontstyles/assets/images/colleges/bgs-global-medical-college.jpg"
                                  class="w-100 radius32 mimg"
                                  alt="img"
                                />


                              </div>
                              <div
                                class="content pt-5 pt-xxl-6 px-0 px-xl-3 px-xxl-4 pb-xxl-4 pb-3"
                              >

                                <h4 class="mb-4 mb-xl-5">
                                  <a href="colleges-details8.html" class="ptext">
                                    BGS GLOBAL INSTITUTE OF MEDICAL SCIENCES (BGSGIMS)
                                  </a>
                                </h4>
                                <div class="d-flex align-items-center justify-start mb-2 mb-xl-6">
                                    <span style="background-color: rgb(100, 200, 100); color:white; font-size: 10px; padding: 0.5em;" class="rounded fw_600 py-1 py-xl-2 px-1 px-xl-2">
                                        5.0
                                    </span>

                                    <span style="color: black;" class="py-1 py-xl-2 px-3 px-xl-4">
                                        4 rating
                                    </span>

                                </div>
                                <div
                                  class="d-flex align-items-center justify-content-between bb-704 pb-4 pb-xxl-4 mb-3 mb-xxl-3"
                                >
                                  <div
                                    class="d-flex align-items-center gap-1 gap-xl-2"
                                  >
                                    <!-- <i class="ti ti-versions fs-five"></i> -->
                                    <h6 class="n700-color fw_500" style="overflow: hidden; text-overflow: ellipsis; display: -webkit-box; -webkit-line-clamp: 5; -webkit-box-orient: vertical;">
                                        BGS Global Institute of Medical Sciences (BGSGIMS) excels in medical education, equipping students for successful careers. With top-notch facilities and experienced faculty, BGSGIMS prioritizes high-quality education and research to meet evolving healthcare needs
                                    </h6>
                                  </div>

                                </div>

                              </div>
                            </div>
                          </div>



                          <div class="col-lg-4 col-md-6 col-sm-6">
                            <div
                              class="explore__item cmnhover"
                              data-aos="zoom-in"
                              data-aos-duration="1500"
                            >
                              <div class="thumb over w-100 position-relative">
                                <img style="height: 200px;"
                                  src="{{ $path }}frontstyles/assets/images/colleges/jyotinivasclg.png"
                                  class="w-100 radius32 mimg"
                                  alt="img"
                                />


                              </div>
                              <div
                                class="content pt-5 pt-xxl-6 px-0 px-xl-3 px-xxl-4 pb-xxl-4 pb-3"
                              >

                                <h4 class="mb-4 mb-xl-5">
                                  <a href="colleges-details2.html" class="ptext">
                                    JYOTI NIVAS COLLEGE (JNC)
                                  </a>
                                </h4>
                                <div class="d-flex align-items-center justify-start mb-2 mb-xl-6">
                                    <span style="background-color: rgb(100, 200, 100); color:white; font-size: 10px; padding: 0.5em;" class="rounded fw_600 py-1 py-xl-2 px-1 px-xl-2">
                                        5.0
                                    </span>

                                    <span style="color: black;" class="py-1 py-xl-2 px-3 px-xl-4">
                                        4.2 rating
                                    </span>

                                </div>
                                <div
                                  class="d-flex align-items-center justify-content-between bb-704 pb-4 pb-xxl-4 mb-3 mb-xxl-3"
                                >
                                  <div
                                    class="d-flex align-items-center gap-1 gap-xl-2"
                                  >
                                    <!-- <i class="ti ti-versions fs-five"></i> -->
                                    <h6 class="n700-color fw_500" style="overflow: hidden; text-overflow: ellipsis; display: -webkit-box; -webkit-line-clamp: 5; -webkit-box-orient: vertical;">
                                        Jyoti Nivas College (JNC) is a leading institution renowned for its academic excellence and holistic approach to education. With a rich legacy spanning decades, JNC offers a diverse range of programs and fosters a vibrant learning environment conducive to personal and professional growth. Committed to nurturing future leaders, Jyoti Nivas College empowers students to excel academically, ethically, and socially.
                                    </h6>
                                  </div>

                                </div>

                              </div>
                            </div>
                          </div>




                          <div class="col-lg-4 col-md-6 col-sm-6">
                            <div
                              class="explore__item cmnhover"
                              data-aos="zoom-in"
                              data-aos-duration="1500"
                            >
                              <div class="thumb over w-100 position-relative">
                                <img style="height: 200px;"
                                  src="{{ $path }}frontstyles/assets/images/colleges/bmsce.jpg"
                                  class="w-100 radius32 mimg"
                                  alt="img"
                                />


                              </div>
                              <div
                                class="content pt-5 pt-xxl-6 px-0 px-xl-3 px-xxl-4 pb-xxl-4 pb-3"
                              >

                                <h4 class="mb-4 mb-xl-5">
                                  <a href="colleges-details3.html" class="ptext">
                                    BMS COLLEGE OF ENGINEERING (BMSCE)
                                  </a>
                                </h4>
                                <div class="d-flex align-items-center justify-start mb-2 mb-xl-6">
                                    <span style="background-color: rgb(100, 200, 100); color:white; font-size: 10px; padding: 0.5em;" class="rounded fw_600 py-1 py-xl-2 px-1 px-xl-2">
                                        5.0
                                    </span>

                                    <span style="color: black;" class="py-1 py-xl-2 px-3 px-xl-4">
                                        4.2 rating
                                    </span>

                                </div>
                                <div
                                  class="d-flex align-items-center justify-content-between bb-704 pb-4 pb-xxl-4 mb-3 mb-xxl-3"
                                >
                                  <div
                                    class="d-flex align-items-center gap-1 gap-xl-2"
                                  >

                                    <h6 class="n700-color fw_500" style="overflow: hidden; text-overflow: ellipsis; display: -webkit-box; -webkit-line-clamp: 5; -webkit-box-orient: vertical;">
                                        BMS College of Engineering (BMSCE) is a prestigious institution celebrated for its excellence in engineering education. With a legacy of innovation and academic rigor, BMSCE offers diverse programs and fosters a dynamic learning environment. Committed to producing skilled engineers, BMSCE equips students with the knowledge and expertise to thrive in the ever-evolving field of engineering.
                                    </h6>
                                  </div>

                                </div>

                              </div>
                            </div>
                          </div>




                          <div class="col-lg-4 col-md-6 col-sm-6">
                            <div
                              class="explore__item cmnhover"
                              data-aos="zoom-in"
                              data-aos-duration="1500"
                            >
                              <div class="thumb over w-100 position-relative">
                                <img style="height: 200px;"
                                  src="{{ $path }}frontstyles/assets/images/colleges/RVCE.jpg"
                                  class="w-100 radius32 mimg"
                                  alt="img"
                                />


                              </div>
                              <div
                                class="content pt-5 pt-xxl-6 px-0 px-xl-3 px-xxl-4 pb-xxl-4 pb-3"
                              >

                                <h4 class="mb-4 mb-xl-5">
                                  <a href="colleges-detail5.html" class="ptext">
                                    R.V. COLLEGE OF ENGINEERING (RVCE)
                                  </a>
                                </h4>
                                <div class="d-flex align-items-center justify-start mb-2 mb-xl-6">
                                    <span style="background-color: rgb(100, 200, 100); color:white; font-size: 10px; padding: 0.5em;" class="rounded fw_600 py-1 py-xl-2 px-1 px-xl-2">
                                        5.0
                                    </span>

                                    <span style="color: black;" class="py-1 py-xl-2 px-3 px-xl-4">
                                        4.2 rating
                                    </span>

                                </div>
                                <div
                                  class="d-flex align-items-center justify-content-between bb-704 pb-4 pb-xxl-4 mb-3 mb-xxl-3"
                                >
                                  <div
                                    class="d-flex align-items-center gap-1 gap-xl-2"
                                  >
                                    <!-- <i class="ti ti-versions fs-five"></i> -->
                                    <h6 class="n700-color fw_500" style="overflow: hidden; text-overflow: ellipsis; display: -webkit-box; -webkit-line-clamp: 5; -webkit-box-orient: vertical;">
                                        R.V. College of Engineering (RVCE) stands as a premier institution known for its exceptional engineering education. With a tradition of excellence, RVCE offers diverse programs and cultivates a culture of innovation and leadership. Committed to shaping future engineers, RVCE provides students with the skills and resources to excel in the field of engineering.
                                    </h6>
                                  </div>

                                </div>

                              </div>
                            </div>
                          </div>




                          <div class="col-lg-4 col-md-6 col-sm-6">
                            <div
                              class="explore__item cmnhover"
                              data-aos="zoom-in"
                              data-aos-duration="1500"
                            >
                              <div class="thumb over w-100 position-relative">
                                <img style="height: 200px;"
                                  src="{{ $path }}frontstyles/assets/images/colleges/st-johns-medical-college-hospital-banglore.jpg"
                                  class="w-100 radius32 mimg"
                                  alt="img"
                                />


                              </div>
                              <div
                                class="content pt-5 pt-xxl-6 px-0 px-xl-3 px-xxl-4 pb-xxl-4 pb-3"
                              >

                                <h4 class="mb-4 mb-xl-5">
                                  <a href="colleges-details4.html" class="ptext">
                                    ST.JOHN'S MEDICAL COLLEGE (SJMC)
                                  </a>
                                </h4>
                                <div class="d-flex align-items-center justify-start mb-2 mb-xl-6">
                                    <span style="background-color: rgb(100, 200, 100); color:white; font-size: 10px; padding: 0.5em;" class="rounded fw_600 py-1 py-xl-2 px-1 px-xl-2">
                                        5.0
                                    </span>

                                    <span style="color: black;" class="py-1 py-xl-2 px-3 px-xl-4">
                                        4.2 rating
                                    </span>

                                </div>
                                <div
                                  class="d-flex align-items-center justify-content-between bb-704 pb-4 pb-xxl-4 mb-3 mb-xxl-3"
                                >
                                  <div
                                    class="d-flex align-items-center gap-1 gap-xl-2"
                                  >
                                    <!-- <i class="ti ti-versions fs-five"></i> -->
                                    <h6 class="n700-color fw_500" style="overflow: hidden; text-overflow: ellipsis; display: -webkit-box; -webkit-line-clamp: 5; -webkit-box-orient: vertical;">
                                        St. John's Medical College (SJMC) is a renowned institution dedicated to medical education and healthcare advancement. With a legacy of excellence, SJMC offers comprehensive programs and fosters a culture of compassion and innovation. Committed to producing competent healthcare professionals, SJMC equips students with the skills and knowledge to meet the evolving needs of the medical field.
                                    </h6>
                                  </div>

                                </div>

                              </div>
                            </div>
                          </div>

                          <div class="col-lg-4 col-md-6 col-sm-6">
                            <div
                              class="explore__item cmnhover"
                              data-aos="zoom-in"
                              data-aos-duration="1500"
                            >
                              <div class="thumb over w-100 position-relative">
                                <img style="height: 200px;"
                                  src="{{ $path }}frontstyles/assets/images/colleges/cms-bussiness-school.png"
                                  class="w-100 radius32 mimg"
                                  alt="img"
                                />


                              </div>
                              <div
                                class="content pt-5 pt-xxl-6 px-0 px-xl-3 px-xxl-4 pb-xxl-4 pb-3"
                              >

                                <h4 class="mb-4 mb-xl-5">
                                  <a href="colleges-details7.html" class="ptext">
                                    CMS BUSINESS SCHOOL (CMSBS)
                                  </a>
                                </h4>
                                <div class="d-flex align-items-center justify-start mb-2 mb-xl-6">
                                    <span style="background-color: rgb(100, 200, 100); color:white; font-size: 10px; padding: 0.5em;" class="rounded fw_600 py-1 py-xl-2 px-1 px-xl-2">
                                        5.0
                                    </span>

                                    <span style="color: black;" class="py-1 py-xl-2 px-3 px-xl-4">
                                        4.2 rating
                                    </span>

                                </div>
                                <div
                                  class="d-flex align-items-center justify-content-between bb-704 pb-4 pb-xxl-4 mb-3 mb-xxl-3"
                                >
                                  <div
                                    class="d-flex align-items-center gap-1 gap-xl-2"
                                  >
                                    <!-- <i class="ti ti-versions fs-five"></i> -->
                                    <h6 class="n700-color fw_500" style="overflow: hidden; text-overflow: ellipsis; display: -webkit-box; -webkit-line-clamp: 5; -webkit-box-orient: vertical;">
                                        CMS Business School (CMSBS) is a distinguished institution renowned for its excellence in business education. With a focus on innovation and practical learning, CMSBS offers comprehensive programs tailored to meet industry demands. Committed to nurturing future business leaders, CMSBS provides students with the knowledge and skills to thrive in dynamic global markets.
                                    </h6>
                                  </div>

                                </div>

                              </div>
                            </div>
                          </div>

                          <div class="col-lg-4 col-md-6 col-sm-6">
                            <div
                              class="explore__item cmnhover"
                              data-aos="zoom-in"
                              data-aos-duration="1500"
                            >
                              <div class="thumb over w-100 position-relative">
                                <img style="height: 200px;"
                                  src="{{ $path }}frontstyles/assets/images/colleges/msrit.jpg"
                                  class="w-100 radius32 mimg"
                                  alt="img"
                                />


                              </div>
                              <div
                                class="content pt-5 pt-xxl-6 px-0 px-xl-3 px-xxl-4 pb-xxl-4 pb-3"
                              >

                                <h4 class="mb-4 mb-xl-5">
                                  <a href="colleges-details6.html" class="ptext">
                                    M.S RAMAIAH INSTITUTE OF TECHNOLOGY (MSRIT)
                                  </a>
                                </h4>
                                <div class="d-flex align-items-center justify-start mb-2 mb-xl-6">
                                    <span style="background-color: rgb(100, 200, 100); color:white; font-size: 10px; padding: 0.5em;" class="rounded fw_600 py-1 py-xl-2 px-1 px-xl-2">
                                        5.0
                                    </span>

                                    <span style="color: black;" class="py-1 py-xl-2 px-3 px-xl-4">
                                        4.2 rating
                                    </span>

                                </div>
                                <div
                                  class="d-flex align-items-center justify-content-between bb-704 pb-4 pb-xxl-4 mb-3 mb-xxl-3"
                                >
                                  <div
                                    class="d-flex align-items-center gap-1 gap-xl-2"
                                  >
                                    <!-- <i class="ti ti-versions fs-five"></i> -->
                                    <h6 class="n700-color fw_500" style="overflow: hidden; text-overflow: ellipsis; display: -webkit-box; -webkit-line-clamp: 5; -webkit-box-orient: vertical;">
                                        M.S. Ramaiah Institute of Technology (MSRIT) is a leading institution acclaimed for its excellence in technical education. With a legacy of innovation and academic rigor, MSRIT offers diverse programs and fosters a dynamic learning environment. Committed to nurturing skilled engineers, MSRIT equips students with the knowledge and expertise to excel in the ever-evolving field of technology.
                                    </h6>
                                  </div>

                                </div>

                              </div>
                            </div>
                          </div>



                        </div>
                        <ul
                          class="pagination mt-10 d-flex justify-content-center align-items-center gap-xxl-3 gap-2 flex-wrap"
                        >
                          <li>
                            <a
                              href="javascript:void(0)"
                              class="n20-bg cmn__icon32 fw_600 d-center radius100 cus-border border"
                            >
                              <i class="ti ti-chevron-left fs-six"></i>
                            </a>
                          </li>
                          <li>
                            <a
                              href="javascript:void(0)"
                              class="n20-bg cmn__icon32 fw_600 d-center radius100 cus-border border"
                            >
                              1
                            </a>
                          </li>
                          <li>
                            <a
                              href="javascript:void(0)"
                              class="n20-bg cmn__icon32 fw_600 d-center radius100 cus-border border"
                            >
                              2
                            </a>
                          </li>
                          <li>
                            <a
                              href="javascript:void(0)"
                              class="n20-bg cmn__icon32 fw_600 d-center radius100 cus-border border"
                            >
                              3
                            </a>
                          </li>
                          <li>
                            <a
                              href="javascript:void(0)"
                              class="n20-bg cmn__icon32 fw_600 d-center radius100 cus-border border"
                            >
                              ...
                            </a>
                          </li>
                          <li>
                            <a
                              href="javascript:void(0)"
                              class="n20-bg cmn__icon32 fw_600 d-center radius100 cus-border border"
                            >
                              <i class="ti ti-chevron-right fs-six"></i>
                            </a>
                          </li>
                        </ul>
                      </div>
                      <div class="tabitem">
                        <div class="row g-6">
                          <div class="col-lg-8">
                            <div
                              class="course-probiowrap cus-border border radius16 n0-bg p-xxl-10 p-6"
                            >
                              <div class="mb-xxl-10 mb-lg-8 mb-7">
                                <h3 class="n700-color mb-xxl-4 mb-3">
                                  Bio Data
                                </h3>
                                <p class="n700-color">
                                  Isra Ahmed is a seasoned UI/UX designer with
                                  over a decade of experience in the tech
                                  industry. She is known for her passion for
                                  creating meaningful and user-centric designs
                                  that seamlessly blend aesthetics with
                                  functionality. Sarah has worked with both
                                  startups and established companies,
                                  contributing to the success of numerous
                                  digital products.
                                </p>
                              </div>
                              <div class="text-box mb-xxl-10 mb-lg-8 mb-7">
                                <h4 class="head n700-color mb-xxl-4 mb-3">
                                  Education:
                                </h4>
                                <ul class="fs-seven">
                                  <li class="cmn-dot n700-color">
                                    Bachelor's Degree in Interaction Design from
                                    [University Name]
                                  </li>
                                  <li class="cmn-dot n700-color">
                                    Master's Degree in Human-Computer
                                    Interaction from [University Name]
                                  </li>
                                </ul>
                              </div>
                              <div class="text-box mb-xxl-10 mb-lg-8 mb-7">
                                <h5 class="head n700-color mb-xxl-4 mb-3">
                                  Professional Experience:
                                </h5>
                                <ul class="fs-seven">
                                  <li class="cmn-dot n700-color">
                                    Senior UX Designer at XYZ Tech Solutions
                                    (Current)
                                  </li>
                                  <li class="cmn-dot n700-color">
                                    Lead UI/UX Designer at Innovative Designs
                                    Inc.
                                  </li>
                                  <li class="cmn-dot n700-color">
                                    UX Consultant for various startups
                                  </li>
                                  <li class="cmn-dot n700-color">
                                    Contributed to the design of award-winning
                                    mobile apps and websites
                                  </li>
                                </ul>
                              </div>
                              <div class="text-box mb-xxl-10 mb-lg-8 mb-7">
                                <span
                                  class="head fs20 n700-color mb-xxl-4 mb-3"
                                >
                                  Skills:
                                </span>
                                <ul class="fs-seven">
                                  <li class="cmn-dot n700-color">
                                    User Research
                                  </li>
                                  <li class="cmn-dot n700-color">
                                    Wireframing and Prototyping
                                  </li>
                                  <li class="cmn-dot n700-color">
                                    Information Architecture
                                  </li>
                                  <li class="cmn-dot n700-color">
                                    Usability Testing
                                  </li>
                                  <li class="cmn-dot n700-color">
                                    Interaction Design
                                  </li>
                                  <li class="cmn-dot n700-color">
                                    Visual Design
                                  </li>
                                  <li class="cmn-dot n700-color">
                                    Collaboration with Developers
                                  </li>
                                </ul>
                              </div>
                              <div class="text-box">
                                <span
                                  class="head fw_600 n700-color mb-xxl-4 mb-3"
                                >
                                  Teaching Approach:
                                </span>
                                <ul class="fs-seven">
                                  <li class="cmn-dot alt n700-color">
                                    Isra Ahmed is passionate about empowering
                                    aspiring designers with practical skills and
                                    insights into the world of UI/UX. Her
                                    teaching approach emphasizes hands-on
                                    projects, real-world scenarios, and
                                    collaboration. She believes in nurturing
                                    creativity while instilling a strong
                                    foundation in design principles and user
                                    psychology.
                                  </li>
                                </ul>
                              </div>
                            </div>
                          </div>
                          <div class="col-lg-4">
                            <div class="course-probiowrap-right">
                              <div
                                class="active-userbox n0-bg cus-border border radius32 py-xxl-8 py-xxl-6 py-4 px-xxl-8 px-xl-6 px-4 mb-xxl-6 mb-5"
                              >
                                <h5
                                  class="n700-color bb-n40dash pb-xxl-6 pb-5 mb-xxl-6 mb-5"
                                >
                                  Search
                                </h5>
                                <form
                                  action="#"
                                  class="search-toggle-box d-block"
                                >
                                  <div
                                    class="input-area d-flex n20-bg align-items-center gap-2 py-1 px-6 py-lg-2 px-2 radius30"
                                  >
                                    <input
                                      type="text"
                                      class="px-4"
                                      placeholder="Search"
                                    />
                                    <button class="cmn-btn search__icon40">
                                      <span>
                                        <i
                                          class="fa-solid fa-magnifying-glass n4-color"
                                        ></i>
                                      </span>
                                    </button>
                                  </div>
                                </form>
                              </div>
                              <div
                                class="latest-activities active-userbox n0-bg cus-border border radius32 py-xxl-8 py-xl-6 py-4 px-xxl-8 px-xl-6 px-4 mb-xxl-6 mb-5"
                              >
                                <h5
                                  class="n700-color bb-n40dash pb-xxl-6 pb-5 mb-xxl-6 mb-5"
                                >
                                  More Instructor
                                </h5>
                                <a
                                  href="instructor.html"
                                  class="latest-activiti-item d-flex align-items-center flex-wrap gap-xxl-6 gap-xl-3 gap-2 bb-n40dash pb-xxl-6 pb-5 mb-xxl-6 mb-5"
                                >
                                  <img
                                    src="{{ $path }}frontstyles/assets/images/common/henry.png"
                                    alt="img"
                                    class="radius100 cmn__icon80"
                                  />
                                  <span class="cont">
                                    <span
                                      class="fs20 mb-1 fw_500 n700-color d-flex align-items-center flex-wrap"
                                    >
                                      Esther Howard
                                    </span>
                                    <span class="fs-seven">
                                      UI/UX Designer
                                    </span>
                                  </span>
                                </a>
                                <a
                                  href="instructor.html"
                                  class="latest-activiti-item d-flex align-items-center flex-wrap gap-xxl-6 gap-xl-3 gap-2 bb-n40dash pb-xxl-6 pb-5 mb-xxl-6 mb-5"
                                >
                                  <img
                                    src="{{ $path }}frontstyles/assets/images/common/floyd.png"
                                    alt="img"
                                    class="radius100 cmn__icon80"
                                  />
                                  <span class="cont">
                                    <span
                                      class="fs20 mb-1 fw_500 n700-color d-flex align-items-center flex-wrap"
                                    >
                                      Floyd Miles
                                    </span>
                                    <span class="fs-seven"> Team Leader </span>
                                  </span>
                                </a>
                                <a
                                  href="instructor.html"
                                  class="latest-activiti-item d-flex align-items-center flex-wrap gap-xxl-6 gap-xl-3 gap-2 bb-n40dash pb-xxl-6 pb-5 mb-xxl-5 mb-4"
                                >
                                  <img
                                    src="{{ $path }}frontstyles/assets/images/team/acc2.png"
                                    alt="img"
                                    class="radius100 cmn__icon80"
                                  />
                                  <span class="cont">
                                    <span
                                      class="fs20 mb-1 fw_500 n700-color d-flex align-items-center flex-wrap"
                                    >
                                      Jacob Jones
                                    </span>
                                    <span class="fs-seven"> Scrum Master </span>
                                  </span>
                                </a>
                                <a
                                  href="instructor.html"
                                  class="d-inline-flex ser-see bbsolid-700 n700-color fw_600"
                                >
                                  See All
                                  <i class="ti ti-arrow-up-right fs-six"></i>
                                </a>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="tabitem">
                        <div class="row g-6">
                          <div class="col-lg-8">
                            <div class="courses-details-left">
                              <!--Average reviews-->
                              <div
                                class="average-review-v1 cus-border border box-shadow4 py-xxl-10 py-xl-8 py-lg-6 py-5 px-xxl-10 px-xl-8 px-lg-6 px-5 n0-bg radius16 mb-xxl-10 mb-xl-8 mb-6"
                              >
                                <div class="write-reviewbox">
                                  <h5
                                    class="bb-n40dash pb-xxl-8 pb-6 mb-xxl-8 mb-6"
                                  >
                                    Average Reviews
                                  </h5>
                                  <div
                                    class="ratting-box bb-n40dash pb-xxl-8 pb-6 mb-xxl-8 mb-6 d-grid d-sm-flex align-items-center gap-xxl-10 gap-lg-8 gap-6"
                                  >
                                    <div
                                      class="cirbox py-6 px-11 text-center s1-bg radius16"
                                    >
                                      <h3
                                        class="d-flex justify-content-center align-items-end n700-color mb-2"
                                      >
                                        4.9
                                        <span class="fs-five"> /5 </span>
                                      </h3>
                                      <ul
                                        class="start d-flex mb-2 justify-content-center align-items-center gap-1"
                                      >
                                        <li>
                                          <i
                                            class="ti ti-star-filled fw_400 n700-color"
                                          ></i>
                                        </li>
                                        <li>
                                          <i
                                            class="ti ti-star-filled fw_400 n700-color"
                                          ></i>
                                        </li>
                                        <li>
                                          <i
                                            class="ti ti-star-filled fw_400 n700-color"
                                          ></i>
                                        </li>
                                        <li>
                                          <i
                                            class="ti ti-star-filled fw_400 n700-color"
                                          ></i>
                                        </li>
                                        <li>
                                          <i
                                            class="ti ti-star-half-filled fw_400 n700-color"
                                          ></i>
                                        </li>
                                      </ul>
                                      <span class="n700-color text-center">
                                        26 Rating
                                      </span>
                                    </div>
                                    <div class="progress-box w-100">
                                      <div
                                        class="consulting__progresswrap wow fadeInUp"
                                        data-wow-duration="1.9s"
                                      >
                                        <div
                                          class="consulting-progress mb-xl-2 mb-1 d-flex align-items-center gap-xxl-5 gap-3 w-100"
                                        >
                                          <span
                                            class="conssub d-flex align-items-center gap-1"
                                          >
                                            <i
                                              class="ti ti-star-filled s1-color"
                                            ></i>
                                            5
                                          </span>
                                          <div class="progress">
                                            <div
                                              class="progress-bar wow slideInLeft"
                                              data-wow-duration=".8s"
                                              role="progressbar"
                                              style="width: 90%"
                                              aria-valuenow="90"
                                              aria-valuemin="0"
                                              aria-valuemax="100"
                                            ></div>
                                          </div>
                                          <span class="n500-color"> 90% </span>
                                        </div>
                                        <div
                                          class="consulting-progress mb-xl-2 mb-1 d-flex align-items-center gap-xxl-5 gap-3 w-100"
                                        >
                                          <span
                                            class="conssub d-flex align-items-center gap-1"
                                          >
                                            <i
                                              class="ti ti-star-filled s1-color"
                                            ></i>
                                            4
                                          </span>
                                          <div class="progress">
                                            <div
                                              class="progress-bar wow slideInLeft"
                                              data-wow-duration=".8s"
                                              role="progressbar"
                                              style="width: 75%"
                                              aria-valuenow="75"
                                              aria-valuemin="0"
                                              aria-valuemax="100"
                                            ></div>
                                          </div>
                                          <span class="n500-color"> 75% </span>
                                        </div>
                                        <div
                                          class="consulting-progress mb-xl-2 mb-1 d-flex align-items-center gap-xxl-5 gap-3 w-100"
                                        >
                                          <span
                                            class="conssub d-flex align-items-center gap-1"
                                          >
                                            <i
                                              class="ti ti-star-filled s1-color"
                                            ></i>
                                            3
                                          </span>
                                          <div class="progress">
                                            <div
                                              class="progress-bar wow slideInLeft"
                                              data-wow-duration=".8s"
                                              role="progressbar"
                                              style="width: 67%"
                                              aria-valuenow="67"
                                              aria-valuemin="0"
                                              aria-valuemax="100"
                                            ></div>
                                          </div>
                                          <span class="n500-color"> 67% </span>
                                        </div>
                                        <div
                                          class="consulting-progress mb-xl-2 mb-1 d-flex align-items-center gap-xxl-5 gap-3 w-100"
                                        >
                                          <span
                                            class="conssub d-flex align-items-center gap-1"
                                          >
                                            <i
                                              class="ti ti-star-filled s1-color"
                                            ></i>
                                            2
                                          </span>
                                          <div class="progress">
                                            <div
                                              class="progress-bar wow slideInLeft"
                                              data-wow-duration=".8s"
                                              role="progressbar"
                                              style="width: 44%"
                                              aria-valuenow="44"
                                              aria-valuemin="0"
                                              aria-valuemax="100"
                                            ></div>
                                          </div>
                                          <span class="n500-color"> 44% </span>
                                        </div>
                                        <div
                                          class="consulting-progress mb-xl-2 mb-1 d-flex align-items-center gap-xxl-5 gap-3 w-100"
                                        >
                                          <span
                                            class="conssub d-flex align-items-center gap-1"
                                          >
                                            <i
                                              class="ti ti-star-filled s1-color"
                                            ></i>
                                            1
                                          </span>
                                          <div class="progress">
                                            <div
                                              class="progress-bar wow slideInLeft"
                                              data-wow-duration=".8s"
                                              role="progressbar"
                                              style="width: 21%"
                                              aria-valuenow="21"
                                              aria-valuemin="0"
                                              aria-valuemax="100"
                                            ></div>
                                          </div>
                                          <span class="n500-color"> 21% </span>
                                        </div>
                                      </div>
                                    </div>
                                  </div>
                                </div>
                                <div
                                  class="d-flex flex-wrap gap-3 newest__filter align-items-center justify-content-between mb-xxl-10 mb-6"
                                >
                                  <span class="fs20 n700-color fw_600">
                                    All Reviews
                                  </span>
                                  <div class="d-flex align-items-center gap-2">
                                    <span class="n500-color d-block">
                                      Sort By :
                                    </span>
                                    <div class="lang">
                                      <select
                                        name="news"
                                        class="cus-scro80 cus-border border radius32 ps-5 py-2 pe-8"
                                      >
                                        <option value="1">New</option>
                                        <option value="1">Newest</option>
                                        <option value="1">Newest</option>
                                        <option value="1">Newest</option>
                                        <option value="1">Newest</option>
                                        <option value="1">Newest</option>
                                      </select>
                                    </div>
                                  </div>
                                </div>

                                <div
                                  class="comments__box radius16 mb-xxl-8 mb-6 cus-border border py-xl-6 py-5 px-xl-6 px-5 n20-bg"
                                >
                                  <div
                                    class="d-flex fw-400 gap-4 bb-n50dash align-items-center pb-xxl-6 pb-5 mb-5 mb-xxl-6 mb-5"
                                  >
                                    <span class="n700-color">Mar 03, 2024</span>
                                    <span class="dot-fixed"></span>
                                    <span class="n700-color fw-400"
                                      >09:01 am</span
                                    >
                                  </div>
                                  <div
                                    class="bb-n50dash pb-24 mb-24 pb-xxl-6 pb-5 mb-5 mb-xxl-6 mb-5"
                                  >
                                    <ul
                                      class="start d-flex mb-xxl-4 mb-2 align-items-center gap-2"
                                    >
                                      <li>
                                        <i
                                          class="ti ti-star-filled fs-six fw_400 s1-color"
                                        ></i>
                                      </li>
                                      <li>
                                        <i
                                          class="ti ti-star-filled fs-six fw_400 s1-color"
                                        ></i>
                                      </li>
                                      <li>
                                        <i
                                          class="ti ti-star-filled fs-six fw_400 s1-color"
                                        ></i>
                                      </li>
                                      <li>
                                        <i
                                          class="ti ti-star-filled fs-six fw_400 s1-color"
                                        ></i>
                                      </li>
                                      <li>
                                        <i
                                          class="ti ti-star-half-filled fs-six fw_400 s1-color"
                                        ></i>
                                      </li>
                                    </ul>
                                    <p class="n700-color">
                                      "I can't thank enough for the incredible
                                      courses they offer. I completed the 'Web
                                      Development Fundamentals' course, and it
                                      not only gave me the skills.”
                                    </p>
                                  </div>
                                  <div
                                    class="author__attach bb-n50dash pb-xxl-6 pb-5 mb-5 mb-xxl-6 mb-5 gap-xxl-6 gap-xl-5 gap-3 d-flex align-items-center"
                                  >
                                    <div class="author">
                                      <img
                                        src="{{ $path }}frontstyles/assets/images/common/coms1.png"
                                        class="radius100"
                                        alt="img"
                                      />
                                    </div>
                                    <div class="cont__box">
                                      <span
                                        class="fs20 fw_500 n700-color d-block mb-0"
                                      >
                                        Esther Howard
                                      </span>
                                      <span class="fs-eight fw_400 n700-color"
                                        >Project Manager</span
                                      >
                                    </div>
                                  </div>
                                  <div class="comment__boxcontent">
                                    <div
                                      class="feedback__content d-flex align-items-center gap-xxl-10 gap-8"
                                    >
                                      <a
                                        href="javascript:void(0)"
                                        class="like d-flex align-items-center n500-color fw-400 gap-2 fs18"
                                      >
                                        <i
                                          class="ti ti-thumb-up n500-color fs-22 fw-400"
                                        ></i>
                                        178
                                      </a>
                                      <a
                                        href="javascript:void(0)"
                                        class="reply d-flex align-items-center n500-color fw-400 gap-2 fs18"
                                      >
                                        <i
                                          class="ti ti-message n500-color fs20 fw-400"
                                        ></i>
                                        Reply
                                      </a>
                                    </div>
                                    <div class="reply__content">
                                      <div
                                        class="d-flex small__author gap-xl-3 gap-2 align-items-center"
                                      >
                                        <div class="author__thumbs">
                                          <img
                                            src="{{ $path }}frontstyles/assets/images/common/coms1.png"
                                            class="radius100"
                                            alt="Author"
                                          />
                                        </div>
                                        <form
                                          action="#"
                                          class="d-flex discussion-box align-items-center cus-border border radius100 n0-bg w-100 py-0"
                                        >
                                          <input
                                            type="text"
                                            name="replytext"
                                            placeholder="Join the discussion..."
                                            required
                                            class="radius100"
                                          />
                                        </form>
                                      </div>
                                    </div>
                                  </div>
                                </div>
                                <div
                                  class="comments__box radius16 mb-xxl-8 mb-6 cus-border border py-xl-6 py-5 px-xl-6 px-5 n20-bg"
                                >
                                  <div
                                    class="d-flex fw-400 gap-4 bb-n50dash align-items-center pb-xxl-6 pb-5 mb-5 mb-xxl-6 mb-5"
                                  >
                                    <span class="n700-color">Mar 03, 2024</span>
                                    <span class="dot-fixed"></span>
                                    <span class="n700-color fw-400"
                                      >09:01 am</span
                                    >
                                  </div>
                                  <div
                                    class="bb-n50dash pb-24 mb-24 pb-xxl-6 pb-5 mb-5 mb-xxl-6 mb-5"
                                  >
                                    <ul
                                      class="start d-flex mb-xxl-4 mb-2 align-items-center gap-2"
                                    >
                                      <li>
                                        <i
                                          class="ti ti-star-filled fs-six fw_400 s1-color"
                                        ></i>
                                      </li>
                                      <li>
                                        <i
                                          class="ti ti-star-filled fs-six fw_400 s1-color"
                                        ></i>
                                      </li>
                                      <li>
                                        <i
                                          class="ti ti-star-filled fs-six fw_400 s1-color"
                                        ></i>
                                      </li>
                                      <li>
                                        <i
                                          class="ti ti-star-filled fs-six fw_400 s1-color"
                                        ></i>
                                      </li>
                                      <li>
                                        <i
                                          class="ti ti-star-half-filled fs-six fw_400 s1-color"
                                        ></i>
                                      </li>
                                    </ul>
                                    <p class="n700-color">
                                      "I can't thank enough for the incredible
                                      courses they offer. I completed the 'Web
                                      Development Fundamentals' course, and it
                                      not only gave me the skills.”
                                    </p>
                                  </div>
                                  <div
                                    class="author__attach bb-n50dash pb-xxl-6 pb-5 mb-5 mb-xxl-6 mb-5 gap-xxl-6 gap-xl-5 gap-3 d-flex align-items-center"
                                  >
                                    <div class="author">
                                      <img
                                        src="{{ $path }}frontstyles/assets/images/common/coms3.png"
                                        class="radius100"
                                        alt="img"
                                      />
                                    </div>
                                    <div class="cont__box">
                                      <span
                                        class="fs20 fw_500 n700-color d-block mb-0"
                                      >
                                        Ronald Richards
                                      </span>
                                      <span class="fs-eight fw_400 n700-color"
                                        >Softwere Developer</span
                                      >
                                    </div>
                                  </div>
                                  <div class="comment__boxcontent">
                                    <div
                                      class="feedback__content d-flex align-items-center gap-xxl-10 gap-8"
                                    >
                                      <a
                                        href="javascript:void(0)"
                                        class="like d-flex align-items-center n500-color fw-400 gap-2 fs18"
                                      >
                                        <i
                                          class="ti ti-thumb-up n500-color fs-22 fw-400"
                                        ></i>
                                        178
                                      </a>
                                      <a
                                        href="javascript:void(0)"
                                        class="reply d-flex align-items-center n500-color fw-400 gap-2 fs18"
                                      >
                                        <i
                                          class="ti ti-message n500-color fs20 fw-400"
                                        ></i>
                                        Reply
                                      </a>
                                    </div>
                                    <div class="reply__content">
                                      <div
                                        class="d-flex small__author gap-xl-3 gap-2 align-items-center"
                                      >
                                        <div class="author__thumbs">
                                          <img
                                            src="{{ $path }}frontstyles/assets/images/common/coms2.png"
                                            class="radius100"
                                            alt="Author"
                                          />
                                        </div>
                                        <form
                                          action="#"
                                          class="d-flex discussion-box align-items-center cus-border border radius100 n0-bg w-100 py-0"
                                        >
                                          <input
                                            type="text"
                                            name="replytext"
                                            placeholder="Join the discussion..."
                                            required
                                            class="radius100"
                                          />
                                        </form>
                                      </div>
                                    </div>
                                  </div>
                                </div>
                                <div
                                  class="comments__box radius16 mb-xxl-8 mb-6 cus-border border py-xl-6 py-5 px-xl-6 px-5 n20-bg"
                                >
                                  <div
                                    class="d-flex fw-400 gap-4 bb-n50dash align-items-center pb-xxl-6 pb-5 mb-5 mb-xxl-6 mb-5"
                                  >
                                    <span class="n700-color">Mar 03, 2024</span>
                                    <span class="dot-fixed"></span>
                                    <span class="n700-color fw-400"
                                      >09:01 am</span
                                    >
                                  </div>
                                  <div
                                    class="bb-n50dash pb-24 mb-24 pb-xxl-6 pb-5 mb-5 mb-xxl-6 mb-5"
                                  >
                                    <ul
                                      class="start d-flex mb-xxl-4 mb-2 align-items-center gap-2"
                                    >
                                      <li>
                                        <i
                                          class="ti ti-star-filled fs-six fw_400 s1-color"
                                        ></i>
                                      </li>
                                      <li>
                                        <i
                                          class="ti ti-star-filled fs-six fw_400 s1-color"
                                        ></i>
                                      </li>
                                      <li>
                                        <i
                                          class="ti ti-star-filled fs-six fw_400 s1-color"
                                        ></i>
                                      </li>
                                      <li>
                                        <i
                                          class="ti ti-star-filled fs-six fw_400 s1-color"
                                        ></i>
                                      </li>
                                      <li>
                                        <i
                                          class="ti ti-star-half-filled fs-six fw_400 s1-color"
                                        ></i>
                                      </li>
                                    </ul>
                                    <p class="n700-color">
                                      "I can't thank enough for the incredible
                                      courses they offer. I completed the 'Web
                                      Development Fundamentals' course, and it
                                      not only gave me the skills.”
                                    </p>
                                  </div>
                                  <div
                                    class="author__attach bb-n50dash pb-xxl-6 pb-5 mb-5 mb-xxl-6 mb-5 gap-xxl-6 gap-xl-5 gap-3 d-flex align-items-center"
                                  >
                                    <div class="author">
                                      <img
                                        src="{{ $path }}frontstyles/assets/images/common/coms4.png"
                                        class="radius100"
                                        alt="img"
                                      />
                                    </div>
                                    <div class="cont__box">
                                      <span
                                        class="fs20 fw_500 n700-color d-block mb-0"
                                      >
                                        Arlene McCoy
                                      </span>
                                      <span class="fs-eight fw_400 n700-color"
                                        >Ethical Hacker</span
                                      >
                                    </div>
                                  </div>
                                  <div class="comment__boxcontent">
                                    <div
                                      class="feedback__content d-flex align-items-center gap-xxl-10 gap-8"
                                    >
                                      <a
                                        href="javascript:void(0)"
                                        class="like d-flex align-items-center n500-color fw-400 gap-2 fs18"
                                      >
                                        <i
                                          class="ti ti-thumb-up n500-color fs-22 fw-400"
                                        ></i>
                                        178
                                      </a>
                                      <a
                                        href="javascript:void(0)"
                                        class="reply d-flex align-items-center n500-color fw-400 gap-2 fs18"
                                      >
                                        <i
                                          class="ti ti-message n500-color fs20 fw-400"
                                        ></i>
                                        Reply
                                      </a>
                                    </div>
                                    <div class="reply__content">
                                      <div
                                        class="d-flex small__author gap-xl-3 gap-2 align-items-center"
                                      >
                                        <div class="author__thumbs">
                                          <img
                                            src="{{ $path }}frontstyles/assets/images/common/coms3.png"
                                            class="radius100"
                                            alt="Author"
                                          />
                                        </div>
                                        <form
                                          action="#"
                                          class="d-flex discussion-box align-items-center cus-border border radius100 n0-bg w-100 py-0"
                                        >
                                          <input
                                            type="text"
                                            name="replytext"
                                            placeholder="Join the discussion..."
                                            required
                                            class="radius100"
                                          />
                                        </form>
                                      </div>
                                    </div>
                                  </div>
                                </div>
                                <a
                                  href="#0"
                                  class="cmn-btn mb-lg-2 mt-2 fw_600 justify-content-center d-inline-flex align-items-center gap-2 py-3 px-xxl-6 px-5 n700-color"
                                >
                                  <span> See All Reviews </span>
                                  <i class="ti ti-arrow-up-right fs-six"></i>
                                </a>
                              </div>
                              <!--review write-->
                              <div
                                class="n0-bg radius16 cus-border border py-xxl-8 py-xl-6 py-4 px-xxl-8 px-xl-6 px-4"
                              >
                                <h5
                                  class="n700-color bb-704 pb-xxl-6 pb-5 mb-xxl-6 mb-5"
                                >
                                  Write a Reviews
                                </h5>
                                <div class="tab-instructor">
                                  <div
                                    class="write-reviewbox py-xxl-10 py-xl-8 py-lg-6 py-5 px-xxl-10 px-xl-8 px-lg-6 px-5 n20-bg radius32 cus-border border"
                                  >
                                    <h5
                                      class="bb-n40dash pb-xxl-6 pb-5 mb-xxl-6 mb-5"
                                    >
                                      Write a Reviews
                                    </h5>
                                    <form action="#0" class="writere-v1">
                                      <div class="form-cmn mb-xxl-6 mb-5">
                                        <label
                                          for="names"
                                          class="fs-six fw_500 n700-color mb-xxl-3 mb-2"
                                          >Name</label
                                        >
                                        <input
                                          type="text"
                                          placeholder="Enter Name..."
                                          id="names"
                                        />
                                      </div>
                                      <div class="form-cmn mb-xxl-6 mb-5">
                                        <label
                                          for="em"
                                          class="fs-six fw_500 n700-color mb-xxl-3 mb-2"
                                          >Email</label
                                        >
                                        <input
                                          type="email"
                                          placeholder="Enter Email..."
                                          id="em"
                                        />
                                      </div>
                                      <div class="form-cmn mb-xxl-6 mb-5">
                                        <label
                                          class="fs-six fw_500 n700-color mb-xxl-2 mb-2"
                                          >Star Reviews</label
                                        >
                                        <ul
                                          class="start d-flex align-items-center gap-3"
                                        >
                                          <li>
                                            <i
                                              class="ti ti-star fs-five fw_400 s1-color"
                                            ></i>
                                          </li>
                                          <li>
                                            <i
                                              class="ti ti-star fs-five fw_400 s1-color"
                                            ></i>
                                          </li>
                                          <li>
                                            <i
                                              class="ti ti-star fs-five fw_400 s1-color"
                                            ></i>
                                          </li>
                                          <li>
                                            <i
                                              class="ti ti-star fs-five fw_400 s1-color"
                                            ></i>
                                          </li>
                                          <li>
                                            <i
                                              class="ti ti-star fs-five fw_400 s1-color"
                                            ></i>
                                          </li>
                                        </ul>
                                      </div>
                                      <div class="form-cmn mb-xxl-6 mb-5">
                                        <label
                                          for="rev"
                                          class="fs-six fw_500 n700-color mb-xxl-3 mb-2"
                                          >Reviews</label
                                        >
                                        <textarea
                                          name="write"
                                          id="rev"
                                          rows="4"
                                          placeholder="Write a Reviews"
                                        ></textarea>
                                      </div>
                                      <button
                                        type="submit"
                                        class="cmn-btn mt-xxl-8 mt-6 fw_600 justify-content-center d-flex align-items-center gap-2 py-3 px-xl-6 px-5 n700-color"
                                      >
                                        <span> Submit Reviews </span>
                                        <i
                                          class="ti ti-arrow-up-right fs-six"
                                        ></i>
                                      </button>
                                    </form>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                          <div class="col-lg-4">
                            <div
                              class="course-probiowrap-right overflow-visible course-reviewfixed"
                            >
                              <div
                                class="active-userbox n0-bg cus-border border radius32 py-xxl-8 py-xxl-6 py-4 px-xxl-8 px-xl-6 px-4 mb-xxl-6 mb-5"
                              >
                                <h5
                                  class="n700-color bb-n40dash pb-xxl-6 pb-5 mb-xxl-6 mb-5"
                                >
                                  Search
                                </h5>
                                <form
                                  action="#"
                                  class="search-toggle-box d-block"
                                >
                                  <div
                                    class="input-area d-flex n20-bg align-items-center gap-2 py-1 px-6 py-lg-2 px-2 radius30"
                                  >
                                    <input
                                      type="text"
                                      class="px-4"
                                      placeholder="Search"
                                    />
                                    <button class="cmn-btn search__icon40">
                                      <span>
                                        <i
                                          class="fa-solid fa-magnifying-glass n4-color"
                                        ></i>
                                      </span>
                                    </button>
                                  </div>
                                </form>
                              </div>
                              <div
                                class="latest-activities active-userbox n0-bg cus-border border radius32 py-xxl-8 py-xl-6 py-4 px-xxl-8 px-xl-6 px-4 mb-xxl-6 mb-5"
                              >
                                <h5
                                  class="n700-color bb-n40dash pb-xxl-6 pb-5 mb-xxl-6 mb-5"
                                >
                                  More Instructor
                                </h5>
                                <a
                                  href="instructor.html"
                                  class="latest-activiti-item d-flex align-items-center flex-wrap gap-xxl-6 gap-xl-3 gap-2 bb-n40dash pb-xxl-6 pb-5 mb-xxl-6 mb-5"
                                >
                                  <img
                                    src="{{ $path }}frontstyles/assets/images/common/henry.png"
                                    alt="img"
                                    class="radius100 cmn__icon80"
                                  />
                                  <span class="cont">
                                    <span
                                      class="fs20 mb-1 fw_500 n700-color d-flex align-items-center flex-wrap"
                                    >
                                      Esther Howard
                                    </span>
                                    <span class="fs-seven">
                                      UI/UX Designer
                                    </span>
                                  </span>
                                </a>
                                <a
                                  href="instructor.html"
                                  class="latest-activiti-item d-flex align-items-center flex-wrap gap-xxl-6 gap-xl-3 gap-2 bb-n40dash pb-xxl-6 pb-5 mb-xxl-6 mb-5"
                                >
                                  <img
                                    src="{{ $path }}frontstyles/assets/images/common/floyd.png"
                                    alt="img"
                                    class="radius100 cmn__icon80"
                                  />
                                  <span class="cont">
                                    <span
                                      class="fs20 mb-1 fw_500 n700-color d-flex align-items-center flex-wrap"
                                    >
                                      Floyd Miles
                                    </span>
                                    <span class="fs-seven"> Team Leader </span>
                                  </span>
                                </a>
                                <a
                                  href="instructor.html"
                                  class="latest-activiti-item d-flex align-items-center flex-wrap gap-xxl-6 gap-xl-3 gap-2 bb-n40dash pb-xxl-6 pb-5 mb-xxl-5 mb-4"
                                >
                                  <img
                                    src="{{ $path }}frontstyles/assets/images/team/acc2.png"
                                    alt="img"
                                    class="radius100 cmn__icon80"
                                  />
                                  <span class="cont">
                                    <span
                                      class="fs20 mb-1 fw_500 n700-color d-flex align-items-center flex-wrap"
                                    >
                                      Jacob Jones
                                    </span>
                                    <span class="fs-seven"> Scrum Master </span>
                                  </span>
                                </a>
                                <a
                                  href="instructor.html"
                                  class="d-inline-flex bbsolid-700 n700-color fw_600"
                                >
                                  See All
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
                <form
                  action="#0"
                  class="mb-5 mb-xl-6 d-flex align-items-center"
                >
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
                     <a href="https://www.facebook.com/leforuminternational?mibextid=ZbWKwL" target="_blank" class="d-center">
                         <i class="ti ti-brand-facebook fw_400 fs-five"></i>
                     </a>
                 </li>
                 <li>
                     <a href="https://www.instagram.com/leforuminternational/" target="_blank" class="d-center">
                         <i class="ti ti-brand-instagram fw_400 fs-five"></i>
                     </a>
                 </li>
                 <li>
                     <a href="https://wa.me/+97433651797" target="_blank" class="d-center">
                         <i class="fab fa-whatsapp fw_400 fs-five"></i>
                     </a>
                 </li>
                 <li>
                     <a href="https://www.youtube.com/@LeForumInternational" target="_blank" class="d-center">
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
                      <!-- <span class="d-block n0-color"> (303) 555-0105 </span> -->
                    </a>
                  </li>
                  <li class="d-flex gap-3 gap-xl-5 mb-4 mb-xl-6">
                    <span class="icon cmn__social d-center">
                      <i class="ti ti-mail-opened fs-five fw_400"></i>
                    </span>
                    <a href="#0" class="p1hover">
                      info@leforuminternational.com
                      <!-- <span class="d-block n0-color"> example@gmail.com </span> -->
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
            class="footer__bottomone__content bt-dash d-grid justify-content-center text-center py-6 py-lg-10 d-md-flex align-items-center justify-content-lg-between gap-2 gap-md-15"
          >
          <p class="fs-seven n0-color">
            © 2024 Le Forum | Powered by <a href="https://howincloud.com/" class="link-hover-dark-primary font-weight-semibold" target="_blank"><span style="font-size: 16px; font-weight: bolder; color: white">Howin </span><span style="font-size: 13px; font-weight: 600; color: white" >CLOUD</span></a>
        </p>
            <!-- <ul
              class="terms__one d-flex justify-content-center align-items-center gap-4 gap-lg-6"
            >
              <li>
                <a href="#" class="fs-seven n0-color p1hover">
                  Terms & Conditions
                </a>
              </li>
              <li>
                <a href="#" class="fs-seven n0-color p1hover">
                  Privacy Policy
                </a>
              </li>
            </ul> -->
          </div>
        </div>
      </div>
    </footer>
    <!-- footer end -->


    <script src="{{ $path }}frontstyles/assets/js/plugins/plugins.js"></script>
    <script src="{{ $path }}frontstyles/assets/js/plugins/plugin-custom.js"></script>
    <script src="{{ $path }}frontstyles/assets/js/apexcharts.js"></script>
    <script src="{{ $path }}frontstyles/assets/js/plugins/aos.js"></script>
    <script src="{{ $path }}frontstyles/assets/js/main.js"></script>
  </body>


</html>
