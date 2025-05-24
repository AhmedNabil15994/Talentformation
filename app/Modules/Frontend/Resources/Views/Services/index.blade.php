@extends('frontend.Layouts.master')
@push('css')
    <style>
        .sortClass{
            display: inline-block;
            /*width: 48%;*/
            width: 100%;
            margin: 1%;
            float: left;
        }
        .clearfix{
            clear: both;
        }
    </style>
@endpush
@section('title',trans('Frontend::home.pages.services.our_services'))

@section('page-header')
<!-- page-title -->
<div class="ttm-page-title-row ttm-bg ttm-bgimage-yes ttm-bgcolor-darkgrey clearfix">
    <div class="ttm-row-wrapper-bg-layer ttm-bg-layer"></div>
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-12">
                 <div class="ttm-page-title-row-inner">
                    <div class="page-title-heading">
                        <h2 class="title">{{ trans('Frontend::home.pages.services.our_services') }}</h2>
                    </div>
                    <div class="breadcrumb-wrapper">
                        <span>
                            <a title="Homepage" href="{{ URL::to('/') }}"><i class="fa fa-home"></i>{{ trans('Frontend::home.pages.home.title') }}</a>
                        </span>
                        <span>{{ trans('Frontend::home.pages.services.our_services') }}</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- page-title end -->
@endsection

@section('content')
<!-- services-section -->
<section class="ttm-row services-section ttm-bgcolor-white clearfix">
    <div class="container">
    <!--row -->
    <div class="row">
        <div class="col-lg-6">
            <!-- section title -->
            <div class="section-title style2">
                <div class="title-header">
                    <h3>{{ trans('Frontend::home.pages.services.what_we_do') }}</h3>
                    <h2 class="title">{{ trans('Frontend::home.pages.services.why_talent') }}</h2>
                </div>
            </div>
            <!-- section title end -->
        </div>
        <div class="col-lg-6">
            <div class="section-title">
                <div class="title-header float-left" style="width: 200px">
                    <h3>{{ trans('Frontend::home.pages.services.sort') }}</h3>
{{--                    <select name="sortBy" class="form-control sortClass">--}}
{{--                        <option value="title" {{Request::has('sortBy') && Request::get('sortBy') == 'title' ? 'selected' : ''}}>{{ trans('Frontend::home.pages.services.name') }}</option>--}}
{{--                        <option value="views" {{Request::has('sortBy') && Request::get('sortBy') == 'views' ? 'selected' : ''}}>{{ trans('Frontend::home.pages.services.views') }}</option>--}}
{{--                        <option value="created_at" {{Request::has('sortBy') && Request::get('sortBy') == 'created_at' ? 'selected' : ''}}>{{ trans('Frontend::home.pages.services.date') }}</option>--}}
{{--                    </select>--}}
                    <select name="sort" class="form-control sortClass">
                        <option value="asc" {{Request::has('sort') && Request::get('sort') == 'asc' ? 'selected' : ''}}>{{ trans('Frontend::home.pages.services.asc') }}</option>
                        <option value="desc" {{Request::has('sort') && Request::get('sort') == 'desc' ? 'selected' : ''}}>{{ trans('Frontend::home.pages.services.desc') }}</option>
                    </select>
                    <div class="clearfix"></div>
                </div>
            </div>
        </div>
     </div>
     <!-- row end -->

    <div class="row">
        @foreach($services as $service)
        @include('Frontend::Services.partials.serviceCard',['service'=>$service])
        @endforeach
    </div>
    {!! $services->links() !!}
    <!-- row end -->
    </div>
</section>
<!-- services-section end  -->
@endsection

@push('js')
    <script>
        $(function(){
           $('select[name="sort"]').on('change',function (){
                let sortVal = $(this).val();
                let baseURL = "{{URL::to('/services')}}";
                window.location.href = baseURL +  '?sort=' + sortVal
           }) ;
        });
    </script>
@endpush