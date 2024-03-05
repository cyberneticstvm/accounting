<div class="header_area " id="header_contents">
    <div class="top_bar style_three bg_op_1 pd_top_20 pd_bottom_5 d_md_none">
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
    </div>
    <header class="header header_default style_one style_two_remade get_sticky_header">
        <div class="auto-container">
            <div class="row align-items-center">
                <div class="col-lg-2 col-md-9 col-sm-9 col-xs-9 logo_column">
                    <div class="header_logo_box">
                        <a href="{{ route('index') }}" class="logo navbar-brand">
                            <img src="{{ asset('/web/assets/images/aurega-logo-transparent.png') }}" alt="Aurega Accounting" class="logo_default">
                            <img src="{{ asset('/web/assets/images/aurega-logo-transparent.png') }}" alt="Aurega Accounting" class="logo__sticky">
                        </a>
                    </div>
                </div>
                <div class="col-lg-10 col-md-3 col-sm-3 col-xs-3 menu_column">
                    <div class="navbar_togglers hamburger_menu">
                        <span class="line"></span>
                        <span class="line"></span>
                        <span class="line"></span>
                    </div>
                    <div class="header_content_collapse">
                        <div class="header_menu_box">
                            <div class="navigation_menu">
                                <ul id="myNavbar" class="navbar_nav">
                                    <li class="menu-item  menu-item-has-children dropdown_full position-static nav-item {{ (request()->segment(1) == '') ? 'active' : '' }}">
                                        <a href="{{ route('index') }}" class="dropdown-toggle nav-link">
                                            <span>Home</span>
                                        </a>
                                    </li>
                                    <li class="menu-item  menu-item-has-children dropdown_full position-static nav-item {{ (request()->segment(1) == 'about') ? 'active' : '' }}">
                                        <a href="{{ route('about') }}" class="dropdown-toggle nav-link">
                                            <span>About Us</span>
                                        </a>
                                    </li>
                                    <li class="menu-item menu-item-has-children dropdown dropdown_full position-static mega_menu nav-item {{ (request()->segment(1) == 'services') ? 'active' : '' }}">
                                        <a href="javascript:void(0)" class="dropdown-toggle nav-link"><span>Services</span></a>
                                        <ul class="dropdown-menu width_60_percentage">
                                            <li>
                                                <div class="row">
                                                    <div class="col-xl-3 col-lg-4 col-md-12 col-sm-12 col-xs-12 mb-4 mb-lg-0">
                                                        <div class="content_box_cn">
                                                            <div class="txt_content">
                                                                <h1><a class="menu-title" href="{{ route('services.accounting') }}">Accounting & Bookkeeping</a></h1>
                                                                <div class="list_item_box style_two style_list">
                                                                    <ul class="list-inline">
                                                                        <li class="list_items pd_bottom_10">
                                                                            <small class="d-flex">
                                                                                <span class="icon_bx">
                                                                                    <i class=" icon-checked"></i>
                                                                                </span>
                                                                                <a class="nav_link" href="{{ route('services.accounting') }}">
                                                                                    Bookkeeping Services</a>
                                                                            </small>
                                                                        </li>
                                                                        <li class="list_items pd_bottom_10">
                                                                            <small class="d-flex">
                                                                                <span class="icon_bx">
                                                                                    <i class=" icon-checked"></i>
                                                                                </span>
                                                                                <a class="nav_link" href="{{ route('services.accounting') }}">
                                                                                    Accounting Advisory</a>
                                                                            </small>
                                                                        </li>
                                                                        <li class="list_items pd_bottom_10">
                                                                            <small class="d-flex">
                                                                                <span class="icon_bx">
                                                                                    <i class=" icon-checked"></i>
                                                                                </span>
                                                                                <a class="nav_link" href="{{ route('services.accounting') }}">
                                                                                    CFO Services</a>
                                                                            </small>
                                                                        </li>
                                                                        <li class="list_items pd_bottom_10">
                                                                            <small class="d-flex">
                                                                                <span class="icon_bx">
                                                                                    <i class=" icon-checked"></i>
                                                                                </span>
                                                                                <a class="nav_link" href="{{ route('services.accounting') }}">
                                                                                    IFRS Services</a>
                                                                            </small>
                                                                        </li>
                                                                        <li class="list_items pd_bottom_10">
                                                                            <small class="d-flex">
                                                                                <span class="icon_bx">
                                                                                    <i class=" icon-checked"></i>
                                                                                </span>
                                                                                <a class="nav_link" href="{{ route('services.accounting') }}">
                                                                                    Payroll Management Services</a>
                                                                            </small>
                                                                        </li>
                                                                        <li class="list_items pd_bottom_10">
                                                                            <small class="d-flex">
                                                                                <span class="icon_bx">
                                                                                    <i class=" icon-checked"></i>
                                                                                </span>
                                                                                <a class="nav_link" href="{{ route('services.accounting') }}">
                                                                                    Business Evaluation</a>
                                                                            </small>
                                                                        </li>
                                                                        <li class="list_items pd_bottom_10">
                                                                            <small class="d-flex">
                                                                                <span class="icon_bx">
                                                                                    <i class=" icon-checked"></i>
                                                                                </span>
                                                                                <a class="nav_link" href="{{ route('services.accounting') }}">
                                                                                    HR & Payroll</a>
                                                                            </small>
                                                                        </li>
                                                                        <li class="list_items pd_bottom_10">
                                                                            <small class="d-flex">
                                                                                <span class="icon_bx">
                                                                                    <i class=" icon-checked"></i>
                                                                                </span>
                                                                                <a class="nav_link" href="{{ route('services.accounting') }}">
                                                                                    Internal Audit</a>
                                                                            </small>
                                                                        </li>
                                                                    </ul>
                                                                </div>
                                                                <div class="theme_btn_all color_two text-end">
                                                                    <a href="{{ route('services.accounting') }}" class="theme-btn four">Read More <i class="icon-right-arrow"></i></a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-xl-3 col-lg-4 col-md-12 col-sm-12 col-xs-12 mb-4 mb-lg-0">
                                                        <div class="content_box_cn">
                                                            <div class="txt_content">
                                                                <h1><a class="menu-title" href="{{ route('services.tax') }}">TAX Advisory</a></h1>
                                                                <div class="list_item_box style_two style_list">
                                                                    <ul class="list-inline">
                                                                        <li class="list_items pd_bottom_10">
                                                                            <small class="d-flex">
                                                                                <span class="icon_bx">
                                                                                    <i class=" icon-checked"></i>
                                                                                </span>
                                                                                <a class="nav_link" href="{{ route('services.tax') }}">
                                                                                    CT Registration</a>
                                                                            </small>
                                                                        </li>
                                                                        <li class="list_items pd_bottom_10">
                                                                            <small class="d-flex">
                                                                                <span class="icon_bx">
                                                                                    <i class=" icon-checked"></i>
                                                                                </span>
                                                                                <a class="nav_link" href="{{ route('services.tax') }}">
                                                                                    CT Assessment</a>
                                                                            </small>
                                                                        </li>
                                                                        <li class="list_items pd_bottom_10">
                                                                            <small class="d-flex">
                                                                                <span class="icon_bx">
                                                                                    <i class=" icon-checked"></i>
                                                                                </span>
                                                                                <a class="nav_link" href="{{ route('services.tax') }}">
                                                                                    CT Filing</a>
                                                                            </small>
                                                                        </li>
                                                                        <li class="list_items pd_bottom_10">
                                                                            <small class="d-flex">
                                                                                <span class="icon_bx">
                                                                                    <i class=" icon-checked"></i>
                                                                                </span>
                                                                                <a class="nav_link" href="{{ route('services.tax') }}">
                                                                                    CT Auditing</a>
                                                                            </small>
                                                                        </li>
                                                                        <li class="list_items pd_bottom_10">
                                                                            <small class="d-flex">
                                                                                <span class="icon_bx">
                                                                                    <i class=" icon-checked"></i>
                                                                                </span>
                                                                                <a class="nav_link" href="{{ route('services.tax') }}">
                                                                                    Excise Tax Registration</a>
                                                                            </small>
                                                                        </li>
                                                                    </ul>
                                                                </div>
                                                                <div class="theme_btn_all color_two text-end">
                                                                    <a href="{{ route('services.tax') }}" class="theme-btn four">Read More <i class="icon-right-arrow"></i></a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-xl-3 col-lg-4 col-md-12 col-sm-12 col-xs-12 mb-4 mb-lg-0">
                                                        <div class="content_box_cn">
                                                            <div class="txt_content">
                                                                <h1><a class="menu-title" href="{{ route('services.vat') }}">VAT Services</a></h1>
                                                                <div class="list_item_box style_two style_list">
                                                                    <ul class="list-inline">
                                                                        <li class="list_items pd_bottom_10">
                                                                            <small class="d-flex">
                                                                                <span class="icon_bx">
                                                                                    <i class=" icon-checked"></i>
                                                                                </span>
                                                                                <a class="nav_link" href="{{ route('services.vat') }}">
                                                                                    VAT Registration & Deregistration</a>
                                                                            </small>
                                                                        </li>
                                                                        <li class="list_items pd_bottom_10">
                                                                            <small class="d-flex">
                                                                                <span class="icon_bx">
                                                                                    <i class=" icon-checked"></i>
                                                                                </span>
                                                                                <a class="nav_link" href="{{ route('services.vat') }}">
                                                                                    VAT Return Filing</a>
                                                                            </small>
                                                                        </li>
                                                                        <li class="list_items pd_bottom_10">
                                                                            <small class="d-flex">
                                                                                <span class="icon_bx">
                                                                                    <i class=" icon-checked"></i>
                                                                                </span>
                                                                                <a class="nav_link" href="{{ route('services.vat') }}">
                                                                                    VAT Audit</a>
                                                                            </small>
                                                                        </li>
                                                                        <li class="list_items pd_bottom_10">
                                                                            <small class="d-flex">
                                                                                <span class="icon_bx">
                                                                                    <i class=" icon-checked"></i>
                                                                                </span>
                                                                                <a class="nav_link" href="{{ route('services.vat') }}">
                                                                                    VAT Implementation & Compliance</a>
                                                                            </small>
                                                                        </li>
                                                                    </ul>
                                                                </div>
                                                                <div class="theme_btn_all color_two text-end">
                                                                    <a href="{{ route('services.vat') }}" class="theme-btn four">Read More <i class="icon-right-arrow"></i></a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-xl-3 col-lg-4 col-md-12 col-sm-12 col-xs-12 mb-4 mb-lg-0">
                                                        <div class="content_box_cn">
                                                            <div class="txt_content">
                                                                <h1><a class="menu-title" href="{{ route('services.finance') }}">Financial & Management Accounting Consultation</a></h1>
                                                                <div class="list_item_box style_two style_list">
                                                                    <p class="fw-bold">Financial Accounting</p>
                                                                    <ul class="list-inline">
                                                                        <li class="list_items pd_bottom_10">
                                                                            <small class="d-flex">
                                                                                <span class="icon_bx">
                                                                                    <i class=" icon-checked"></i>
                                                                                </span>
                                                                                <a class="nav_link" href="{{ route('services.finance') }}">
                                                                                    Tax Consultation</a>
                                                                            </small>
                                                                        </li>
                                                                        <li class="list_items pd_bottom_10">
                                                                            <small class="d-flex">
                                                                                <span class="icon_bx">
                                                                                    <i class=" icon-checked"></i>
                                                                                </span>
                                                                                <a class="nav_link" href="{{ route('services.finance') }}">
                                                                                    Budgeting & Forecasting</a>
                                                                            </small>
                                                                        </li>
                                                                        <li class="list_items pd_bottom_10">
                                                                            <small class="d-flex">
                                                                                <span class="icon_bx">
                                                                                    <i class=" icon-checked"></i>
                                                                                </span>
                                                                                <a class="nav_link" href="{{ route('services.finance') }}">
                                                                                    AML Compliance</a>
                                                                            </small>
                                                                        </li>
                                                                        <li class="list_items pd_bottom_10">
                                                                            <small class="d-flex">
                                                                                <span class="icon_bx">
                                                                                    <i class=" icon-checked"></i>
                                                                                </span>
                                                                                <a class="nav_link" href="{{ route('services.finance') }}">
                                                                                    UBO Declaration</a>
                                                                            </small>
                                                                        </li>
                                                                        <li class="list_items pd_bottom_10">
                                                                            <small class="d-flex">
                                                                                <span class="icon_bx">
                                                                                    <i class=" icon-checked"></i>
                                                                                </span>
                                                                                <a class="nav_link" href="{{ route('services.finance') }}">
                                                                                    ESR Compliance</a>
                                                                            </small>
                                                                        </li>
                                                                        <li class="list_items pd_bottom_10">
                                                                            <small class="d-flex">
                                                                                <span class="icon_bx">
                                                                                    <i class=" icon-checked"></i>
                                                                                </span>
                                                                                <a class="nav_link" href="{{ route('services.finance') }}">
                                                                                    IFRS Advisory</a>
                                                                            </small>
                                                                        </li>
                                                                    </ul>
                                                                    <p class="fw-bold">Management Accounting</p>
                                                                    <ul class="list-inline">
                                                                        <li class="list_items pd_bottom_10">
                                                                            <small class="d-flex">
                                                                                <span class="icon_bx">
                                                                                    <i class=" icon-checked"></i>
                                                                                </span>
                                                                                <a class="nav_link" href="{{ route('services.finance') }}">
                                                                                    Feasibility Market Research</a>
                                                                            </small>
                                                                        </li>
                                                                        <li class="list_items pd_bottom_10">
                                                                            <small class="d-flex">
                                                                                <span class="icon_bx">
                                                                                    <i class=" icon-checked"></i>
                                                                                </span>
                                                                                <a class="nav_link" href="{{ route('services.finance') }}">
                                                                                    Risk Assessment</a>
                                                                            </small>
                                                                        </li>
                                                                        <li class="list_items pd_bottom_10">
                                                                            <small class="d-flex">
                                                                                <span class="icon_bx">
                                                                                    <i class=" icon-checked"></i>
                                                                                </span>
                                                                                <a class="nav_link" href="{{ route('services.finance') }}">
                                                                                    Business Consultancy</a>
                                                                            </small>
                                                                        </li>
                                                                        <li class="list_items pd_bottom_10">
                                                                            <small class="d-flex">
                                                                                <span class="icon_bx">
                                                                                    <i class=" icon-checked"></i>
                                                                                </span>
                                                                                <a class="nav_link" href="{{ route('services.finance') }}">
                                                                                    Software Selection & Implementation</a>
                                                                            </small>
                                                                        </li>
                                                                    </ul>
                                                                </div>
                                                                <div class="theme_btn_all color_two text-end">
                                                                    <a href="{{ route('services.finance') }}" class="theme-btn four">Read More <i class="icon-right-arrow"></i></a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>
                                        </ul>
                                    </li>
                                    <li class="menu-item menu-item-has-children nav-item {{ (request()->segment(1) == 'faqs') ? 'active' : '' }}">
                                        <a href="{{ route('faqs') }}" class="dropdown-toggle nav-link">
                                            <span>FAQs</span>
                                        </a>
                                    </li>
                                    <li class="menu-item menu-item-has-children nav-item {{ (request()->segment(1) == 'team') ? 'active' : '' }}">
                                        <a href="{{ route('team') }}" class="dropdown-toggle nav-link">
                                            <span>Team</span>
                                        </a>
                                    </li>
                                    <li class="menu-item menu-item-has-children nav-item {{ (request()->segment(1) == 'blogs') ? 'active' : '' }}">
                                        <a href="{{ route('blogs') }}" class="dropdown-toggle nav-link">
                                            <span>Blog</span>
                                        </a>
                                    </li>
                                    <li class="menu-item menu-item-has-children nav-item {{ (request()->segment(1) == 'contact') ? 'active' : '' }}">
                                        <a href="{{ route('contact') }}" class="dropdown-toggle nav-link">
                                            <span>Contact Us</span>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="header_right_content">
                            <ul>
                                <li>
                                    <button type="button" class="search-toggler"><i class="icon-search"></i></button>
                                </li>
                                <li class="header-button">
                                    <a href="{{ route('contact') }}" class="theme-btn one"> Get In Touch </a>
                                </li>
                                <li>
                                    <button type="button" class="contact-toggler"><i class="icon-bar"></i></button>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <!-- end of the loop -->
</div>