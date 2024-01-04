@extends("web.base")
@section("content")
<div class="device-margin visible-md"></div>
<div id="content" class="site-content">
    <section class="about-section">
        <div class="container">
            <div class="row">
                <div class="col-xl-6 col-lg-12 mb-5 mb-lg-5 mb-xl-0">
                    <div class="image_boxes style_four">
                        <div class="image_box one">
                            <img src="{{ asset('/web/assets/images/about/tax-img1.webp') }}" class="img-fluid" alt="about">
                        </div>
                        <div class="image_box">
                            <div class="row">
                                <div class="col-lg-6 col-md-12 ps-0 ps-lg-0 pe-0 pe-lg-3 pe-xl-3 mb-4 mb-lg-0 mb-xl-0">
                                    <div class="imgs">
                                        <img src="{{ asset('/web/assets/images/about/5.jpeg') }}" class="img-fluid one_img" alt="about">
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-12 ps-0 ps-lg-3 pe-0 pe-lg-0 pe-xl-0">
                                    <div class="imgs">
                                        <img src="{{ asset('/web/assets/images/about/6.jpeg') }}" class="img-fluid one_img" alt="about">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="image_content_inner viceo_en">
                            <h2> 10+ Years Of Experience</h2>
                        </div>
                    </div>
                </div>
                <div class="col-xl-6 col-lg-12">
                    <div class="pd_left_20">
                        <!--===============spacing==============-->
                        <div class="pd_top_25"></div>
                        <!--===============spacing==============-->
                        <div class="title_all_box style_three  dark_color">
                            <div class="title_sections three left">
                                <div class="before_title">Aurega Accounting & Tax Advisory</div>
                                <h1>Tax Advisory</h1>
                                <p class="text-justify">Tax consulting services in the UAE encompass a comprehensive range of specialized expertise aimed at aiding individuals and businesses in navigating the complex landscape of taxation laws and regulations. These services are tailored to ensure compliance, optimize tax strategies, and mitigate risks. Here's an overview of what's typically included:</p>
                                <ul>
                                    <li>Tax Planning and Advisory</li>
                                    <li>VAT Services</li>
                                    <li>Corporate Taxation</li>
                                    <li>Compliance and Risk Management</li>
                                    <li>Cross-Border Taxation</li>
                                    <li>Dispute Resolution and Representation</li>
                                </ul>
                            </div>
                        </div>
                        <!--===============spacing==============-->
                        <div class="mr_bottom_25"></div>
                        <!--===============spacing==============-->
                        <div class="extra_content image_with_content dark_color">
                            <div class="simple_image">
                                <img src="{{ asset('/web/assets/images/ae.png') }}" alt="img">
                                <h2> Since 2014, <br> Operating in Dubai. </h2>
                            </div>
                        </div>
                        <!--===============spacing==============-->
                        <div class="mr_bottom_25"></div>
                        <!--===============spacing==============-->
                    </div>
                </div>
                <div class="col-xl-6">
                    <div class="content_box_cn style_one">
                        <div class="txt_content">
                            <h3><a href="javascript:void(0)">Corporate Tax Services</a></h3>
                            <p class="text-justify">Optimize your tax strategies with our corporate tax services. Our team stays updated with the latest tax laws and regulations, offering tailored solutions for tax planning, compliance, and effective tax management to minimize liabilities and enhance profitability.</p>
                        </div>
                    </div>
                </div>
                <div class="col-xl-6">
                    <div class="content_box_cn style_one">
                        <div class="txt_content">
                            <h3><a href="javascript:void(0)">Strategic Tax Advisory</a></h3>
                            <p class="text-justify">Navigating the intricate realm of UAE taxation demands insight and foresight. Our tax advisors offer strategic counsel, minimizing tax liabilities while aximizing opportunities for your business growth.</p>
                        </div>
                    </div>
                </div>
                <div class="col-xl-6 col-lg-12">
                    <div class="image_boxes">
                        <div class="authour_quotes">
                            <i class="icon-quote"></i>
                            <h6>We are committed to being your trusted partner.</h6>
                            <p class="text-center"><a href="{{ asset('/storage/docs/company-profile.pdf') }}" target="_blank" class="text-white">View Our Company Profile</a></p>
                        </div>
                    </div>
                </div>
            </div>
            <!--===============spacing==============-->
            <div class="mr_bottom_30"></div>
            <!--===============spacing==============-->

            <div class="theme_btn_all color_one text-end">
                <a href="{{ route('contact') }}" class="theme-btn five">
                    Contact us<i class="icon-right-arrow"></i>
                </a>
            </div>
        </div>
        <!--===============spacing==============-->
        <div class="pd_bottom_70"></div>
        <!--===============spacing==============-->
    </section>
</div>
@endsection