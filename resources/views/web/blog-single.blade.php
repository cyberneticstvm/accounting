@extends("web.base")
@section("content")
<div class="device-margin visible-md"></div>
<div id="content" class="site-content ">
    <div class="auto-container">
        <div class="row default_row">
            <div id="primary" class="content-area service col-lg-8 col-md-12 col-sm-12 col-xs-12">
                <main id="main" class="site-main" role="main">
                    <section class="blog_single_details_outer">
                        <div class="single_content_upper">
                            <div class="blog_feature_image">
                                <img src="{{ ($blog->featured_image) ? asset($blog->featured_image) : asset('/web/assets/images/blog/blog-image-9.jpg') }}" class="wp-post-image" alt="img">
                            </div>
                            <!--===============spacing==============-->
                            <div class="pd_bottom_20"></div>
                            <!--===============spacing==============-->
                            <div class="post_single_content">
                                <h5>{{ $blog->title }}</h5>
                                <p class="title">{{ $blog->blog_category }}</p>
                                <!--===============spacing==============-->
                                <div class="pd_bottom_15"></div>
                                <!--===============spacing==============-->
                                <div class="description_box">
                                    {!! $blog->content !!}
                                </div>
                            </div>
                        </div>
                        <div class="single_content_lower">
                            <div class="tags_and_share">
                                <div class="d-flex">
                                    <div class="tags_content left_one">
                                        <div class="box_tags_psot">
                                            <div class="title">Tags</div>
                                            {{ $blog->hashtags }}
                                        </div>
                                    </div>
                                    <div class="share_content right_one">
                                        <div class="share_socail">
                                            <div class="title">Share</div>
                                            <button class="m_icon" title="facebook" data-sharer="facebook" data-title="blog single" data-url="{{ route('blog.single', $blog->slug) }}">
                                                <i class="fa fa-facebook"></i>
                                            </button>
                                            <button class="m_icon" title="twitter" data-sharer="twitter" data-title="blog single" data-url="{{ route('blog.single', $blog->slug) }}">
                                                <i class="fa fa-twitter"></i>
                                            </button>
                                            <button class="m_icon" title="whatsapp" data-sharer="whatsapp" data-title="blog single" data-url="{{ route('blog.single', $blog->slug) }}">
                                                <i class="fa fa-whatsapp"></i>
                                            </button>
                                            <button class="m_icon" title="linkedin" data-sharer="linkedin" data-title="blog single" data-url="{{ route('blog.single', $blog->slug) }}" data-to="+44555-03564">
                                                <i class="fa fa-linkedin"></i>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="sec_comments padding-t-8 padding-b-3" id="comment">
                                <div class="container_no">
                                    <div class="row justify-content-center">
                                        <div class="col-lg-12">
                                            <div id="" class="comment-respond">
                                                <h3 id="reply-title" class="comment-reply-title">
                                                    Post a comment
                                                </h3>
                                                <form action="{{ route('blog.comment') }}" method="post">
                                                    @csrf
                                                    <input type="hidden" name="blog_id" value="{{ encrypt($blog->id) }}" />
                                                    <p class="title_para">Your email address will not be published.</p>
                                                    <p class="comment-form-comment"><label for="comment">Leave a Reply </label><textarea placeholder="Write your comment here..." id="comment" name="comment" rows="12" aria-required="true"></textarea>
                                                        @error('comment')
                                                        <small class="text-danger">{{ $errors->first('comment') }}</small>
                                                        @enderror
                                                    </p>
                                                    <p class="comment-form-author">
                                                        <label for="name">Full Name</label>
                                                        <input id="author" placeholder="ex. John Doe" name="name" type="text" value="" size="30" aria-required="true">
                                                        @error('name')
                                                        <small class="text-danger">{{ $errors->first('name') }}</small>
                                                        @enderror
                                                    </p>
                                                    <p class="comment-form-email">
                                                        <label for="email">Email address</label>
                                                        <input id="email" placeholder="ex. john@mail.com" name="email" type="text" value="" size="30" aria-required="true">
                                                        @error('email')
                                                        <small class="text-danger">{{ $errors->first('email') }}</small>
                                                        @enderror
                                                    </p>
                                                    <p class="comment-form-url">
                                                        <label for="contact_number">Contact Number</label>
                                                        <input id="contact_number" name="contact_number" placeholder="Contact Number" type="text" value="" size="30">
                                                        @error('contact_number')
                                                        <small class="text-danger">{{ $errors->first('contact_number') }}</small>
                                                        @enderror
                                                    </p>
                                                    <div class="clearfix"></div>
                                                    <p class="form-submit">
                                                        <button type="submit" class="theme_btn btn-submit w-100">Post comment</button>
                                                    </p>
                                                </form>
                                            </div>
                                            <!-- #respond -->
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                    <!--===============spacing==============-->
                    <div class="pd_bottom_70"></div>
                    <!--===============spacing==============-->
                </main>
            </div>
            <aside id="secondary" class="widget-area all_side_bar col-lg-4 col-md-12 col-sm-12">
                <div class="side_bar">
                    <div class="widgets_grid_box">
                        <h2 class="widget-title">Recent Blogs</h2>
                        <div class="widget_post_box">
                            @forelse($blogs as $key => $item)
                            <div class="blog_in clearfix image_in">
                                <div class="image">
                                    <img decoding="async" src="{{ ($item->featured_image) ? asset($item->featured_image) : asset('/web/assets/images/blog/blog-image-9.jpg') }}" alt="img">
                                </div>
                                <div class="content_inner">
                                    <p class="post-date"><span class="icon-calendar"></span>{{ $item->created_at->format('d, M Y') }}</p>
                                    <h3><a href="{{ route('blog.single', $item->slug) }}">{{ $item->title }}</a></h3>
                                </div>
                            </div>
                            @empty
                            @endforelse
                        </div>
                    </div>
                    <!--===============spacing==============-->
                    <div class="pd_bottom_70"></div>
                    <!--===============spacing==============-->
                </div>
            </aside>
        </div>
    </div>
</div>
@endsection