@extends('frontend.Layouts.master')
@section('title',trans('Frontend::home.pages.products.product_2.title'))

@section('page-header')
<!-- page-title -->
<div class="ttm-page-title-row ttm-bg ttm-bgimage-yes ttm-bgcolor-darkgrey clearfix">
    <div class="ttm-row-wrapper-bg-layer ttm-bg-layer"></div>
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-12">
                <div class="ttm-page-title-row-inner">
                    <div class="page-title-heading">
                        <h2 class="title">{{ trans('Frontend::home.pages.products.product_2.title') }}</h2>
                    </div>
                    <div class="breadcrumb-wrapper">
                        <span>
                            <a title="Homepage" href="{{ URL::to('/') }}"><i class="fa fa-home"></i>{{ trans('Frontend::home.pages.home.title') }}</a>
                        </span>
                        <span>{{ trans('Frontend::home.pages.products.product_2.title') }}</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- page-title end -->
@endsection

@section('content')
<!-- aboutus-section -->
<section class="ttm-row aboutus-section ttm-bgcolor-white clearfix human">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 col-md-12 col-sm-12">
                <div class="padding_left35 res-991-padding_left0 res-991-margin_top30">
                    <!-- section title -->
                    <div class="section-title clearfix">
                        <div class="title-header">
                            <h3>{{ trans('Frontend::home.pages.products.product_2.first_section.semi_title') }}</h3>
                            <h2 class="title">{{ trans('Frontend::home.pages.products.product_2.first_section.title') }}</h2>
                        </div>
                        <div class="title-desc">
                            <p>{{ trans('Frontend::home.pages.products.product_2.first_section.desc') }}</p>
                        </div>
                    </div>
                    <!-- section title end -->
                    <div class="row no-gutters ">
                        <div class="margin_top20 d-flex justify-content-md-end justify-content-center">
                            <a class="ttm-btn ttm-btn-size-lg  ttm-btn-shape-rounded ttm-btn-style-border ttm-icon-btn-right  rajdhani font-weight-600" href="https://calendly.com/raed-maree/30min?back=1&amp;month=2022-07">{{ trans('Frontend::home.pages.products.product_2.first_section.btn') }} <i class="flaticon flaticon-right-arrow margin_top5"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            <!-- row -->
            <div class="col-lg-6 col-md-12 col-sm-12">
                <div class="row">
                    <div class="col-lg-6 col-md-6 col-sm-6">
                        <img class="img-fluid w-100" src="{{ asset('assets/frontend/images/single-img-3.png') }}" title="single-img-3" alt="single-img">
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-6 res-575-margin_top30">
                        <img class="img-fluid w-100" src="{{ asset('assets/frontend/images/single-img-4.png') }}" title="single-img-4" alt="single-img">
                    </div>
                </div>
                <div class="margin_top30 blockquote_1">
                    <blockquote class="ttm-bgcolor-grey">
                        <div class="qoute-text">
                            <h4>{{ trans('Frontend::home.pages.products.product_2.first_section.extra_desc') }}</h4>
                        </div>
                    </blockquote>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- aboutus-section end -->

<!-- aboutus-section -->
<section class="ttm-row aboutus-section ttm-bgcolor-grey  clearfix human">
    <div class="container">
        <div class="row no-gutters">
            <!-- row -->
            <div class="col-lg-6 col-md-6 col-sm-12">
                <img src="{{ asset('assets/frontend/images/bg-img/col-bgimage-16.jpg') }}" alt="bg-image">
            </div>
            <div class="col-lg-6 col-md-12 col-sm-12">
                <div class="padding_left50 res-991-padding_left15  padding_top35  padding_right10">
                    <!-- section title -->
                    <div class="section-title clearfix">
                        <div class="title-header">
                            <h3>{{ trans('Frontend::home.pages.products.product_2.second_section.semi_title') }}</h3>
                            <h2 class="title">{{ trans('Frontend::home.pages.products.product_2.second_section.title') }}</h2>
                        </div>
                        <div class="title-desc">
                            <p class="padding_bottom0">{{ trans('Frontend::home.pages.products.product_2.second_section.desc') }}</p>
                        </div>
                    </div>
                    <!-- section title end -->
                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12 mb_15">
                            <div class="featured-icon-box icon-align-before-content style10 ">
                                <div class="featured-icon">
                                    <img class="img-fluid" src="{{ asset('assets/frontend/images/global.png') }}">
                                </div>
                                <div class="featured-content">
                                    <div class="featured-title">
                                        <h3>{{ trans('Frontend::home.pages.products.product_2.second_section.list_item_1') }}</h3>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-12 col-md-12 col-sm-12 mb_15">
                            <div class="featured-icon-box icon-align-before-content style10 ">
                                <div class="featured-icon">
                                    <img class="img-fluid" src="{{ asset('assets/frontend/images/flash.png') }}">
                                </div>
                                <div class="featured-content">
                                    <div class="featured-title">
                                        <h3>{{ trans('Frontend::home.pages.products.product_2.second_section.list_item_2') }}</h3>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-12 col-md-12 col-sm-12 mb_15">
                            <div class="featured-icon-box icon-align-before-content style10 ">
                                <div class="featured-icon">
                                    <img class="img-fluid" src="{{ asset('assets/frontend/images/balance.png') }}">
                                </div>
                                <div class="featured-content">
                                    <div class="featured-title">
                                        <h3>{{ trans('Frontend::home.pages.products.product_2.second_section.list_item_3') }}</h3>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-12 col-md-12 col-sm-12 mb_15">
                            <div class="featured-icon-box icon-align-before-content style10 ">
                                <div class="featured-icon">
                                    <img class="img-fluid" src="{{ asset('assets/frontend/images/bar-chart.png') }}">
                                </div>
                                <div class="featured-content">
                                    <div class="featured-title">
                                        <h3>{{ trans('Frontend::home.pages.products.product_2.second_section.list_item_4') }}</h3>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- aboutus-section end -->

<!-- padding_top_zero-section  -->
<section class="ttm-row  ttm-bgcolor-white padding_top100 featuredbox human clearfix">
    <div class="container">
        <!--row -->
        <div class="row">
            <div class="col-lg-12">
                <!-- section title -->
                <div class="section-title title-style-center_text">
                    <div class="title-header">
                        <h3>{{ trans('Frontend::home.pages.products.product_2.third_section.semi_title') }}</h3>
                        <h2 class="title">{{ trans('Frontend::home.pages.products.product_2.third_section.title') }}</h2>
                    </div>
                </div>
                <!-- section title end -->
            </div>
        </div>
        <!-- row end -->
        <!--row -->
        <div class="row featuredbox-number">
            @php 
                $images = [
                    'team.png','computer-science.png','technology.png','online-learning.png','psychology.png',
                    'budget.png','balance.png','feedback.png','digital-marketing.png','social-science.png',
                    'microscope.png','fire.png','administrator.png','competence.png','bellgirl.png',
                ];
            @endphp
            @foreach($images as $key => $image)
            <div class="col-lg-3 col-md-3 col-sm-6">
                <!--featured-icon-box-->
                <div class="featured-icon-box job icon-align-top-content style13">
                    <div class="featured-icon text-center">
                        <div class="ttm-icon ttm-icon_element-fill ttm-icon_element-size-xl ttm-icon_element-color-grey ttm-icon_element-style-round">
                            <img class="img-fluid" src="{{ asset('assets/frontend/images/job/'.$image) }}">
                        </div>
                    </div>
                    <div class="featured-content text-center">
                        <div class="featured-title">
                            <h3>{{ trans('Frontend::home.pages.products.product_2.third_section.list_item_'.($key+1)) }}</h3>
                        </div>
                    </div>
                </div>
                <!-- featured-icon-box end-->
            </div>
            @endforeach
        </div>
        <!-- row end -->
    </div>
</section>
<!--  padding_top_zero-section end  -->
@endsection