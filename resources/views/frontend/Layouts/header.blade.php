<!--header start-->
<header id="masthead" class="header ttm-header-style-01">
    <!-- ttm-topbar-wrapper -->
    <div class="top_bar ttm-bgcolor-darkgrey clearfix">
        <div class="container">
            <div class="row">
                <div class="col-md-12 d-flex flex-row align-items-center justify-content-center">
                    <div class="top_bar_contact_item pl-0">
                        <div class="top_bar_icon">
                            <i class=" fa fa-calendar-check-o"></i>
                        </div>
                        {{ config('modules.site_configs.work_days_desc_'.LANGUAGE_PREF) }}
                    </div>
                    <div class="top_bar_contact_item ml-auto font-weight-bold padding_left15">
                        <div class="top_bar_icon"><i class="fa fa-phone"></i>
                        </div> {{ trans('Frontend::home.phone') }}:<span class="font-weight-500 text-white"> <a href="tel:{{ str_replace('-','',config('modules.general_configs.phone')) }}">{{ config('modules.general_configs.phone') }}</a></span>
                    </div>
                    <div class="top_bar_contact_item font-weight-bold ">
                        <div class="top_bar_icon ttm-highlight-right"><i class="ti ti-email"></i></div>{{ trans('Frontend::home.email') }}: <a href="mailto:{{ config('modules.general_configs.email') }}" class="font-weight-500 text-white"> {{ config('modules.general_configs.email') }}</a>
                    </div>
                </div>
            </div>
        </div>
    </div><!-- ttm-topbar end -->
    <!-- ttm-topbar-wrapper -->
    <div class="lang_bar ttm-bgcolor-darkgrey clearfix mobile">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="top_bar_contact_item pl-0">
                        @php
                            $next = 'en';
                            if(\Session::has('locale') && \Session::get('locale') == 'en'){
                                $next = 'ar';
                            }
                        @endphp
                        <a class="ttm-btn btn-inline ttm-btn-color-skincolor lang color-fff" href="{{URL::to('/changeLang?lang='.$next)}}"> {{trans('Frontend::home.locale_'.$next)}}<i class="fa fa-language"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div><!-- ttm-topbar end -->

    <!-- site-header-menu -->
    <div id="site-header-menu" class="site-header-menu">
        <div class="site-header-menu-inner ttm-stickable-header ">
            <div class="container">
                <div class="row">
                    <div class="col">
                        <!--site-navigation -->
                        <div class="site-navigation d-flex flex-row align-items-center">
                            <!-- site-branding -->
                            <div class="site-branding mr-auto">
                                <a class="home-link" href="{{ URL::to('/') }}" title="Invess" rel="home">
                                    <img id="logo-img" class="img-center standardlogo" src="{{ asset(config('modules.site_configs.app_dark_logo')) }}" alt="logo-img">
                                </a>
                            </div><!-- site-branding end -->
                            <div class="btn-show-menu-mobile menubar menubar--squeeze">
                                <span class="menubar-box">
                                    <span class="menubar-inner"></span>
                                </span>
                            </div>
                            <!-- menu -->
                            <nav class="main-menu menu-mobile" id="menu">
                                <ul class="menu">
                                    <li class="mega-menu-item"><a href="{{ URL::to('/') }}" class="mega-menu-link">{{ trans('Frontend::home.pages.home.title') }}</a></li>
                                    <li class="mega-menu-item"><a href="{{ URL::to('/about') }}" class="mega-menu-link">{{ trans('Frontend::home.pages.about_us.title') }}</a></li>
                                    <li class="mega-menu-item"><a href="#" class="mega-menu-link">{{ trans('Frontend::home.pages.services.title') }}</a>
                                        <ul class="mega-submenu">
                                            @foreach($mainCategories as $category)
                                            @if(count($category->children))
                                            <li class="mega-menu-item "><a href="#" class="mega-menu-link">{{ $category->name }} </a>
                                                <ul class="mega-submenu">
                                                    @foreach($category->children as $child)
                                                    <li><a href="{{ URL::to('/services',['id'=>$child->id]) }}">{{ $child->name }}</a></li>
                                                    @endforeach
                                                </ul>
                                            </li>
                                            @else
                                            <li><a href="{{ URL::to('/services',['id'=>$category->id]) }}">{{ $category->name }}</a></li>
                                            @endif
                                            @endforeach
                                        </ul>
                                    </li>
                                    <li class="mega-menu-item "><a href="{{ URL::to('/products') }}" class="mega-menu-link">{{ trans('Frontend::home.pages.products.title') }}</a></li>
                                    <li class="mega-menu-item"><a href="#" class="mega-menu-link">{{ trans('Frontend::home.pages.careers.title') }}</a>
                                        <ul class="mega-submenu">
                                            <li><a href="{{ URL::to('/careers/openings') }}">{{ trans('Frontend::home.pages.careers.view_openings') }}</a></li>
                                            {{-- <li><a href="{{ URL::to('/careers/cv') }}">{{ trans('Frontend::home.pages.careers.submit_cv') }}</a></li> --}}
                                            <li><a href="{{ URL::to('/careers/our_team') }}">{{ trans('Frontend::home.pages.careers.join_team') }}</a></li>
                                        </ul>
                                    </li>
                                    <li class="mega-menu-item"><a href="{{ URL::to('/contactUs') }}" class="mega-menu-link">{{ trans('Frontend::home.pages.contact_us.title') }}</a>
                                    </li>
                                </ul>
                            </nav>
                            <div class="header_extra ttm-textcolor-white d-flex flex-row align-items-center justify-content-end">
                                <div class="header_btn ttm-textcolor-skincolor">
                                    <a class="ttm-btn btn-inline ttm-btn-color-skincolor lang" href="{{URL::to('/changeLang?lang='.$next)}}"> {{trans('Frontend::home.locale_'.$next)}}<i class="fa fa-language"></i></a>
                                </div>
                            </div>
                        </div><!-- site-navigation end-->
                    </div>
                </div>
            </div>
        </div>
    </div><!-- site-header-menu end-->
</header>