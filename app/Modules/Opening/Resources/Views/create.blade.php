{{-- Extends layout --}}
@extends('dashboard.Layouts.crud.create')

@section('crud-tabs')
    @include('Opening::Partials.tabs.tabs')
@endsection

@section('crud-data')
    <div class="tab-pane fade active show" id="generalData" role="tabpanel">
        @include('Opening::Partials.tabs.general-data')
    </div>
    <div class="tab-pane fade" id="jobDetailsData" role="tabpanel">
        @include('Opening::Partials.tabs.job-details-data')
    </div>
@endsection

@section('extra-content')

@endsection

@push('js')
<script src="{{asset('assets/dashboard/components/openings.js')}}"></script>
@endpush