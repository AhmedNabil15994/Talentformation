@extends('frontend.Layouts.master')
@section('title',trans('Frontend::home.pages.home.title'))
@push('css')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.3.0/css/font-awesome.min.css">
    <style>
        .featured-icon-box.style2{
            min-height: 250px;
        }
        .carousel-item{
            background-color: transparent;
        }
        .rounded-circle{
            border: 5px solid #FFF;
        }
        .carousel-item h4,
        .carousel-item p{
            color: #FFF !important;
            margin-bottom: 0;
        }
        .carousel-item p{
            font-size: 16px;
        }
        .carousel-control-prev,
        .carousel-control-next{
            background-color: transparent;
            color: #FFF;
            width: 10%;
        }
        #carouselExampleControls,.carousel-item{
            height: unset !important;
            min-height: 500px;
        }
        .fa-quote-left{
            position: absolute;
            top: 150px;
            left: 10%;
            color:#DDD !important;
            font-size: 30px;
        }
        .fa-quote-right{
            position: absolute;
            bottom: 150px;
            right: 10%;
            color:#DDD !important;
            font-size: 30px;
        }
        html[dir=ltr] .fa-quote-left{
            right: 10%;
        }
        html[dir=ltr] .fa-quote-right{
            left: 10%;
        }
        .client-section.padding_bottom65{
            padding-bottom: 0 !important;
        }
    </style>
@endpush
@section('page-header')
<!-- Banner -->
<div class="banner_slider banner_slider_3 banner_slider_wide">
    @foreach($sliders as $key => $homeSlider)
    <div class="slide s{{ $key+1 }}">
        <div class="slide_img" style="background-image: url({{ $homeSlider->image_url }});"></div>
        <div class="slide__content">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="slide__content--headings ttm-textcolor-white text-center">
                            <h3 data-animation="fadeInUp" data-delay="0.5s">{{ $homeSlider->metadata['extra_heading'][LANGUAGE_PREF] }}</h3>
                            <h2 data-animation="fadeInDown" data-delay="0.8s"> {{ $homeSlider->{'title_'.LANGUAGE_PREF} }} </h2>
                            <p data-animation="fadeInDown" data-delay="1.3s">{{ $homeSlider->{'description_'.LANGUAGE_PREF} }}</p>
                            <div class="d-inline-block margin_top20 res-600-margin_top10" data-animation="fadeInUp" data-delay="1.7s">
                                <a class="ttm-btn ttm-btn-size-md  ttm-btn-shape-rounded ttm-btn-style-fill ttm-icon-btn-right ttm-btn-color-skincolor" href="{{ str_contains($homeSlider->metadata['button_link'], 'http') ? $homeSlider->metadata['button_link'] : URL::to($homeSlider->metadata['button_link']) }}">{{ $homeSlider->metadata['button_text'][LANGUAGE_PREF] }}</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @endforeach
</div>
<!-- Banner end-->
@endsection

@section('content')

<!-- cta-section -->
<section class="ttm-row cta-section ttm-bgcolor-skincolor clearfix">
    <div class="container">
        @include('Frontend::Partials.start_with_us')
    </div>
</section>
<!-- cta-section end -->



<section class="ttm-row services-section bg-img1 ttm-bg ttm-bgimage-yes ttm-bgcolor-grey padding_bottom125  clearfix">
    <div class="ttm-row-wrapper-bg-layer ttm-bg-layer"></div>
    <div class="container">
        <!--row -->
        <div class="row">
            <div class="col-lg-12">
                <!-- section title -->
                <div class="section-title title-style-center_text">
                    <div class="title-header">
                        <h3>{{ trans('Frontend::home.pages.home.second_section.semi_title') }}</h3>
                        <h2 class="title">{{ trans('Frontend::home.pages.home.second_section.title') }}</h2>
                        <p>{{ trans('Frontend::home.pages.home.second_section.desc') }}</p>
                    </div>
                </div><!-- section title end -->
            </div>
        </div>
        <!-- row end -->
        @if(count($approachSections))
        <!--row -->
        <div class="row">
            @foreach($approachSections as $approach)
            <div class="col-lg-3 col-md-6">
                <div class="ttm-bgcolor-white featured-icon-box icon-align-top-content box-shadow style2">
                    <div class="featured-icon">
                        <div class="ttm-icon ttm-icon_element-fill ttm-icon_element-color-grey ttm-icon_element-style-round ttm-icon_element-size-md">
                            <i class="flaticon {{ $approach->icon }}"></i>
                        </div>
                    </div>
                    <div class="featured-content">
                        <div class="featured-title">
                            <h3> {!! $approach->description !!}</h3>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
        <!-- row end -->
        @endif
        <!--row -->
        <div class="row">
            <div class=" col-lg-7 col-md-10 col-sm-12 m-auto">
                <div class="rajdhani margin_top35 res-991-margin_bottom30 text-center font-weight-600 fs-18">
                    <span class="ttm-textcolor-darkgrey">{{ trans('Frontend::home.pages.home.second_section.here_are') }}</span>
                    <a href="{{ URL::to('/services') }}" class="ttm-btn btn-inline ttm-btn-color-skincolor ttm-icon-btn-right fs-18 padding_right10">
                        <strong>{{ trans('Frontend::home.pages.home.more_services') }}</strong></a>
                </div>
            </div>
        </div><!-- row end -->
    </div>
</section>


<section class="ttm-row padding_zero-section position-relative mt_50 clearfix">
    <div class="container">
        <div class="row no-gutters">
            <!-- row -->
            <div class="col-lg-6">
                <!-- col-img-img-one -->
                <div class="col-bg-img-one ttm-col-bgimage-yes ttm-bg ttm-col-bgcolor-yes ttm-bgcolor-skincolor ttm-left-span spacing-1">
                    <div class="ttm-col-wrapper-bg-layer ttm-bg-layer">
                        <div class="ttm-bg-layer-inner b-radius-40"></div>
                    </div>
                    <div class="layer-content">
                        <div class="">
                            <!-- section title -->
                            <div class="section-title clearfix">
                                <div class="title-header">
                                    <h3>{{ trans('Frontend::home.pages.home.third_section.semi_title') }}</h3>
                                    <h2 class="title">{{ trans('Frontend::home.pages.home.third_section.title') }}</h2>
                                    <p>
                                        {{ trans('Frontend::home.pages.home.third_section.desc') }}
                                    </p>
                                </div>
                            </div><!-- section title end -->
                            <div class="featuredbox-number">
                                <!-- featured-icon-box -->
                                <div class="featured-icon-box icon-align-before-content style3 icon-ver_align-top">
                                    <div class="featured-icon">
                                        <div class="ttm-icon ttm-icon_element-fill ttm-icon_element-color-skincolor ttm-icon_element-size-xs ttm-icon_element-style-rounded">
                                            <i class="ttm-num ti-info"></i>
                                        </div>
                                    </div>
                                    <div class="featured-content">
                                        <div class="featured-title">
                                            <h3>{{ trans('Frontend::home.pages.home.third_section.hr') }}</h3>
                                        </div>
                                    </div>
                                </div>
                                <!-- featured-icon-box end -->
                                <div class="ttm-horizontal_sep width-100 mt-10 mb-10"></div>
                                <!-- featured-icon-box -->
                                <div class="featured-icon-box icon-align-before-content style3 icon-ver_align-top">
                                    <div class="featured-icon">
                                        <div class="ttm-icon ttm-icon_element-fill ttm-icon_element-color-skincolor ttm-icon_element-size-xs ttm-icon_element-style-rounded">
                                            <i class="ttm-num ti-info"></i>
                                        </div>
                                    </div>
                                    <div class="featured-content">
                                        <div class="featured-title">
                                            <h3>{{ trans('Frontend::home.pages.home.third_section.events') }}</h3>
                                        </div>
                                    </div>
                                </div>
                                <!-- featured-icon-box end -->
                            </div>
                        </div>
                    </div>
                </div><!-- col-img-img-one -->
            </div>
            <div class="col-lg-6">
                <!-- col-img-img-two -->
                <div class="col-bg-img-two ttm-col-bgimage-yes ttm-bg ttm-right-span spacing-2">
                    <div class="ttm-col-wrapper-bg-layer ttm-bg-layer"></div>
                    <div class="layer-content"></div>
                </div>
            </div>
        </div><!-- row -->
    </div>
</section>


<!-- services-section-title -->
<section class="ttm-row services-section-title padding_bottom170 position-relative ttm-bgcolor-grey clearfix">
    <div class="container">
        <!--row --> 
        <div class="row">
            <div class="col-lg-12">
                <!-- section title -->
                <div class="section-title style2 ">
                    <div class="title-header">
                        <h3>{{ trans('Frontend::home.pages.home.fourth_section.semi_title') }}</h3>
                        <h2 class="title">{{ trans('Frontend::home.pages.home.fourth_section.title') }}.</h2>
                    </div>
                    <div class="title-desc">
                        <a href="{{ URL::to('/services') }}" class="ttm-btn ttm-btn-size-md  ttm-btn-shape-rounded ttm-btn-style-border ttm-icon-btn-right fs-15 padding_right10"><strong>{{ trans('Frontend::home.pages.home.more_services') }}</strong></a>
                    </div>
                </div><!-- section title end -->
            </div>
        </div><!-- row end -->
    </div>
</section><!-- services-section-title end  -->


<!-- services-section-title end  -->
<section class="ttm-row padding_top_zero-section ttm-bgcolor-white mt_170 res-991-margin_top_50 clearfix">
    <div class="container">
        <div class="row  slick_slider mb_30" data-slick='{"slidesToShow": 3, "slidesToScroll": 1, "arrows":true, "autoplay":true, "dots":false, "infinite":true, "responsive":[{"breakpoint":1199,"settings": {"slidesToShow": 3}}, {"breakpoint":992,"settings":{"slidesToShow": 2}},{"breakpoint":620,"settings":{"slidesToShow": 1}}]}'>
            @foreach($services as $service)
            @include('Frontend::Services.partials.serviceCard',['service'=>$service])
            @endforeach
        </div>
    </div>
</section>


@include('Frontend::Partials.specailists')
@include('Frontend::Partials.statistics')

<!-- article-section -->
<section class="ttm-row article-section bg-img2 ttm-bg ttm-bgimage-yes padding_bottom150 clearfix">
    <div class="ttm-row-wrapper-bg-layer ttm-bg-layer"></div>
    <div class="container">
        <!--row -->
        <div class="row">
            <div class="col-lg-12">
                <!-- section title -->
                <div class="section-title title-style-center_text">
                    <div class="title-header">
                        <h3>{{ trans('Frontend::home.pages.home.sixth_section.semi_title') }}</h3>
                        <h2 class="title">{{ trans('Frontend::home.pages.home.sixth_section.title') }}</h2>
                    </div>
                </div><!-- section title end -->
            </div>
        </div><!-- row end -->
        <div class="row slick_slider" data-slick='{"slidesToShow": 3, "slidesToScroll": 1, "arrows":true, "autoplay":true, "dots":false, "infinite":true, "responsive":[{"breakpoint":1199,"settings": {"slidesToShow": 3}}, {"breakpoint":992,"settings":{"slidesToShow": 2}},{"breakpoint":620,"settings":{"slidesToShow": 1}}]}'>
            @foreach($blogs as $blog)
            @include('Frontend::Blogs.partials.blogCard',['blog'=>$blog])
            @endforeach
        </div>
        <!--row -->
        <div class="row">
            <div class=" col-lg-7 col-md-10 col-sm-12 m-auto">
                <div class="rajdhani margin_top35 res-991-margin_bottom50 text-center font-weight-600 fs-18">
                    <a href="{{ URL::to('/blogs') }}" class="ttm-btn btn-inline ttm-btn-color-skincolor ttm-icon-btn-right fs-18 padding_right10">
                        <strong>{{ trans('Frontend::home.pages.home.sixth_section.btn') }} </strong>
                    </a>
                </div>
            </div>
        </div><!-- row end -->
    </div>
</section>
<!-- article-section end -->


<!-- client-section -->
<section class="ttm-row client-section ttm-bgcolor-skincolor padding_bottom65 clearfix">
    <div class="container">
        <!-- row -->
        <div class="row">
            <div class="col-md-12">
                <div class="ttm-bgcolor-grey  padding_lr15 mt_160 res-991-margin_top_130  overflow-hidden margin_bottom65 res-991-margin_bottom45 border-rad_5">
                    <!-- slick_slider -->
                    <div class="row slick_slider" data-slick='{"slidesToShow": 5, "slidesToScroll": 1, "arrows":false, "autoplay":true, "infinite":true, "responsive": [{"breakpoint":1200,"settings":{"slidesToShow": 5}}, {"breakpoint":1024,"settings":{"slidesToShow": 4}}, {"breakpoint":777,"settings":{"slidesToShow": 3}},{"breakpoint":575,"settings":{"slidesToShow": 2}}]}'>
                        @foreach($clients as $client)
                        <div class="col-lg-12">
                            <div class="client-box style1">
                                <div class="ttm-client-logo">
                                    <div class="client-thumbnail">
                                        <img class="img-fluid" src="{{ $client->image_url }}" alt="image">
                                    </div>
                                </div>
                            </div>
                        </div>
                        @endforeach
                    </div><!-- slick_slider end -->
                </div>
            </div>
        </div>
        <!-- row end -->
    </div>
    @if(count($testimonials))
    <div id="carouselExampleControls" class="carousel slide text-center carousel-dark" data-ride="carousel">
            <div class="carousel-inner">
                @foreach($testimonials as $lastKeys => $testimonial)
                <div class="carousel-item {{$lastKeys == 0 ? 'active' : ''}}">
                    <i class="fa fa-quote-left fa-lg"></i>
                    <img class="rounded-circle shadow-1-strong mb-2" src="{{$testimonial->image_url}}" alt="avatar" style="width: 100px; height:100px;" />
                    <div class="row d-flex justify-content-center">
                        <div class="col-lg-8">
                            <h4 >{{$testimonial->name}}</h4>
                            <p>{{$testimonial->position}}</p>
                            <p class="text-muted mb-4">
                                {!! $testimonial->description !!}
                            </p>
                        </div>
                    </div>
                    <i class="fa fa-quote-right fa-lg"></i>
                </div>
                @endforeach
            </div>
            <button class="carousel-control-prev" type="button" data-target="#carouselExampleControls" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            </button>
            <button class="carousel-control-next" type="button" data-target="#carouselExampleControls" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
            </button>
        </div>
    @endif
</section>
<!-- client-section end -->

@endsection