<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
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
                            <h2 class="mb-0"><span class="number-font fs-20">{{ number_format((float)$total_data_monthly['income_current_month'][0]['data'], 2, '.', '') }}</span><span class="ml-2 text-muted fs-11 data-percentage-change"><span id="income_change"></span> {{ __('this month') }}</span></h2>
                        </div>
                        <span class="text-success fs-50 mt-m1"><i class="zmdi zmdi-money"></i></span>
                    </div>
                    <div class="d-flex mt-2">
                        <div>
                            <span class="text-muted fs-12 mr-1">{{ __('Tháng trước') }}</span>
                            <span class="number-font fs-12"><i class="fa fa-chain mr-1 text-success"></i>${{ number_format((float)$total_data_monthly['income_past_month'][0]['data'], 2, '.', '') }}</span>
                        </div>
                        <div class="ml-auto">
                            <span class="text-muted fs-12 mr-1">{{ __('Năm nay') }} ({{ __('Toàn bộ') }})</span>
                            <span class="number-font fs-12"><i class="fa fa-bookmark mr-1 text-success"></i>${{ number_format((float)$total_data_yearly['total_income'][0]['data'], 2, '.', '') }}</span>
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
                            <p class=" mb-3 fs-12 font-weight-bold">{{ __('Tổng chi tiêu ước tính') }} <span class="text-muted">({{ __('Tháng này') }})</span></p>
                            <h2 class="mb-0"><span class="number-font fs-20"></span><span class="ml-2 text-muted fs-11 data-percentage-change"><span id="spending_change"></span> {{ __('this month') }}</span></h2>
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
        </div>
        <div class="col-xl-4 col-lg-6 col-md-6 col-xm-12">
            <div class="card overflow-hidden border-0">
                <div class="card-body">
                    <p class=" mb-3 fs-12">{{ __('Free Characters Used') }} <span class="text-muted">({{ __('Tháng này') }})</span></p>
                    <h2 class="mb-2 number-font fs-20"></h2>
                    <small class="fs-12 text-muted">{{ __('So với tháng trước') }} (<span id="free_chars_past"></span>): </small>
                    <span class="fs-12" id="free_chars"></span>
                </div>
            </div>
        </div>
        <div class="col-xl-4 col-lg-6 col-md-6 col-xm-12">
            <div class="card overflow-hidden border-0">
                <div class="card-body">
                    <p class=" mb-3 fs-12">{{ __('Paid Characters Used') }} <span class="text-muted">({{ __('Tháng này') }})</span></p>
                    <h2 class="mb-2 number-font fs-20"></h2>
                    <small class="fs-12 text-muted">{{ __('So với tháng trước') }} (<span id="paid_chars_past"></span>): </small>
                    <span class="fs-12" id="paid_chars"></span>
                </div>
            </div>
        </div>
        <div class="col-xl-4 col-lg-6 col-md-6 col-xm-12">
            <div class="card overflow-hidden border-0">
                <div class="card-body">
                    <p class=" mb-3 fs-12">{{ __('Purchased Characters') }} <span class="text-muted">({{ __('Tháng này') }})</span></p>
                    <h2 class="mb-2 number-font fs-20"></h2>
                    <small class="fs-12 text-muted">{{ __('So với tháng trước') }} (<span id="purchased_chars_past"></span>): </small>
                    <span class="fs-12" id="purchased_chars"></span>
                </div>
            </div>
        </div>
        <div class="col-xl-4 col-lg-6 col-md-6 col-xm-12">
            <div class="card overflow-hidden border-0">
                <div class="card-body">
                    <p class=" mb-3 fs-12">{{ __('Synthesized Audio Results') }} <span class="text-muted">({{ __('Tháng này') }})</span></p>
                    <h2 class="mb-2 number-font fs-20"></h2>
                    <small class="fs-12 text-muted">{{ __('So với tháng trước') }} (<span id="audio_files_past"></span>): </small>
                    <span class="fs-12" id="audio_files"></span>
                </div>
            </div>
        </div>
    </div>
    <!-- END TOP BOX INFO -->

    <!-- CHART JS GRAPH ANALYSIS -->
    <div class="row mt-4">
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
        </div>
        <div class="col-lg-6 col-md-12">
            <div class="card overflow-hidden border-0">
                <div class="card-header">
                    <h3 class="card-title">{{ __('Phân tích thu nhập') }} <span class="text-muted">({{ __('Năm nay') }})</span></h3>
                </div>
                <div class="card-body">
                    <div class="row mb-5 mt-2">
                        <div class="col-xl-3 col-12 ">
                            <p class=" mb-1 fs-12">{{ __('Toàn bộ Income') }}</p>
                            <h3 class="mb-0 fs-20 number-font"></h3>
                        </div>
                        <div class="col-xl-3 col-12 ">
                            <p class=" mb-1 fs-12">{{ __('Toàn bộ Spending') }}</p>
                            <h3 class="mb-0 fs-20 number-font"></h3>
                        </div>
                        <div class="col-xl-3 col-12 ">
                            <p class=" mb-1 fs-12">{{ __('Toàn bộ Chars Purchased') }}</p>
                            <h3 class="mb-0 fs-20 number-font"></h3>
                        </div>
                        <div class="col-xl-3 col-12 ">
                            <p class=" mb-1 fs-12">{{ __('Toàn bộ Purchased Chars Used') }}</p>
                            <h3 class="mb-0 fs-20 number-font"></h3>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12">
                            <div class="">
                                <canvas id="chart-total-income" class="h-330"></canvas>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-6 col-md-12">
            <div class="card overflow-hidden border-0">
                <div class="card-header">
                    <h3 class="card-title">{{ __('Phân tích người dùng mới') }} <span class="text-muted">({{ __('Năm nay') }})</span></h3>
                </div>
                <div class="card-body">
                    <div class="row mb-5 mt-2">
                        <div class="col-xl-3 col-6">
                            <p class="mb-1 fs-12">{{ __('Toàn bộ New Users') }}</p>
                            <h3 class="mb-0 fs-20 number-font"></h3>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12">
                            <div class="">
                                <canvas id="chart-total-users-year" class="h-330"></canvas>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
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

			// Total New User Analysis Chart
			var userYearlyData = JSON.parse(`<?php echo $chart_data['total_new_users']; ?>`);
			var userYearlyDataset = Object.values(userYearlyData);
			var ctx = document.getElementById('chart-total-users-year');
			new Chart(ctx, {
				type: 'bar',
				data: {
					labels: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec'],
					datasets: [{
						label: 'Phân tích người dùng mới: ',
						data: userYearlyDataset,
						backgroundColor: '#1e1e2d',
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
								stepSize: 40,
							},
							gridLines: {
								borderDash: [3, 2]
							}
						}],
						xAxes: [{
							barPercentage: 0.5,
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

			// Percentage Difference First Row\


			(users_current_month[0]['data'] == null) ? users_current_month = 0 : users_current_month = users_current_month[0]['data'];
			(users_past_month[0]['data'] == null) ? users_past_month = 0 : users_past_month = users_past_month[0]['data'];
			(subscribers_current_month[0]['data'] == null) ? subscribers_current_month = 0 : subscribers_current_month = subscribers_current_month[0]['data'];
			(subscribers_past_month[0]['data'] == null) ? subscribers_past_month = 0 : subscribers_past_month = subscribers_past_month[0]['data'];
			(income_current_month[0]['data'] == null) ? income_current_month = 0 : income_current_month = income_current_month[0]['data'];
			(income_past_month[0]['data'] == null) ? income_past_month = 0 : income_past_month = income_past_month[0]['data'];
			(spending_current_month == null) ? spending_current_month = 0.0 : spending_current_month = spending_current_month;
			(spending_past_month == null) ? spending_past_month = 0.0 : spending_past_month = spending_past_month;

			var users_current_total = parseInt(users_current_month);
			var users_past_total = parseInt(users_past_month);
			var subscribers_current_total = parseInt(subscribers_current_month);
			var subscribers_past_total = parseInt(subscribers_past_month);
			var income_current_total = parseInt(income_current_month);
			var income_past_total = parseInt(income_past_month);

			var users_change = mainPercentageDifference(users_past_month, users_current_month);
			var subscribers_change = mainPercentageDifference(subscribers_past_month, subscribers_current_month);
			var income_change = mainPercentageDifference(income_past_month, income_current_month);
			var spending_change = mainPercentageDifference(spending_past_month, spending_current_month);

			document.getElementById('users_change').innerHTML = users_change;
			document.getElementById('subscribers_change').innerHTML = subscribers_change;
			document.getElementById('income_change').innerHTML = income_change;
			document.getElementById('spending_change').innerHTML = spending_change;


			(free_current_month[0]['data'] == null) ? free_current_month = 0 : free_current_month = free_current_month[0]['data'];
			(paid_current_month[0]['data'] == null) ? paid_current_month = 0 : paid_current_month = paid_current_month[0]['data'];
			(purchased_current_month[0]['data'] == null) ? purchased_current_month = 0 : purchased_current_month = purchased_current_month[0]['data'];
			(audio_current_month[0]['data'] == null) ? audio_current_month = 0 : audio_current_month = audio_current_month[0]['data'];

			(free_past_month[0]['data'] == null) ? free_past_month = 0 : free_past_month = free_past_month[0]['data'];
			(paid_past_month[0]['data'] == null) ? paid_past_month = 0 : paid_past_month = paid_past_month[0]['data'];
			(purchased_past_month[0]['data'] == null) ? purchased_past_month = 0 : purchased_past_month = purchased_past_month[0]['data'];
			(audio_past_month[0]['data'] == null) ? audio_past_month = 0 : audio_past_month = audio_past_month[0]['data'];

			var free_current_total = parseInt(free_current_month);
			var paid_current_total = parseInt(paid_current_month);
			var audio_current_total = parseInt(audio_current_month);
			var purchased_current_total = parseInt(purchased_current_month);

			var free_past_total = parseInt(free_past_month);
			var paid_past_total = parseInt(paid_past_month);
			var audio_past_total = parseInt(audio_past_month);
			var purchased_past_total = parseInt(purchased_past_month);

			var free_change = characterPercentageDifference(free_past_total, free_current_total);
			var paid_change = characterPercentageDifference(paid_past_total, paid_current_total);
			var purchased_change = characterPercentageDifference(purchased_past_total, purchased_current_total);
			var audio_change = characterPercentageDifference(audio_past_total, audio_current_total);

			document.getElementById('free_chars_past').innerHTML = new Intl.NumberFormat().format(free_past_total);
			document.getElementById('paid_chars_past').innerHTML = new Intl.NumberFormat().format(paid_past_total);
			document.getElementById('purchased_chars_past').innerHTML = new Intl.NumberFormat().format(purchased_past_total);
			document.getElementById('audio_files_past').innerHTML = new Intl.NumberFormat().format(audio_past_total);

			document.getElementById('free_chars').innerHTML = free_change;
			document.getElementById('paid_chars').innerHTML = paid_change;
			document.getElementById('purchased_chars').innerHTML = purchased_change;
			document.getElementById('audio_files').innerHTML = audio_change;

			function characterPercentageDifference(past, current) {
				if (past == 0) {
					var change = (current == 0) ? '<span class="text-muted"> 0% No Change</span>' : '<span class="text-success"> 100% Increase</span>';
					return change;
				} else if(current == 0) {
					var change = (past == 0) ? '<span class="text-muted"> 0% No Change</span>' : '<span class="text-danger"> 100% Decrease</span>';
					return change;
				} else if(past == current) {
					var change = '<span class="text-muted"> 0% No Change</span>';
					return change;
				}

				var difference = current - past;
    			var difference_value, result;

				var totalDifference = Math.abs(difference);
				var change = (totalDifference/past) * 100;

				if (difference > 0) { result = '<span class="text-success">' + change.toFixed(1) + '% Increase</span>'; }
				else if(difference < 0) {result = '<span class="text-danger">' + change.toFixed(1) + '% Decrease</span>'; }
				else { difference_value = '<span class="text-muted">' + change.toFixed(1) + '% No Change</span>'; }

				return result;
			}

			function mainPercentageDifference(past, current) {
				if (past == 0) {
					var change = (current == 0) ? '<span class="text-muted"> 0%</span>' : '<span class="text-success"><i class="fa fa-caret-up"></i> 100%</span>';
					return change;
				} else if(current == 0) {
					var change = (past == 0) ? '<span class="text-muted"> 0%</span>' : '<span class="text-danger"><i class="fa fa-caret-down"></i> 100%</span>';
					return change;
				} else if(past == current) {
					var change = '<span class="text-muted"> 0%</span>';
					return change;
				}

				var difference = current - past;
    			var difference_value, result;

				var totalDifference = Math.abs(difference);
				var change = (totalDifference/past) * 100;

				if (difference > 0) { result = '<span class="text-success"><i class="fa fa-caret-up"></i> ' + change.toFixed(1) + '%</span>'; }
				else if(difference < 0) {result = '<span class="text-danger"><i class="fa fa-caret-down"></i> ' + change.toFixed(1) + '%</span>'; }
				else { difference_value = '<span class="text-muted"> ' + change.toFixed(1) + '%</span>'; }

				return result;
			}
		});
	</script>
    @endsection
</body>

</html>