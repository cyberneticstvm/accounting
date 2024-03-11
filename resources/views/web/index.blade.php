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
                                    <a href="{{ route('services.accounting') }}" class="theme-btn one  animated _zoomIn">
                                        Read More </a>
                                </div>
                            </div>
                            <div class="col-lg-5 col-md-12  col-sm-12 col-xs-12 image_column">
                                <div class="slider_image">
                                    <img src="{{ asset('/web/assets/images/sliders/first.png') }}" class="img-fluid" alt="slider image">
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
                                    <a href="{{ route('services.accounting') }}" class="theme-btn one">
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
                                    <a href="{{ route('services.finance') }}" class="theme-btn one">
                                        Read More </a>
                                </div>
                            </div>
                            <div class="col-lg-5 col-md-12  col-sm-12 col-xs-12 image_column">
                                <div class="slider_image">
                                    <img src="{{ asset('/web/assets/images/sliders/slid-3.webp') }}" class="img-fluid" alt="slider image">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="slide-item">
                <div class="slide-item-content content_left">
                    <div class="image-layer" style="background-image:url('{{ asset('/web/assets/images/sliders/slider-4-bg.webp') }}')"></div>
                    <div class="auto-container">
                        <div class="row align-items-center">
                            <div class="col-lg-7 col-md-12  col-sm-12 col-xs-12">
                                <div class="slider_content">
                                    <h1>Vat and Tax Advisory</h1>
                                    <h6>Beyond Accounting, Crafting Strategies</h6>
                                    <p class="description">Our advisory services encompass comprehensive financial planning, budgeting, and strategic guidance to help you achieve your long-term goals.
                                    </p>
                                    <a href="{{ route('services.tax') }}" class="theme-btn one">
                                        Read More </a>
                                </div>
                            </div>
                            <div class="col-lg-5 col-md-12  col-sm-12 col-xs-12 image_column">
                                <div class="slider_image">
                                    <img src="{{ asset('/web/assets/images/sliders/slider-4-1.webp') }}" class="img-fluid" alt="slider image">
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
                            <h4> Aurega Accounting and Tax Advisory LLC</h4>
                            <p class="text-justify"> At <a href="https://wa.me/+971503446939" target="_blank">Aurega Accounting and Tax Advisory</a>, we understand the intricacies of financial management and the importance of robust accounting practices for businesses to thrive in today's dynamic marketplace. As a leading accounting and tax advisory service based in the vibrant city of Dubai, we specialize in providing tailored financial solutions to meet the diverse needs of businesses, entrepreneurs, and individuals.</p>
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
                                <p class="text-justify"> Navigating the intricate web of financial obligations can be overwhelming for businesses. From intricate tax regulations to the meticulous demands of bookkeeping, the complexities can hinder growth and efficiency. At <a href="{{ route('contact') }}">AUREGA ACCOUNTING</a> and <a href="{{ route('contact') }}">TAX ADVISORY SERVICES</a>, we believe in liberating you from these burdens, enabling you to focus on what truly matters - the success of your business.</p>
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
                                <p class="text-justify"> Our mission is to streamline and simplify your financial operations. We understand the challenges businesses encounter and tailor our services to alleviate these complexities. Whether it's meticulous bookkeeping, strategic tax planning, or ensuring compliance with local regulations, we've got you covered.</p>
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
                                <p class="text-justify"> By entrusting us with your financial management, you gain more than just accurate numbers and compliance. You gain the freedom to channel your energy and resources into propelling your business forward. With our support, your financial complexities dissolve, leaving you free to pursue your entrepreneurial vision.</p>
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
                            <img src="{{ asset('/web/assets/images/about/8.jpeg') }}" class="class-fluid" alt="Aurega Accounting" />
                        </div>
                        <div class="row">
                            <div class="col-lg-6 col-md-6">
                                <div class="service_box style_one dark_color">
                                    <div class="service_content">
                                        <div class="image ">
                                            <img src="{{ asset('/web/assets/images/service-illu-10.png') }}" class="img-fluid" alt="Aurega Accounting" />
                                        </div>
                                        <div class="content_inner">
                                            <h2>
                                                <a href="#"> Accounting Service </a>
                                            </h2>
                                            <p> Financial Statement Preparation, Account Reconciliation
                                            </p>
                                            <a href="{{ route('services.accounting') }}" class="read_more"> Read more </a>
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
                                            <img src="{{ asset('/web/assets/images/service-illu-11.png') }}" class="img-fluid" alt="Aurega Accounting" />
                                        </div>
                                        <div class="content_inner">
                                            <h2>
                                                <a href="#"> Tax Advisory </a>
                                            </h2>
                                            <p> monthly reports, Salary Processing, Payroll reporting, Employee Benefits
                                            </p>
                                            <a href="{{ route('services.tax') }}" class="read_more"> Read more </a>
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
                                <p class="text-justify">Don't let financial intricacies hinder your business growth. Partner with AUREGA to experience a seamless, simplified approach to managing your finances. Together, we'll navigate the complexities, allowing you to focus on what truly matters - the success and prosperity of your business.</p>
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
                            <!--<div class="before_title"></div>-->
                            <h2>Why Choose Aurega</h2>
                        </div>
                        <!--===============spacing==============-->
                        <div class="pd_bottom_15"></div>
                        <!--===============spacing==============-->
                    </div>
                </div>
                <div class="tabs_all_box  tabs_all_box_start type_one">
                    <div class="tab_over_all_box">
                        <div class="tabs_header clearfix">
                            <ul class="showcase_tabs_btns nav-pills nav clearfix">
                                <li class="nav-item">
                                    <a class="s_tab_btn nav-link active" data-tab="#tabtabone"> Expertise and Experience</a>
                                </li>
                                <li class="nav-item">
                                    <a class="s_tab_btn nav-link" data-tab="#tabtabtwo"><span class="fa fa-star fill"></span> Personalized Service</a>
                                </li>
                                <li class="nav-item">
                                    <a class="s_tab_btn nav-link" data-tab="#tabtabthree"><span class="fa fa-star fill"></span> Cost-Effectiveness</a>
                                </li>
                                <li class="nav-item">
                                    <a class="s_tab_btn nav-link" data-tab="#tabtabtfour"><span class="fa fa-star fill"></span> Unwavering Commitment</a>
                                </li>
                                <li class="nav-item">
                                    <a class="s_tab_btn nav-link" data-tab="#tabtabfive"><span class="fa fa-star fill"></span> Timely and Reliable Service</a>
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
                                            <!--<h6>Why Choose Aurega</h6>-->

                                            <h2>Expertise and Experience</h2>

                                            <p>At AUREGA ACCOUNTING and TAX ADVISORY SERVICES our wealth of experience spans the intricacies of UAE accounting, bookkeeping, and taxation. We're well-versed in local regulations, allowing us to provide accurate, reliable, and up-to-date advice to businesses of all sizes.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="s_tab fade" id="tabtabtwo">
                                    <div class="tab_content one" style="background-image:url('{{ asset("/web/assets/images/blog/blog-image-8.jpg") }}')">
                                        <div class="content_image">
                                            <!--<h6>Why Choose Aurega</h6>-->

                                            <h2>Personalized Service</h2>

                                            <p>We understand that each client is unique. That's why we tailor our services to suit your individual requirements, ensuring that you receive personalized attention and solutions crafted specifically for your business needs.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="s_tab fade" id="tabtabthree">
                                    <div class="tab_content one" style="background-image:url('{{ asset("/web/assets/images/about/testi-image.jpg") }}')">
                                        <div class="content_image">
                                            <!--<h6>Why Choose Aurega</h6>-->

                                            <h2>Cost-Effectiveness</h2>

                                            <p>While our expertise is unmatched, we believe in offering cost-effective solutions. Our services are structured to deliver high value without straining your budget, allowing you to invest your resources where they matter most.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="s_tab fade" id="tabtabtfour">
                                    <div class="tab_content one" style="background-image:url('{{ asset("/web/assets/images/about/1.jpeg") }}')">
                                        <div class="content_image">
                                            <!--<h6>Why Choose Aurega</h6>-->

                                            <h2>Unwavering Commitment</h2>

                                            <p>We take your success personally, dedicating ourselves to providing exceptional service and ongoing support every step of the way.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="s_tab fade" id="tabtabfive">
                                    <div class="tab_content one" style="background-image:url('{{ asset("/web/assets/images/about/project-2-img.jpg") }}')">
                                        <div class="content_image">
                                            <!--<h6>Why Choose Aurega</h6>-->

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
    <div class="pd_bottom_90"></div>
    <section class="project-section bg_op_1">

        <div class="medium-container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="title_all_box style_one text-center dark_color">
                        <div class="title_sections ">
                            <!--<div class="before_title">Our Clients</div>-->
                            <h2>Team Members</h2>
                        </div>
                        <!--===============spacing==============-->
                        <div class="pd_bottom_15"></div>
                        <!--===============spacing==============-->
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="project_caro_section carousel style_three ">
                        <div class="swiper-container swiper-initialized swiper-horizontal swiper-backface-hidden" data-swiper="{
                                          &quot;autoplay&quot;: {
                                            &quot;delay&quot;: 6000
                                          },
                                          &quot;freeMode&quot;: false,
                                          &quot;loop&quot;: true,
                                          &quot;speed&quot;: 1000,
                                          &quot;centeredSlides&quot;: false,
                                          &quot;slidesPerView&quot;: 4,
                                          &quot;spaceBetween&quot;: 10,
                                          &quot;pagination&quot;: {
                                            &quot;el&quot;: &quot;.swiper-pagination&quot;,
                                            &quot;clickable&quot;: true
                                          },
                                          &quot;breakpoints&quot;: {
                                             &quot;1200&quot;: {
                                                &quot;slidesPerView&quot;: 4
                                             },
                                             &quot;1024&quot;: {
                                              &quot;slidesPerView&quot;: 3 
                                             },
                                            &quot;768&quot;: {
                                              &quot;slidesPerView&quot;: 2 
                                            },
                                            &quot;576&quot;: {
                                              &quot;slidesPerView&quot;: 1 
                                            },
                                            &quot;0&quot;: {
                                              &quot;slidesPerView&quot;: 1 
                                            }
                                          }
                                        }">
                            <div class="swiper-wrapper" id="swiper-wrapper-7ddafdf6cbb5bcae" aria-live="off" style="transition-duration: 0ms; transform: translate3d(-1300px, 0px, 0px);">


                                <div class="swiper-slide" role="group" aria-label="1 / 7" data-swiper-slide-index="2" style="width: 315px; margin-right: 10px;">
                                    <div class="project_post style_nine">
                                        <div class="image">
                                            <img width="742" height="495" src="{{ asset('/web/assets/images/team/ashraf.webp') }}" class="img-fluid" alt="img">
                                            <div class="image_zoom_box ">
                                                <a href="{{ asset('/web/assets/images/team/ashraf.webp') }}" data-fancybox="gallery"><span class="fa fa-plus zoom_icon"></span></a>
                                            </div>
                                        </div>
                                        <div class="project_caro_content">
                                            <p>Mr. Ashraf M. Rahman</p>
                                            <h2 class="title_pro"><a href="#" rel="bookmark">Chairman & CEO</a></h2>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide" role="group" aria-label="2 / 7" data-swiper-slide-index="3" style="width: 315px; margin-right: 10px;">
                                    <div class="project_post style_nine">
                                        <div class="image">
                                            <img loading="lazy" width="999" height="665" src="{{ asset('/web/assets/images/team/yogesh.webp') }}" class="img-fluid" alt="img">
                                            <div class="image_zoom_box ">
                                                <a href="{{ asset('/web/assets/images/team/yogesh.webp') }}" data-fancybox="gallery"><span class="fa fa-plus zoom_icon"></span></a>
                                            </div>
                                        </div>
                                        <div class="project_caro_content">
                                            <p>Mr. Yogesh Bhola</p>
                                            <h2 class="title_pro"><a href="#" rel="bookmark">Managing Director</a></h2>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide" role="group" aria-label="3 / 7" data-swiper-slide-index="4" style="width: 315px; margin-right: 10px;">
                                    <div class="project_post style_nine">
                                        <div class="image">
                                            <img width="746" height="497" src="{{ asset('/web/assets/images/team/rohit.webp') }}" class="img-fluid" alt="img">
                                            <div class="image_zoom_box ">
                                                <a href="{{ asset('/web/assets/images/team/rohit.webp') }}" data-fancybox="gallery"><span class="fa fa-plus zoom_icon"></span></a>
                                            </div>
                                        </div>
                                        <div class="project_caro_content">
                                            <p>CA Rohit Kavale</p>
                                            <h2 class="title_pro"><a href="#" rel="bookmark">Head of Finance and Taxation</a></h2>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide swiper-slide-prev" role="group" aria-label="4 / 7" data-swiper-slide-index="5" style="width: 315px; margin-right: 10px;">
                                    <div class="project_post style_nine">
                                        <div class="image">
                                            <img loading="lazy" width="999" height="665" src="{{ asset('/web/assets/images/team/sufia.webp') }}" class="img-fluid" alt="img">
                                            <div class="image_zoom_box ">
                                                <a href="{{ asset('/web/assets/images/team/sufia.webp') }}" data-fancybox="gallery"><span class="fa fa-plus zoom_icon"></span></a>
                                            </div>
                                        </div>
                                        <div class="project_caro_content">
                                            <p>Ms. Sufia Alam I</p>
                                            <h2 class="title_pro"><a href="#" rel="bookmark">CFO & Senior Tax Accounting Manager</a></h2>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide swiper-slide-active" role="group" aria-label="5 / 7" data-swiper-slide-index="6" style="width: 315px; margin-right: 10px;">
                                    <div class="project_post style_nine">
                                        <div class="image">
                                            <img width="746" height="497" src="{{ asset('/web/assets/images/team/purush.webp') }}" class="img-fluid" alt="img">
                                            <div class="image_zoom_box ">
                                                <a href="{{ asset('/web/assets/images/team/purush.webp') }}" data-fancybox="gallery"><span class="fa fa-plus zoom_icon"></span></a>
                                            </div>
                                        </div>
                                        <div class="project_caro_content">
                                            <p>Mr. Purushothaman Arunagiri</p>
                                            <h2 class="title_pro"><a href="#" rel="bookmark">Accounts and Admin Manager</a></h2>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide swiper-slide-next" role="group" aria-label="6 / 7" data-swiper-slide-index="7" style="width: 315px; margin-right: 10px;">
                                    <div class="project_post style_nine">
                                        <div class="image">
                                            <img width="742" height="495" src="{{ asset('/web/assets/images/team/renil.webp') }}" class="img-fluid" alt="img">
                                            <div class="image_zoom_box ">
                                                <a href="{{ asset('/web/assets/images/team/renil.webp') }}" data-fancybox="gallery"><span class="fa fa-plus zoom_icon"></span></a>
                                            </div>
                                        </div>
                                        <div class="project_caro_content">
                                            <p>Mr. Renil Thomas</p>
                                            <h2 class="title_pro"><a href="#" rel="bookmark">Accountant (VAT & TAX)</a></h2>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide" role="group" aria-label="7 / 7" data-swiper-slide-index="8" style="width: 315px; margin-right: 10px;">
                                    <div class="project_post style_nine">
                                        <div class="image">
                                            <img loading="lazy" width="999" height="665" src="{{ asset('/web/assets/images/team/imran.webp') }}" class="img-fluid" alt="img">
                                            <div class="image_zoom_box ">
                                                <a href="{{ asset('/web/assets/images/team/imran.webp') }}" data-fancybox="gallery"><span class="fa fa-plus zoom_icon"></span></a>
                                            </div>
                                        </div>
                                        <div class="project_caro_content">
                                            <p>Mr. Imran Mansoor</p>
                                            <h2 class="title_pro"><a href="#" rel="bookmark">Business Development Manager</a></h2>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="p_pagination">
                                <div class="pswiper-pagination"></div>
                            </div>

                            <span class="swiper-notification" aria-live="assertive" aria-atomic="true"></span>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </section>
    <section class="testimonial-section">
        <!--===============spacing==============-->
        <div class="pd_bottom_80"></div>
        <!--===============spacing==============-->
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="title_all_box style_one text-center dark_color">
                        <div class="title_sections ">
                            <!--<div class="before_title">Our Clients</div>-->
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
                                            <img src="{{ asset('/web/assets/images/about/male.jpg') }}" alt="Aurega Accounting">
                                        </div>
                                        <div class="authour_details">
                                            <div class="comment text-justify">
                                                I am highly impressed with the exceptional services provided by AUREGA Accounting Services. They have demonstrated exceptional knowledge and expertise in managing our company's financial records. Their attention to detail, professionalism, and prompt service have been instrumental in our financial success.
                                            </div>
                                            <div class="details clearfix">
                                                <div class="c_image">
                                                    <img src="{{ asset('/web/assets/images/about/male.jpg') }}" alt="Aurega Accounting">
                                                </div>
                                                <div class="c_content">
                                                    <div class="content_in">
                                                        <h2>Mr. Adhil Mahmood</h2>
                                                        <span>Dolphin Aqua LLC</span>
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
                                            <img src="{{ asset('/web/assets/images/about/female.png') }}" alt="Aurega Accounting">
                                        </div>
                                        <div class="authour_details">
                                            <div class="comment text-justify">
                                                I would like to express my deep appreciation for the outstanding support provided by AUREGA Accounting & Tax Advisory. Excellent service.
                                            </div>
                                            <div class="details clearfix">
                                                <div class="c_image">
                                                    <img src="{{ asset('/web/assets/images/about/female.png') }}" alt="Aurega Accounting">
                                                </div>
                                                <div class="c_content">
                                                    <div class="content_in">
                                                        <h2>Ms. Emily</h2>
                                                        <span>Armada Enterprises</span>
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
                                            <img src="{{ asset('/web/assets/images/about/male.jpg') }}" alt="Aurega Accounting">
                                        </div>
                                        <div class="authour_details">
                                            <div class="comment text-justify">
                                                AUREGA has been an invaluable asset to our organization. Their expertise in tax planning and strategic financial advice has helped us optimize our financial resources. Recommended.
                                            </div>
                                            <div class="details clearfix">
                                                <div class="c_image">
                                                    <img src="{{ asset('/web/assets/images/about/male.jpg') }}" alt="Aurega Accounting">
                                                </div>
                                                <div class="c_content">
                                                    <div class="content_in">
                                                        <h2>Mr. Ravi </h2>
                                                        <span>AMA Trading LLC</span>
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
                                            <img src="{{ asset('/web/assets/images/about/female.png') }}" alt="Aurega Accounting">
                                        </div>
                                        <div class="authour_details">
                                            <div class="comment text-justify">
                                                Excellent Service by Aurega Accounting, Highly Recommended.
                                            </div>
                                            <div class="details clearfix">
                                                <div class="c_image">
                                                    <img src="{{ asset('/web/assets/images/about/female.png') }}" alt="Aurega Accounting">
                                                </div>
                                                <div class="c_content">
                                                    <div class="content_in">
                                                        <h2>Mrs. Sophia Davis</h2>
                                                        <span>Chelsea Café</span>
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
                                            <img src="{{ asset('/web/assets/images/about/male.jpg') }}" alt="Aurega Accounting">
                                        </div>
                                        <div class="authour_details">
                                            <div class="comment text-justify">
                                                Aurega Accounting Service's expertise in financial analysis and forecasting has helped us make informed decisions and achieve our growth targets. Their professionalism, integrity, and commitment to excellence make them a trusted partner for any organization looking for top-quality accounting services.
                                            </div>
                                            <div class="details clearfix">
                                                <div class="c_image">
                                                    <img src="{{ asset('/web/assets/images/about/male.jpg') }}" alt="Aurega Accounting">
                                                </div>
                                                <div class="c_content">
                                                    <div class="content_in">
                                                        <h2>Mr. Michael </h2>
                                                        <span>L & L Holdings </span>
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