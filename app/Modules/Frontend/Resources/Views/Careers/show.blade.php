@extends('frontend.Layouts.master')
@section('title',$opening->title)

@section('page-header')
<!-- page-title -->
<div class="ttm-page-title-row ttm-bg ttm-bgimage-yes ttm-bgcolor-darkgrey clearfix">
    <div class="ttm-row-wrapper-bg-layer ttm-bg-layer"></div>
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-12">
                <div class="ttm-page-title-row-inner">
                    <div class="page-title-heading">
                        <h2 class="title">{{ $opening->title }}</h2>
                    </div>
                    <div class="breadcrumb-wrapper">
                        <span>
                            <a title="Homepage" href="{{ URL::to('/') }}"><i class="fa fa-home"></i>{{ trans('Frontend::home.pages.home.title') }}</a>
                        </span>
                        <span>
                            <a href="{{ URL::to('/careers/openings') }}">{{ trans('Frontend::home.pages.view_openings.title') }}</a>
                        </span>
                        <span>{{ $opening->title }}</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- page-title end -->
@endsection

@section('content')
<div class="container job-table">
	<div class="row">
	 	<div class="col-lg-6 col-md-12">
	     	<div class="job-list">
	         	<h3>{{ trans('Frontend::home.pages.opening.job_details') }}</h3>
		        <table class="table">
		            <tbody>
		                <tr>
		                    <td class="t-subject">{{ trans('Frontend::home.pages.opening.location') }}</td>
		                    <td>{{ @$opening->job_details['location'][LANGUAGE_PREF] }}</td>
		                </tr>
		                <tr>
		                    <td class="t-subject">{{ trans('Frontend::home.pages.opening.qualifications') }}</td>
		                    <td>{{ @$opening->job_details['qualifications'][LANGUAGE_PREF] }}</td>
		                </tr>
		                <tr>
		                    <td class="t-subject">{{ trans('Frontend::home.pages.opening.career_level') }}</td>
		                    <td>{{ @$opening->job_details['career_level'][LANGUAGE_PREF] }}</td>
		                </tr>
		                <tr>
		                    <td class="t-subject">{{ trans('Frontend::home.pages.opening.salary') }}</td>
		                    <td>{{ @$opening->job_details['salary'][LANGUAGE_PREF] }}</td>
		                </tr>
		                <tr>
		                    <td class="t-subject">{{ trans('Frontend::home.pages.opening.nationality') }}</td>
		                    <td>{{ @$opening->job_details['nationality'][LANGUAGE_PREF] }}</td>
		                </tr>
		                <tr>
		                    <td class="t-subject">{{ trans('Frontend::home.pages.opening.language') }}</td>
		                    <td>{{ @$opening->job_details['language'][LANGUAGE_PREF] }}</td>
		                </tr>
		                <tr>
		                    <td class="t-subject">{{ trans('Frontend::home.pages.opening.job_status') }}</td>
		                    <td class="green">{{ trans('Frontend::home.pages.opening.job_status_'.@$opening->job_details['job_status']) }}</td>
		                </tr>
		            </tbody>
		        </table>
	     	</div>
	 	</div>
	 	<div class="col-lg-6 col-md-12">
	    	<div class="job-list">
		        <h3>{{ trans('Frontend::home.pages.opening.brief') }}</h3>
		        <div class="ttm-service-single-content-area padding_bottom25">
		            <div class="ttm-service-description">
		                <div class="padding_bottom25 justify">{!! $opening->brief !!}</div>
		                @php 
		                    $doc = new DOMDocument();
		                    $doc->loadHTML('<?xml encoding="UTF-8">' . $opening->description);
		                    $liList = $doc->getElementsByTagName('li');
		                    $liValues = [];
		                    foreach ($liList as $li) {
		                        $liValues[] = $li->nodeValue;
		                    }
		                @endphp
		                <h5>{{ trans('Frontend::home.pages.opening.responsibilities') }}:</h5>
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
		        <a class="ttm-btn ttm-btn-size-md ttm-btn-shape-rounded ttm-btn-style-fill ttm-btn-color-skincolor rajdhani font-weight-bold fs-18" href="{{ URL::current().'/cv' }}">{{ trans('Frontend::home.pages.view_openings.first_section.btn') }}</a>
	     	</div>
	 	</div>
	</div>
</div>
@endsection