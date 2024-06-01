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
