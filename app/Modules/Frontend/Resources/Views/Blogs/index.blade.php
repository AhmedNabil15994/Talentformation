@extends('frontend.Layouts.master')
@section('title',trans('Frontend::home.pages.blogs.our_news'))

@section('page-header')
<!-- page-title -->
<div class="ttm-page-title-row ttm-bg ttm-bgimage-yes ttm-bgcolor-darkgrey clearfix">
    <div class="ttm-row-wrapper-bg-layer ttm-bg-layer"></div>
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-12">
                <div class="ttm-page-title-row-inner">
                    <div class="page-title-heading">
                        <h2 class="title">{{ trans('Frontend::home.pages.blogs.our_news') }}</h2>
                    </div>
                    <div class="breadcrumb-wrapper">
                        <span>
                            <a title="Homepage" href="{{ URL::to('/') }}"><i class="fa fa-home"></i>{{ trans('Frontend::home.pages.home.title') }}</a>
                        </span>
                        <span>{{ trans('Frontend::home.pages.blogs.our_news') }}</span>
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
        <div class="row">
            <div class=" content-area">
                <div class="row">
                    @foreach($blogs as $blog)
                    @include('Frontend::Blogs.partials.blogCard',['blog'=>$blog])
                    @endforeach  
                </div>
                {!! $blogs->links() !!}
            </div>
        </div>
        <!-- row end -->
    </div>
</div>
@endsection