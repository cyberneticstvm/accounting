@extends("web.base")
@section("content")
<div class="device-margin visible-md"></div>
<div id="content" class="site-content">
    <section class="faqs-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    @if(session()->has('success'))
                    <div class="alert alert-success text-white">
                        {{ session()->get('success') }}
                    </div>
                    @endif
                    @if(session()->has('error'))
                    <div class="alert alert-danger text-white">
                        {{ session()->get('error') }}
                    </div>
                    @endif
                </div>
            </div>
        </div>
        <!--===============spacing==============-->
        <div class="pd_bottom_70"></div>
        <!--===============spacing==============-->
    </section>
</div>
@endsection