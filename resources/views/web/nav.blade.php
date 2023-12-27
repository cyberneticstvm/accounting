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
                                            <p>#106, Bay Square 11, Business Bay, Dubai</p>
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
                            <img src="{{ asset('/web/assets/images/aurega-logo-transparent.png') }}" alt="Aurega" class="logo_default">
                            <img src="{{ asset('/web/assets/images/aurega-logo-transparent.png') }}" alt="Aurega" class="logo__sticky">
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
                                                    <div class="col-xl-4 col-lg-4 col-md-12 col-sm-12 col-xs-12 mb-4 mb-lg-0">
                                                        <div class="content_box_cn style_one">
                                                            <div class="txt_content">
                                                                <h3><a class="subtitle" href="{{ route('index') }}">Accounting</a></h3>
                                                                <div class="list_item_box style_two style_list">
                                                                    <ul class="list-inline">
                                                                        <li class="list_items pd_bottom_10">
                                                                            <small class="d-flex align-items-center">
                                                                                <span class="icon_bx">
                                                                                    <i class=" icon-checked"></i>
                                                                                </span>
                                                                                <a class="nav_link" href="#" target="&quot;_blank&quot;" rel="&quot;nofollow&quot;">
                                                                                    Accounting Service (Financial Statement Preparation, Account Reconciliation)</a>
                                                                            </small>
                                                                        </li>
                                                                        <li class="list_items pd_bottom_10">
                                                                            <small class="d-flex align-items-center">
                                                                                <span class="icon_bx">
                                                                                    <i class=" icon-checked"></i>
                                                                                </span>
                                                                                <a class="nav_link" href="#" target="&quot;_blank&quot;" rel="&quot;nofollow&quot;">
                                                                                    Bookkeeping & Payroll (monthly reports, Salary Processing, Payroll reporting, Employee Benefits) </a>
                                                                            </small>
                                                                        </li>
                                                                        <li class="list_items pd_bottom_10">
                                                                            <small class="d-flex align-items-center">
                                                                                <span class="icon_bx">
                                                                                    <i class=" icon-checked"></i>
                                                                                </span>
                                                                                <a class="nav_link" href="#" target="&quot;_blank&quot;" rel="&quot;nofollow&quot;">
                                                                                    Internal Auditing Service (Internal Controls Evaluation, Risk Assessment, Compliance) </a>
                                                                            </small>
                                                                        </li>
                                                                        <a href="{{ route('index') }}" rel="nofollow" class="theme-btn four pull-right text-info mb-3">Know More <i class="icon-right-arrow"></i></a>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-xl-4 col-lg-4 col-md-12 col-sm-12 col-xs-12 mb-4 mb-lg-0">
                                                        <div class="content_box_cn style_one">
                                                            <div class="txt_content">
                                                                <h3><a class="subtitle" href="{{ route('index') }}">Taxation</a></h3>
                                                                <div class="list_item_box style_two style_list">
                                                                    <ul class="list-inline">
                                                                        <li class="list_items pd_bottom_10">
                                                                            <small class="d-flex align-items-center">
                                                                                <span class="icon_bx">
                                                                                    <i class=" icon-checked"></i>
                                                                                </span>
                                                                                <a class="nav_link" href="#" target="&quot;_blank&quot;" rel="&quot;nofollow&quot;">
                                                                                    VAT Service (VAT Register, Return Filing, Refund, deregister, Compliance & Advisory, VAT Audit Support)</a>
                                                                            </small>
                                                                        </li>
                                                                        <li class="list_items pd_bottom_10">
                                                                            <small class="d-flex align-items-center">
                                                                                <span class="icon_bx">
                                                                                    <i class=" icon-checked"></i>
                                                                                </span>
                                                                                <a class="nav_link" href="#" target="&quot;_blank&quot;" rel="&quot;nofollow&quot;">
                                                                                    Tax Consultancy Service (Compliance Services, Dispute Resolution, Customs and Excise Duty Advisory) </a>
                                                                            </small>
                                                                        </li>
                                                                        <li class="list_items pd_bottom_10">
                                                                            <small class="d-flex align-items-center">
                                                                                <span class="icon_bx">
                                                                                    <i class=" icon-checked"></i>
                                                                                </span>
                                                                                <a class="nav_link" href="#" target="&quot;_blank&quot;" rel="&quot;nofollow&quot;">
                                                                                    Corporate TAX (TAX Planning, Preparation, Tax Treaty Analysis, Tax Dispute Resolution) </a>
                                                                            </small>
                                                                        </li>
                                                                        <a href="{{ route('index') }}" rel="nofollow" class="theme-btn four pull-right text-info mb-3">Know More <i class="icon-right-arrow"></i></a>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-xl-4 col-lg-4 col-md-12 col-sm-12 col-xs-12 mb-4 mb-lg-0">
                                                        <div class="content_box_cn style_one">
                                                            <div class="txt_content">
                                                                <h3><a class="subtitle" href="{{ route('index') }}">Finance & Management</a></h3>
                                                                <div class="list_item_box style_two style_list">
                                                                    <ul class="list-inline">
                                                                        <li class="list_items pd_bottom_10">
                                                                            <small class="d-flex align-items-center">
                                                                                <span class="icon_bx">
                                                                                    <i class=" icon-checked"></i>
                                                                                </span>
                                                                                <a class="nav_link" href="#" target="&quot;_blank&quot;" rel="&quot;nofollow&quot;">
                                                                                    Financial Consulting Service (Business valuation, Due diligence services, financial consulting & advisory for decision-making)</a>
                                                                            </small>
                                                                        </li>
                                                                        <li class="list_items pd_bottom_10">
                                                                            <small class="d-flex align-items-center">
                                                                                <span class="icon_bx">
                                                                                    <i class=" icon-checked"></i>
                                                                                </span>
                                                                                <a class="nav_link" href="#" target="&quot;_blank&quot;" rel="&quot;nofollow&quot;">
                                                                                    Management Consulting Services (Cost accounting and analysis, Budgeting and forecasting, Performance measurement and variance analysis, Risk Assessment)</a>
                                                                            </small>
                                                                        </li>
                                                                        <li class="list_items pd_bottom_10">
                                                                            <small class="d-flex align-items-center">
                                                                                <span class="icon_bx">
                                                                                    <i class=" icon-checked"></i>
                                                                                </span>
                                                                                <a class="nav_link" href="#" target="&quot;_blank&quot;" rel="&quot;nofollow&quot;">
                                                                                    Chief Financial Officer (CFO) Services (Risk Management and Compliance, Financial Reporting and Analysis, Financial Strategy and Planning)</a>
                                                                            </small>
                                                                        </li>
                                                                        <li class="list_items pd_bottom_10">
                                                                            <small class="d-flex align-items-center">
                                                                                <span class="icon_bx">
                                                                                    <i class=" icon-checked"></i>
                                                                                </span>
                                                                                <a class="nav_link" href="#" target="&quot;_blank&quot;" rel="&quot;nofollow&quot;">
                                                                                    Financing Options (Credit Analysis, Debt Restructuring, Loan Facilitation, Financial Planning)</a>
                                                                            </small>
                                                                        </li>
                                                                        <li class="list_items pd_bottom_10">
                                                                            <small class="d-flex align-items-center">
                                                                                <span class="icon_bx">
                                                                                    <i class=" icon-checked"></i>
                                                                                </span>
                                                                                <a class="nav_link" href="#" target="&quot;_blank&quot;" rel="&quot;nofollow&quot;">
                                                                                    Feasibility Market Research (Financial Modeling, Cost Analysis, Market Entry Strategies, Risk Assessment)</a>
                                                                            </small>
                                                                        </li>
                                                                        <li class="list_items pd_bottom_10">
                                                                            <small class="d-flex align-items-center">
                                                                                <span class="icon_bx">
                                                                                    <i class=" icon-checked"></i>
                                                                                </span>
                                                                                <a class="nav_link" href="#" target="&quot;_blank&quot;" rel="&quot;nofollow&quot;">
                                                                                    Economic Substance Regulations (ESR) (Compliances, Assessment and Analysis, Due Diligence)</a>
                                                                            </small>
                                                                        </li>
                                                                        <li class="list_items pd_bottom_10">
                                                                            <small class="d-flex align-items-center">
                                                                                <span class="icon_bx">
                                                                                    <i class=" icon-checked"></i>
                                                                                </span>
                                                                                <a class="nav_link" href="#" target="&quot;_blank&quot;" rel="&quot;nofollow&quot;">
                                                                                    Anti-Money Laundering (AML) (Due Diligence, Transaction Monitoring, AML Software Implementation)</a>
                                                                            </small>
                                                                        </li>
                                                                        <li class="list_items pd_bottom_10">
                                                                            <small class="d-flex align-items-center">
                                                                                <span class="icon_bx">
                                                                                    <i class=" icon-checked"></i>
                                                                                </span>
                                                                                <a class="nav_link" href="#" target="&quot;_blank&quot;" rel="&quot;nofollow&quot;">
                                                                                    Software Selection & Implementation (Implementing accounting software, Customizing systems for specific business needs, Training and support for accounting software)</a>
                                                                            </small>
                                                                        </li>
                                                                        <li class="list_items pd_bottom_10">
                                                                            <small class="d-flex align-items-center">
                                                                                <span class="icon_bx">
                                                                                    <i class=" icon-checked"></i>
                                                                                </span>
                                                                                <a class="nav_link" href="#" target="&quot;_blank&quot;" rel="&quot;nofollow&quot;">
                                                                                    Corporate Secretarial Services (Company incorporation and structuring, corporate governance compliance, Maintenance of statutory records)</a>
                                                                            </small>
                                                                        </li>
                                                                        <a href="{{ route('index') }}" rel="nofollow" class="theme-btn four pull-right text-info mb-3">Know More <i class="icon-right-arrow"></i></a>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!-- <div class="row">
                                                    <div class="col-xl-4 col-lg-4 col-md-12 col-sm-12 col-xs-12 mb-4 mb-lg-0">
                                                        <div class="content_box_cn style_one">
                                                            <div class="txt_content">
                                                                <h3><a class="subtitle" href="{{ route('index') }}">Accounting Service</a></h3>
                                                                <p>Financial Statement Preparation, Account Reconciliation</p>
                                                                <a href="{{ route('index') }}" rel="nofollow" class="theme-btn four pull-right text-danger mb-3">Know More <i class="icon-right-arrow"></i></a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-xl-4 col-lg-4 col-md-12 col-sm-12 col-xs-12 mb-4 mb-lg-0">
                                                        <div class="content_box_cn style_one">
                                                            <div class="txt_content">
                                                                <h3><a class="subtitle" href="{{ route('index') }}">Bookkeeping & Payroll</a></h3>
                                                                <p>Monthly reports, Salary Processing, Payroll reporting, Employee Benefits</p>
                                                                <a href="{{ route('index') }}" rel="nofollow" class="theme-btn four pull-right text-danger mb-3">Know More <i class="icon-right-arrow"></i></a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-xl-4 col-lg-4 col-md-12 col-sm-12 col-xs-12 mb-4 mb-lg-0">
                                                        <div class="content_box_cn style_one">
                                                            <div class="txt_content">
                                                                <h3><a class="subtitle" href="{{ route('index') }}">Financial Consulting Service</a></h3>
                                                                <p>Business valuation, Due diligence services, financial consulting & advisory for decision-making</p>
                                                                <a href="{{ route('index') }}" rel="nofollow" class="theme-btn four pull-right text-danger mb-3">Know More <i class="icon-right-arrow"></i></a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-xl-4 col-lg-4 col-md-12 col-sm-12 col-xs-12 mb-4 mb-lg-0">
                                                        <div class="content_box_cn style_one">
                                                            <div class="txt_content">
                                                                <h3><a class="subtitle" href="{{ route('index') }}">Management Consulting Services</a></h3>
                                                                <p>Cost accounting and analysis, Budgeting and forecasting, Performance measurement and variance analysis, Risk Assessment</p>
                                                                <a href="{{ route('index') }}" rel="nofollow" class="theme-btn four pull-right text-danger mb-3">Know More <i class="icon-right-arrow"></i></a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-xl-4 col-lg-4 col-md-12 col-sm-12 col-xs-12 mb-4 mb-lg-0">
                                                        <div class="content_box_cn style_one">
                                                            <div class="txt_content">
                                                                <h3><a class="subtitle" href="{{ route('index') }}">Chief Financial Officer (CFO) Services</a></h3>
                                                                <p>Risk Management and Compliance, Financial Reporting and Analysis, Financial Strategy and Planning</p>
                                                                <a href="{{ route('index') }}" rel="nofollow" class="theme-btn four pull-right text-danger mb-3">Know More <i class="icon-right-arrow"></i></a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-xl-4 col-lg-4 col-md-12 col-sm-12 col-xs-12 mb-4 mb-lg-0">
                                                        <div class="content_box_cn style_one">
                                                            <div class="txt_content">
                                                                <h3><a class="subtitle" href="{{ route('index') }}">VAT Service</a></h3>
                                                                <p>VAT Register, Return Filing, Refund, deregister, Compliance & Advisory, VAT Audit Support</p>
                                                                <a href="{{ route('index') }}" rel="nofollow" class="theme-btn four pull-right text-danger mb-3">Know More <i class="icon-right-arrow"></i></a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-xl-4 col-lg-4 col-md-12 col-sm-12 col-xs-12 mb-4 mb-lg-0">
                                                        <div class="content_box_cn style_one">
                                                            <div class="txt_content">
                                                                <h3><a class="subtitle" href="{{ route('index') }}">Tax Consultancy Service</a></h3>
                                                                <p>Compliance Services, Dispute Resolution, Customs and Excise Duty Advisory</p>
                                                                <a href="{{ route('index') }}" rel="nofollow" class="theme-btn four pull-right text-danger mb-3">Know More <i class="icon-right-arrow"></i></a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-xl-4 col-lg-4 col-md-12 col-sm-12 col-xs-12 mb-4 mb-lg-0">
                                                        <div class="content_box_cn style_one">
                                                            <div class="txt_content">
                                                                <h3><a class="subtitle" href="{{ route('index') }}">Internal Auditing Service</a></h3>
                                                                <p>Internal Controls Evaluation, Risk Assessment, Compliance</p>
                                                                <a href="{{ route('index') }}" rel="nofollow" class="theme-btn four pull-right text-danger mb-3">Know More <i class="icon-right-arrow"></i></a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-xl-4 col-lg-4 col-md-12 col-sm-12 col-xs-12 mb-4 mb-lg-0">
                                                        <div class="content_box_cn style_one">
                                                            <div class="txt_content">
                                                                <h3><a class="subtitle" href="{{ route('index') }}">Financing Options</a></h3>
                                                                <p>Credit Analysis, Debt Restructuring, Loan Facilitation, Financial Planning</p>
                                                                <a href="{{ route('index') }}" rel="nofollow" class="theme-btn four pull-right text-danger mb-3">Know More <i class="icon-right-arrow"></i></a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-xl-4 col-lg-4 col-md-12 col-sm-12 col-xs-12 mb-4 mb-lg-0">
                                                        <div class="content_box_cn style_one">
                                                            <div class="txt_content">
                                                                <h3><a class="subtitle" href="{{ route('index') }}">Feasibility Market Research</a></h3>
                                                                <p>Financial Modeling, Cost Analysis, Market Entry Strategies, Risk Assessment</p>
                                                                <a href="{{ route('index') }}" rel="nofollow" class="theme-btn four pull-right text-danger mb-3">Know More <i class="icon-right-arrow"></i></a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-xl-4 col-lg-4 col-md-12 col-sm-12 col-xs-12 mb-4 mb-lg-0">
                                                        <div class="content_box_cn style_one">
                                                            <div class="txt_content">
                                                                <h3><a class="subtitle" href="{{ route('index') }}">Economic Substance Regulations (ESR)</a></h3>
                                                                <p>Compliances, Assessment and Analysis, Due Diligence</p>
                                                                <a href="{{ route('index') }}" rel="nofollow" class="theme-btn four pull-right text-danger mb-3">Know More <i class="icon-right-arrow"></i></a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-xl-4 col-lg-4 col-md-12 col-sm-12 col-xs-12 mb-4 mb-lg-0">
                                                        <div class="content_box_cn style_one">
                                                            <div class="txt_content">
                                                                <h3><a class="subtitle" href="{{ route('index') }}">Anti-Money Laundering (AML)</a></h3>
                                                                <p>Due Diligence, Transaction Monitoring, AML Software Implementation</p>
                                                                <a href="{{ route('index') }}" rel="nofollow" class="theme-btn four pull-right text-danger mb-3">Know More <i class="icon-right-arrow"></i></a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-xl-4 col-lg-4 col-md-12 col-sm-12 col-xs-12 mb-4 mb-lg-0">
                                                        <div class="content_box_cn style_one">
                                                            <div class="txt_content">
                                                                <h3><a class="subtitle" href="{{ route('index') }}">Corporate TAX</a></h3>
                                                                <p>TAX Planning, Preparation, Tax Treaty Analysis, Tax Dispute Resolution</p>
                                                                <a href="{{ route('index') }}" rel="nofollow" class="theme-btn four pull-right text-danger mb-3">Know More <i class="icon-right-arrow"></i></a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-xl-4 col-lg-4 col-md-12 col-sm-12 col-xs-12 mb-4 mb-lg-0">
                                                        <div class="content_box_cn style_one">
                                                            <div class="txt_content">
                                                                <h3><a class="subtitle" href="{{ route('index') }}">Software Selection & Implementation</a></h3>
                                                                <p>Implementing accounting software, Customizing systems for specific business needs, Training and support for accounting software</p>
                                                                <a href="{{ route('index') }}" rel="nofollow" class="theme-btn four pull-right text-danger mb-3">Know More <i class="icon-right-arrow"></i></a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-xl-4 col-lg-4 col-md-12 col-sm-12 col-xs-12 mb-4 mb-lg-0">
                                                        <div class="content_box_cn style_one">
                                                            <div class="txt_content">
                                                                <h3><a class="subtitle" href="{{ route('index') }}">Corporate Secretarial Services</a></h3>
                                                                <p>Company incorporation and structuring, corporate governance compliance, Maintenance of statutory records</p>
                                                                <a href="{{ route('index') }}" rel="nofollow" class="theme-btn four pull-right text-danger mb-3">Know More <i class="icon-right-arrow"></i></a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div> -->
                                            </li>
                                        </ul>
                                    </li>
                                    <li class="menu-item menu-item-has-children nav-item {{ (request()->segment(1) == 'faqs') ? 'active' : '' }}">
                                        <a href="{{ route('faqs') }}" class="dropdown-toggle nav-link">
                                            <span>FAQs</span>
                                        </a>
                                    </li>
                                    <li class="menu-item menu-item-has-children nav-item">
                                        <a href="{{ route('blogs') }}" class="dropdown-toggle nav-link {{ (request()->segment(1) == 'blogs') ? 'active' : '' }}">
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
                                    <a href="#" target="_blank" rel="" class="theme-btn one"> Get In Touch </a>
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