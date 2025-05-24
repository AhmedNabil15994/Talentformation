@extends('dashboard.Layouts.master')
@section('title',trans('Dashboard::dashboard.dashboard'))
@section('pageName',trans('Dashboard::dashboard.dashboard'))

@section('breadcrumbs')
@include('dashboard.Layouts.breadcrumb',[
    'breadcrumbs' => [
        [
            'title' => trans('Dashboard::dashboard.menu'),
            'url' => \URL::to('/dashboard')
        ],
    ],
])
@endsection

@section('content')
<div class="row">
	<div class="col-xl-3">
		<div class="card card-custom bgi-no-repeat card-stretch gutter-b" style="background-position: right top; background-size: 30% auto; background-image: url({{asset('assets/dashboard/media/svg/shapes/abstract-3.svg')}})">
			<div class="card-body my-4">
				<a href="#" class="card-title font-weight-bolder text-info font-size-h6 mb-4 text-hover-state-dark d-block">{{trans('Dashboard::dashboard.openings')}}</a>
				<div class="font-weight-bold text-muted font-size-sm">
				<span class="text-dark-75 font-weight-bolder font-size-h2 mr-2">{{ $counts['openings'] }}</span></div>
				<div class="progress progress-xs mt-7 bg-info-o-60">
					<div class="progress-bar bg-info" role="progressbar" style="width: 67%;" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
				</div>
			</div>
		</div>
	</div>
	<div class="col-xl-3">
		<div class="card card-custom bg-info card-stretch gutter-b">
			<div class="card-body my-4">
				<a href="#" class="card-title font-weight-bolder text-white font-size-h6 mb-4 text-hover-state-dark d-block">{{trans('Dashboard::dashboard.jobRequests')}}</a>
				<div class="font-weight-bold text-white font-size-sm">
				<span class="font-size-h2 mr-2">{{ $counts['jobRequests'] }}</span></div>
				<div class="progress progress-xs mt-7 bg-white-o-90">
					<div class="progress-bar bg-white" role="progressbar" style="width: 87%;" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
				</div>
			</div>
		</div>
	</div>
	<div class="col-xl-3">
		<div class="card card-custom bg-primary card-stretch gutter-b">
			<div class="card-body my-4">
				<a href="#" class="card-title font-weight-bolder text-white font-size-h6 mb-4 text-hover-state-dark d-block">{{trans('Dashboard::dashboard.joinTeams')}}</a>
				<div class="font-weight-bold text-white font-size-sm">
				<span class="font-size-h2 mr-2">{{ $counts['joinTeams'] }}</span></div>
				<div class="progress progress-xs mt-7 bg-white-o-90">
					<div class="progress-bar bg-white" role="progressbar" style="width: 87%;" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
				</div>
			</div>
		</div>
	</div>
	<div class="col-xl-3">
		<div class="card card-custom bg-dark card-stretch gutter-b">
			<div class="card-body my-4">
				<a href="#" class="card-title font-weight-bolder text-white font-size-h6 mb-4 text-hover-state-dark d-block">{{trans('Dashboard::dashboard.services')}}</a>
				<div class="font-weight-bold text-white font-size-sm">
				<span class="font-size-h2 mr-2">{{ $counts['services'] }}</span></div>
				<div class="progress progress-xs mt-7 bg-white-o-90">
					<div class="progress-bar bg-white" role="progressbar" style="width: 52%;" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
				</div>
			</div>
		</div>
	</div>
</div>

<div class="row">
	<div class="col-lg-6">
		<div class="card card-custom gutter-b">
			<div class="card-header h-auto">
				<div class="card-title py-5">
					<h3 class="card-label">{{trans('Dashboard::dashboard.job_requests_monthly')}}</h3>
				</div>
			</div>
			<div class="card-body">
				<div id="chart_1"></div>
			</div>
		</div>
	</div>
	<div class="col-lg-6">
		<div class="card card-custom gutter-b">
			<div class="card-header">
				<div class="card-title">
					<h3 class="card-label">{{trans('Dashboard::dashboard.join_team_monthly')}}</h3>
				</div>
			</div>
			<div class="card-body">
				<div id="chart_2"></div>
			</div>
		</div>
	</div>
</div>

@endsection

@push('js')
<script>
	$(function(){
		"use strict";

		var chart_1_data = [0,0,0,0,0,0,0,0,0,0,0,0];
		var chart_2_data = [0,0,0,0,0,0,0,0,0,0,0,0];
      	@foreach($counts['month_job_applications'] as $chartKey => $one)
      	chart_1_data[{{ $one->month }}] = '{{$one->data}}';
      	@endforeach
      	@foreach($counts['month_join_team'] as $key => $item)
      	chart_2_data[{{ $item->month }}] = {{$item->data}};
      	@endforeach
      	


		// Shared Colors Definition
		const primary = '#6993FF';
		const success = '#1BC5BD';
		const info = '#8950FC';
		const warning = '#FFA800';
		const danger = '#F64E60';
		var KTApexChartsDemo = function () {
			var _demo1 = function () {
				const apexChart = "#chart_1";
				var options = {
					series: [{
						name: "{{trans('Dashboard::dashboard.jobRequests')}}",
						data: chart_1_data
					}],
					chart: {
						height: 350,
						type: 'line',
						zoom: {
							enabled: false
						}
					},
					dataLabels: { 	
						enabled: false
					},
					stroke: {
						curve: 'straight'
					},
					grid: {
						row: {
							colors: ['#f3f3f3', 'transparent'], // takes an array which will be repeated on columns
							opacity: 0.5
						},
					},
					xaxis: {
						categories: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct' , 'Nov' ,'Dec'],
					},
					colors: [primary]
				};

				var chart = new ApexCharts(document.querySelector(apexChart), options);
				chart.render();
			}
			var _demo2 = function () {
				const apexChart = "#chart_2";
				var options = {
					series: [{
						name: '{{trans('Dashboard::dashboard.joinTeams')}}',
						data: chart_2_data
					}],
					chart: {
						height: 350,
						type: 'area'
					},
					dataLabels: {
						enabled: false
					},
					stroke: {
						curve: 'smooth'
					},
					xaxis: {
						categories: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct' , 'Nov' ,'Dec'],
					},
					colors: [primary, success]
				};

				var chart = new ApexCharts(document.querySelector(apexChart), options);
				chart.render();
			}
		return {
				// public functions
				init: function () {
					_demo1();
					_demo2();
				}
			};
		}();

		jQuery(document).ready(function () {
			KTApexChartsDemo.init();
		});

	})
</script>
@endpush