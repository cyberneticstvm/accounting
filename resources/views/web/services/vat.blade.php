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
                            <img src="{{ asset('/web/assets/images/about/vat-img1.webp') }}" class="img-fluid" alt="about">
                        </div>
                        <div class="image_box">
                            <div class="row">
                                <div class="col-lg-6 col-md-12 ps-0 ps-lg-0 pe-0 pe-lg-3 pe-xl-3 mb-4 mb-lg-0 mb-xl-0">
                                    <div class="imgs">
                                        <img src="{{ asset('/web/assets/images/about/7.jpeg') }}" class="img-fluid one_img" alt="about">
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-12 ps-0 ps-lg-3 pe-0 pe-lg-0 pe-xl-0">
                                    <div class="imgs">
                                        <img src="{{ asset('/web/assets/images/about/8.jpeg') }}" class="img-fluid one_img" alt="about">
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
                                <h1>VAT Services</h1>
                                <p class="text-justify">The implementation of Value Added Tax (VAT) marks a substantial shift for businesses across the spectrum. Given its extensive reach, companies must thoroughly assess how VAT will influence their transactions, pricing structures, and profit margins. Our team of dedicated VAT consultants specializes in offering comprehensive VAT services tailored for the UAE market.</p>
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
                        <div class="title_all_box style_three  dark_color">
                            <div class="title_sections three left">
                                <p class="text-justify">As with any newly introduced regulation, the advent of VAT presents inherent challenges for businesses in their preparatory phase. At our firm, we boast a dedicated cadre of proficient VAT Consultants meticulously trained to navigate these challenges. Our adept VAT team operating within the Lower Gulf, in collaboration with our global network of esteemed VAT experts across AUREGA, stands poised to offer strategic guidance and seamless implementation solutions. Our concerted efforts are aimed at assisting organizations in fulfilling their VAT commitments, curbing VAT liabilities, and notably supporting clients without complete VAT recovery capabilities.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-12">
                    <div class="content_box_cn style_one">
                        <div class="txt_content">
                            <h3><a href="javascript:void(0)">VAT Consultation and Compliance</a></h3>
                            <p class="text-justify">With VAT intricacies in the UAE, compliance is crucial. We provide comprehensive VAT consultation and compliance services, ensuring your business operates seamlessly within the regulations.</p>
                        </div>
                    </div>
                </div>
                <div class="col-xl-12">
                    <div class="content_box_cn style_one">
                        <div class="txt_content">
                            <h3><a href="javascript:void(0)">Exploring Our VAT Expertise</a></h3>
                            <p class="text-justify">At AUREGA, we proudly serve as authorized Tax Agents, delivering comprehensive VAT solutions in the UAE. Our suite of VAT services encompasses:</p>
                            <ul>
                                <li>VAT Registration</li>
                                <li>VAT Return Filing</li>
                                <li>VAT Refund Assistance</li>
                                <li>VAT Audit Support</li>
                                <li>VAT Accounting Services</li>
                                <li>VAT Deregistration Guidance</li>
                            </ul>
                            <p class="text-justify">Complementing our exceptional audit reporting, our firm extends a diverse array of top-tier auditing and accounting services tailored to address the distinct requirements of our esteemed business clientele.</p>
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