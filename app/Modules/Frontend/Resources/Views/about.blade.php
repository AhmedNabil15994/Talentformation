@extends('frontend.Layouts.master')
@section('title',trans('Frontend::home.pages.about_us.title'))

@section('page-header')
<!-- page-title -->
<div class="ttm-page-title-row ttm-bg ttm-bgimage-yes ttm-bgcolor-darkgrey clearfix">
    <div class="ttm-row-wrapper-bg-layer ttm-bg-layer"></div>
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-12">
                <div class="ttm-page-title-row-inner">
                    <div class="page-title-heading">
                        <h2 class="title">{{ trans('Frontend::home.pages.about_us.title') }}</h2>
                    </div>
                    <div class="breadcrumb-wrapper">
                        <span>
                            <a title="Homepage" href="{{ URL::to('/') }}"><i class="fa fa-home"></i>{{ trans('Frontend::home.pages.home.title') }}</a>
                        </span>
                        <span>{{ trans('Frontend::home.pages.about_us.title') }}</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- page-title end -->

@endsection

@section('content')
@if($sections && $sections[0])
<!-- About-section -->
<section class="ttm-row skill-section ttm-bgcolor-white clearfix">
    <div class="container">
        <div class="row">
            <!-- row -->
            <div class="col-lg-5 col-md-12 col-sm-12">
                <img src="{{ $sections[0]->image_url }}" alt="bg-image">
            </div>
            <div class="col-lg-7 col-md-12 col-sm-12 ">
                <div class="padding_left30 res-1024-padding_lr15 res-1024-padding_top40 padding_top20">
                    <!-- section title -->
                    <div class="section-title clearfix">
                        <div class="title-header">
                            <h3>{{ trans('Frontend::home.pages.home.fourth_section.title') }}</h3>
                            <h2 class="title res-1024-br-none">{{$sections[0]->title }}</h2>
                        </div>
                        <div class="title-desc padding_right40">
                            {!! $sections[0]->description !!}
                        </div>
                    </div>
                    <!-- section title end -->
                </div>
            </div>
        </div>
    </div>
</section>
<!-- About-section end -->
@endif

@include('Frontend::Partials.specailists')
@include('Frontend::Partials.statistics')


<!-- cta-section -->
<section class="ttm-row cta-section ttm-bgcolor-skincolor clearfix">
    <div class="container">
        @include('Frontend::Partials.start_with_us')
    </div>
</section>
<!-- cta-section end -->
@endsection