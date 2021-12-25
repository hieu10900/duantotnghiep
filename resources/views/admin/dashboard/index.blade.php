<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Ba Vì</title>
	<link href="{{URL::asset('css/icons.css')}}" rel="stylesheet" />
	<link href="{{URL::asset('css/app.css')}}" rel="stylesheet" />
	<link href="{{URL::asset('iconfonts/materialdesignicons/materialdesignicons.css')}}" rel="stylesheet" />
</head>

<body>
	@extends('admin/layout_master/layout_master')
	@section('contents')
	<!-- PAGE HEADER-->
	<div class="page-header mt-5-7">
		<div class="page-leftheader">
			<h4 class="page-title mb-0">{{ __('BẢNG ĐIỀU KHIỂN QUẢN TRỊ') }}</h4>
			<ol class="breadcrumb mb-2">
				<li class="breadcrumb-item"><a href=""><i class="fa fa-th-large mr-2 fs-12"></i>{{ __('Admin') }}</a></li>
				<li class="breadcrumb-item active" aria-current="page"><a href=""> {{ __('BẢNG ĐIỀU KHIỂN ') }}</a></li>
			</ol>
		</div>
	</div>
	<!--END PAGE HEADER -->
	<!-- TOP BOX INFO -->
	<div class="row">
		<div class="col-xl-4 col-lg-6 col-md-6 col-xm-12">
			<div class="card overflow-hidden border-0">
				<div class="card-body">
					<div class="d-flex align-items-end justify-content-between">
						<div>
							<p class=" mb-3 fs-12 font-weight-bold">{{ __('Tổng số người dùng mới') }} <span class="text-muted">({{ __('Tháng này') }})</span></p>
							<h2 class="mb-0">{{ number_format($total_data_monthly['new_users_current_month'][0]['data']) }}<span class="number-font fs-20"></span><span class="ml-2 text-muted fs-11 data-percentage-change"><span id="users_change"></span> {{ __('tháng này') }}</span></h2>

						</div>
						<span class="fs-50 mt-m1"><i class="mdi mdi-account-switch"></i></span>
					</div>
					<div class="d-flex mt-2">
						<div>
							<span class="text-muted fs-12 mr-1">{{ __('Tháng trước') }}</span>
							<span class="number-font fs-12"><i class="fa fa-chain mr-1 text-success"></i>{{ number_format($total_data_monthly['new_users_past_month'][0]['data']) }}</span>
						</div>
						<div class="ml-auto">
							<span class="text-muted fs-12 mr-1">{{ __('Năm nay') }} ({{ __('Toàn bộ') }})</span>
							<span class="number-font fs-12"><i class="fa fa-bookmark mr-1 text-success"></i>{{ number_format($total_data_yearly['total_new_users'][0]['data']) }}</span>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="col-xl-4 col-lg-6 col-md-6 col-xm-12">
			<div class="card overflow-hidden border-0">
				<div class="card-body">
					<div class="d-flex align-items-end justify-content-between">
						<div>
							<p class=" mb-3 fs-12 font-weight-bold">{{ __('Tổng số người đặt phòng mới') }} <span class="text-muted">({{ __('Tháng này') }})</span></p>
							<h2 class="mb-0"><span class="number-font fs-20">{{ number_format($total_data_monthly['new_subscribers_current_month'][0]['data']) }}</span><span class="ml-2 text-muted fs-11 data-percentage-change"><span id="subscribers_change"></span> {{ __('tháng này') }}</span></h2>
						</div>
						<span class="text-info fs-50 mt-m1"><i class="mdi mdi-account-plus"></i></span>
					</div>
					<div class="d-flex mt-2">
						<div>
							<span class="text-muted fs-12 mr-1">{{ __('Tháng trước') }}</span>
							<span class="number-font fs-12"><i class="fa fa-chain mr-1 text-success"></i>{{ number_format($total_data_monthly['new_subscribers_past_month'][0]['data']) }}</span>
						</div>
						<div class="ml-auto">
							<span class="text-muted fs-12 mr-1">{{ __('Năm nay') }} ({{ __('Toàn bộ') }})</span>
							<span class="number-font fs-12"><i class="fa fa-bookmark mr-1 text-success"></i>{{ number_format($total_data_yearly['total_new_subscribers'][0]['data']) }}</span>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="col-xl-4 col-lg-6 col-md-6 col-xm-12">
			<div class="card overflow-hidden border-0">
				<div class="card-body">
					<div class="d-flex align-items-end justify-content-between">
						<div>
							<p class=" mb-3 fs-12 font-weight-bold">{{ __('Tổng thu nhập') }} <span class="text-muted">({{ __('Tháng này') }})</span></p>
							<h2 class="mb-0"><span class="number-font fs-20">{{ number_format((float)$total_data_monthly['moenyOfMonth']) }}</span><span class="ml-2 text-muted fs-11 data-percentage-change"><span id="income_change"></span> {{ __('tháng này') }}</span></h2>
						</div>
						<span class="text-success fs-50 mt-m1"><i class="zmdi zmdi-money"></i></span>
					</div>
					<div class="d-flex mt-2">
						<div>
							<span class="text-muted fs-12 mr-1">{{ __('Tháng trước') }}</span>
							<span class="number-font fs-12"><i class="fa fa-chain mr-1 text-success"></i>{{ number_format((float)$total_data_monthly['total_past_mont']) }}VND</span>
						</div>
						<div class="ml-auto">
							<span class="text-muted fs-12 mr-1">{{ __('Năm nay') }} ({{ __('Toàn bộ') }})</span>
							<span class="number-font fs-12"><i class="fa fa-bookmark mr-1 text-success"></i>{{ number_format((float)$total_data_monthly['total_year']) }}VND</span>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- <div class="col-xl-4 col-lg-6 col-md-6 col-xm-12">
			<div class="card overflow-hidden border-0">
				<div class="card-body">
					<div class="d-flex align-items-end justify-content-between">
						<div>
							<p class=" mb-3 fs-12 font-weight-bold">{{ __('Tổng chi tiêu ước tính') }} <span class="text-muted">({{ __('Tháng này') }})</span></p>
							<h2 class="mb-0"><span class="number-font fs-20"></span><span class="ml-2 text-muted fs-11 data-percentage-change"><span id="spending_change"></span> {{ __('tháng này') }}</span></h2>
						</div>
						<span class="text-secondary fs-50 mt-m1"><i class="zmdi zmdi-money-off"></i></span>
					</div>
					<div class="d-flex mt-2">
						<div>
							<span class="text-muted fs-12 mr-1">{{ __('Tháng trước') }}</span>
							<span class="number-font fs-12"><i class="fa fa-chain mr-1 text-danger"></i></span>
						</div>
						<div class="ml-auto">
							<span class="text-muted fs-12 mr-1">{{ __('Năm nay') }} ({{ __('Toàn bộ') }})</span>
							<span class="number-font fs-12"><i class="fa fa-bookmark mr-1 text-danger"></i></span>
						</div>
					</div>
				</div>
			</div>
		</div> -->
		<div class="col-xl-4 col-lg-6 col-md-6 col-xm-12">
			<div class="card overflow-hidden border-0">
				<div class="card-body">
					<div class="d-flex align-items-end justify-content-between">
						<div>
							<p class=" mb-3 fs-12 font-weight-bold">{{ __('Dịch Vụ được sử dụng') }} <span class="text-muted">({{ __('Tháng này') }})</span></p>
							<h2 class="mb-0"><span class="number-font fs-20"></span>{{ $total_data_monthly['service'] }}<span class="ml-2 text-muted fs-11 data-percentage-change"><span id="spending_change"></span> {{ __('tháng này') }}</span></h2>
						</div>
						<span class="text-secondary fs-50 mt-m1"><i class="zmdi zmdi-money-off"></i></span>
					</div>
					<div class="d-flex mt-2">
						<div>
							<span class="text-muted fs-12 mr-1">{{ __('Tháng trước') }}</span>
							<span class="number-font fs-12"><i class="fa fa-chain mr-1 text-danger"></i>{{ $total_data_monthly['past_service'] }}</span>
						</div>
						<div class="ml-auto">
							<span class="text-muted fs-12 mr-1">{{ __('Năm nay') }} ({{ __('Toàn bộ') }})</span>
							<span class="number-font fs-12"><i class="fa fa-bookmark mr-1 text-danger"></i>{{ $total_data_monthly['current_service'] }}</span>
						</div>
					</div>
				</div>
			</div>

		</div>
		<div class="col-xl-4 col-lg-6 col-md-6 col-xm-12">
			<div class="card overflow-hidden border-0">
				<div class="card-body">
					<div class="d-flex align-items-end justify-content-between">
						<div>
							<p class=" mb-3 fs-12 font-weight-bold">{{ __('Khuyến mãi được sử dụng') }} <span class="text-muted">({{ __('Tháng này') }})</span></p>
							<h2 class="mb-0"><span class="number-font fs-20"></span>{{ $total_data_monthly['discount'] }}<span class="ml-2 text-muted fs-11 data-percentage-change"><span id="spending_change"></span> {{ __('tháng này') }}</span></h2>
						</div>
						<span class="text-secondary fs-50 mt-m1"><i class="zmdi zmdi-money-off"></i></span>
					</div>
					<div class="d-flex mt-2">
						<div>
							<span class="text-muted fs-12 mr-1">{{ __('Tháng trước') }}</span>
							<span class="number-font fs-12"><i class="fa fa-chain mr-1 text-danger"></i>{{ $total_data_monthly['past_discount'] }}</span>
						</div>
						<div class="ml-auto">
							<span class="text-muted fs-12 mr-1">{{ __('Năm nay') }} ({{ __('Toàn bộ') }})</span>
							<span class="number-font fs-12"><i class="fa fa-bookmark mr-1 text-danger"></i>{{ $total_data_monthly['current_discount'] }}</span>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- END TOP BOX INFO -->

	<!-- CHART JS GRAPH ANALYSIS -->
	<!-- <div class="row mt-4">
		<div class="col-lg-12 col-md-12">
			<div class="card overflow-hidden border-0">
				<div class="card-header">
					<h3 class="card-title">{{ __('Người dùng đã đăng ký mới') }} <span class="text-muted">({{ __('Tháng này') }})</span></h3>
				</div>
				<div class="card-body mb-3 mt-3">
					<div class="row">
						<div class="col-lg-12 col-md-12 col-sm-12">
							<div class="">
								<canvas id="chart-total-users-month" class="h-330"></canvas>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div> -->

	<!-- </div> -->
	<!-- END CHART JS GRAPH ANALYSIS -->
	@endsection
	@section('js')
	<script type="text/javascript">
		$(function() {

			"use strict";


			// Total New User Analysis Chart
			var userMonthlyData = JSON.parse(`<?php echo $chart_data['monthly_new_users']; ?>`);
			var userMonthlyDataset = Object.values(userMonthlyData);
			var ctx = document.getElementById('chart-total-users-month');
			new Chart(ctx, {
				type: 'bar',
				data: {
					labels: ['1', '2', '3', '4', '5', '6', '7', '8', '9', '10', '11', '12', '13', '14', '15', '16', '17', '18', '19', '20', '21', '22', '23', '24', '25', '26', '27', '28', '29', '30', '31'],
					datasets: [{
						label: 'Người dùng đã đăng ký mới: ',
						data: userMonthlyDataset,
						backgroundColor: '#007bff',
						borderWidth: 1,
						fill: true
					}]
				},
				options: {
					maintainAspectRatio: false,
					legend: {
						display: false,
						labels: {
							display: false
						}
					},
					responsive: true,
					scales: {
						yAxes: [{
							stacked: true,
							ticks: {
								beginAtZero: true,
								fontSize: 11,
								stepSize: 20,
							},
							gridLines: {
								borderDash: [3, 2]
							}
						}],
						xAxes: [{
							barPercentage: 0.7,
							stacked: true,
							ticks: {
								fontSize: 11
							},
							gridLines: {
								borderDash: [3, 2]
							}
						}]
					},
					tooltips: {
						cornerRadius: 0,
						xPadding: 10,
						yPadding: 10
					},
					legend: {
						position: 'bottom',
						labels: {
							boxWidth: 10,
							fontSize: 10
						}
					}
				}
			});


		});
	</script>
	@endsection
</body>

</html>
