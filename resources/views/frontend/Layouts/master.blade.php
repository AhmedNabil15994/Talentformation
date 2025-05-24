<!DOCTYPE html>
<html lang="{{ LANGUAGE_PREF }}" dir="{{ DIRECTION }}">
	<head>
		<meta charset="utf-8" />
		<title>{{config('modules.site_configs.app_name_'.LANGUAGE_PREF)}} | @yield('title')</title>
		<meta name="description" content="#" />
		<meta name="csrf-token" content="{{ csrf_token() }}">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
		@yield('extra-metas')
		@include('frontend.Layouts.head')
	</head>
	<!--end::Head-->
	
	<body>
		
		<!--page start-->
	    <div class="page">
	        <!-- preloader start -->
{{--	        <div id="preloader" class="blobs-wrapper">--}}
{{--	            <div class="ttm-bgcolor-skincolor loader"></div>--}}
{{--	        </div>--}}
	        <!-- preloader end --> 

			@include('frontend.Layouts.header')
	        
	        @yield('page-header')

			<div class="site-main">
		    	@yield('content')
		    </div>

			@include('frontend.Layouts.footer')
		</div>
			@include('frontend.Layouts.scripts')
	        @include('frontend.Partials.notf_messages')
	</body>
	<!--end::Body-->
</html>