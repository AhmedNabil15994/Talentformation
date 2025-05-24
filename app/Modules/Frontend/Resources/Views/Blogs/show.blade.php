@extends('frontend.Layouts.master')
@section('title',$blog->title)

@section('page-header')
<!-- page-title -->
<div class="ttm-page-title-row ttm-bg ttm-bgimage-yes ttm-bgcolor-darkgrey clearfix">
    <div class="ttm-row-wrapper-bg-layer ttm-bg-layer"></div>
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-12">
                <div class="ttm-page-title-row-inner">
                    <div class="page-title-heading">
                        <h2 class="title">{{ $blog->title }}</h2>
                    </div>
                    <div class="breadcrumb-wrapper">
                        <span>
                            <a title="Homepage" href="{{ URL::to('/') }}"><i class="fa fa-home"></i>{{ trans('Frontend::home.pages.home.title') }}</a>
                        </span>
                        <span>{{ trans('Frontend::home.pages.blogs.details_title') }}</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- page-title end -->
@endsection

@section('content')
<div class="ttm-row  ttm-bgcolor-grey overflow-hidden clearfix">
    <div class="container">
        <!-- row -->
        <div class="row justify-content-center">
            <div class="col-lg-9 content-area">
                <!-- post -->
                <article class="post ttm-blog-single clearfix">
                    <!-- post-featured-wrapper -->
                    <div class="ttm-post-featured-wrapper ttm-featured-wrapper">
                        <div class="ttm-post-featured">
                            <img class="img-fluid" src="{{ $blog->image_url }}" alt="blog-img" style="width:100%">
                            <div class="ttm-box-post-date">
                                <span class="ttm-entry-date">
                                    <time class="entry-date" datetime="2021-03-18T04:16:25+00:00">{{ date('d',strtotime($blog->date)) }}<span class="entry-month entry-year">{{ date('M',strtotime($blog->date)) }}</span></time>
                                </span>
                            </div>
                        </div>
                    </div>
                    <!-- post-featured-wrapper end -->
                    <!-- ttm-blog-single-content -->
                    <div class="ttm-blog-single-content">
                        <div class="ttm-post-entry-header">
                            <div class="post-meta">
                                <span class="ttm-meta-line"> <i class="ti ti-time"></i>{{ date('m/d/y',strtotime($blog->date)) }}</span>
                                <span class="ttm-meta-line tags-links"><i class="ti ti-eye"></i>{{ $blog->views }} Views</span>
                            </div>
                        </div>
                        <div class="entry-content">
                            <div class="ttm-box-desc-text">
                                <div class="margin_bottom20">
                                    {!! $blog->description !!}
                                </div>
                            </div>
                        </div>
                    </div>
                </article>
                <!-- ttm-blog-single-content end -->
            </div>
        </div>
        <!-- row end -->
    </div>
</div>
@endsection