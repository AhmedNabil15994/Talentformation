{{-- Extends layout --}}
@extends('dashboard.Layouts.crud.edit')

@php $editName = $model->id; @endphp

@section('crud-tabs')
    @include('Testimonial::Partials.tabs.tabs')
@endsection

@section('crud-data')
    <div class="tab-pane fade active show" id="generalData" role="tabpanel">
        @include('Testimonial::Partials.tabs.general-data')
    </div>
@endsection

@section('extra-content')

@endsection

@push('js')
<script src="{{asset('assets/dashboard/components/testimonials.js')}}"></script>
@endpush
