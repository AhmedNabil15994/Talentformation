@extends('frontend.Layouts.master')
@section('title','Talent Acquisition')

@section('page-header')
<!-- page-title -->
<div class="ttm-page-title-row ttm-bg ttm-bgimage-yes ttm-bgcolor-darkgrey clearfix">
    <div class="ttm-row-wrapper-bg-layer ttm-bg-layer"></div>
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-12">
                <div class="ttm-page-title-row-inner">
                    <div class="page-title-heading">
                        <h2 class="title">{{ $category->name }}</h2>
                    </div>
                    <div class="breadcrumb-wrapper">
                        <span>
                            <a title="Homepage" href="{{ URL::to('/') }}"><i class="fa fa-home"></i>{{ trans('Frontend::home.pages.home.title') }}</a>
                        </span>
                        <span>{{ $category->name }}</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- page-title end -->
@endsection

@section('content')
<div class="ttm-row sidebar ttm-sidebar-left  ttm-bgcolor-grey clearfix">
    <div class="container">
        <!-- row -->
        <div class="row">
            <div class="col-lg-4 widget-area sidebar-left">
                <aside class="widget widget-nav-menu">
                    <ul>
                        @foreach($mainCategories as $oneCategory)
                        @if(count($oneCategory->children))
                        @foreach($oneCategory->children as $child)
                        <li class="{{ $child->id == $category->id ? 'active' : '' }}"><a href="{{ URL::to('/services',['id'=>$child->id]) }}">{{ $child->name }}</a></li>
                        @endforeach
                        @else
                        <li class="{{ $oneCategory->id == $category->id ? 'active' : '' }}"><a href="{{ URL::to('/services',['id'=>$oneCategory->id]) }}">{{ $oneCategory->name }}</a></li>
                        @endif
                        @endforeach
                    </ul>
                </aside>
                <aside class="widget widget-download with-title">
                    <h3 class="widget-title">{{ trans('Frontend::home.pages.services.download') }}</h3>
                    <ul class="download">
                        <li>
                            <i class="fa fa-file-pdf-o"></i>
                            <a href="{{ asset(config('modules.site_configs.company_profile')) }}" target="_blank">{{ trans('Frontend::home.pages.services.company_profile') }}</a>
                        </li>
                    </ul>
                </aside>
            </div>
            <div class="col-lg-8 content-area">
                @foreach($services as $service)
                @php 
                    $doc = new DOMDocument();
                    $doc->loadHTML('<?xml encoding="UTF-8">' . $service->description);
                    $liList = $doc->getElementsByTagName('li');
                    $liValues = [];
                    foreach ($liList as $li) {
                        $liValues[] = $li->nodeValue;
                    }
                    $service->increaseViews();
                @endphp
                <div class="ttm-service-single-content-area">
                     <div class="ttm-service-description">
                        <h3>{{ $service->title }}</h3>
                        <div class="padding_top10 padding_bottom20">
                            <div class="ttm_fatured_image-wrapper">
                                <img class="img-fluid" style="width: 100%" src="{{ $service->image_url }}" alt="services-1">
                            </div>
                        </div>
                        <div class="padding_bottom25">{{ strip_tags($service->description) }}</div>
                        <div class="row">
                            <div class="col-md-12">
                                <ul class="ttm-list ttm-list-style-icon ttm-list-icon-color-skincolor margin_top15">
                                    @foreach($liValues as $item)
                                    <li>
                                        <i class="fa fa-dot-circle-o"></i>
                                        <div class="ttm-list-li-content">{{ $item }}</div>
                                    </li>
                                    @endforeach
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
        <!-- row end -->
    </div>
</div>
@endsection