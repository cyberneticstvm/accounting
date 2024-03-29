@extends("web.base")
@section("content")
<div class="device-margin visible-md"></div>
<div id="content" class="site-content ">
    <section class="blog_post_section two_column  style_three">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="title_all_box style_one text-left  dark_color">
                        <div class="title_sections">
                            <div class="before_title">Our Blogs</div>
                            <!--<h1>Leaders in Accounting and Tax Solution</h1>-->
                        </div>
                    </div>
                    <div class="grid_show_case grid_layout clearfix">
                        @forelse($blogs as $key => $item)
                        <div class="news_box style_two grid_box _card has_images">
                            <div class="content_box">
                                <div class="overlay"> </div>
                                <img src="{{ ($item->featured_image) ? asset($item->featured_image) : asset('/web/assets/images/blog/blog-image-9.jpg') }}" class="img-fluid" alt="{{ $item->title }}">
                                <div class="category">
                                    <a href="{{ route('blog.single', $item->slug) }}" class="categories"><i class="icon-folder"></i>{{ $item->blog_category }}</a>
                                </div>
                            </div>
                            <div class="content_mid">
                                <span class="date_in_number">{{ $item->created_at->format('d, M Y') }}</span>
                                <h5 class="title"><a href="{{ route('blog.single', $item->slug) }}" rel="bookmark">{{ $item->title }}</a></h5>
                            </div>
                            <div class="auhtour_box">
                                <!--<img alt="Aurega Accounting" src="{{ asset('/web/assets/images/aurega-logo-transparent.png') }}" height="60" width="60" class="img-fluid">-->
                                <div class="contnet_a">
                                    <!--<p>Tags</p>-->
                                    <p>{{ $item->hashtags }}</p>
                                </div>
                            </div>
                        </div>
                        @empty
                        @endforelse
                    </div>
                    <div class="d-flex justify-content-center">
                        {!! $blogs->links() !!}
                    </div>
                </div>
            </div>
        </div>
        <!--===============spacing==============-->
        <div class="pd_top_70"></div>
        <!--===============spacing==============-->
</div>
@endsection