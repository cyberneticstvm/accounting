@extends("web.base")
@section("content")
<div class="device-margin visible-md"></div>
<div id="content" class="site-content">
    <!---about--->
    <section class="about-section">
        <div class="container">
            <div class="row">
                <div class="col-xl-6 col-lg-12">
                    <div class="about_content position-relative z_99">
                        <div class="title_all_box style_one text-left  dark_color">
                            <div class="title_sections">
                                <div class="before_title">About Aurega</div>
                                <h1>Leaders in Accounting and Tax Solution</h1>
                            </div>
                        </div>
                        <!--===============spacing==============-->
                        <div class="pd_bottom_15"></div>
                        <!--===============spacing==============-->
                        <div class="extra_content image_with_content dark_color">
                            <div class="simple_image">
                                <img src="{{ asset('/web/assets/images/ae.png') }}" alt="img">
                                <h2> Since 2014, <br> Operating in Dubai.</h2>
                            </div>
                        </div>
                        <!--===============spacing==============-->
                        <div class="pd_bottom_20"></div>
                        <!--===============spacing==============-->
                        <div class="description_box">
                            <p class="text-justify">Welcome to <a href="{{ route('index') }}">AUREGA ACCOUNTING</a> and <a href="{{ route('index') }}">TAX ADVISORY</a>, your trusted partner for comprehensive accounting, bookkeeping, and tax advisory services in the UAE. With a deep understanding of the local regulatory landscape and a commitment to excellence, we cater to businesses seeking expert financial guidance and compliance support. </p><br />
                            <p class="text-justify">Our team comprises seasoned professionals dedicated to delivering tailored solutions that align with your specific needs. Drawing from extensive experience, we navigate the intricate realm of UAE regulations with finesse, ensuring your financial matters are managed efficiently and in compliance with all requirements.</p><br />
                            <p class="text-justify">At <a href="{{ route('index') }}">AUREGA</a>, We believe that success is a collaborative effort. By partnering with us, you gain not just a service provider but a trusted ally dedicated to empowering your financial journey. Whether you're an established corporation, an entrepreneur, or an individual seeking financial guidance, we stand ready to support your ambitions and secure your financial future.</p><br />
                            <p class="text-justify">We are committed to being your trusted partner, providing comprehensive accounting and tax advisory services that empower your business to thrive in the dynamic Dubai market. Contact us today to discover how we can support your financial success.</p>
                        </div>
                        <!--===============spacing==============-->
                        <div class="pd_bottom_25"></div>
                        <!--===============spacing==============-->
                        <div class="row gutter_15px">
                            <div class="col-lg-6 col-md-12">
                                <div class="icon_box_all  style_two">
                                    <div class="icon_content  icon_imgs ">
                                        <div class="icon">
                                            <img src="{{ asset('/web/assets/images/icon-img-n-1.png') }}" class="img-fluid svg_image" alt="icon png">
                                        </div>
                                        <div class="txt_content">
                                            <h3><a href="javascript:void(0)">Tailored Advice &amp; Support</a>
                                            </h3>
                                        </div>
                                    </div>
                                    <!--===============spacing==============-->
                                    <div class="pd_bottom_25"></div>
                                    <!--===============spacing==============-->
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-12">
                                <div class="icon_box_all  style_two">
                                    <div class="icon_content  icon_imgs ">
                                        <div class="icon">
                                            <img src="{{ asset('/web/assets/images/icon-img-n-2.png') }}" class="img-fluid svg_image" alt="icon png">
                                        </div>
                                        <div class="txt_content">
                                            <h3><a href="javascript:void(0)">Flexible Company Policies</a></h3>
                                        </div>
                                    </div>
                                    <!--===============spacing==============-->
                                    <div class="pd_bottom_25"></div>
                                    <!--===============spacing==============-->
                                </div>
                            </div>
                        </div>

                        <div class="theme_btn_all color_one">
                            <a href="{{ route('contact') }}" rel="nofollow" class="theme-btn five">Contact us<i class="icon-right-arrow"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-xl-6 col-lg-12">
                    <div class="image_boxes style_two">
                        <img src="{{ asset('/web/assets/images/shape-1.png') }}" class="background_image" alt="image">
                        <div class="image one">
                            <img src="{{ asset('/web/assets/images/about/pic1.webp') }}" class="img-fluid" alt="image">
                        </div>
                        <div class="image two">
                            <img src="{{ asset('/web/assets/images/about/pic2.webp') }}" class="img-fluid" alt="image">
                        </div>
                        <div class="authour_quotes">
                            <i class="icon-quote"></i>
                            <h6>We are committed to being your trusted partner.</h6>
                            <p>/ <a href="{{ route('index') }}" class="text-white">Aurega Accounting and Tax Advisory</a></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--===============spacing==============-->
        <div class="pd_bottom_70"></div>
        <!--===============spacing==============-->
    </section>
    <!---about end--->
</div>
@endsection