@extends('frontend.Layouts.master')
@section('title',trans('Frontend::home.pages.careers.join_team'))

@section('page-header')
<!-- page-title -->
<div class="ttm-page-title-row ttm-bg ttm-bgimage-yes ttm-bgcolor-darkgrey clearfix">
    <div class="ttm-row-wrapper-bg-layer ttm-bg-layer"></div>
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-12">
                <div class="ttm-page-title-row-inner">
                    <div class="page-title-heading">
                        <h2 class="title">{{ trans('Frontend::home.pages.careers.join_team') }}</h2>
                    </div>
                    <div class="breadcrumb-wrapper">
                        <span>
                            <a title="Homepage" href="{{ URL::to('/') }}"><i class="fa fa-home"></i>{{ trans('Frontend::home.pages.home.title') }}</a>
                        </span>
                        <span>{{ trans('Frontend::home.pages.careers.join_team') }}</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- page-title end -->
@endsection

@section('content')
<!-- contact-us-section -->
<section class="ttm-row contact-us-section ttm-bgcolor-white res-991-padding_top0 clearfix">
    <div class="container">
        <div class="row no-gutters">
            <!-- row -->
            <div class="col-lg-6">
                <!-- col-img-img-two -->
                <div class="col-bg-img-nine ttm-col-bgimage-yes ttm-bg ttm-left-span">
                    <div class="ttm-col-wrapper-bg-layer ttm-bg-layer"></div>
                    <div class="layer-content"></div>
                </div>
                <div class="ttm-bgcolor-white col-bg-img-ten spacing-5 position-absolute z-index-2 border-rad_5 ">
                    <h4 class="fs-34 margin_bottom25 font-weight-bold">{{ trans('Frontend::home.pages.join_team.title') }}</h4>
                    <p>{{ trans('Frontend::home.pages.join_team.desc') }}</p>
                    <div class="featured-icon-box icon-align-before-content style12">
                        <div class="featured-icon">
                            <div class="ttm-icon ttm-icon_element-fill ttm-icon_element-style-square ttm-icon_element-color-skincolor ttm-icon_element-size-lg">
                                <i class="flaticon flaticon-phone-call-1"></i>
                            </div>
                        </div>
                        <div class="featured-content">
                            <div class="featured-title">
                                <h3>{{ trans('Frontend::home.call_us_on') }}:</h3>
                            </div>
                            <div class="featured-desc">
                                <a dir="ltr" href="tel:{{ str_replace('-','',config('modules.general_configs.phone')) }}">{{ config('modules.general_configs.phone') }}</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <!-- col-img-img-one -->
                <div class="col-bg-img-eleven ttm-col-bgimage-yes ttm-bg ttm-col-bgcolor-yes ttm-bgcolor-grey ttm-right-span spacing-6 z-index-0">
                    <div class="ttm-col-wrapper-bg-layer ttm-bg-layer">
                        <div class="ttm-bg-layer-inner"></div>
                    </div>
                    <div class="layer-content">
                        <div class="">
                            <!-- section title -->
                            <div class="section-title clearfix">
                                <div class="title-header">
                                    <h3>{{ trans('Frontend::home.pages.join_team.form.semi_title') }}</h3>
                                    <h2 class="title">{{ trans('Frontend::home.pages.join_team.form.title') }}</h2>
                                </div>
                            </div>
                            <!-- section title end -->
                            <form class="request_qoute_form wrap-form padding_top10 clearfix" method="post" novalidate="novalidate" enctype="multipart/form-data" action="{{ URL::current() }}">
                                @csrf
                                <div class="row">
                                    <div class="col-md-12">
                                        <span class="text-input"><input name="name" type="text" value="{{ old('name') }}" placeholder="{{ trans('Frontend::home.pages.join_team.form.name') }}" required="required"></span>
                                    </div>
                                    <div class="col-md-6">
                                        <span class="text-input"><input name="email" type="email" value="{{ old('email') }}" placeholder="{{ trans('Frontend::home.pages.join_team.form.email') }}" required="required"></span>
                                    </div>
                                    <div class="col-md-6">
                                        <span class="text-input"><input name="phone" type="tel" value="{{ old('phone') }}" placeholder="{{ trans('Frontend::home.pages.join_team.form.phone') }}" required="required"></span>
                                    </div>
                                    <div class="col-md-12">
                                        <span class="text-input"><input name="designation" type="text" value="{{ old('designation') }}" placeholder="{{ trans('Frontend::home.pages.join_team.form.designation') }}" required="required"></span>
                                    </div>
                        
                                    <div class="col-md-12">
                                        <label>{{ trans('Frontend::home.pages.join_team.form.upload_cv') }}</label>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="custom-file-upload">
                                            <label for="file-upload" class="custom-file-upload1">
                                                <i class="fa fa-cloud-upload"></i> {{ trans('Frontend::home.pages.join_team.form.custom_upload') }}
                                            </label>
                                            <input id="file-upload" type="file" name="file" />
                                        </div>
                                    </div>

                                    <div class="col-lg-12">
                                        <div class="padding_top15">
                                            <button class="submit ttm-btn ttm-btn-size-lg ttm-btn-shape-rounded ttm-btn-style-fill ttm-btn-color-skincolor w-100 rajdhani font-weight-600 " type="submit"> {{ trans('Frontend::home.pages.join_team.form.btn') }} <i class="flaticon flaticon-right-arrow margin_top5 margin_left10"></i></button>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <!-- col-img-img-one -->
            </div>
        </div>
    </div>
</section>
<!-- contact-us-section end -->
@endsection