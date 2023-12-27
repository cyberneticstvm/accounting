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
                                <!--===============spacing==============-->
                                <div class="pd_bottom_15"></div>
                                <!--===============spacing==============-->
                                <div class="description_box">
                                    {!! $blog->content !!}
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