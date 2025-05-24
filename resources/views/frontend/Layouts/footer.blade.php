<!--footer start-->
<footer class="footer widget-footer ttm-bgcolor-darkgrey ttm-bg clearfix">
    <div class="ttm-row-wrapper-bg-layer ttm-bg-layer"></div>
    <div class="container">
        <div class="second-footer">
            <div class="row">
                <div class="widget-area col-xs-12 col-sm-6 col-md-6 col-lg-4">
                    <div class="widget widget_text  clearfix">
                        <div class="footer-logo">
                            <img id="logo-img-1" class="img-center standardlogo" src="{{ asset(config('modules.site_configs.app_white_logo')) }}" alt="logo-img">
                        </div>
                        <p>{{config('modules.site_configs.app_desc_'.LANGUAGE_PREF)}}</p>
                    </div>
                    <div class="widget d-flex padding_top15 res-575-margin_bottom20">
                        <h3 class="widget-title margin_right10">{{ trans('Frontend::home.social_share') }}:</h3>
                        <div class="social-icons">
                            <ul class="list-inline d-flex">
                                @foreach(config('modules.general_configs.socials') as $social)
                                    <li>
                                        <a class="tooltip-top" target="_blank" href="{{ $social['value'] }}" data-tooltip="{{ucfirst($social['key'])}}"><i class="{{$social['icon']}}"></i></a>
                                    </li>
                                @endforeach
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="widget-area col-xs-12 col-sm-6 col-md-6 col-lg-2">
                    <div class="widget widget_nav_menu clearfix">
                        <h3 class="widget-title">{{ trans('Frontend::home.sitemap') }}</h3>
                        <ul class="menu-footer-quick-links">
                            <li><a href="{{ URL::to('/') }}">{{ trans('Frontend::home.pages.home.title') }}</a></li>
                            <li><a href="{{ URL::to('/about') }}">{{ trans('Frontend::home.pages.about_us.title') }}</a></li>
                            <li><a href="{{ URL::to('/services') }}">{{ trans('Frontend::home.pages.services.title') }}</a></li>
                            <li><a href="{{ URL::to('/products') }}">{{ trans('Frontend::home.pages.products.title') }}</a></li>
                            <li><a href="{{ URL::to('/blogs') }}">{{ trans('Frontend::home.pages.blogs.title') }}</a></li>
                            <li><a href="{{ URL::to('/contactUs') }}">{{ trans('Frontend::home.pages.contact_us.title') }}</a></li>
                        </ul>
                    </div>
                </div>
                <div class="widget-area col-xs-12 col-sm-6 col-md-6 col-lg-3">
                    <div class="widget widget_nav_menu res-991-margin_top30 clearfix">
                        <h3 class="widget-title">{{ trans('Frontend::home.useful_links') }}</h3>
                        <ul class="menu-footer-quick-service-links">
                            @foreach($mainCategories as $category)
                            @if(count($category->children))
                            @foreach($category->children as $child)
                            <li><a href="{{ URL::to('/services',['id'=>$child->id]) }}">{{ $child->name }}</a></li>
                            @endforeach
                            @else
                            <li><a href="{{ URL::to('/services',['id'=>$category->id]) }}">{{ $category->name }}</a></li>
                            @endif
                            @endforeach
                        </ul>
                    </div>
                </div>
                <div class="widget-area col-xs-12 col-sm-6 col-md-6 col-lg-3">
                     <div class="featured-box float-right res-991-padding_top20 ">
                        <div class="featured-title">
                            <h3>{{ trans('Frontend::home.call_us_on') }}</h3>
                            <p><a href="tel:{{ str_replace('-','',config('modules.general_configs.phone')) }}">{{ config('modules.general_configs.phone') }}</a></p>
                        </div>
                        <div class="featured-icon">
                            <div class="ttm-icon ttm-icon_element-onlytxt ttm-icon_element-color-skincolor ttm-icon_element-size-lg">
                                <i class="flaticon  flaticon-phone-call-1"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="bottom-footer-text ">
            <div class="row copyright text-center">
                <div class="col-lg-12 col-md-12 col-sm-12 d-md-flex d-sm-block justify-content-center">
                    <span>{{ trans('Frontend::home.copyright') }} © {{ date('Y') }} <span class="company">{{config('modules.site_configs.app_name_'.LANGUAGE_PREF)}}</span>, {{ trans('Frontend::home.all_rights') }} <a href="https://www.tocaan.com/" target="_blank"> {{ trans('Frontend::home.tocaan') }}</a></span>
                    
                </div>
            </div>
        </div>
    </div>
</footer><!-- footer end-->

<!--back-to-top start-->
<a id="totop" href="#top">
    <i class="fa fa-angle-up"></i>
</a>
<!--back-to-top end-->
