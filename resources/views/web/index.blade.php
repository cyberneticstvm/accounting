@extends("web.base")
@section("content")
<!--===============PAGE CONTENT ==============-->
<div id="content" class="site-content ">
    <!---slider---->
    <section class="slider style_one pag_position_two">
        <div class="banner_carousel owl-carousel owl_nav_none owl_dots_block theme_carousel owl-theme" data-options='{"loop": true, "margin": 0, "autoheight":true, "lazyload":true, "nav": true, "dots": true, "autoplay": true, "autoplayTimeout": 7000, "smartSpeed": 1800, "responsive":{ "0" :{ "items": "1" }, "768" :{ "items" : "1" } , "1000":{ "items" : "1" }}}'>
            <div class="slide-item">
                <div class="slide-item-content content_left">
                    <div class="image-layer" style="background-image:url('{{ asset('/web/assets/images/sliders/slider-3-bg.webp') }}')"></div>
                    <div class="auto-container">
                        <div class="d-flex align-items-center">
                            <div class="col-lg-7 col-md-12  col-sm-12 col-xs-12">
                                <div class="slider_content">
                                    <h1>Accounting Services</h1>
                                    <h6>Beyond Accounting, Crafting Strategies</h6>
                                    <p class="description">Financial Statement Preparation, Account Reconciliation, Cost Accounting and more...
                                    </p>
                                    <a href="#" target="_blank" rel="nofollow" class="theme-btn one  animated _zoomIn">
                                        Read More </a>
                                </div>
                            </div>
                            <div class="col-lg-5 col-md-12  col-sm-12 col-xs-12 image_column">
                                <div class="slider_image">
                                    <img src="{{ asset('/web/assets/images/sliders/slider-2-1.png') }}" class="img-fluid" alt="slider image">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="slide-item">
                <div class="slide-item-content content_right">
                    <div class="image-layer" style="background-image:url('{{ asset('/web/assets/images/sliders/slider-2-bg.webp') }}')"></div>
                    <div class="auto-container">
                        <div class="row align-items-center">
                            <div class="col-lg-7 col-md-12  col-sm-12 col-xs-12">
                                <div class="slider_content">
                                    <h1>Bookkeeping and Payroll</h1>
                                    <h6>Beyond Accounting, Crafting Strategies</h6>
                                    <p class="description">Monthly and yearly reports, Salary Processing, Payroll reporting, Employee Benefits and more...
                                    </p>
                                    <a href="#" target="_blank" rel="nofollow" class="theme-btn one">
                                        Read More </a>
                                </div>
                            </div>
                            <div class="col-lg-5 col-md-12  col-sm-12 col-xs-12 image_column">
                                <div class="slider_image">
                                    <img src="{{ asset('/web/assets/images/sliders/slider-2-2.png') }}" class="img-fluid" alt="slider image">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="slide-item">
                <div class="slide-item-content content_left">
                    <div class="image-layer" style="background-image:url('{{ asset('/web/assets/images/sliders/slider-1-bg.webp') }}')"></div>
                    <div class="auto-container">
                        <div class="row align-items-center">
                            <div class="col-lg-7 col-md-12  col-sm-12 col-xs-12">
                                <div class="slider_content">
                                    <h1>Financial Consulting</h1>
                                    <h6>Beyond Accounting, Crafting Strategies</h6>
                                    <p class="description">Duty obligations of business it will
                                        frequently occur that pleasures have to be repudiated and annoyances accepted.
                                    </p>
                                    <a href="#" target="_blank" rel="nofollow" class="theme-btn one">
                                        Read More </a>
                                </div>
                            </div>
                            <div class="col-lg-5 col-md-12  col-sm-12 col-xs-12 image_column">
                                <div class="slider_image">
                                    <img src="{{ asset('/web/assets/images/sliders/slider-2-3.png') }}" class="img-fluid" alt="slider image">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!---slider-end---->
    <section class="about_us_section" id="about">
        <!--===============spacing==============-->
        <div class="pd_top_100"></div>
        <!--===============spacing==============-->
        <div class="container pd_zero">
            <div class="row">
                <div class="col-xl-6 col-lg-12">
                    <div class="title_all_box style_one dark_color">
                        <div class="title_sections left">
                            <div class="before_title"> Know who we are </div>
                            <h2> Aurega </h2>
                            <p> At <a href="{{ route('index') }}">AUREGA</a>, we understand the intricacies of financial management and the importance of robust accounting practices for businesses to thrive in today's dynamic marketplace. As a leading accounting and tax advisory service based in the vibrant city of Dubai, we specialize in providing tailored financial solutions to meet the diverse needs of businesses, entrepreneurs, and individuals.</p>
                        </div>
                    </div>
                    <!--===============spacing==============-->
                    <div class="pd_bottom_20"></div>
                    <!--===============spacing==============-->
                    <div class="process_box style_one dark_color">
                        <div class="process_box_outer">
                            <div class="icon">
                                <span class=" icon-line-chart"></span>
                                <div class="number"> 01 </div>
                            </div>
                            <div class="content_box">
                                <h2>
                                    <a href="#" target="_blank" rel="nofollow">Our Approach to Simplifying Your Financials</a>
                                </h2>
                                <p> Navigating the intricate web of financial obligations can be overwhelming for businesses. From intricate tax regulations to the meticulous demands of bookkeeping, the complexities can hinder growth and efficiency. At <a href="{{ route('index') }}">AUREGA ACCOUNTING SERVICES</a>, we believe in liberating you from these burdens, enabling you to focus on what truly matters - the success of your business.</p>
                            </div>
                        </div>
                    </div>
                    <div class="process_box style_one dark_color">
                        <div class="process_box_outer">
                            <div class="icon">
                                <span class=" icon-line-chart"></span>
                                <div class="number"> 02 </div>
                            </div>
                            <div class="content_box">
                                <h2>
                                    <a href="#" target="_blank" rel="nofollow"> Tailored Solutions for Your Peace of Mind </a>
                                </h2>
                                <p> Our mission is to streamline and simplify your financial operations. We understand the challenges businesses encounter and tailor our services to alleviate these complexities. Whether it's meticulous bookkeeping, strategic tax planning, or ensuring compliance with local regulations, we've got you covered.</p>
                            </div>
                        </div>
                    </div>
                    <div class="process_box style_one dark_color">
                        <div class="process_box_outer">
                            <div class="icon">
                                <span class=" icon-line-chart"></span>
                                <div class="number"> 03 </div>
                            </div>
                            <div class="content_box">
                                <h2>
                                    <a href="#" target="_blank" rel="nofollow"> Empowering Your Growth </a>
                                </h2>
                                <p> By entrusting us with your financial management, you gain more than just accurate numbers and compliance. You gain the freedom to channel your energy and resources into propelling your business forward. With our support, your financial complexities dissolve, leaving you free to pursue your entrepreneurial vision.</p>
                            </div>
                        </div>
                    </div>
                    <!--===============spacing==============-->
                    <div class="pd_bottom_30"></div>
                    <!--===============spacing==============-->
                </div>
                <div class="col-xl-6 col-lg-12">
                    <div class="service_wrapper">
                        <div class="move_image_absolute">
                            <img src="{{ asset('/web/assets/images/about/about-1-1.png') }}" class="class-fluid" alt="image" />
                        </div>
                        <div class="row">
                            <div class="col-lg-6 col-md-6">
                                <div class="service_box style_one dark_color">
                                    <div class="service_content">
                                        <div class="image ">
                                            <img src="{{ asset('/web/assets/images/service-illu-1.png') }}" class="img-fluid" alt="Service Image" />
                                        </div>
                                        <div class="content_inner">
                                            <h2>
                                                <a href="#"> Accounting Service </a>
                                            </h2>
                                            <p> Financial Statement Preparation, Account Reconciliation
                                            </p>
                                            <a href="#" class="read_more"> Read more </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6">
                                <!--===============spacing==============-->
                                <div class="pd_top_100"></div>
                                <div class="pd_top_100 d_md_none"></div>
                                <!--===============spacing==============-->
                                <div class="service_box style_one dark_color last">
                                    <div class="service_content">
                                        <div class="image ">
                                            <img src="{{ asset('/web/assets/images/service-illu-1.png') }}" class="img-fluid" alt="Service Image" />
                                        </div>
                                        <div class="content_inner">
                                            <h2>
                                                <a href="#"> Bookkeeping & Payroll </a>
                                            </h2>
                                            <p> monthly reports, Salary Processing, Payroll reporting, Employee Benefits
                                            </p>
                                            <a href="#" class="read_more"> Read more </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--===============spacing==============-->
                    <div class="pd_bottom_30"></div>
                    <!--===============spacing==============-->
                    <div class="process_box style_one dark_color">
                        <div class="process_box_outer">
                            <div class="icon">
                                <span class=" icon-line-chart"></span>
                                <div class="number"> 04 </div>
                            </div>
                            <div class="content_box">
                                <h2>
                                    <a href="#" target="_blank" rel="nofollow"> Experience Relief Today </a>
                                </h2>
                                <p> Don't let financial intricacies hinder your business growth. Partner with [Your Company] to experience a seamless, simplified approach to managing your finances. Together, we'll navigate the complexities, allowing you to focus on what truly matters - the success and prosperity of your business.</p>
                                <p>"Choosing <a href="{{ route('index') }}">AUREGA</a> means opting for a committed partner dedicated to providing not just accounting services, but a comprehensive financial strategy aligned with your company goals. Our exceptional expertise, personalized approach, commitment to compliance, and track record of excellence make us a top choice for your businesses seeking reliable accounting services in the UAE."</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--===============spacing==============-->
        <div class="pd_bottom_80"></div>
        <!--===============spacing==============-->
    </section>
    <section class="content-section">
        <div class="row">
            <div class="col-xxl-5 col-xl-4 col-lg-4 col-md-12 pd_zero bg_op_1 text-center" style="background-image: url('{{ asset("/web/assets/images/banner-four-bg.jpg") }}');">
            </div>
            <div class="col-xxl-7 col-xl-8 col-lg-8 col-md-12 bg_op_1" style="background-image: url('{{ asset("/web/assets/images/home-10-content-1.jpg") }}');">
                <div class="row">
                    <div class="col-xxl-1 col-xl-1 col-md-12"></div>
                    <div class="col-xxl-9 col-xl-9 col-md-12">
                        <div class="content-wrapper">
                            <!--===============spacing==============-->
                            <div class="pd_top_80"></div>
                            <!--===============spacing==============-->
                            <div class="title_all_box style_one light_color">
                                <div class="title_sections left">
                                    <!--<div class="before_title">Why Choose Us</div>-->
                                    <div class="quotes_box style_one">
                                        <div class="icon">
                                            <span class="icon-quote"></span>
                                        </div>
                                        <div class="content">
                                            <h6 class="text-white">DON'T LET THE COMPLEXITIES OF YOUR FINANCIALS BURDEN YOU ANY LONGER
                                            </h6>
                                        </div>
                                    </div>
                                    <p>We are committed to being your trusted partner, providing comprehensive accounting and tax advisory services that empower your business to thrive in the dynamic Dubai market. Contact us today to discover how we can support your financial success.</p>
                                </div>
                            </div>
                            <!--===============spacing==============-->
                            <div class="pd_bottom_20"></div>
                            <!--===============spacing==============-->
                            <div class="row gutter_15px">
                                <div class="col-lg-4 col-md-4 col-sm-12">
                                    <div class="theme_btn_all color_one">
                                        <a href="#" target="_blank" rel="nofollow" class="theme-btn one">Contact us</a>
                                    </div>
                                    <!--===============spacing==============-->
                                    <div class="pd_bottom_30"></div>
                                    <!--===============spacing==============-->
                                </div>
                            </div>
                            <!--===============spacing==============-->
                            <div class="pd_bottom_70"></div>
                            <!--===============spacing==============-->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--===============spacing==============-->
    <div class="pd_bottom_70"></div>
    <!--===============spacing==============-->
    <!---tab---->
    <section class="tab-section bg_op_1" style="background-image:url('{{ asset("/web/assets/images/tab-sec-bg.jpg") }}');">
        <!--===============spacing==============-->
        <div class="pd_top_100"></div>
        <!--===============spacing==============-->
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="title_all_box style_one text-center dark_color">
                        <div class="title_sections ">
                            <div class="before_title">Why Choose Aurega</div>
                            <h2>Customers Experience</h2>
                        </div>
                        <!--===============spacing==============-->
                        <div class="pd_bottom_15"></div>
                        <!--===============spacing==============-->
                    </div>
                </div>
                <div class="tabs_all_box  tabs_all_box_start type_one">
                    <div class="tab_over_all_box">
                        <div class="tabs_header clearfix">
                            <ul class="showcase_tabs_btns nav-pills nav   clearfix">
                                <li class="nav-item">
                                    <a class="s_tab_btn nav-link active" data-tab="#tabtabone">01. Expertise and Experience</a>
                                </li>
                                <li class="nav-item">
                                    <a class="s_tab_btn nav-link" data-tab="#tabtabtwo">02. Personalized Service</a>
                                </li>
                                <li class="nav-item">
                                    <a class="s_tab_btn nav-link" data-tab="#tabtabthree">03. Cost-Effectiveness</a>
                                </li>
                                <li class="nav-item">
                                    <a class="s_tab_btn nav-link" data-tab="#tabtabtfour">04. Unwavering Commitment</a>
                                </li>
                                <li class="nav-item">
                                    <a class="s_tab_btn nav-link" data-tab="#tabtabfive">05. Timely and Reliable Service</a>
                                </li>
                            </ul>
                            <div class="toll_free">
                                <a href="tel:+971503446939"> <i class="icon-phone-call"></i>Call For Free
                                    Consultation</a>
                            </div>
                        </div>
                        <div class="s_tab_wrapper">
                            <div class="s_tabs_content">
                                <div class="s_tab fade active-tab show" id="tabtabone">
                                    <div class="tab_content one" style="background-image:url('{{ asset("/web/assets/images/tab-image.jpg") }}')">
                                        <div class="content_image">
                                            <h6>Why Choose Aurega</h6>

                                            <h2>Expertise and Experience</h2>

                                            <p>At AUREGA ACCOUNTING SERVICES our wealth of experience spans the intricacies of UAE accounting, bookkeeping, and taxation. We're well-versed in local regulations, allowing us to provide accurate, reliable, and up-to-date advice to businesses of all sizes.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="s_tab fade" id="tabtabtwo">
                                    <div class="tab_content one" style="background-image:url('{{ asset("/web/assets/images/blog/blog-image-8.jpg") }}')">
                                        <div class="content_image">
                                            <h6>Why Choose Aurega</h6>

                                            <h2>Personalized Service</h2>

                                            <p>We understand that each client is unique. That's why we tailor our services to suit your individual requirements, ensuring that you receive personalized attention and solutions crafted specifically for your business needs.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="s_tab fade" id="tabtabthree">
                                    <div class="tab_content one" style="background-image:url('{{ asset("/web/assets/images/about/testi-image.jpg") }}')">
                                        <div class="content_image">
                                            <h6>Why Choose Aurega</h6>

                                            <h2>Cost-Effectiveness</h2>

                                            <p>While our expertise is unmatched, we believe in offering cost-effective solutions. Our services are structured to deliver high value without straining your budget, allowing you to invest your resources where they matter most.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="s_tab fade" id="tabtabtfour">
                                    <div class="tab_content one" style="background-image:url('{{ asset("/web/assets/images/about/about-4.jpg") }}')">
                                        <div class="content_image">
                                            <h6>Why Choose Aurega</h6>

                                            <h2>Unwavering Commitment</h2>

                                            <p>We take your success personally, dedicating ourselves to providing exceptional service and ongoing support every step of the way.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="s_tab fade" id="tabtabfive">
                                    <div class="tab_content one" style="background-image:url('{{ asset("/web/assets/images/about/project-2-img.jpg") }}')">
                                        <div class="content_image">
                                            <h6>Why Choose Aurega</h6>

                                            <h2>Timely and Reliable Service</h2>

                                            <p>We recognize the importance of timely deliverables. Our commitment to efficiency ensures that deadlines are met without compromising quality.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--===============spacing==============-->
        <div class="pd_bottom_90"></div>
        <!--===============spacing==============-->
    </section>
    <!---tab-end--->
    <section class="testimonial-section">
        <!--===============spacing==============-->
        <div class="pd_bottom_80"></div>
        <!--===============spacing==============-->
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="title_all_box style_one text-center dark_color">
                        <div class="title_sections ">
                            <div class="before_title">Our Clients</div>
                            <h2>Customers Feedback</h2>
                        </div>
                        <!--===============spacing==============-->
                        <div class="pd_bottom_15"></div>
                        <!--===============spacing==============-->
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-lg-1"></div>
                <div class="col-lg-10">
                    <div class="testimonial_sec position-relative style_v2_one">
                        <div class="swiper-container" data-swiper='{
                              "autoplay": {
                                "delay": 6000
                              },
                              "freeMode": true,
                              "loop": true,
                              "speed": 1000,
                              "centeredSlides": false,
                              "slidesPerView": 1,
                              "spaceBetween": 10,
                              "pagination": {
                                "el": ".swiper-pagination",
                                "clickable": true
                              },
                              "navigation": {
                                 "nextEl": ".next-single-one",
                                 "prevEl": ".prev-single-one"
                               },
                              "breakpoints": {
                                 "1200": {
                                    "slidesPerView": 1
                                 },
                                 "1024": {
                                  "slidesPerView": 1 
                                 },
                                "768": {
                                  "slidesPerView": 1 
                                },
                                "576": {
                                  "slidesPerView": 1 
                                },
                                "0": {
                                  "slidesPerView": 1 
                                }
                              }
                            }'>
                            <div class="swiper-wrapper">
                                <div class="swiper-slide">
                                    <div class="testimonial_box clearfix">
                                        <div class="image">
                                            <img src="{{ asset('/web/assets/images/banner-four-bg.jpg') }}" alt="image">
                                        </div>
                                        <div class="authour_details">
                                            <div class="b_image">
                                                <img src="{{ asset('/web/assets/images/CLIENT-logo-1.png') }}" alt="image">
                                            </div>
                                            <div class="comment">
                                                While running an early stage startup everything feels
                                                hard, that's why it's been so nice to have our accounting
                                                feel easy. We recommed Qetus.
                                            </div>
                                            <div class="details clearfix">
                                                <div class="c_image">
                                                    <img src="{{ asset('/web/assets/images/testi-2.png') }}" alt="image">
                                                </div>
                                                <div class="c_content">
                                                    <div class="content_in">
                                                        <h2>Jacob Leonardo</h2>
                                                        <span>Senior Manager of Excel Solution</span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="rating">
                                                <ul>
                                                    <li><span class="fa fa-star fill"></span><span class="fa fa-star fill"></span><span class="fa fa-star fill"></span><span class="fa fa-star fill"></span><span class="fa fa-star fill"></span></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="testimonial_box clearfix">
                                        <div class="image">
                                            <img src="{{ asset('/web/assets/images/banner-five-bg.jpg') }}" alt="image">
                                        </div>
                                        <div class="authour_details">
                                            <div class="b_image">
                                                <img src="{{ asset('/web/assets/images/CLIENT-logo-1.png') }}" alt="image">
                                            </div>
                                            <div class="comment">
                                                While running an early stage startup everything feels
                                                hard, that's why it's been so nice to have our accounting
                                                feel easy. We recommed Qetus.
                                            </div>
                                            <div class="details clearfix">
                                                <div class="c_image">
                                                    <img src="{{ asset('/web/assets/images/testi-1.png') }}" alt="image">
                                                </div>
                                                <div class="c_content">
                                                    <div class="content_in">
                                                        <h2>Jacob Leonardo</h2>
                                                        <span>Senior Manager of Excel Solution</span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="rating">
                                                <ul>
                                                    <li><span class="fa fa-star fill"></span><span class="fa fa-star fill"></span><span class="fa fa-star fill"></span><span class="fa fa-star fill"></span><span class="fa fa-star empty"></span></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="testimonial_box clearfix">
                                        <div class="image">
                                            <img src="{{ asset('/web/assets/images/banner-four-bg.jpg') }}" alt="image">
                                        </div>
                                        <div class="authour_details">
                                            <div class="b_image">
                                                <img src="{{ asset('/web/assets/images/CLIENT-logo-1.png') }}" alt="image">
                                            </div>
                                            <div class="comment">
                                                While running an early stage startup everything feels
                                                hard, that’s why it’s been so nice to have our accounting
                                                feel easy. We recommed Qetus.
                                            </div>
                                            <div class="details clearfix">
                                                <div class="c_image">
                                                    <img src="{{ asset('/web/assets/images/testi-2.png') }}" alt="image">
                                                </div>
                                                <div class="c_content">
                                                    <div class="content_in">
                                                        <h2>Jacob Leonardo</h2>
                                                        <span>Senior Manager of Excel Solution</span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="rating">
                                                <ul>
                                                    <li><span class="fa fa-star fill"></span><span class="fa fa-star fill"></span><span class="fa fa-star fill"></span><span class="fa fa-star empty"></span><span class="fa fa-star empty"></span></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="arrows">
                            <div class="prev-single-one"></div>
                            <div class="next-single-one"></div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-1"></div>
            </div>
        </div>
        <!--===============spacing==============-->
        <div class="pd_bottom_80"></div>
        <!--===============spacing==============-->
    </section>
</div>
<!--===============PAGE CONTENT END==============-->
@endsection