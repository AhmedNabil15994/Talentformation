@extends('frontend.Layouts.master')
@section('title',trans('Frontend::home.pages.careers.submit_cv'))
@push('css')
    <style>
        .clearfix{
            clear: both;
        }
        .btn-primary{
            margin-bottom: 5px;
        }
        .wrap-form.request_qoute_form label{
            margin-left: 5px;
            margin-top: 5px;
        }
    </style>
    <link rel="stylesheet" href="https://unpkg.com/bootstrap-datepicker@1.9.0/dist/css/bootstrap-datepicker3.min.css">
@endpush
@section('page-header')
<!-- page-title -->
<div class="ttm-page-title-row ttm-bg ttm-bgimage-yes ttm-bgcolor-darkgrey clearfix">
    <div class="ttm-row-wrapper-bg-layer ttm-bg-layer"></div>
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-12">
                <div class="ttm-page-title-row-inner">
                    <div class="page-title-heading">
                        <h2 class="title">{{ trans('Frontend::home.pages.careers.submit_cv') }}</h2>
                    </div>
                    <div class="breadcrumb-wrapper">
                        <span>
                            <a title="Homepage" href="{{ URL::to('/') }}"><i class="fa fa-home"></i>{{ trans('Frontend::home.pages.home.title') }}</a>
                        </span>
                        <span>{{ trans('Frontend::home.pages.careers.submit_cv') }}</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- page-title end -->
@endsection

@section('content')
<!-- contact-us-section -->
<section class="ttm-row contact-us-section ttm-bgcolor-white res-991-padding_top0 clearfix">
    <div class="container">
        <div class="row no-gutters">
            <!-- row -->
            <div class="col-lg-6">
                <!-- col-img-img-two -->
                <div class="col-bg-img-nine ttm-col-bgimage-yes ttm-bg ttm-left-span">
                    <div class="ttm-col-wrapper-bg-layer ttm-bg-layer"></div>
                    <div class="layer-content"></div>
                </div>
                <div class="ttm-bgcolor-white col-bg-img-ten spacing-5 position-absolute z-index-2 border-rad_5 ">
                    <h4 class="fs-34 margin_bottom25 font-weight-bold">{{ trans('Frontend::home.pages.submit_cv.title') }}</h4>
                    <p>{{ trans('Frontend::home.pages.submit_cv.desc') }}</p>
                    <div class="featured-icon-box icon-align-before-content style12">
                        <div class="featured-icon">
                            <div class="ttm-icon ttm-icon_element-fill ttm-icon_element-style-square ttm-icon_element-color-skincolor ttm-icon_element-size-lg">
                                <i class="flaticon flaticon-phone-call-1"></i>
                            </div>
                        </div>
                        <div class="featured-content">
                            <div class="featured-title">
                                <h3>{{ trans('Frontend::home.call_us_on') }}:</h3>
                            </div>
                            <div class="featured-desc">
                                <a dir="ltr" href="tel:{{ str_replace('-','',config('modules.general_configs.phone')) }}">{{ config('modules.general_configs.phone') }}</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <!-- col-img-img-one -->
                <div class="col-bg-img-eleven ttm-col-bgimage-yes ttm-bg ttm-col-bgcolor-yes ttm-bgcolor-grey ttm-right-span spacing-6 z-index-0">
                    <div class="ttm-col-wrapper-bg-layer ttm-bg-layer">
                        <div class="ttm-bg-layer-inner"></div>
                    </div>
                    <div class="layer-content">
                        <div class="">
                            <!-- section title -->
                            <div class="section-title clearfix">
                                <div class="title-header">
                                    <h3>{{ trans('Frontend::home.pages.submit_cv.form.semi_title') }}</h3>
                                    <h2 class="title">{{ trans('Frontend::home.pages.submit_cv.form.title') }}</h2>
                                </div>
                            </div>
                            <!-- section title end -->
                            <form class="request_qoute_form wrap-form padding_top10 clearfix" method="post" novalidate="novalidate" action="{{ URL::current() }}" enctype="multipart/form-data">
                                @csrf
                                <div class="row">
                                    <div class="col-md-6">
                                        <span class="text-input">
                                            <input name="first_name" type="text" value="{{ old('first_name') }}" placeholder="{{ trans('Frontend::home.pages.submit_cv.form.first_name') }}" required="required">
                                        </span>
                                    </div>
                                    <div class="col-md-6">
                                        <span class="text-input">
                                            <input name="last_name" type="text" value="{{ old('last_name') }}" placeholder="{{ trans('Frontend::home.pages.submit_cv.form.last_name') }}" required="required">
                                        </span>
                                    </div>
                                    <div class="col-md-6">
                                        <span class="text-input">
                                            <input name="email" type="email" value="{{ old('email') }}" placeholder="{{ trans('Frontend::home.pages.submit_cv.form.email') }}" required="required">
                                        </span>
                                    </div>
                                    <div class="col-md-6">
                                        <span class="text-input">
                                            <input name="phone" type="tel" value="{{ old('phone') }}" placeholder="{{ trans('Frontend::home.pages.submit_cv.form.phone') }}" required="required">
                                        </span>
                                    </div>
                                    <div class="col-md-12">
                                        <label>{{ trans('Frontend::home.pages.submit_cv.form.experience') }}</label>
                                        <button type="button" class="btn newExp btn-icon btn-primary float-left"><i class="fa fa-plus"></i></button>
                                        <div class="clearfix"></div>
                                    </div>
                                    <div class="exps w-100">
                                        <div class="exp w-100 row m-0">
                                            <div class="col-md-12">
                                            <span class="text-input">
                                                <input name="designation[]" type="text" value="" placeholder="{{ trans('Frontend::home.pages.submit_cv.form.designation') }}" required="required">
                                            </span>
                                            </div>
                                            <div class="col-md-12">
                                            <span class="text-input">
                                                <input name="company_name[]" type="text" value="" placeholder="{{ trans('Frontend::home.pages.submit_cv.form.company_name') }}" required="required">
                                            </span>
                                            </div>
                                            <div class="col-md-6">
                                            <span class="text-input">
                                                <input name="work_from[]" data-provide="datepicker" type="text" value="" placeholder="{{ trans('Frontend::home.pages.submit_cv.form.from') }}" required="required">
                                            </span>
                                            </div>
                                            <div class="col-md-6">
                                            <span class="text-input">
                                                <input name="work_to[]" data-provide="datepicker" type="text" value="" placeholder="{{ trans('Frontend::home.pages.submit_cv.form.to') }}" required="required">
                                            </span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <label>{{ trans('Frontend::home.pages.submit_cv.form.salary') }}</label>
                                    </div>
                                    <div class="col-md-6">
                                        <span class="text-input">
                                            <input name="current_salary" type="text" value="{{ old('current_salary') }}" placeholder="{{ trans('Frontend::home.pages.submit_cv.form.current') }}">
                                        </span>
                                    </div>
                                    <div class="col-md-6">
                                        <span class="text-input">
                                            <input name="expected_salary" type="text" value="{{ old('expected_salary') }}" placeholder="{{ trans('Frontend::home.pages.submit_cv.form.expected') }}">
                                        </span>
                                    </div>
                                    <div class="col-md-12">
                                        <label>{{ trans('Frontend::home.pages.submit_cv.form.upload_cv') }}</label>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="custom-file-upload">
                                            <label for="file-upload" class="custom-file-upload1">
                                                <i class="fa fa-cloud-upload"></i> {{ trans('Frontend::home.pages.submit_cv.form.custom_upload') }}
                                            </label>
                                            <input id="file-upload" type="file" name="file" />
                                        </div>
                                    </div>
                                    <div class="col-lg-12">
                                        <div class="padding_top15">
                                            <button class="submit ttm-btn ttm-btn-size-lg ttm-btn-shape-rounded ttm-btn-style-fill ttm-btn-color-skincolor w-100 rajdhani font-weight-600 " type="submit"> {{ trans('Frontend::home.pages.submit_cv.form.btn') }} <i class="flaticon flaticon-right-arrow margin_top5 margin_left10"></i></button>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <!-- col-img-img-one -->
            </div>
        </div>
    </div>
</section>
<!-- contact-us-section end -->
@endsection

@push('js')
    <script src="https://unpkg.com/bootstrap-datepicker@1.9.0/dist/js/bootstrap-datepicker.min.js"></script>
    <script>
        $(function(){
            function initDataPickers(){
                $('[data-provide="datepicker"]').datepicker({
                    format: 'mm/yyyy',
                    viewMode: "months",
                    minViewMode: "months",
                });
            }
            initDataPickers();

            $('.newExp').on('click',function (){
                let x = 
                    ' <div class="exp w-100 row m-0" style="padding-top: 65px;position:relative;">' +
                        '<button type="button" class="btn delExp btn-icon btn-danger float-left mb-2" style="position:absolute; top: 15px; left: 15px"><i class="fa fa-trash"></i></button>'+
                        '<div class="clearfix"></div>'+
                        $('.exp').clone().html() +

                    '</div>';
                $('.exps').append(x);

                initDataPickers();
            });

            $(document).on('click','.delExp',function(){
                $(this).parent('.exp').remove();
            })
        });
    </script>
@endpush