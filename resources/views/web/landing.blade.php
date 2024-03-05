<!DOCTYPE html>
<html lang="en-US">

<head>
    <!-- Google tag (gtag.js) -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-LKERH28CV5"></script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());

        gtag('config', 'G-LKERH28CV5');
    </script>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
    <title>{{ $title }}</title>
    <!-- Fav Icon -->
    <link rel="icon" href="{{ asset('/web/assets/images/favicon.ico') }}" type="image/x-icon">
    <!-- Fav Icon -->
    <!-- Google Fonts -->
    <link rel='stylesheet' href='https://fonts.googleapis.com/css?family=Spartan%3A400%2C500%2C600%2C700%2C800%2C900%7CInter%3A300%2C400%2C500%2C600%2C700%2C800%2C900&subset=latin%2Clatin-ext' type='text/css' media='all' />
    <!-- Google Fonts -->
    <!-- Style -->
    <link rel='stylesheet' href="{{ asset('/web/assets/css/bootstrap.min.css') }}" type='text/css' media='all' />
    <link rel='stylesheet' href="{{ asset('/web/assets/css/owl.css') }}" type='text/css' media='all' />
    <link rel='stylesheet' href="{{ asset('/web/assets/css/swiper.min.css') }}" type='text/css' media='all' />
    <link rel='stylesheet' href="{{ asset('/web/assets/css/jquery.fancybox.min.css') }}" type='text/css' media='all' />
    <link rel='stylesheet' href="{{ asset('/web/assets/css/icomoon.css') }}" type='text/css' media='all' />
    <link rel='stylesheet' href="{{ asset('/web/assets/css/flexslider.css') }}" type='text/css' media='all' />
    <link rel='stylesheet' href="{{ asset('/web/assets/css/font-awesome.min.css') }}" type='text/css' media='all' />
    <link rel='stylesheet' href="{{ asset('/web/assets/css/style.css') }}" type='text/css' media='all' />
    <link rel='stylesheet' href="{{ asset('/web/assets/css/scss/elements/theme-css.css') }}" type='text/css' media='all' />
    <link rel='stylesheet' id="creote-color-switcher-css" href="{{ asset('/web/assets/css/scss/elements/color-switcher/color1.css') }}" type='text/css' media='all' />
    <link href="{{ asset('/web/assets/css/mystickyelement.css') }}" rel="stylesheet">
    <!-- Style-->
</head>

<body class="home theme-creote page-home-default-one">
    <!-- Whatsapp -->
    <div class="mystickyelements-fixed mystickyelements-position-right mystickyelements-position-screen-center mystickyelements-position-mobile-right mystickyelements-on-hover mystickyelements-size-medium mystickyelements-mobile-size-medium mystickyelements-templates-default">
        <div class="mystickyelement-lists-wrap">
            <ul class="mystickyelements-lists mystickyno-minimize">
                <li id="mystickyelements-social-whatsapp" class="mystickyelements-social-icon-li mystickyelements-social-whatsapp  element-desktop-on element-mobile-on">
                    <span class="mystickyelements-social-icon social-whatsapp social-custom" style="background: #30D5C8">
                        <a href="https://api.whatsapp.com/send?phone=971503446939&text=Hello!%20I%20am%20interested%20in%20your%20service" target="_blank" rel="noopener"><i class="fa fa-whatsapp"></i></a>
                    </span>
                    <span class="mystickyelements-social-text" style="background: #30D5C8;">
                        <a href="https://api.whatsapp.com/send?phone=971503446939&text=Hello!%20I%20am%20interested%20in%20your%20service" target="_blank" rel="noopener">WhatsApp</a>
                    </span>
                </li>
            </ul>
        </div>
    </div>
    <!-- End Whatsapp -->
    <div id="page" class="page_wapper hfeed site" id="">
        <div id="wrapper_full" class="content_all_warpper">
            <!----page-header----->
            <!----pre loader----->
            <!--<div class="preloader-wrap">
                <div class="preloader" style="background-image:url('{{ asset("/web/assets/images/preloader.gif") }}')">
                </div>
                <div class="overlay"></div>
            </div>-->
            <!----pre loader end----->
            <div class="header_area " id="header_contents">
                <!-- <div class="top_bar style_three bg_op_1 pd_top_20 pd_bottom_5 d_md_none">
                    <div class="auto-container">
                        <div class="row">
                            <div class="col-lg-12 m-auto">
                                <div class="top_inner">
                                    <div class="row">
                                        <div class="col-lg-4">
                                            <div class="footer_contact_list light_color type_one">
                                                <div class="same_contact phone">
                                                    <span class="icon-telephone"></span>
                                                    <div class="content">
                                                        <h6 class="titles"> Phone</h6>
                                                        <a href="tel:+971503446939">+(971) 50 344 6939 </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-4">
                                            <div class="footer_contact_list light_color type_one">
                                                <div class="same_contact mail">
                                                    <span class="icon-mail"></span>
                                                    <div class="content">
                                                        <h6 class="titles"> Mail Us</h6>
                                                        <a href="mailto:aas@auregagroup.com">aas@auregagroup.com</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-4">
                                            <div class="footer_contact_list light_color type_one">
                                                <div class="same_contact address">
                                                    <span class="icon-location2"></span>
                                                    <div class="content">
                                                        <h6 class="titles"> Address</h6>
                                                        <p><a href="{{ route('location.map') }}" target="_blank">#106, Bay Square 11, Business Bay, Dubai</a></p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div> -->
                <header class="header header_default style_one style_two_remade get_sticky_header">
                    <div class="auto-container">
                        <div class="row align-items-center">
                            <div class="col-lg-3 logo_column">
                                <div class="header_logo_box">
                                    <a href="{{ route('index') }}" class="logo navbar-brand">
                                        <img src="{{ asset('/web/assets/images/aurega-logo-transparent.png') }}" alt="Aurega Accounting" class="logo_default">
                                        <img src="{{ asset('/web/assets/images/aurega-logo-transparent.png') }}" alt="Aurega Accounting" class="logo__sticky">
                                    </a>
                                </div>
                            </div>
                            <div class="col-lg-3">
                                <div class="footer_contact_list light_color type_one d_md_none">
                                    <div class="same_contact phone">
                                        <span class="icon-telephone"></span>
                                        <div class="content">
                                            <h6 class="titles"> Phone</h6>
                                            <a href="tel:+971503446939">+(971) 50 344 6939 </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3">
                                <div class="footer_contact_list light_color type_one d_md_none">
                                    <div class="same_contact mail">
                                        <span class="icon-mail"></span>
                                        <div class="content">
                                            <h6 class="titles"> Mail Us</h6>
                                            <a href="mailto:aas@auregagroup.com">aas@auregagroup.com</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3">
                                <div class="footer_contact_list light_color type_one d_md_none">
                                    <div class="same_contact address">
                                        <span class="icon-location2"></span>
                                        <div class="content">
                                            <h6 class="titles"> Address</h6>
                                            <p><a href="{{ route('location.map') }}" target="_blank">#106, Bay Square 11, Business Bay, Dubai</a></p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </header>
            </div>
            <div id="content" class="site-content">
                <section class="banner-section bg_op_1" style="background-image: url('{{ asset('/web/assets/images/sliders/slider-2-bg.webp') }}');">
                    <!--===============spacing==============-->
                    <div class="pd_top_100"></div>
                    <!--===============spacing==============-->
                    <div class="auto-container">
                        <div class="row align-items-center">
                            <div class="col-xl-6 col-lg-6 col-md-12">
                                <div class="title_all_box style_one dark_color">
                                    <div class="title_sections">
                                        <div class="before_title">Accounting Solutions for your business</div>
                                        <h2 class="title_big text-white">From paper work to peace of mind</h2>
                                        <p class="text-white">Empower your business with the right structure. Your requirements simplified.</p>
                                    </div>
                                </div>
                                <!--===============spacing==============-->
                                <div class="pd_bottom_20"></div>
                                <!--===============spacing==============-->
                                <div class="theme_btn_all color_one">
                                    <a href="{{ route('contact') }}" rel="nofollow" class="theme-btn one">Contact Now</a>
                                </div>
                                <!--===============spacing==============-->
                                <div class="pd_bottom_40"></div>
                                <!--===============spacing==============-->
                            </div>
                            <div class="col-xl-1 hidden-lg"></div>
                            <div class="col-xl-5 col-lg-6 col-md-12">
                                <div class="contact_form_box_all type_five mt-5">
                                    <div class="contact_form_box_inner simple_form">
                                        <div class="title_all_box style_one dark_color">
                                            <div class="title_sections">
                                                <div class="before_title">We here to help you</div>
                                                <h6 class="font_24">Book an Appointment</h6>
                                            </div>
                                        </div>
                                        <!--===============spacing==============-->
                                        <div class="pd_bottom_10"></div>
                                        <!--===============spacing==============-->
                                        <div class="contact_form_shortcode">
                                            <form action="{{ route('form.submit.landing') }}" method="post" class="wpcf7-form init">
                                                @csrf
                                                <p>
                                                    <label><br>
                                                        <input type="text" name="name" value="" size="40" aria-required="true" aria-invalid="false" placeholder="Enter Your Name" required></span><br>
                                                        <i class="fa fa-user"></i><br>
                                                    </label>
                                                </p>
                                                <p><label><br>
                                                        <input type="email" name="email" value="" size="40" aria-required="true" aria-invalid="false" placeholder="Enter Your Email" required></span><br>
                                                        <i class="fa fa-envelope"></i><br>
                                                    </label>
                                                </p>
                                                <p>
                                                    <label><br>
                                                        <input type="text" name="mobile" value="" size="40" aria-required="true" aria-invalid="false" placeholder="Enter Your Mobile with Country Code" required></span><br>
                                                        <i class="fa fa-mobile fa-lg"></i><br>
                                                    </label>
                                                </p>
                                                <p>
                                                    <label><br>
                                                        <select class="form-control" placeholder="Select Service" name="service" required>
                                                            <option value="">Select Service</option>
                                                            <option value="Accounting & Bookkeeping">Accounting & Bookkeeping</option>
                                                            <option value="Tax Advisory">Tax Advisory</option>
                                                            <option value="VAT Services">VAT Services</option>
                                                            <option value="Financial Management">Financial Management</option>
                                                            <option value="General Services">General Services</option>
                                                        </select><br>
                                                        <br>
                                                    </label>
                                                </p>
                                                <p>
                                                    <label><br>
                                                        <textarea class="form-control" placeholder="Your Message" name="message" required></textarea><br>
                                                        <br>
                                                    </label>
                                                </p>
                                                <p><input type="submit" value="Submit"> </p>

                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--===============spacing==============-->
                    <div class="pd_bottom_100"></div>
                    <!--===============spacing==============-->
                </section>
                <section class="about-section mt-5">
                    <div class="container">
                        <div class="row">
                            <div class="col-xl-6 col-lg-12">
                                <div class="about_content position-relative z_99">
                                    <div class="title_all_box style_one text-left  dark_color">
                                        <div class="title_sections">
                                            <div class="before_title">About Aurega</div>
                                            <h1>Leading Trustworthy Bookkeeping & Taxation service firm in Dubai</h1>
                                        </div>
                                    </div>
                                    <!--===============spacing==============-->
                                    <div class="pd_bottom_15"></div>
                                    <!--===============spacing==============-->
                                    <div class="extra_content image_with_content dark_color">
                                        <div class="simple_image">
                                            <img src="{{ asset('/web/assets/images/ae.png') }}" alt="Aurega Accounting">
                                            <h2> Since 2014, <br> Operating in Dubai.</h2>
                                        </div>
                                    </div>
                                    <!--===============spacing==============-->
                                    <div class="pd_bottom_20"></div>
                                    <!--===============spacing==============-->
                                    <div class="description_box">
                                        <p class="text-justify">Aurega Accounting and Tax Advisory LLC stands as a premier provider of accounting services in Dubai, boasting over 15 years of industry experience. As certified professional chartered accountants, we specialize in delivering comprehensive bookkeeping and taxation services to a diverse clientele.</p><br />
                                        <p class="text-justify">At Aurega, we excel in managing your daily finances with precision and efficiency. Our meticulous bookkeeping services ensure the accurate recording of your income and expenses, maintaining up-to-date financial records. This clarity in your business's financial standing empowers you to make informed and strategic decisions, driving success and growth.</p>
                                    </div>
                                    <!--===============spacing==============-->
                                    <div class="pd_bottom_20"></div>
                                    <!--===============spacing==============-->
                                    <div class="title_all_box style_one text-left  dark_color">
                                        <div class="">
                                            <h2>Why Choose Us?</h2>
                                            <p class="text-justify">Over two decades of substantial experience offering fully outsourced and co-sourced accounting solutions. Consistent delivery of high-quality results, meeting deadlines and adhering to your financial constraints. Commitment to accounting for performance with precision, objectivity, and ethical standards. Team comprising experts with extensive knowledge of the Middle Eastern market and its regulatory framework. Dedicated to providing personalized and professional services, prioritizing client satisfaction.</p>
                                        </div>
                                    </div>

                                    <!--===============spacing==============-->
                                    <div class="pd_bottom_25"></div>
                                    <!--===============spacing==============-->
                                    <div class="theme_btn_all color_one">
                                        <a href="{{ route('contact') }}" rel="nofollow" class="theme-btn five">Contact us<i class="icon-right-arrow"></i></a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-6 col-lg-12">
                                <div class="image_boxes style_two">
                                    <img src="{{ asset('/web/assets/images/shape-1.png') }}" class="background_image" alt="Aurega Accounting">
                                    <div class="image one">
                                        <img src="{{ asset('/web/assets/images/about/pic1.jpeg') }}" class="img-fluid" alt="Aurega Accounting">
                                    </div>
                                    <div class="image two">
                                        <img src="{{ asset('/web/assets/images/about/pic2.jpeg') }}" class="img-fluid" alt="Aurega Accounting">
                                    </div>
                                    <div class="authour_quotes">
                                        <i class="icon-quote"></i>
                                        <h6>We are committed to being your trusted partner.</h6>
                                        <p class="text-center"><a href="{{ asset('/storage/docs/company-profile.pdf') }}" target="_blank" class="text-white">View Our Company Profile</a></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--===============spacing==============-->
                    <div class="pd_bottom_70"></div>
                    <!--===============spacing==============-->
                </section>
            </div>
        </div>
        <!---==============footer start =================-->
        <div class="footer_area footer_two" id="footer_contents">
            <div class="footer_widgets_wrap bg_dark_2">
                <!--===============spacing==============-->
                <div class="pd_top_100"></div>
                <!--===============spacing==============-->
                <div class="container">
                    <div class="row">
                        <div class="col-xl-3 col-lg-6 col-md-12 col-sm-12">
                            <div class="footer_widgets about_company light_color">
                                <div class="about_company_inner">
                                    <div class="footer_logo">
                                        <h5><a class="text-white" href="{{ route('index') }}" target="_blank" rel="nofollow">
                                                Aurega Accounting and Tax Advisory LLC
                                            </a></h5>
                                    </div>
                                    <!--===============spacing==============-->
                                    <div class="mr_bottom_20"></div>
                                    <!--===============spacing==============-->
                                    <div class="content_box">
                                        <p class="text-justify">
                                            We are committed to being your trusted partner, providing comprehensive accounting and tax advisory services.
                                        </p>
                                        <div class="consulting">
                                            <div class="image">
                                                <img src="{{ asset('/web/assets/images/authour-image.png') }}" alt="need help" />
                                            </div>
                                            <div class="help_con">
                                                <h6>Need Help?</h6>
                                                <h2>
                                                    <a href="tel:+971503446939" target="_blank" rel="nofollow"> Free Consultation</a>
                                                </h2>
                                            </div>
                                            <div class="help_con">
                                                <h6> Careers</h6>
                                                <div class="con_content">
                                                    <h2><a href="https://auregagroup.com/careers" target="_blank">Careers</a></h2>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-1 hidden-lg"></div>
                        <div class="col-xl-4 col-lg-3 col-md-6 col-sm-12">
                            <div class="footer_widgets wid_tit style_one">
                                <div class="fo_wid_title">
                                    <h2>Services</h2>
                                </div>
                            </div>
                            <!--===============spacing==============-->
                            <div class="mr_bottom_20"></div>
                            <!--===============spacing==============-->
                            <div class="footer_widgets clearfix navigation_foo light_color style_one">
                                <div class="navigation_foo_box">
                                    <div class="navigation_foo_box">
                                        <div class="navigation_foo_inner">
                                            <div class="menu-information-container">
                                                <ul class="menu">
                                                    <li class="menu-item"><a href="{{ route('services.accounting') }}">Accounting and Bookkeeping</a></li>
                                                    <li class="menu-item"><a href="{{ route('services.tax') }}">TAX Advisory</a></li>
                                                    <li class="menu-item"><a href="{{ route('services.finance') }}">Financial Accounting and Consulting</a></li>
                                                    <li class="menu-item"><a href="{{ route('services.finance') }}">Management Accounting and Consulting</a></li>
                                                    <li class="menu-item"><a href="{{ route('services.vat') }}">VAT Services</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-1 hidden-lg"></div>
                        <div class="col-xl-3 col-lg-6 col-md-12 col-sm-12">
                            <div class="footer_widgets wid_tit style_one">
                                <div class="fo_wid_title">
                                    <h2>Get In Touch</h2>
                                </div>
                            </div>
                            <!--===============spacing==============-->
                            <div class="mr_bottom_20"></div>
                            <!--===============spacing==============-->
                            <div class="footer_widgets get_in_touch_foo light_color">
                                <div class="get_intouch_inrfo">
                                    <div class="foo_cont_inner">
                                        <div class="top">
                                            <h6> Location</h6>
                                            <p> #106, Bay Square 11, Business Bay, Dubai
                                            </p>
                                        </div>
                                        <div class="bottom">
                                            <h6> Contact</h6>
                                            <div class="con_content">
                                                <h5> Phone :</h5>
                                                <a href="tel:+971503446939"> +(971) 50 344 6939</a>,
                                                <a href="tel:+97143494444"> +(971) 4 349 4444</a>
                                            </div>
                                            <div class="con_content">
                                                <h5> Mail Us :</h5>
                                                <a href="mailto:aas@auregagroup.com"> aas@auregagroup.com</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="footer_logo mt-3">
                                    <a href="https://auregagroup.com" target="_blank" rel="nofollow">
                                        <img src="{{ asset('/web/assets/images/aurega-logo-transparent.png') }}" alt="logo">
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--===============spacing==============-->
                <div class="pd_bottom_40"></div>
                <!--===============spacing==============-->
            </div>
            <div class="footer_copy_right bg_dark_3">
                <!--===============spacing==============-->
                <div class="pd_top_20"></div>
                <!--===============spacing==============-->
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-lg-6 col-md-12 col-sm-12">
                            <div class="footer_copy_content">
                                © {{ date('Y') }} <a href="https://auregagroup.com" target="_blank">Aurega Group Limited.</a> All Rights
                                Reserved.
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-12 col-sm-12">
                            <div class="social_media_v_one text-end">
                                <ul>
                                    <li>
                                        <a href="https://www.facebook.com/auregagroup/" target="_blank"> <span class="fa fa-facebook"></span>
                                            <small>facebook</small>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="https://x.com/Auregagroup" target="_blank">
                                            <svg xmlns="http://www.w3.org/2000/svg" height="16" width="16" viewBox="0 0 512 512"><!--!Font Awesome Free 6.5.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.-->
                                                <path fill="#fff" d="M389.2 48h70.6L305.6 224.2 487 464H345L233.7 318.6 106.5 464H35.8L200.7 275.5 26.8 48H172.4L272.9 180.9 389.2 48zM364.4 421.8h39.1L151.1 88h-42L364.4 421.8z" />
                                            </svg>
                                            <small>X</small>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="https://www.linkedin.com/company/auregaglobal/"> <span class="fa fa-linkedin"></span>
                                            <small>linkedin</small>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="https://www.instagram.com/auregagroup/" target="_blank"> <span class="fa fa-instagram"></span>
                                            <small>instagram</small>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="https://www.youtube.com/@auregagroup7318" target="_blank"> <span class="fa fa-youtube"></span>
                                            <small>youtube</small>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <!--===============spacing==============-->
                <div class="pd_bottom_20"></div>
                <!--===============spacing==============-->
            </div>
        </div>
        <!---==============footer end =================-->
        <!---==============mobile menu =================-->
        <div class="crt_mobile_menu">
            <div class="menu-backdrop"></div>
            <nav class="menu-box">
                <div class="close-btn"><i class="icon-close"></i></div>
                <div class="menu-outer">
                    <!--Here Menu Will Come Automatically Via Javascript / Same Menu as in Header-->
                </div>
            </nav>
        </div>
        <!---==============mobile menu end =================-->

        <!---==============floating menu=================-->
        <div class="floating_menu_box">
            <ul class="float_menu_box">
                <i class="close fa fa-times"></i>
                <li class="floating_menu_text {{ (request()->segment(1) == '') ? 'active' : '' }}">
                    <a href="{{ route('index') }}"> Home </a>
                </li>
                <li class="floating_menu_text {{ (request()->segment(1) == 'about') ? 'active' : '' }}">
                    <a href="{{ route('about') }}"> About Us </a>
                </li>
                <li class="floating_menu_text {{ (request()->segment(1) == 'services') ? 'active' : '' }}">
                    <a href="{{ route('services.accounting') }}"> Services </a>
                </li>
                <li class="floating_menu_text {{ (request()->segment(1) == 'faqs') ? 'active' : '' }}">
                    <a href="{{ route('faqs') }}"> FAQs </a>
                </li>
                <li class="floating_menu_text {{ (request()->segment(1) == 'blogs') ? 'active' : '' }}">
                    <a href="{{ route('blogs') }}"> Blog </a>
                </li>
                <li class="floating_menu_text {{ (request()->segment(1) == 'contact') ? 'active' : '' }}">
                    <a href="{{ route('contact') }}"> Contact Us </a>
                </li>
            </ul>
        </div>
        <!---==============floating menu=================-->

    </div>

    <div class="modal_popup one">
        <div class="modal-popup-inner">
            <div class="close-modal"><i class="fa fa-times"></i></div>
            <div class="modal_box">
                <div class="row">
                    <div class="col-lg-5 col-md-12 form_inner">
                        <div class="form_content">
                            <form method="post" action="{{ route('form.submit.landing') }}">
                                @csrf
                                <p>
                                    <label> Your name<br />
                                        <input type="text" name="name" value="" size="40" aria-required="true" aria-invalid="false" placeholder="Enter Your Name" required />
                                        <br />
                                        <i class="fa fa-user"></i><br />
                                    </label>
                                </p>
                                <p><label> Your email<br />
                                        <input type="email" name="email" value="" size="40" aria-required="true" aria-invalid="false" placeholder="Enter Your Email" required />
                                        <br />
                                        <i class="fa fa-envelope"></i><br />
                                    </label>
                                </p>
                                <p>
                                    <label> Contact Number<br />
                                        <input type="text" name="mobile" value="" size="40" aria-required="true" aria-invalid="false" placeholder="Mobile Number with Country Code" required />
                                        <br />
                                        <i class="fa fa-mobile"></i><br />
                                    </label>
                                </p>
                                <p>
                                    <label>Service<br>
                                        <select class="form-control" placeholder="Select Service" name="service" required>
                                            <option value="">Select Service</option>
                                            <option value="Accounting & Bookkeeping">Accounting & Bookkeeping</option>
                                            <option value="Tax Advisory">Tax Advisory</option>
                                            <option value="VAT Services">VAT Services</option>
                                            <option value="Financial Management">Financial Management</option>
                                            <option value="General Services">General Services</option>
                                        </select><br>
                                        <br>
                                    </label>
                                </p>
                                <p>
                                    <label> Your message<br />
                                        <textarea name="message" cols="40" rows="10" class="wpcf7-form-control wpcf7-textarea" aria-invalid="false" placeholder="Enter Your Message" required></textarea>
                                        <br />
                                        <i class="fa fa-comments"></i><br />
                                    </label>
                                </p>
                                <p><input class="btn-submit" type="submit" value="Submit" /></p>
                            </form>
                        </div>
                    </div>
                    <div class="col-lg-7 col-md-12 about_company_inner">
                        <div class="abt_content">
                            <div class="logo">
                                <img src="{{ asset('/web/assets/images/aurega-logo-transparent.png') }}" alt="Aurega" class="company_logo_modal">
                            </div>
                            <div class="text">
                                <p class="text-justify"> We understand the intricacies of financial management and the importance of robust accounting practices for businesses to thrive in today's dynamic marketplace. As a leading accounting and tax advisory service based in the vibrant city of Dubai, we specialize in providing tailored financial solutions to meet the diverse needs of businesses, entrepreneurs, and individuals.</p>
                                <a href="{{ route('about') }}">Read More</a>
                            </div>
                            <div class="post_contet_modal">
                                <h2> Latest Blogs</h2>
                                <div class="post_enable">
                                    @forelse(blogs()->take(5) as $key => $item)
                                    <div class="modal_post_grid">
                                        <a href="{{ route('blog.single', $item->slug) }}">
                                            <img width="852" height="812" src="{{ ($item->featured_image) ? asset($item->featured_image) : asset('/web/assets/images/blog/blog-image-9.jpg') }}" class="main_img wp-post-image" alt="{{ $item->title }}" />
                                        </a>
                                    </div>
                                    @empty
                                    @endforelse
                                </div>
                            </div>
                            <div class="copright">
                                © {{ date('Y') }} Aurega Group Limited. All Rights Reserved.
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Back to top with progress indicator-->
    <!--<div class="prgoress_indicator">
        <svg class="progress-circle svg-content" width="100%" height="100%" viewBox="-1 -1 102 102">
            <path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98" />
        </svg>
    </div>-->
    <!---========================== javascript ==========================-->
    <script type='text/javascript' src="{{ asset('web/assets/js/jquery-3.6.0.min.js') }}"></script>
    <script type='text/javascript' src="{{ asset('web/assets/js/bootstrap.min.js') }}"></script>
    <script type='text/javascript' src="{{ asset('web/assets/js/jquery.fancybox.js') }}"></script>
    <script type='text/javascript' src="{{ asset('web/assets/js/jquery.flexslider-min.js') }}"></script>
    <script type='text/javascript' src="{{ asset('web/assets/js/color-scheme.js') }}"></script>
    <script type='text/javascript' src="{{ asset('web/assets/js/owl.js') }}"></script>
    <script type='text/javascript' src="{{ asset('web/assets/js/swiper.min.js') }}"></script>
    <script type='text/javascript' src="{{ asset('web/assets/js/isotope.min.js') }}"></script>
    <script type='text/javascript' src="{{ asset('web/assets/js/countdown.js') }}"></script>
    <script type='text/javascript' src="{{ asset('web/assets/js/simpleParallax.min.js') }}"></script>
    <script type='text/javascript' src="{{ asset('web/assets/js/appear.js') }}"></script>
    <script type='text/javascript' src="{{ asset('web/assets/js/jquery.countTo.js') }}"></script>
    <script type='text/javascript' src="{{ asset('web/assets/js/sharer.js') }}"></script>
    <script type='text/javascript' src="{{ asset('web/assets/js/validation.js') }}"></script>
    <!-- main-js -->
    <script type='text/javascript' src="{{ asset('web/assets/js/creote-extension.js') }}"></script>
    <!---========================== javascript ==========================-->
    <script>
        $(function() {
            $('.modal_popup').addClass('contact-popup-visible');
            $('form').submit(function() {
                $(".btn-submit").attr("disabled", true);
                $(".btn-submit").html("Loading...<span class='spinner-border spinner-border-sm' role='status' aria-hidden='true'></span>");
            });

            $(".mystickyelements-fixed").hover(function() {
                $("#mystickyelements-social-whatsapp").addClass("elements-active elements-hover-active");
                $(".mystickyelements-fixed").addClass("mystickyelements-on-click");
            });

            $(".mystickyelements-fixed").mouseleave(function() {
                $("#mystickyelements-social-whatsapp").removeClass("elements-active elements-hover-active");
                $(".mystickyelements-fixed").removeClass("mystickyelements-on-click");
            })
        });
    </script>

    <!--Start of Tawk.to Script-->
    <script type="text/javascript">
        var Tawk_API = Tawk_API || {},
            Tawk_LoadStart = new Date();
        (function() {
            var s1 = document.createElement("script"),
                s0 = document.getElementsByTagName("script")[0];
            s1.async = true;
            s1.src = 'https://embed.tawk.to/6593b25d8d261e1b5f4e2203/1hj4f1g4p';
            s1.charset = 'UTF-8';
            s1.setAttribute('crossorigin', '*');
            s0.parentNode.insertBefore(s1, s0);
        })();
    </script>
    <!--End of Tawk.to Script-->
</body>

</html>