@extends('frontend.Layouts.master')
@section('title',trans('Frontend::home.pages.products.product_3.title'))

@section('page-header')
<!-- page-title -->
<div class="ttm-page-title-row ttm-bg ttm-bgimage-yes ttm-bgcolor-darkgrey clearfix">
    <div class="ttm-row-wrapper-bg-layer ttm-bg-layer"></div>
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-12">
                <div class="ttm-page-title-row-inner">
                    <div class="page-title-heading">
                        <h2 class="title">{{ trans('Frontend::home.pages.products.product_3.title') }}</h2>
                    </div>
                    <div class="breadcrumb-wrapper">
                        <span>
                            <a title="Homepage" href="{{ URL::to('/') }}"><i class="fa fa-home"></i>{{ trans('Frontend::home.pages.home.title') }}</a>
                        </span>
                        <span>{{ trans('Frontend::home.pages.products.product_3.title') }}</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- page-title end -->
@endsection

@section('content')
<!--error-404 start-->
<section class="error-404">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <header class="page-header">
                    <h1 class="page-title">{{ trans('Frontend::home.pages.products.product_3.heading') }}</h1>
                </header>
                <a href="{{ URL::to('/') }}" class="ttm-btn ttm-btn-size-md  ttm-btn-shape-rounded ttm-btn-style-fill ttm-icon-btn-left ttm-btn-color-skincolor"><i class="flaticon flaticon-right-arrow fs-18"></i>{{ trans('Frontend::home.pages.products.product_3.btn') }}</a>
            </div>
        </div>
    </div>
</section>
@endsection