{{-- Extends layout --}}
@extends('dashboard.Layouts.crud.create')
@php $moduleTitle = trans('JoinTeam::joinTeam.title'); @endphp
@section('crud-tabs')
    @include('JoinTeam::Partials.tabs.tabs')
@endsection

@section('crud-data')
    <div class="tab-pane fade active show" id="generalData" role="tabpanel">
        @include('JoinTeam::Partials.tabs.general-data')
    </div>
@endsection

@section('extra-content')

@endsection

@push('js')
<script src="{{asset('assets/dashboard/components/joinTeams.js')}}"></script>
@endpush