{{-- Extends layout --}}
@extends('dashboard.Layouts.crud.edit')

@php $editName = $model->id; @endphp

@section('crud-tabs')
    @include('Client::Partials.tabs.tabs')
@endsection

@section('crud-data')
    <div class="tab-pane fade active show" id="generalData" role="tabpanel">
        @include('Client::Partials.tabs.general-data')
    </div>
@endsection

@section('extra-content')

@endsection

@push('js')
<script src="{{asset('assets/dashboard/components/clients.js')}}"></script>
@endpush
