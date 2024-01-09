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
                            <img src="{{ asset('/web/assets/images/about/accounting-img1.webp') }}" class="img-fluid" alt="Aurega Accounting">
                        </div>
                        <div class="image_box">
                            <div class="row">
                                <div class="col-lg-6 col-md-12 ps-0 ps-lg-0 pe-0 pe-lg-3 pe-xl-3 mb-4 mb-lg-0 mb-xl-0">
                                    <div class="imgs">
                                        <img src="{{ asset('/web/assets/images/about/1.jpeg') }}" class="img-fluid one_img" alt="Aurega Accounting">
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-12 ps-0 ps-lg-3 pe-0 pe-lg-0 pe-xl-0">
                                    <div class="imgs">
                                        <img src="{{ asset('/web/assets/images/about/2.jpeg') }}" class="img-fluid one_img" alt="Aurega Accounting">
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
                                <h1>Accounting & Bookkeeping</h1>
                                <p class="text-justify">Accounting services in the UAE encompass a broad spectrum of financial management and reporting activities designed to ensure businesses maintain accurate, compliant, and transparent financial records. These services are tailored to meet the specific needs of companies operating within the Emirates' regulatory framework. We serve a complete accounting service package to small businesses and individuals within a broad spectrum starting from the implementation of Cloud Software for accounting to business advisory, accounting services, self-assessment, and bookkeeping services</p>
                            </div>
                        </div>
                        <!--===============spacing==============-->
                        <div class="mr_bottom_25"></div>
                        <!--===============spacing==============-->
                        <div class="extra_content image_with_content dark_color">
                            <div class="simple_image">
                                <img src="{{ asset('/web/assets/images/ae.png') }}" alt="Aurega Accounting">
                                <h2> Since 2014, <br> Operating in Dubai. </h2>
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
                <div class="col-xl-12">
                    <div class="content_box_cn style_one">
                        <div class="txt_content">
                            <h3><a href="javascript:void(0)">Comprehensive Accounting Solutions</a></h3>
                            <p class="text-justify">From bookkeeping to financial statement preparation, our meticulous accounting services ensure accuracy, compliance, and transparent financial reporting.</p>
                        </div>
                    </div>
                </div>
                <div class="col-xl-12">
                    <div class="content_box_cn style_one">
                        <div class="txt_content">
                            <h3><a href="javascript:void(0)">Internal Auditing Service</a></h3>
                            <p class="text-justify">Internal auditing helps businesses manage risks, plan for the future, and make the right decisions. Aurega Accounting & Tax Advisory guides companies to improve internal performance and boost operating efficiency by taking a risk-based approach. We aim to help you steer clear of roadblocks and improve your overall results.</p>
                        </div>
                    </div>
                </div>
                <div class="col-xl-12">
                    <div class="content_box_cn style_one">
                        <div class="txt_content">
                            <h3><a href="javascript:void(0)">CFO services</a></h3>
                            <p class="text-justify">Our Chief Financial Officer (CFO) services involve a range of financial management and strategic planning responsibilities tailored to the needs of businesses</p>
                            <ol>
                                <li><strong>Financial Strategy:</strong> Crafting financial strategies aligned with the company's goals, including financial planning, budgeting, and forecasting.</li>
                                <li><strong>Risk Management:</strong> Identifying and mitigating financial risks to protect the company's interests, especially in a market with unique regulatory and economic aspects.</li>
                                <li><strong>Financial Reporting:</strong> Ensuring accurate and timely financial reporting in compliance with local regulations and international accounting standards.</li>
                                <li><strong>Cash Flow Management:</strong> Managing cash flows effectively to support business operations, optimize liquidity, and manage working capital efficiently.</li>
                                <li><strong>Business Expansion:</strong> Providing financial insights and support for business expansion plans, mergers, acquisitions, or partnerships in Dubai or the broader UAE market.</li>
                                <li><strong>Compliance and Regulatory Matters:</strong> Staying updated and ensuring compliance with local financial regulations, taxation laws, and corporate governance standards.</li>
                                <li><strong>Financial Analysis:</strong> Conducting thorough financial analysis to provide insights into the company's performance, profitability, and areas for improvement.</li>
                                <li><strong>Investment Strategies:</strong> Advising on investment opportunities and strategies within the Dubai market or international markets.</li>
                                <li><strong>Taxation and Advisory:</strong> Providing guidance on tax optimization, incentives, and strategies to minimize tax liabilities while staying compliant with UAE tax laws.</li>
                                <li><strong>Financial Team Management:</strong> Overseeing and managing the finance team, ensuring they are equipped to handle the company's financial functions effectively.</li>
                                <li><strong>Technology Integration:</strong> Evaluating and integrating financial technologies and systems to streamline processes and improve efficiency.</li>
                            </ol>
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