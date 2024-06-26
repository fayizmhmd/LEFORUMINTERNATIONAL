@include('frontend.layouts.header');
@php
    $path = asset('/');
@endphp

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
                                                    <a href="#">
                                                        <div class="explore__item cmnhover" data-aos="zoom-in"
                                                            data-aos-duration="1500">
                                                            <div class="thumb over w-100 position-relative">
                                                                <img style="height: 200px;"
                                                                    src="{{ $path . json_decode($college->image, true)[0] }}"
                                                                    class="w-100 radius32 mimg" alt="img" />
                                                            </div>
                                                            <div
                                                                class="content pt-5 pt-xxl-6 px-0 px-xl-3 px-xxl-4 pb-xxl-4 pb-3">

                                                                <h4 class="mb-4 mb-xl-5">
                                                                    <a href="{{ route('front.viewOneColleges', ['id' => $college->id]) }}"
                                                                        class="ptext">
                                                                        {{ $college->name }}
                                                                    </a>
                                                                </h4>
                                                                <div
                                                                    class="d-flex align-items-center justify-start mb-2 mb-xl-6">
                                                                    <span
                                                                        style="background-color: rgb(100, 200, 100); color:white; font-size: 10px; padding: 0.5em;"
                                                                        class="rounded fw_600 py-1 py-xl-2 px-1 px-xl-2">
                                                                        {{ $college->rating }}
                                                                    </span>

                                                                    <span style="color: black;"
                                                                        class="py-1 py-xl-2 px-3 px-xl-4">
                                                                        4 rating
                                                                    </span>

                                                                </div>
                                                                <div
                                                                    class="d-flex align-items-center justify-content-between bb-704 pb-4 pb-xxl-4 mb-3 mb-xxl-3">
                                                                    <div
                                                                        class="d-flex align-items-center gap-1 gap-xl-2">

                                                                        <h6 class="n700-color fw_500"
                                                                            style="overflow: hidden; text-overflow: ellipsis; display: -webkit-box; -webkit-line-clamp: 5; -webkit-box-orient: vertical;">
                                                                            {{ substr(strip_tags($college->description), 0, 300) }}
                                                                        </h6>
                                                                    </div>

                                                                </div>

                                                            </div>
                                                        </div>
                                                    </a>
                                                </div>
                                            @endforeach
                                        </div>
                                        {{-- <ul
                                                class="pagination mt-10 d-flex justify-content-center align-items-center gap-xxl-3 gap-2 flex-wrap">
                                                <li>
                                                    <a href="javascript:void(0)"
                                                        class="n20-bg cmn__icon32 fw_600 d-center radius100 cus-border border">
                                                        <i class="ti ti-chevron-left fs-six"></i>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="javascript:void(0)"
                                                        class="n20-bg cmn__icon32 fw_600 d-center radius100 cus-border border">
                                                        1
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="javascript:void(0)"
                                                        class="n20-bg cmn__icon32 fw_600 d-center radius100 cus-border border">
                                                        2
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="javascript:void(0)"
                                                        class="n20-bg cmn__icon32 fw_600 d-center radius100 cus-border border">
                                                        3
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="javascript:void(0)"
                                                        class="n20-bg cmn__icon32 fw_600 d-center radius100 cus-border border">
                                                        ...
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="javascript:void(0)"
                                                        class="n20-bg cmn__icon32 fw_600 d-center radius100 cus-border border">
                                                        <i class="ti ti-chevron-right fs-six"></i>
                                                    </a>
                                                </li>
                                            </ul> --}}
                                    </div>
                                    <div class="tabitem">
                                        <div class="row g-6">
                                            <div class="col-lg-8">
                                                <div
                                                    class="course-probiowrap cus-border border radius16 n0-bg p-xxl-10 p-6">
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
                                                        <span class="head fs20 n700-color mb-xxl-4 mb-3">
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
                                                        <span class="head fw_600 n700-color mb-xxl-4 mb-3">
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
                                                        class="active-userbox n0-bg cus-border border radius32 py-xxl-8 py-xxl-6 py-4 px-xxl-8 px-xl-6 px-4 mb-xxl-6 mb-5">
                                                        <h5 class="n700-color bb-n40dash pb-xxl-6 pb-5 mb-xxl-6 mb-5">
                                                            Search
                                                        </h5>
                                                        <form action="#" class="search-toggle-box d-block">
                                                            <div
                                                                class="input-area d-flex n20-bg align-items-center gap-2 py-1 px-6 py-lg-2 px-2 radius30">
                                                                <input type="text" class="px-4"
                                                                    placeholder="Search" />
                                                                <button class="cmn-btn search__icon40">
                                                                    <span>
                                                                        <i
                                                                            class="fa-solid fa-magnifying-glass n4-color"></i>
                                                                    </span>
                                                                </button>
                                                            </div>
                                                        </form>
                                                    </div>
                                                    <div
                                                        class="latest-activities active-userbox n0-bg cus-border border radius32 py-xxl-8 py-xl-6 py-4 px-xxl-8 px-xl-6 px-4 mb-xxl-6 mb-5">
                                                        <h5 class="n700-color bb-n40dash pb-xxl-6 pb-5 mb-xxl-6 mb-5">
                                                            More Instructor
                                                        </h5>
                                                        <a href="instructor.html"
                                                            class="latest-activiti-item d-flex align-items-center flex-wrap gap-xxl-6 gap-xl-3 gap-2 bb-n40dash pb-xxl-6 pb-5 mb-xxl-6 mb-5">
                                                            <img src="{{ $path }}frontstyles/assets/images/common/henry.png"
                                                                alt="img" class="radius100 cmn__icon80" />
                                                            <span class="cont">
                                                                <span
                                                                    class="fs20 mb-1 fw_500 n700-color d-flex align-items-center flex-wrap">
                                                                    Esther Howard
                                                                </span>
                                                                <span class="fs-seven">
                                                                    UI/UX Designer
                                                                </span>
                                                            </span>
                                                        </a>
                                                        <a href="instructor.html"
                                                            class="latest-activiti-item d-flex align-items-center flex-wrap gap-xxl-6 gap-xl-3 gap-2 bb-n40dash pb-xxl-6 pb-5 mb-xxl-6 mb-5">
                                                            <img src="{{ $path }}frontstyles/assets/images/common/floyd.png"
                                                                alt="img" class="radius100 cmn__icon80" />
                                                            <span class="cont">
                                                                <span
                                                                    class="fs20 mb-1 fw_500 n700-color d-flex align-items-center flex-wrap">
                                                                    Floyd Miles
                                                                </span>
                                                                <span class="fs-seven"> Team Leader </span>
                                                            </span>
                                                        </a>
                                                        <a href="instructor.html"
                                                            class="latest-activiti-item d-flex align-items-center flex-wrap gap-xxl-6 gap-xl-3 gap-2 bb-n40dash pb-xxl-6 pb-5 mb-xxl-5 mb-4">
                                                            <img src="{{ $path }}frontstyles/assets/images/team/acc2.png"
                                                                alt="img" class="radius100 cmn__icon80" />
                                                            <span class="cont">
                                                                <span
                                                                    class="fs20 mb-1 fw_500 n700-color d-flex align-items-center flex-wrap">
                                                                    Jacob Jones
                                                                </span>
                                                                <span class="fs-seven"> Scrum Master </span>
                                                            </span>
                                                        </a>
                                                        <a href="instructor.html"
                                                            class="d-inline-flex ser-see bbsolid-700 n700-color fw_600">
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
                                                        class="average-review-v1 cus-border border box-shadow4 py-xxl-10 py-xl-8 py-lg-6 py-5 px-xxl-10 px-xl-8 px-lg-6 px-5 n0-bg radius16 mb-xxl-10 mb-xl-8 mb-6">
                                                        <div class="write-reviewbox">
                                                            <h5 class="bb-n40dash pb-xxl-8 pb-6 mb-xxl-8 mb-6">
                                                                Average Reviews
                                                            </h5>
                                                            <div
                                                                class="ratting-box bb-n40dash pb-xxl-8 pb-6 mb-xxl-8 mb-6 d-grid d-sm-flex align-items-center gap-xxl-10 gap-lg-8 gap-6">
                                                                <div
                                                                    class="cirbox py-6 px-11 text-center s1-bg radius16">
                                                                    <h3
                                                                        class="d-flex justify-content-center align-items-end n700-color mb-2">
                                                                        4.9
                                                                        <span class="fs-five"> /5 </span>
                                                                    </h3>
                                                                    <ul
                                                                        class="start d-flex mb-2 justify-content-center align-items-center gap-1">
                                                                        <li>
                                                                            <i
                                                                                class="ti ti-star-filled fw_400 n700-color"></i>
                                                                        </li>
                                                                        <li>
                                                                            <i
                                                                                class="ti ti-star-filled fw_400 n700-color"></i>
                                                                        </li>
                                                                        <li>
                                                                            <i
                                                                                class="ti ti-star-filled fw_400 n700-color"></i>
                                                                        </li>
                                                                        <li>
                                                                            <i
                                                                                class="ti ti-star-filled fw_400 n700-color"></i>
                                                                        </li>
                                                                        <li>
                                                                            <i
                                                                                class="ti ti-star-half-filled fw_400 n700-color"></i>
                                                                        </li>
                                                                    </ul>
                                                                    <span class="n700-color text-center">
                                                                        26 Rating
                                                                    </span>
                                                                </div>
                                                                <div class="progress-box w-100">
                                                                    <div class="consulting__progresswrap wow fadeInUp"
                                                                        data-wow-duration="1.9s">
                                                                        <div
                                                                            class="consulting-progress mb-xl-2 mb-1 d-flex align-items-center gap-xxl-5 gap-3 w-100">
                                                                            <span
                                                                                class="conssub d-flex align-items-center gap-1">
                                                                                <i
                                                                                    class="ti ti-star-filled s1-color"></i>
                                                                                5
                                                                            </span>
                                                                            <div class="progress">
                                                                                <div class="progress-bar wow slideInLeft"
                                                                                    data-wow-duration=".8s"
                                                                                    role="progressbar"
                                                                                    style="width: 90%"
                                                                                    aria-valuenow="90"
                                                                                    aria-valuemin="0"
                                                                                    aria-valuemax="100"></div>
                                                                            </div>
                                                                            <span class="n500-color"> 90% </span>
                                                                        </div>
                                                                        <div
                                                                            class="consulting-progress mb-xl-2 mb-1 d-flex align-items-center gap-xxl-5 gap-3 w-100">
                                                                            <span
                                                                                class="conssub d-flex align-items-center gap-1">
                                                                                <i
                                                                                    class="ti ti-star-filled s1-color"></i>
                                                                                4
                                                                            </span>
                                                                            <div class="progress">
                                                                                <div class="progress-bar wow slideInLeft"
                                                                                    data-wow-duration=".8s"
                                                                                    role="progressbar"
                                                                                    style="width: 75%"
                                                                                    aria-valuenow="75"
                                                                                    aria-valuemin="0"
                                                                                    aria-valuemax="100"></div>
                                                                            </div>
                                                                            <span class="n500-color"> 75% </span>
                                                                        </div>
                                                                        <div
                                                                            class="consulting-progress mb-xl-2 mb-1 d-flex align-items-center gap-xxl-5 gap-3 w-100">
                                                                            <span
                                                                                class="conssub d-flex align-items-center gap-1">
                                                                                <i
                                                                                    class="ti ti-star-filled s1-color"></i>
                                                                                3
                                                                            </span>
                                                                            <div class="progress">
                                                                                <div class="progress-bar wow slideInLeft"
                                                                                    data-wow-duration=".8s"
                                                                                    role="progressbar"
                                                                                    style="width: 67%"
                                                                                    aria-valuenow="67"
                                                                                    aria-valuemin="0"
                                                                                    aria-valuemax="100"></div>
                                                                            </div>
                                                                            <span class="n500-color"> 67% </span>
                                                                        </div>
                                                                        <div
                                                                            class="consulting-progress mb-xl-2 mb-1 d-flex align-items-center gap-xxl-5 gap-3 w-100">
                                                                            <span
                                                                                class="conssub d-flex align-items-center gap-1">
                                                                                <i
                                                                                    class="ti ti-star-filled s1-color"></i>
                                                                                2
                                                                            </span>
                                                                            <div class="progress">
                                                                                <div class="progress-bar wow slideInLeft"
                                                                                    data-wow-duration=".8s"
                                                                                    role="progressbar"
                                                                                    style="width: 44%"
                                                                                    aria-valuenow="44"
                                                                                    aria-valuemin="0"
                                                                                    aria-valuemax="100"></div>
                                                                            </div>
                                                                            <span class="n500-color"> 44% </span>
                                                                        </div>
                                                                        <div
                                                                            class="consulting-progress mb-xl-2 mb-1 d-flex align-items-center gap-xxl-5 gap-3 w-100">
                                                                            <span
                                                                                class="conssub d-flex align-items-center gap-1">
                                                                                <i
                                                                                    class="ti ti-star-filled s1-color"></i>
                                                                                1
                                                                            </span>
                                                                            <div class="progress">
                                                                                <div class="progress-bar wow slideInLeft"
                                                                                    data-wow-duration=".8s"
                                                                                    role="progressbar"
                                                                                    style="width: 21%"
                                                                                    aria-valuenow="21"
                                                                                    aria-valuemin="0"
                                                                                    aria-valuemax="100"></div>
                                                                            </div>
                                                                            <span class="n500-color"> 21% </span>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div
                                                            class="d-flex flex-wrap gap-3 newest__filter align-items-center justify-content-between mb-xxl-10 mb-6">
                                                            <span class="fs20 n700-color fw_600">
                                                                All Reviews
                                                            </span>
                                                            <div class="d-flex align-items-center gap-2">
                                                                <span class="n500-color d-block">
                                                                    Sort By :
                                                                </span>
                                                                <div class="lang">
                                                                    <select name="news"
                                                                        class="cus-scro80 cus-border border radius32 ps-5 py-2 pe-8">
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
                                                            class="comments__box radius16 mb-xxl-8 mb-6 cus-border border py-xl-6 py-5 px-xl-6 px-5 n20-bg">
                                                            <div
                                                                class="d-flex fw-400 gap-4 bb-n50dash align-items-center pb-xxl-6 pb-5 mb-5 mb-xxl-6 mb-5">
                                                                <span class="n700-color">Mar 03, 2024</span>
                                                                <span class="dot-fixed"></span>
                                                                <span class="n700-color fw-400">09:01 am</span>
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
                                                                    "I can't thank enough for the incredible
                                                                    courses they offer. I completed the 'Web
                                                                    Development Fundamentals' course, and it
                                                                    not only gave me the skills.”
                                                                </p>
                                                            </div>
                                                            <div
                                                                class="author__attach bb-n50dash pb-xxl-6 pb-5 mb-5 mb-xxl-6 mb-5 gap-xxl-6 gap-xl-5 gap-3 d-flex align-items-center">
                                                                <div class="author">
                                                                    <img src="{{ $path }}frontstyles/assets/images/common/coms1.png"
                                                                        class="radius100" alt="img" />
                                                                </div>
                                                                <div class="cont__box">
                                                                    <span class="fs20 fw_500 n700-color d-block mb-0">
                                                                        Esther Howard
                                                                    </span>
                                                                    <span class="fs-eight fw_400 n700-color">Project
                                                                        Manager</span>
                                                                </div>
                                                            </div>
                                                            <div class="comment__boxcontent">
                                                                <div
                                                                    class="feedback__content d-flex align-items-center gap-xxl-10 gap-8">
                                                                    <a href="javascript:void(0)"
                                                                        class="like d-flex align-items-center n500-color fw-400 gap-2 fs18">
                                                                        <i
                                                                            class="ti ti-thumb-up n500-color fs-22 fw-400"></i>
                                                                        178
                                                                    </a>
                                                                    <a href="javascript:void(0)"
                                                                        class="reply d-flex align-items-center n500-color fw-400 gap-2 fs18">
                                                                        <i
                                                                            class="ti ti-message n500-color fs20 fw-400"></i>
                                                                        Reply
                                                                    </a>
                                                                </div>
                                                                <div class="reply__content">
                                                                    <div
                                                                        class="d-flex small__author gap-xl-3 gap-2 align-items-center">
                                                                        <div class="author__thumbs">
                                                                            <img src="{{ $path }}frontstyles/assets/images/common/coms1.png"
                                                                                class="radius100" alt="Author" />
                                                                        </div>
                                                                        <form action="#"
                                                                            class="d-flex discussion-box align-items-center cus-border border radius100 n0-bg w-100 py-0">
                                                                            <input type="text" name="replytext"
                                                                                placeholder="Join the discussion..."
                                                                                required class="radius100" />
                                                                        </form>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div
                                                            class="comments__box radius16 mb-xxl-8 mb-6 cus-border border py-xl-6 py-5 px-xl-6 px-5 n20-bg">
                                                            <div
                                                                class="d-flex fw-400 gap-4 bb-n50dash align-items-center pb-xxl-6 pb-5 mb-5 mb-xxl-6 mb-5">
                                                                <span class="n700-color">Mar 03, 2024</span>
                                                                <span class="dot-fixed"></span>
                                                                <span class="n700-color fw-400">09:01 am</span>
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
                                                                    "I can't thank enough for the incredible
                                                                    courses they offer. I completed the 'Web
                                                                    Development Fundamentals' course, and it
                                                                    not only gave me the skills.”
                                                                </p>
                                                            </div>
                                                            <div
                                                                class="author__attach bb-n50dash pb-xxl-6 pb-5 mb-5 mb-xxl-6 mb-5 gap-xxl-6 gap-xl-5 gap-3 d-flex align-items-center">
                                                                <div class="author">
                                                                    <img src="{{ $path }}frontstyles/assets/images/common/coms3.png"
                                                                        class="radius100" alt="img" />
                                                                </div>
                                                                <div class="cont__box">
                                                                    <span class="fs20 fw_500 n700-color d-block mb-0">
                                                                        Ronald Richards
                                                                    </span>
                                                                    <span class="fs-eight fw_400 n700-color">Softwere
                                                                        Developer</span>
                                                                </div>
                                                            </div>
                                                            <div class="comment__boxcontent">
                                                                <div
                                                                    class="feedback__content d-flex align-items-center gap-xxl-10 gap-8">
                                                                    <a href="javascript:void(0)"
                                                                        class="like d-flex align-items-center n500-color fw-400 gap-2 fs18">
                                                                        <i
                                                                            class="ti ti-thumb-up n500-color fs-22 fw-400"></i>
                                                                        178
                                                                    </a>
                                                                    <a href="javascript:void(0)"
                                                                        class="reply d-flex align-items-center n500-color fw-400 gap-2 fs18">
                                                                        <i
                                                                            class="ti ti-message n500-color fs20 fw-400"></i>
                                                                        Reply
                                                                    </a>
                                                                </div>
                                                                <div class="reply__content">
                                                                    <div
                                                                        class="d-flex small__author gap-xl-3 gap-2 align-items-center">
                                                                        <div class="author__thumbs">
                                                                            <img src="{{ $path }}frontstyles/assets/images/common/coms2.png"
                                                                                class="radius100" alt="Author" />
                                                                        </div>
                                                                        <form action="#"
                                                                            class="d-flex discussion-box align-items-center cus-border border radius100 n0-bg w-100 py-0">
                                                                            <input type="text" name="replytext"
                                                                                placeholder="Join the discussion..."
                                                                                required class="radius100" />
                                                                        </form>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div
                                                            class="comments__box radius16 mb-xxl-8 mb-6 cus-border border py-xl-6 py-5 px-xl-6 px-5 n20-bg">
                                                            <div
                                                                class="d-flex fw-400 gap-4 bb-n50dash align-items-center pb-xxl-6 pb-5 mb-5 mb-xxl-6 mb-5">
                                                                <span class="n700-color">Mar 03, 2024</span>
                                                                <span class="dot-fixed"></span>
                                                                <span class="n700-color fw-400">09:01 am</span>
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
                                                                    "I can't thank enough for the incredible
                                                                    courses they offer. I completed the 'Web
                                                                    Development Fundamentals' course, and it
                                                                    not only gave me the skills.”
                                                                </p>
                                                            </div>
                                                            <div
                                                                class="author__attach bb-n50dash pb-xxl-6 pb-5 mb-5 mb-xxl-6 mb-5 gap-xxl-6 gap-xl-5 gap-3 d-flex align-items-center">
                                                                <div class="author">
                                                                    <img src="{{ $path }}frontstyles/assets/images/common/coms4.png"
                                                                        class="radius100" alt="img" />
                                                                </div>
                                                                <div class="cont__box">
                                                                    <span class="fs20 fw_500 n700-color d-block mb-0">
                                                                        Arlene McCoy
                                                                    </span>
                                                                    <span class="fs-eight fw_400 n700-color">Ethical
                                                                        Hacker</span>
                                                                </div>
                                                            </div>
                                                            <div class="comment__boxcontent">
                                                                <div
                                                                    class="feedback__content d-flex align-items-center gap-xxl-10 gap-8">
                                                                    <a href="javascript:void(0)"
                                                                        class="like d-flex align-items-center n500-color fw-400 gap-2 fs18">
                                                                        <i
                                                                            class="ti ti-thumb-up n500-color fs-22 fw-400"></i>
                                                                        178
                                                                    </a>
                                                                    <a href="javascript:void(0)"
                                                                        class="reply d-flex align-items-center n500-color fw-400 gap-2 fs18">
                                                                        <i
                                                                            class="ti ti-message n500-color fs20 fw-400"></i>
                                                                        Reply
                                                                    </a>
                                                                </div>
                                                                <div class="reply__content">
                                                                    <div
                                                                        class="d-flex small__author gap-xl-3 gap-2 align-items-center">
                                                                        <div class="author__thumbs">
                                                                            <img src="{{ $path }}frontstyles/assets/images/common/coms3.png"
                                                                                class="radius100" alt="Author" />
                                                                        </div>
                                                                        <form action="#"
                                                                            class="d-flex discussion-box align-items-center cus-border border radius100 n0-bg w-100 py-0">
                                                                            <input type="text" name="replytext"
                                                                                placeholder="Join the discussion..."
                                                                                required class="radius100" />
                                                                        </form>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <a href="#0"
                                                            class="cmn-btn mb-lg-2 mt-2 fw_600 justify-content-center d-inline-flex align-items-center gap-2 py-3 px-xxl-6 px-5 n700-color">
                                                            <span> See All Reviews </span>
                                                            <i class="ti ti-arrow-up-right fs-six"></i>
                                                        </a>
                                                    </div>
                                                    <!--review write-->
                                                    <div
                                                        class="n0-bg radius16 cus-border border py-xxl-8 py-xl-6 py-4 px-xxl-8 px-xl-6 px-4">
                                                        <h5 class="n700-color bb-704 pb-xxl-6 pb-5 mb-xxl-6 mb-5">
                                                            Write a Reviews
                                                        </h5>
                                                        <div class="tab-instructor">
                                                            <div
                                                                class="write-reviewbox py-xxl-10 py-xl-8 py-lg-6 py-5 px-xxl-10 px-xl-8 px-lg-6 px-5 n20-bg radius32 cus-border border">
                                                                <h5 class="bb-n40dash pb-xxl-6 pb-5 mb-xxl-6 mb-5">
                                                                    Write a Reviews
                                                                </h5>
                                                                <form action="#0" class="writere-v1">
                                                                    <div class="form-cmn mb-xxl-6 mb-5">
                                                                        <label for="names"
                                                                            class="fs-six fw_500 n700-color mb-xxl-3 mb-2">Name</label>
                                                                        <input type="text"
                                                                            placeholder="Enter Name..."
                                                                            id="names" />
                                                                    </div>
                                                                    <div class="form-cmn mb-xxl-6 mb-5">
                                                                        <label for="em"
                                                                            class="fs-six fw_500 n700-color mb-xxl-3 mb-2">Email</label>
                                                                        <input type="email"
                                                                            placeholder="Enter Email..."
                                                                            id="em" />
                                                                    </div>
                                                                    <div class="form-cmn mb-xxl-6 mb-5">
                                                                        <label
                                                                            class="fs-six fw_500 n700-color mb-xxl-2 mb-2">Star
                                                                            Reviews</label>
                                                                        <ul
                                                                            class="start d-flex align-items-center gap-3">
                                                                            <li>
                                                                                <i
                                                                                    class="ti ti-star fs-five fw_400 s1-color"></i>
                                                                            </li>
                                                                            <li>
                                                                                <i
                                                                                    class="ti ti-star fs-five fw_400 s1-color"></i>
                                                                            </li>
                                                                            <li>
                                                                                <i
                                                                                    class="ti ti-star fs-five fw_400 s1-color"></i>
                                                                            </li>
                                                                            <li>
                                                                                <i
                                                                                    class="ti ti-star fs-five fw_400 s1-color"></i>
                                                                            </li>
                                                                            <li>
                                                                                <i
                                                                                    class="ti ti-star fs-five fw_400 s1-color"></i>
                                                                            </li>
                                                                        </ul>
                                                                    </div>
                                                                    <div class="form-cmn mb-xxl-6 mb-5">
                                                                        <label for="rev"
                                                                            class="fs-six fw_500 n700-color mb-xxl-3 mb-2">Reviews</label>
                                                                        <textarea name="write" id="rev" rows="4" placeholder="Write a Reviews"></textarea>
                                                                    </div>
                                                                    <button type="submit"
                                                                        class="cmn-btn mt-xxl-8 mt-6 fw_600 justify-content-center d-flex align-items-center gap-2 py-3 px-xl-6 px-5 n700-color">
                                                                        <span> Submit Reviews </span>
                                                                        <i class="ti ti-arrow-up-right fs-six"></i>
                                                                    </button>
                                                                </form>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-4">
                                                <div
                                                    class="course-probiowrap-right overflow-visible course-reviewfixed">
                                                    <div
                                                        class="active-userbox n0-bg cus-border border radius32 py-xxl-8 py-xxl-6 py-4 px-xxl-8 px-xl-6 px-4 mb-xxl-6 mb-5">
                                                        <h5 class="n700-color bb-n40dash pb-xxl-6 pb-5 mb-xxl-6 mb-5">
                                                            Search
                                                        </h5>
                                                        <form action="#" class="search-toggle-box d-block">
                                                            <div
                                                                class="input-area d-flex n20-bg align-items-center gap-2 py-1 px-6 py-lg-2 px-2 radius30">
                                                                <input type="text" class="px-4"
                                                                    placeholder="Search" />
                                                                <button class="cmn-btn search__icon40">
                                                                    <span>
                                                                        <i
                                                                            class="fa-solid fa-magnifying-glass n4-color"></i>
                                                                    </span>
                                                                </button>
                                                            </div>
                                                        </form>
                                                    </div>
                                                    <div
                                                        class="latest-activities active-userbox n0-bg cus-border border radius32 py-xxl-8 py-xl-6 py-4 px-xxl-8 px-xl-6 px-4 mb-xxl-6 mb-5">
                                                        <h5 class="n700-color bb-n40dash pb-xxl-6 pb-5 mb-xxl-6 mb-5">
                                                            More Instructor
                                                        </h5>
                                                        <a href="instructor.html"
                                                            class="latest-activiti-item d-flex align-items-center flex-wrap gap-xxl-6 gap-xl-3 gap-2 bb-n40dash pb-xxl-6 pb-5 mb-xxl-6 mb-5">
                                                            <img src="{{ $path }}frontstyles/assets/images/common/henry.png"
                                                                alt="img" class="radius100 cmn__icon80" />
                                                            <span class="cont">
                                                                <span
                                                                    class="fs20 mb-1 fw_500 n700-color d-flex align-items-center flex-wrap">
                                                                    Esther Howard
                                                                </span>
                                                                <span class="fs-seven">
                                                                    UI/UX Designer
                                                                </span>
                                                            </span>
                                                        </a>
                                                        <a href="instructor.html"
                                                            class="latest-activiti-item d-flex align-items-center flex-wrap gap-xxl-6 gap-xl-3 gap-2 bb-n40dash pb-xxl-6 pb-5 mb-xxl-6 mb-5">
                                                            <img src="{{ $path }}frontstyles/assets/images/common/floyd.png"
                                                                alt="img" class="radius100 cmn__icon80" />
                                                            <span class="cont">
                                                                <span
                                                                    class="fs20 mb-1 fw_500 n700-color d-flex align-items-center flex-wrap">
                                                                    Floyd Miles
                                                                </span>
                                                                <span class="fs-seven"> Team Leader </span>
                                                            </span>
                                                        </a>
                                                        <a href="instructor.html"
                                                            class="latest-activiti-item d-flex align-items-center flex-wrap gap-xxl-6 gap-xl-3 gap-2 bb-n40dash pb-xxl-6 pb-5 mb-xxl-5 mb-4">
                                                            <img src="{{ $path }}frontstyles/assets/images/team/acc2.png"
                                                                alt="img" class="radius100 cmn__icon80" />
                                                            <span class="cont">
                                                                <span
                                                                    class="fs20 mb-1 fw_500 n700-color d-flex align-items-center flex-wrap">
                                                                    Jacob Jones
                                                                </span>
                                                                <span class="fs-seven"> Scrum Master </span>
                                                            </span>
                                                        </a>
                                                        <a href="instructor.html"
                                                            class="d-inline-flex bbsolid-700 n700-color fw_600">
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
