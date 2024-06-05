@include('frontend.layouts.header');
@php
    $path = asset('/');
@endphp
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
                    <div
                        class="need-box mb-xxl-6 mb-5 d-flex align-items-center gap-xxl-8 gap-xl-6 gap-lg-5 gap-3 cus-border border radius16 n20-bg p-xxl-6 p-lg-5 p-md-4 p-3">
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

                    <div
                        class="need-box mb-xxl-6 mb-5 d-flex align-items-center gap-xxl-8 gap-xl-6 gap-lg-5 gap-3 cus-border border radius16    n20-bg p-xxl-6 p-lg-5 p-md-4 p-3">
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
            {{-- <div class="col-lg-8">
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
                </div> --}}


            <div class="col-lg-8">
                <div class="contact-right n0-bg n30-border radius16 p-xxl-8 px-lg-6 p-5">
                    <h4 class="n700-color fw_600 pb-xxl-10 pb-7 mb-xxl-10 mb-7 bb-n40dash">
                        Get in touch with us.
                    </h4>
                    <form action="{{ route('front.contactmail') }}" class="writere-v1" method="POST"
                        onsubmit="return validateForm()">
                        @csrf
                        <div class="row g-4">
                            <div class="col-lg-6 col-md-6 col-sm-6">
                                <div class="form-cmn">
                                    <label for="name" class="fs-six fw_500 n700-color mb-xxl-3 mb-2">Name</label>
                                    <input type="text" placeholder="Enter Your Name..." id="name" name="name"
                                        class="n20-bg" required>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-6">
                                <div class="form-cmn">
                                    <label for="email" class="fs-six fw_500 n700-color mb-xxl-3 mb-2">Email</label>
                                    <input type="email" placeholder="Enter Your Email..." id="email"
                                        name="email" class="n20-bg" required>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-6">
                                <div class="form-cmn">
                                    <label for="phone" class="fs-six fw_500 n700-color mb-xxl-3 mb-2">Phone</label>
                                    <input type="tel" placeholder="Enter Your Number..." id="phone"
                                        name="phone" class="n20-bg" required>
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <div class="form-cmn mb-xxl-4 mb-3">
                                    <label for="subject" class="fs-six fw_500 n700-color mb-xxl-3 mb-2">Message</label>
                                    <textarea name="subject" id="subject" rows="4" placeholder="Enter Your Message..." class="n20-bg" required></textarea>
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <button type="submit"
                                    class="cmn-btn fw_600 justify-content-center d-flex align-items-center gap-2 py-3 px-xl-6 px-5 n700-color">
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
            <div id="custom-alert" class="custom-alert">
                <span id="custom-alert-message" style="color: white !important"></span>
            </div>

            @if (session('success'))
            <div class="alert alert-success success-message">
                <script>
                    setTimeout(function() {
                        showCustomAlert("{{ session('success') }}");
                    }, 2000); // 2000 milliseconds = 2 seconds
                </script>
            </div>
            @endif




        </div>
    </div>
    <img src="{{ $path }}frontstyles/assets/images/vectors/light.png" alt="img" class="light-bulp">
</section>
<!--contact section-->

<!--map section-->
<section class="map-section overflow-visible">
    <iframe
        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d497698.7749192471!2d77.3012632998092!3d12.954459536254081!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3bae1670c9b44e6d%3A0xf8dfc3e8517e4fe0!2sBengaluru%2C%20Karnataka!5e0!3m2!1sen!2sin!4v1716377521700!5m2!1sen!2sin"
        width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"
        referrerpolicy="no-referrer-when-downgrade"></iframe>
</section>
@include('frontend.layouts.footer')
