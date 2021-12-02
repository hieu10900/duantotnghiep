<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    @extends('admin/layout_master/layout_master')
    @section('contents')
	<!-- PAGE HEADER -->
	<div class="page-header mt-5-7">
		<div class="page-leftheader">
			<h4 class="page-title mb-0">{{ __('Thông tin tài khoản') }}</h4>
			<ol class="breadcrumb mb-2">
				<li class="breadcrumb-item"><a href="{{url('/' . $page='#')}}"><i class="fa fa-magic mr-2 fs-12"></i>{{ __('Tài khoản') }}</a></li>
				<li class="breadcrumb-item" aria-current="page"><a href="{{url('/' . $page='#')}}"> {{ __('Hồ sơ cá nhân') }}</a></li>
				<li class="breadcrumb-item active" aria-current="page"><a href="{{url('/' . $page='#')}}"> {{ __('Thông tin tài khoản') }}</a></li>
			</ol>
		</div>
	</div>
	<!-- END PAGE HEADER -->
    <!-- USER PROFILE PAGE -->
	<div class="row">
		<div class="col-xl-3 col-lg-3 col-md-12">
			<div class="card border-0">
				<div class="widget-user-image overflow-hidden mx-auto mt-5"><img alt="User Avatar" src="{{ asset('frontend_assets/img/avatar.jpg') }}" class="rounded-circle" ></div>
				<div class="card-body text-center">
					<div>
						<h4 class="mb-1 mt-1 font-weight-bold fs-16"></h4>
						<h6 class="text-muted fs-12"></h6>
					
							<h6 class="text-muted fs-12">{{ auth()->user()->full_name }} <span class="text-info"></span></h6>
						
						<a href="{{ route('user.profile.edit') }}" class="btn btn-primary mt-3 mb-2"><i class="fa fa-pencil mr-1"></i> {{ __('Chỉnh sửa hồ sơ') }}</a>
					</div>
				</div>
				
			</div>
			<div class="card border-0">
				<div class="card-body">
					<h4 class="card-title mb-4 mt-1">{{ __('Thông tin cá nhân') }}</h4>
					<div class="table-responsive">
						<table class="table mb-0">
							<tbody>
								<tr>
									<td class="py-2 px-0">
										<span class="font-weight-semibold w-50">{{ __('Họ tên ') }} </span>
									</td>
									<td class="py-2 px-0 pl-2">  {{ auth()->user()->full_name }}</td>
								</tr>
								<tr>
									<td class="py-2 px-0">
										<span class="font-weight-semibold w-50">{{ __('Vai trò ') }}</span>
									</td>
									<td class="py-2 px-0"></td>
								</tr>
								<tr>
									<td class="py-2 px-0">
										<span class="font-weight-semibold w-50">Website </span>
									</td>
									<td class="py-2 px-0"></td>
								</tr>
								<tr>
									<td class="py-2 px-0">
										<span class="font-weight-semibold w-50">{{ __('Thành phố') }} </span>
									</td>
									<td class="py-2 px-0"></td>
								</tr>
								<tr>
									<td class="py-2 px-0">
										<span class="font-weight-semibold w-50">{{ __('Quốc gia') }} </span>
									</td>
									<td class="py-2 px-0"></td>
								</tr>
								<tr>
									<td class="py-2 px-0">
										<span class="font-weight-semibold w-50">{{ __('Email') }} </span>
									</td>
									<td class="py-2 px-0">{{ auth()->user()->email }}</td>
								</tr>
								<tr>
									<td class="py-2 px-0">
										<span class="font-weight-semibold w-50">{{ __('Sô điện thoại') }} </span>
									</td>
									<td class="py-2 px-0"></td>
								</tr>
							</tbody>
						</table>
					</div>
				</div>
			</div>
		</div>
		
	</div>
	<!-- END USER PROFILE PAGE -->
    @endsection
</body>

</html>