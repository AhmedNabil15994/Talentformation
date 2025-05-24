<!-- favicon icon -->
<link rel="shortcut icon" href="{{asset(config('modules.site_configs.app_favicon'))}}">

<!-- Google Fonts -->
<link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Inter:wght@100;200;300;400;500;600;700;800;900&display=swap">
<link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap">
<link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Rajdhani:wght@300;400;500;600;700&family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap">
<link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Noto+Kufi+Arabic:wght@200;300;400;500;600;700;800;900&display=swap">

<!-- bootstrap -->
<link rel="stylesheet" type="text/css" href="{{ asset('assets/frontend/css/bootstrap.min.css') }}"/>
<!-- animate -->
<link rel="stylesheet" type="text/css" href="{{ asset('assets/frontend/css/animate.css') }}"/>
<!-- flaticon -->
<link rel="stylesheet" type="text/css" href="{{ asset('assets/frontend/css/flaticon.css') }}"/>
<!-- fontawesome -->
<link rel="stylesheet" type="text/css" href="{{ asset('assets/frontend/css/font-awesome.css') }}"/>
<!-- themify -->
<link rel="stylesheet" type="text/css" href="{{ asset('assets/frontend/css/themify-icons.css') }}"/>
<!-- slick -->
<link rel="stylesheet" type="text/css" href="{{ asset('assets/frontend/css/slick.css') }}">
<!-- prettyphoto -->
<link rel="stylesheet" type="text/css" href="{{ asset('assets/frontend/css/prettyPhoto.css') }}">
<!-- megamenu -->
<link rel="stylesheet" type="text/css" href="{{ asset('assets/frontend/css/megamenu.css') }}"/>
<!-- main -->
<link rel="stylesheet" type="text/css" href="{{ asset('assets/frontend/css/style-'.LANGUAGE_PREF.'.css') }}"/>
<!-- responsive -->
<link rel="stylesheet" type="text/css" href="{{ asset('assets/frontend/css/responsive-'.LANGUAGE_PREF.'.css') }}"/>
<!-- toastr -->
<link href="{{ asset('assets/dashboard/css/toastr.min.css') }}" rel="stylesheet" type="text/css">
<!-- third party css -->
<style>
	nav[role="navigation"] .flex-1{
		display: none !important;
	}
	nav[role="navigation"] svg{
		width: 50px;
		height: 50px;
	}
</style>
@stack('css')
<!-- third party css end -->