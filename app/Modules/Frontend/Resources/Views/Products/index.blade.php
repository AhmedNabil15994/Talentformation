@extends('frontend.Layouts.master')
@section('title',trans('Frontend::home.pages.products.title'))

@section('page-header')
<!-- page-title -->
<div class="ttm-page-title-row ttm-bg ttm-bgimage-yes ttm-bgcolor-darkgrey clearfix">
    <div class="ttm-row-wrapper-bg-layer ttm-bg-layer"></div>
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-12">
                <div class="ttm-page-title-row-inner">
                    <div class="page-title-heading">
                        <h2 class="title">{{ trans('Frontend::home.pages.products.title') }}</h2>
                    </div>
                    <div class="breadcrumb-wrapper">
                        <span>
                            <a title="Homepage" href="{{ URL::to('/') }}"><i class="fa fa-home"></i>{{ trans('Frontend::home.pages.home.title') }}</a>
                        </span>
                        <span>{{ trans('Frontend::home.pages.products.title') }}</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- page-title end -->

@endsection

@section('content')
<!-- services-section -->
<section class="ttm-row services-section products ttm-bgcolor-white clearfix">
    <div class="container">
        <!--row -->
        <div class="row">
            <div class="col-lg-12">
                <!-- section title -->
                <div class="section-title style2">
                    <div class="title-header">
                        <h3>{{ trans('Frontend::home.pages.products.heading') }}</h3>
                        <h2 class="title">{{ trans('Frontend::home.pages.products.desc') }}</h2>
                    </div>
                </div>
                <!-- section title end -->
            </div>
        </div>
        <!-- row end -->
        <!--row -->
        <div class="row">
            <div class="col-lg-4 col-md-12">
                <div class="featured-icon-box icon-align-bottom-content box-shadow style7">
                    <div class="featured-content">
                        <div class="featured-title">
                            <h3>{{ trans('Frontend::home.pages.products.product_1.title') }}</h3>
                        </div>
                        <div class="featured-desc">
                            {{ trans('Frontend::home.pages.products.product_1.desc') }}
                        </div>
                    </div>
                    <div class="featured-icon">
                        <div class="ttm-icon ttm-icon_element-onlytxt ttm-icon_element-color-skincolor  ttm-icon_element-size-md">
                            <i class="flaticon flaticon-checklist"></i>
                        </div>
                        <a class="ttm-btn ttm-btn-size-md  ttm-btn-shape-rounded ttm-btn-style-border ttm-icon-btn-right ttm-btn-color-grey float-right" href="{{ URL::to('/products/assessment-solutions') }}">{{ trans('Frontend::home.pages.home.read_more') }}<i class="flaticon flaticon-right-arrow"></i></a>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-12">
                <div class="featured-icon-box icon-align-bottom-content box-shadow style7">
                    <div class="featured-content">
                        <div class="featured-title">
                            <h3>{{ trans('Frontend::home.pages.products.product_2.title') }}</h3>
                        </div>
                        <div class="featured-desc">
                            {{ trans('Frontend::home.pages.products.product_2.desc') }}
                        </div>
                    </div>
                    <div class="featured-icon">
                        <div class="ttm-icon ttm-icon_element-onlytxt ttm-icon_element-color-skincolor  ttm-icon_element-size-md">
                            <i class="flaticon flaticon-tv-monitor"></i>
                        </div>
                        <a class="ttm-btn ttm-btn-size-md  ttm-btn-shape-rounded ttm-btn-style-border ttm-icon-btn-right ttm-btn-color-grey float-right" href="{{ URL::to('/products/human-capital') }}">{{ trans('Frontend::home.pages.home.read_more') }}<i class="flaticon flaticon-right-arrow"></i></a>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-12">
                <div class="featured-icon-box icon-align-bottom-content box-shadow style7">
                    <div class="featured-content">
                        <div class="featured-title">
                            <h3>{{ trans('Frontend::home.pages.products.product_3.title') }}</h3>
                        </div>
                        <div class="featured-desc">
                            {{ trans('Frontend::home.pages.products.product_3.desc') }} 
                        </div>
                    </div>
                    <div class="featured-icon">
                        <div class="ttm-icon ttm-icon_element-onlytxt ttm-icon_element-color-skincolor  ttm-icon_element-size-md">
                            <i class="flaticon flaticon-time"></i>
                        </div>
                        <a class="ttm-btn ttm-btn-size-md  ttm-btn-shape-rounded ttm-btn-style-border ttm-icon-btn-right ttm-btn-color-grey float-right" href="{{ URL::to('/products/measurement-systems') }}">{{ trans('Frontend::home.pages.home.read_more') }}<i class="flaticon flaticon-right-arrow"></i></a>
                    </div>
                </div>
            </div>
        </div>
        <!-- row end -->
    </div>
</section>
<!-- services-section end  -->
@endsection