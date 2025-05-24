@extends('frontend.Layouts.master')
@section('title',trans('Frontend::home.pages.view_openings.title'))
@push('css')
    <style>
        .ttm-btn.ttm-btn-size-md{
            padding:10px 20px;
            margin-right: 10px;
        }
        html[dir="rtl"] .ttm-btn.ttm-btn-size-md{
            margin-left: 10px;
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
                        <h2 class="title">{{ trans('Frontend::home.pages.view_openings.title') }}</h2>
                    </div>
                    <div class="breadcrumb-wrapper">
                        <span>
                            <a title="Homepage" href="{{ URL::to('/') }}"><i class="fa fa-home"></i>{{ trans('Frontend::home.pages.home.title') }}</a>
                        </span>
                        <span>{{ trans('Frontend::home.pages.view_openings.title') }}</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- page-title end -->
@endsection

@section('content')
<section class="ttm-row services-section ttm-bgcolor-white clearfix">
    <div class="container">
        <!--row -->
        <div class="row">
            <div class="col-lg-6">
                <!-- section title -->
                <div class="section-title style2">
                    <div class="title-header">
                        <h3>{{ trans('Frontend::home.pages.view_openings.first_section.semi_title') }}</h3>
                        <h2 class="title">{{ trans('Frontend::home.pages.view_openings.first_section.title') }}</h2>
                    </div>
                </div>
                <!-- section title end -->
            </div>
            <div class="col-lg-6">
                <!-- section title -->
                <div class="section-title ">
                    <div class="title-header">
                        <h3 class="d-block">{{ trans('Frontend::home.pages.opening.search') }}</h3>
                        <form method="get" action="{{URL::current()}}">
                            <input type="text" class="form-control col-md-8 d-inline-block" name="search" value="{{Request::has('search') ? Request::get('search') : ''}}" placeholder="{{ trans('Frontend::home.pages.opening.searchPlaceholder') }}">
                            <button type="submit" class="float-left ttm-btn ttm-btn-size-md d-inline-block ttm-btn-shape-rounded ttm-btn-style-border ttm-icon-btn-right ttm-btn-color-grey text-dark">{{ trans('Frontend::home.pages.opening.search') }}</button>
                        </form>
                        <div class="clearfix"></div>
                    </div>
                </div>
                <!-- section title end -->
            </div>
        </div>
        <!-- row end -->
        <!--row -->
        <div class="row">
            @foreach($openings as $opening)
            @include('Frontend::Careers.partials.openingCard',['opening' => $opening])
            @endforeach
        </div>
        <!-- row end -->
        {!! $openings->links() !!}
    </div>
</section>
<!-- services-section end  -->
@endsection