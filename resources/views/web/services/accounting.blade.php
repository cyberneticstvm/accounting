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
                            <img src="{{ asset('/web/assets/images/about/about-11.jpg') }}" class="img-fluid" alt="about">
                        </div>
                        <div class="image_box">
                            <div class="row">
                                <div class="col-lg-6 col-md-12 ps-0 ps-lg-0 pe-0 pe-lg-3 pe-xl-3 mb-4 mb-lg-0 mb-xl-0">
                                    <div class="imgs">
                                        <img src="{{ asset('/web/assets/images/about/about-3.jpg') }}" class="img-fluid one_img" alt="about">
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-12 ps-0 ps-lg-3 pe-0 pe-lg-0 pe-xl-0">
                                    <div class="imgs">
                                        <img src="{{ asset('/web/assets/images/about/about-4.jpg') }}" class="img-fluid one_img" alt="about">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="image_content_inner viceo_en">
                            <h2> 30+ Years Of Experience</h2>
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
                                <h1>Accounting & Bookkeeping</h1>
                                <p class="text-justify">Accounting services in the UAE encompass a broad spectrum of financial management and reporting activities designed to ensure businesses maintain accurate, compliant, and transparent financial records. These services are tailored to meet the specific needs of companies operating within the Emirates' regulatory framework. We serve a complete accounting service package to small businesses and individuals within a broad spectrum starting from the implementation of Cloud Software for accounting to business advisory, accounting services, self-assessment, and bookkeeping services</p>
                            </div>
                        </div>
                        <!--===============spacing==============-->
                        <div class="mr_bottom_25"></div>
                        <!--===============spacing==============-->
                        <div class="extra_content image_with_content dark_color">
                            <div class="simple_image">
                                <img src="{{ asset('/web/assets/images/ae.png') }}" alt="img">
                                <h2> Since 1998, <br> Operating in Dubai. </h2>
                            </div>
                        </div>
                        <!--===============spacing==============-->
                        <div class="mr_bottom_25"></div>
                        <!--===============spacing==============-->
                        <div class="description_box">
                            <p class="text-justify">Aurega offers specialized services in bookkeeping and payroll management. These services include accounting and bookkeeping, expense processing, annual accounts reports, and cash forecasting among others. Our team of professionals is equipped with the skillset and knowledge to help make your venture a success.</p>
                        </div>
                        <!--===============spacing==============-->
                        <div class="mr_bottom_25"></div>
                        <!--===============spacing==============-->

                    </div>
                </div>
                <div class="col-xl-6">
                    <div class="content_box_cn style_one">
                        <div class="txt_content">
                            <h3><a href="javascript:void(0)">Comprehensive Accounting Solutions</a></h3>
                            <p class="text-justify">From bookkeeping to financial statement preparation, our meticulous accounting services ensure accuracy, compliance, and transparent financial reporting.</p>
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
                <div class="col-xl-6">
                    <div class="content_box_cn style_one">
                        <div class="txt_content">
                            <h3><a href="javascript:void(0)">VAT Consultation and Compliance</a></h3>
                            <p class="text-justify">With VAT intricacies in the UAE, compliance is crucial. We provide comprehensive VAT consultation and compliance services, ensuring your business operates seamlessly within the regulations.</p>
                        </div>
                    </div>
                </div>
                <div class="col-xl-6">
                    <div class="content_box_cn style_one">
                        <div class="txt_content">
                            <h3><a href="javascript:void(0)">Financial Planning and Advisory</a></h3>
                            <p class="text-justify">Beyond compliance, we aim to enhance your financial health. Our advisory services encompass comprehensive financial planning, budgeting, and strategic guidance to help you achieve your long-term goals.</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row gutter_15px mt-5">
                <div class="col-lg-6 col-md-6 col-sm-12">
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
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-12">
                    <div class="icon_box_all  style_two">
                        <div class="icon_content  icon_imgs ">
                            <div class="icon">
                                <img src="{{ asset('/web/assets/images/icon-img-n-2.png') }}" class="img-fluid svg_image" alt="icon png">
                            </div>
                            <div class="txt_content">
                                <h3><a href="javascript:void(0)">Flexible Company Policies</a></h3>
                            </div>
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