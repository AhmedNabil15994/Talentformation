@extends('frontend.Layouts.master')
@section('title',trans('Frontend::home.pages.products.product_1.title'))
@push('css')
    <style>
        .lastToggle.active{
            margin-bottom: 50px !important;
        }
    </style>
@endpush
@section('page-header')
<!-- page-title -->
<div class="ttm-page-title-row ttm-bg ttm-bgimage-yes ttm-bgcolor-darkgrey clearfix">
    <div class="ttm-row-wrapper-bg-layer ttm-bg-layer"></div>
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-12">
                <div class="ttm-page-title-row-inner">
                    <div class="page-title-heading">
                        <h2 class="title">{{ trans('Frontend::home.pages.products.product_1.title') }}</h2>
                    </div>
                    <div class="breadcrumb-wrapper">
                        <span>
                            <a title="Homepage" href="{{ URL::to('/') }}"><i class="fa fa-home"></i>{{ trans('Frontend::home.pages.home.title') }}</a>
                        </span>
                        <span>{{ trans('Frontend::home.pages.products.product_1.title') }}</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- page-title end -->
@endsection

@section('content')
<section class="ttm-row article-section ttm-bgcolor-grey clearfix">
    <div class="container">
        <!--row -->
        <div class="row">
            <div class="col-lg-12">
                <!-- section title -->
                <div class="section-title title-style-center_text">
                    <div class="title-header">
                        <h3>{{ trans('Frontend::home.pages.products.product_1.first_section.semi_title') }}</h3>
                        <h2 class="title">{{ trans('Frontend::home.pages.products.product_1.first_section.title') }}</h2>
                    </div>
                </div>
                <!-- section title end -->
            </div>
        </div>
        <!-- row end -->
        <div class="row">
            <div class="col-lg-12">
                <div class="accordion margin_top15 res-991-margin_top40">
                    <div class="wrap-acadion">
                        <div class="accordion">
                            <!-- toggle -->
                            <div class="toggle ttm-style-classic active">
                                <div class="toggle-title">
                                    <a data-toggle="collapse" data-parent="#accordion" href="#collapseOne">{{ trans('Frontend::home.pages.products.product_1.first_section.tab_1.title') }}</a>
                                </div>
                                <div class="toggle-content">
                                    <p> {{ trans('Frontend::home.pages.products.product_1.first_section.tab_1.desc') }}</p>
                                    <ul class="ttm-list ttm-list-style-icon style2 res-991-margin_top20">
                                        <li><i class="fa fa-dot-circle-o"></i><span class="ttm-list-li-content">{{ trans('Frontend::home.pages.products.product_1.first_section.tab_1.list_item_1') }}</span></li>
                                        <li><i class="fa fa-dot-circle-o"></i><span class="ttm-list-li-content">{{ trans('Frontend::home.pages.products.product_1.first_section.tab_1.list_item_2') }}</span></li>
                                        <li><i class="fa fa-dot-circle-o"></i><span class="ttm-list-li-content">{{ trans('Frontend::home.pages.products.product_1.first_section.tab_1.list_item_3') }}</span></li>
                                        <li><i class="fa fa-dot-circle-o"></i><span class="ttm-list-li-content">{{ trans('Frontend::home.pages.products.product_1.first_section.tab_1.list_item_4') }}</span></li>
                                    </ul>
                                    <div class="img-toggle">
                                        <img src="{{ asset('assets/frontend/images/Section-02.png') }}" alt="bg-image">
                                    </div>
                                </div>
                            </div>
                            <!-- toggle end -->
                            <!-- toggle -->
                            <div class="toggle ttm-style-classic">
                                <div class="toggle-title"><a data-toggle="collapse" data-parent="#accordion" href="#collapseTwo">{{ trans('Frontend::home.pages.products.product_1.first_section.tab_2.title') }}</a></div>
                                <div class="toggle-content">
                                    <p>{{ trans('Frontend::home.pages.products.product_1.first_section.tab_2.desc') }}</p>
                                    <ul class="ttm-list ttm-list-style-icon style2 res-991-margin_top20">
                                        <li><i class="fa fa-dot-circle-o"></i><span class="ttm-list-li-content">{{ trans('Frontend::home.pages.products.product_1.first_section.tab_2.list_item_1') }}</span></li>
                                        <li><i class="fa fa-dot-circle-o"></i><span class="ttm-list-li-content">{{ trans('Frontend::home.pages.products.product_1.first_section.tab_2.list_item_2') }}</span></li>
                                        <li><i class="fa fa-dot-circle-o"></i><span class="ttm-list-li-content">{{ trans('Frontend::home.pages.products.product_1.first_section.tab_2.list_item_3') }}</span></li>
                                        <li><i class="fa fa-dot-circle-o"></i><span class="ttm-list-li-content">{{ trans('Frontend::home.pages.products.product_1.first_section.tab_2.list_item_4') }}</span></li>
                                        <li><i class="fa fa-dot-circle-o"></i><span class="ttm-list-li-content">{{ trans('Frontend::home.pages.products.product_1.first_section.tab_2.list_item_5') }}</span></li>
                                    </ul>
                                    <div class="img-toggle">
                                        <img src="{{ asset('assets/frontend/images/Section-03.png') }}" alt="bg-image">
                                    </div>
                                </div>
                            </div>
                            <!-- toggle end -->
                            <!-- toggle -->
                            <div class="toggle ttm-style-classic">
                                <div class="toggle-title"><a data-toggle="collapse" data-parent="#accordion" href="#collapseThree">{{ trans('Frontend::home.pages.products.product_1.first_section.tab_3.title') }}</a></div>
                                <div class="toggle-content">
                                    <p>{{ trans('Frontend::home.pages.products.product_1.first_section.tab_3.desc') }}</p>
                                    <ul class="ttm-list ttm-list-style-icon style2 res-991-margin_top20">
                                        <li><i class="fa fa-dot-circle-o"></i><span class="ttm-list-li-content">{{ trans('Frontend::home.pages.products.product_1.first_section.tab_3.list_item_1') }}</span></li>
                                        <li><i class="fa fa-dot-circle-o"></i><span class="ttm-list-li-content">{{ trans('Frontend::home.pages.products.product_1.first_section.tab_3.list_item_2') }}</span></li>
                                    </ul>
                                    <div class="img-toggle">
                                        <img src="{{ asset('assets/frontend/images/Section-04.png') }}" alt="bg-image">
                                    </div>
                                </div>
                            </div>
                            <!-- toggle end -->
                            <!-- toggle -->
                            <div class="toggle ttm-style-classic lastToggle">
                                <div class="toggle-title">
                                    <a data-toggle="collapse" data-parent="#accordion" href="#collapseOne">{{ trans('Frontend::home.pages.products.product_1.first_section.tab_4.title') }}</a>
                                </div>
                                <div class="toggle-content">
                                    <p>{{ trans('Frontend::home.pages.products.product_1.first_section.tab_4.desc') }}</p>
                                    <ul class="ttm-list ttm-list-style-icon style2 res-991-margin_top20">
                                        <li><i class="fa fa-dot-circle-o"></i><span class="ttm-list-li-content">{{ trans('Frontend::home.pages.products.product_1.first_section.tab_4.list_item_1') }}</span></li>
                                        <li><i class="fa fa-dot-circle-o"></i><span class="ttm-list-li-content">{{ trans('Frontend::home.pages.products.product_1.first_section.tab_4.list_item_2') }}</span></li>
                                        <li><i class="fa fa-dot-circle-o"></i><span class="ttm-list-li-content">{{ trans('Frontend::home.pages.products.product_1.first_section.tab_4.list_item_3') }}</span></li>
                                        <li><i class="fa fa-dot-circle-o"></i><span class="ttm-list-li-content">{{ trans('Frontend::home.pages.products.product_1.first_section.tab_4.list_item_4') }}</span></li>
                                    </ul>
                                    <div class="img-toggle">
                                        <img src="{{ asset('assets/frontend/images/Section-01.png') }}" alt="bg-image">
                                    </div>
                                </div>
                            </div>
                            <!-- toggle end -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection