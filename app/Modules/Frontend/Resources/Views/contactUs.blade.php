@extends('frontend.Layouts.master')
@section('title',trans('Frontend::home.pages.contact_us.title'))

@section('page-header')
<!-- page-title -->
<div class="ttm-page-title-row ttm-bg ttm-bgimage-yes ttm-bgcolor-darkgrey clearfix">
    <div class="ttm-row-wrapper-bg-layer ttm-bg-layer"></div>
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-12">
                <div class="ttm-page-title-row-inner">
                    <div class="page-title-heading">
                        <h2 class="title">{{ trans('Frontend::home.pages.contact_us.title') }}</h2>
                    </div>
                    <div class="breadcrumb-wrapper">
                        <span>
                            <a title="Homepage" href="{{ URL::to('/') }}"><i class="fa fa-home"></i>{{ trans('Frontend::home.pages.home.title') }}</a>
                        </span>
                        <span>{{ trans('Frontend::home.pages.contact_us.title') }}</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
 <!-- page-title end -->
@endsection

@section('content')
<!--- conatact-section -->
<section class="ttm-row conatact-section ttm-bgcolor-white clearfix">
    <div class="container">
        <!-- row -->
        <div class="row row-equal-height">
            <div class="col-xl-5">
                <section class="ttm-row form-section ttm-bgcolor-grey bg-img11 ttm-bg ttm-bgimage-yes clearfix">
                    <div class="container">
                        <!--row -->
                        <div class="row">
                            <div class="col-lg-12">
                                <!-- section title -->
                                <div class="section-title title-style-center_text">
                                    <div class="title-header">
                                        <h2 class="title">{{ trans('Frontend::home.pages.contact_us.got_questions') }}</h2>
                                    </div>
                                </div>
                                <!-- section title end -->
                            </div>
                        </div>
                        <!--row -->
                        <div class="row">
                            <div class="col-lg-12">
                                <form class="request_qoute_form wrap-form clearfix" method="post" novalidate="novalidate" action="{{ URL::current() }}">
                                    @csrf
                                    <div class="row">
                                        <div class="col-md-12">
                                            <span class="text-input"><input name="name" type="text" value="{{ old('name') }}" placeholder="{{ trans('Frontend::home.pages.contact_us.form.name') }}" required="required"></span>
                                        </div>
                                        <div class="col-md-12">
                                            <span class="text-input"><input name="phone" type="tel" value="{{ old('phone') }}" placeholder="{{ trans('Frontend::home.pages.contact_us.form.phone') }}" required="required"></span>
                                        </div>
                                        <div class="col-md-12">
                                            <span class="text-input"><input name="email" type="email" value="{{ old('email') }}" placeholder="{{ trans('Frontend::home.pages.contact_us.form.email') }}" required="required"></span>
                                        </div>
                                        <div class="col-md-12">
                                            <span class="text-input">
                                                <textarea name="message" placeholder="{{ trans('Frontend::home.pages.contact_us.form.message') }}" required cols="30" rows="10">{{ old('message') }}</textarea>
                                            </span>
                                        </div>
                                        <div class="col-lg-12">
                                            <div class="padding_top15 text-center">
                                                <button class="submit ttm-btn ttm-btn-size-md ttm-btn-shape-rounded ttm-btn-style-fill ttm-btn-color-skincolor" type="submit">{{ trans('Frontend::home.pages.contact_us.form.btn') }}</button>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                         </div>
                    </div>
                </section>
            </div>
            <div class="col-xl-7">
                <div class="padding_left30 res-1199-padding_left0 padding_top20 res-1199-padding_top40">
                    <!-- section title -->
                    <div class="section-title">
                        <div class="title-header">
                            <h3>{{ trans('Frontend::home.pages.contact_us.title') }}</h3>
                            <h2 class="title">{{ trans('Frontend::home.pages.contact_us.need_help') }}<br>{{ trans('Frontend::home.pages.contact_us.get_in_touch') }}</h2>
                        </div>
                    </div>
                    <!-- section title end -->

                    <div class="row">
                        <div class="col-lg-10 col-md-10 col-md-offset-2">
                            <!--featured-icon-box-->
                            <div class="featured-icon-box icon-align-before-content">
                                <div class="featured-icon">
                                    <div class="ttm-icon ttm-icon_element-border ttm-icon_element-color-skincolor
                                            ttm-icon_element-style-round ttm-icon_element-size-sm ">
                                        <i class="flaticon flaticon-phone-call ttm-textcolor-skincolor"></i>
                                    </div>
                                </div>
                                <div class="featured-content padding_left25 w-100">
                                    <div class="featured-title text-left">
                                        <h3 class="margin_bottom0">{{ trans('Frontend::home.call_us_on') }}: 
                                            <span><a style="color: inherit;" href="tel:{{ str_replace('-','',config('modules.general_configs.phone')) }}">{{ config('modules.general_configs.phone') }}</a></span>
                                        </h3>
                                    </div>
                                    <div class="featured-desc text-left">{{ trans('Frontend::home.office_time') }} : {{ config('modules.site_configs.work_days_desc_'.LANGUAGE_PREF) }}</div>
                                </div>
                            </div>
                            <!-- featured-icon-box end-->
                        </div>
                        <div class="col-lg-10 col-md-10 col-md-offset-2">
                            <!--featured-icon-box-->
                            <div class="featured-icon-box icon-align-before-content">
                                <div class="featured-icon">
                                    <div class="ttm-icon ttm-icon_element-border ttm-icon_element-color-skincolor
                                            ttm-icon_element-style-round ttm-icon_element-size-sm ">
                                        <i class="flaticon flaticon-email-1 ttm-textcolor-skincolor"></i>
                                    </div>
                                </div>
                                <div class="featured-content padding_left25 w-100">
                                    <div class="featured-title text-left">
                                        <h3 class="margin_bottom0">{{ trans('Frontend::home.email') }}:</h3>
                                    </div>
                                    <div class="featured-desc text-left"><a href="mailto:{{ config('modules.general_configs.email') }}">{{ config('modules.general_configs.email') }}</a></div>
                                </div>
                            </div>
                            <!-- featured-icon-box end-->
                        </div>
                        <div class="col-lg-10 col-md-10 col-md-offset-2">
                             <!--featured-icon-box-->
                            <div class="featured-icon-box icon-align-before-content">
                                 <div class="featured-icon">
                                     <div class="ttm-icon ttm-icon_element-border ttm-icon_element-color-skincolor
                                            ttm-icon_element-style-round ttm-icon_element-size-sm ">
                                         <i class="flaticon flaticon-location ttm-textcolor-skincolor"></i>
                                     </div>
                                 </div>
                                 <div class="featured-content padding_left25 w-100">
                                     <div class="featured-title text-left">
                                         <h3 class="margin_bottom0">{{ trans('Frontend::home.address') }}:</h3>
                                     </div>
                                     <div class="featured-desc text-left">{{ config('modules.general_configs.location') ? config('modules.general_configs.location')[LANGUAGE_PREF] : '' }}</div>
                                </div>
                            </div>
                            <!-- featured-icon-box end-->
                        </div>
                    </div>
                </div>
            </div>


            <div class="col-lg-12 mt-30 b-r">
                <iframe src = "https://maps.google.com/maps?q={{ config('modules.general_configs.latitude') }},{{ config('modules.general_configs.longitude') }}&hl=es;z=10&amp;output=embed"width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
        </div>
        <!-- row end -->
    </div>
</section>
 <!-- conatact-section end -->

<!-- cta-section -->
<section class="ttm-row cta-section ttm-bgcolor-skincolor clearfix">
    <div class="container">
        @include('Frontend::Partials.start_with_us')
    </div>
</section>
<!-- cta-section end -->

@endsection