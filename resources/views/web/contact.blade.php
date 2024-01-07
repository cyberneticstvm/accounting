@extends("web.base")
@section("content")
<div class="device-margin visible-md"></div>
<div id="content" class="site-content ">
    <section class="contact-section">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-xl-6 col-lg-6 mb-5 mb-lg-5 mb-xl-0">
                    <div class="contact_form_box_all type_one">
                        <div class="contact_form_box_inner">
                            <div class="contact_form_shortcode">
                                <form method="post" action="{{ route('contact.submit') }}" role="form">
                                    @csrf
                                    <div class="controls">
                                        <div class="row">
                                            <div class="col-sm-12">
                                                <div class="form-group">
                                                    <label> Your Name<br /></label>
                                                    <input type="text" name="name" placeholder="Your Name *" required="required" data-error="Enter Your Name">
                                                    <div class="help-block with-errors"></div>
                                                </div>
                                            </div>
                                            <div class="col-sm-12">
                                                <div class="form-group">
                                                    <label> Your Email<br /></label>
                                                    <input type="text" name="email" required="required" placeholder="Email *" data-error="Enter Your Email Id">
                                                    <div class="help-block with-errors"></div>
                                                </div>
                                            </div>
                                            <div class="col-sm-12">
                                                <div class="form-group">
                                                    <label> Your Contact Number<br /></label>
                                                    <input type="text" name="contact_number" required="required" placeholder=" Contact Number">
                                                </div>
                                            </div>

                                            <div class="col-sm-12">
                                                <div class="form-group">
                                                    <label> Your Message<br /></label>
                                                    <textarea name="message" placeholder="Additional Information... " rows="3" required="required" data-error="Please, leave us a message."></textarea>
                                                    <div class="help-block with-errors"></div>
                                                </div>
                                            </div>

                                            <div class="col-sm-12">
                                                <div class="form-group mg_top">
                                                    <button class="theme_btn btn-submit" type="submit">Submit</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-6 col-lg-6 pd_left_30">
                    <div class="title_all_box style_one dark_color">
                        <div class="title_sections left">
                            <div class="before_title">Contact Info to</div>
                            <h2>Reach Our Expert Team</h2>
                            <p>Send a message through given form, If your enquiry is time sensitive please use below
                                contact details.</p>
                        </div>
                    </div>

                    <div class="contact_box_content style_one">
                        <div class="contact_box_inner icon_yes">
                            <div class="icon_bx">
                                <span class=" icon-placeholder"></span>
                            </div>
                            <div class="contnet">
                                <h3> Post Address </h3>
                                <p>
                                    <a href="{{ route('location.map') }}" target="_blank">#106, Bay Square 11, Business Bay, Dubai</a>
                                </p>
                            </div>
                        </div>
                    </div>
                    <!--===============spacing==============-->
                    <div class="pd_bottom_15"></div>
                    <!--===============spacing==============-->
                    <div class="contact_box_content style_one">
                        <div class="contact_box_inner icon_yes">
                            <div class="icon_bx">
                                <span class="icon-phone-call"></span>
                            </div>
                            <div class="contnet">
                                <h3> General Enquires </h3>
                                <p>
                                    Phone: <a href="tel:+971503446939"> +(971) 50 344 6939</a> <br /> Email: <a href="tel:aas@auregagroup.com"> aas@auregagroup.com</a>
                                </p>
                            </div>
                        </div>
                    </div>
                    <!--===============spacing==============-->
                    <div class="pd_bottom_15"></div>
                    <!--===============spacing==============-->
                    <div class="contact_box_content style_one">
                        <div class="contact_box_inner icon_yes">
                            <div class="icon_bx">
                                <span class="fa fa-clock-o"></span>
                            </div>
                            <div class="contnet">
                                <h3> Operation Hours </h3>
                                <p>
                                    Monday-Friday: 09.00 am to 06.00 pm<br />
                                    Saturday: 10.00 am to 04.00 pm<br />
                                </p>
                            </div>
                        </div>
                    </div>
                    <!--===============spacing==============-->
                    <div class="pd_bottom_40"></div>
                    <!--===============spacing==============-->
                    <div class="social_media_v_one style_two">
                        <ul>
                            <li>
                                <a href="https://www.facebook.com/auregagroup/" target="_blank"> <span class="fa fa-facebook"></span>
                                    <small>facebook</small>
                                </a>
                            </li>
                            <li>
                                <a href="https://x.com/Auregagroup" target="_blank">
                                    <svg xmlns="http://www.w3.org/2000/svg" height="16" width="16" viewBox="0 0 512 512"><!--!Font Awesome Free 6.5.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.-->
                                        <path fill="#30D5C8" d="M389.2 48h70.6L305.6 224.2 487 464H345L233.7 318.6 106.5 464H35.8L200.7 275.5 26.8 48H172.4L272.9 180.9 389.2 48zM364.4 421.8h39.1L151.1 88h-42L364.4 421.8z" />
                                    </svg>
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
        <div class="pd_top_70"></div>
        <!--===============spacing==============-->
    </section>
    <section class="contact-map-section">
        <div class="container p-0" id="map">
            <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d14441.857782445455!2d55.2611684!3d25.1875552!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3e5f693560ad9fe9%3A0xdb3b467956c16a9a!2sAurega%20Group!5e0!3m2!1sen!2sin!4v1676375849520!5m2!1sen!2sin" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
        <!--===============spacing==============-->
        <div class="pd_top_90"></div>
        <!--===============spacing==============-->
    </section>
</div>
@endsection