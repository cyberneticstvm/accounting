<!DOCTYPE html>
<html lang="en-US">

<head>
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
    <!-- Style-->
</head>

<body class="home theme-creote page-home-default-one">
    <div id="page" class="page_wapper hfeed site">
        <div id="wrapper_full" class="content_all_warpper">
            <!----page-header----->
            <!----pre loader----->
            <div class="preloader-wrap">
                <div class="preloader" style="background-image:url('{{ asset("/web/assets/images/preloader.gif") }}')">
                </div>
                <div class="overlay"></div>
            </div>
            <!----pre loader end----->
            <!----header----->
            @include("web.nav")
            <!----header----->
            <!--===============PAGE CONTENT ==============-->
            @yield("content")
            <!--===============PAGE CONTENT END==============-->
        </div>
        <!---==============footer start =================-->
        <div class="footer_area footer_two" id="footer_contents">
            <div class="container">
                <section class="newsteller mr_bottom_minus_110 style_two" style="background-image:url('{{ asset("/web/assets/images/about/testi-image.jpg") }}')">
                    <div class="auto-container">
                        <div class="inner_stell">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="content">
                                        <h2>Request a call back</h2>
                                        <p>Drop your email / mobile (with country code) and we will reach out you shortly. </p>
                                    </div>
                                    <div class="item_scubscribe">
                                        <form class="mc4wp-form" method="post" action="{{ route('request.callback.submit') }}">
                                            @csrf
                                            <div class="mc4wp-form-fields">
                                                <input type="text" name="email_mobile" placeholder="Your email / mobile" required="">
                                                <input type="submit" class="btn-submit" value="Request">
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
            </div>
            <div class="footer_widgets_wrap bg_dark_2">
                <!--===============spacing==============-->
                <div class="pd_top_100"></div>
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
                                                <a href="tel:+971503446939"> +(971) 50 344 6939</a>
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
                                © {{ date('Y') }} <a href="https://auregagroup.com" target="_blank">Aurega Group.</a> All Rights
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
                                        <a href="https://x.com/Auregagroup" target="_blank"> <span class="fa fa-twitter"></span>
                                            <small>twitter</small>
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
        <!---==============search popup =================-->
        <div id="search-popup" class="search-popup">
            <div class="close-search"><i class="fa fa-times"></i></div>
            <div class="popup-inner">
                <div class="overlay-layer"></div>
                <div class="search-form">
                    <fieldset>
                        <form role="search" method="get" action="#">
                            <input type="search" class="search" placeholder="Search..." value="" name="s" title="Search" />
                            <button type="submit" class="sch_btn"> <i class="icon-search"></i></button>
                        </form>
                    </fieldset>
                </div>
            </div>
        </div>
        <!---==============search popup end =================-->
        <!---==============modal popup =================-->
        <div class="modal_popup one">
            <div class="modal-popup-inner">
                <div class="close-modal"><i class="fa fa-times"></i></div>
                <div class="modal_box">
                    <div class="row">
                        <div class="col-lg-5 col-md-12 form_inner">
                            <div class="form_content">
                                <form method="post" action="{{ route('contact.submit') }}">
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
                                            <input type="text" name="contact_number" value="" size="40" aria-required="true" aria-invalid="false" placeholder="Enter Your Contact Number" required />
                                            <br />
                                            <i class="fa fa-mobile"></i><br />
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
                                    <img src="{{ asset('/web/assets/images/aurega-logo-transparent.png') }}" alt="img" class="company_logo_modal">
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
                                    © {{ date('Y') }} Aurega Group. All Rights Reserved.
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!---==============modal popup end=================-->
        <!---==============floating menu=================-->
        <div class="floating_menu_box">
            <ul class="float_menu_box">
                <i class="close fa fa-times"></i>
                <li class="floating_menu_text {{ (request()->segment(1) == '') ? 'active' : '' }}">
                    <a href="/"> Home </a>
                </li>
                <li class="floating_menu_text {{ (request()->segment(1) == 'about') ? 'active' : '' }}">
                    <a href="/"> About Us </a>
                </li>
                <li class="floating_menu_text {{ (request()->segment(1) == 'services') ? 'active' : '' }}">
                    <a href="/"> Services </a>
                </li>
                <li class="floating_menu_text {{ (request()->segment(1) == 'faqs') ? 'active' : '' }}">
                    <a href="/"> FAQs </a>
                </li>
                <li class="floating_menu_text {{ (request()->segment(1) == 'blogs') ? 'active' : '' }}">
                    <a href="/"> Blog </a>
                </li>
                <li class="floating_menu_text {{ (request()->segment(1) == 'contact') ? 'active' : '' }}">
                    <a href="/"> Contact Us </a>
                </li>
            </ul>
        </div>
        <!---==============floating menu=================-->

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
            $('form').submit(function() {
                $(".btn-submit").attr("disabled", true);
                $(".btn-submit").html("Loading...<span class='spinner-border spinner-border-sm' role='status' aria-hidden='true'></span>");
            });
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