@include('frontend.layouts.header');
    @php
        $path = asset('/');
    @endphp

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
