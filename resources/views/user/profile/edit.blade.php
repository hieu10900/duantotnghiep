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
			<h4 class="page-title mb-0">{{ __('Cập nhật Thông tin tài khoản') }}</h4>
			<ol class="breadcrumb mb-2">
				<li class="breadcrumb-item"><a href="{{url('/' . $page='#')}}"><i class="fa fa-magic mr-2 fs-12"></i>{{ __('Tài khoản') }}</a></li>
				<li class="breadcrumb-item" aria-current="page"><a href="{{url('/' . $page='#')}}"> {{ __('Hồ sơ cá nhân') }}</a></li>
				<li class="breadcrumb-item active" aria-current="page"><a href="{{url('/' . $page='#')}}"> {{ __('Cập nhật Thông tin tài khoản') }}</a></li>
			</ol>
		</div>
	</div>
	<!-- END PAGE HEADER -->
   <!-- EDIT USER PROFILE PAGE -->
	<div class="row">
		<div class="col-xl-3 col-lg-4">
			<div class="card border-0">
				<div class="widget-user-image overflow-hidden mx-auto mt-5"><img alt="User Avatar" class="rounded-circle" src="{{ asset('frontend_assets/img/avatar.jpg') }}"></div>
				<div class="card-body text-center">
					<div>
						<h4 class="mb-1 mt-1 font-weight-bold fs-16">{{ auth()->user()->full_name }}</h4>
						<h6 class="text-muted fs-12">{{ auth()->user()->job_role }}</h6>
						<a href="{{ route('user.profile.index') }}" class="btn btn-primary mt-3 mb-2">{{ __('Chỉnh sửa hồ sơ') }}</a>
					</div>
				</div>
			
			</div>
		</div>
		<div class="col-xl-9 col-lg-8">
			<div class="card border-0">
				<div class="card-header">
					<h3 class="card-title">{{ __('Chỉnh sửa hồ sơ') }}</h3>
				</div>
				<div class="card-body pb-0">
					<form method="POST" action="{{ route('user.profile.update', [auth()->user()->id]) }}" enctype="multipart/form-data">
						@csrf
						<div class="row">
							<div class="col-sm-6 col-md-6">
								<div class="input-box">
									<div class="form-group">
										<label class="form-label fs-12">{{ __('Họ tên') }}</label>
										<input type="text" class="form-control @error('name') is-danger @enderror" name="name" value="{{ auth()->user()->full_name }}">
										@error('name')
											<p class="text-danger">{{ $errors->first('name') }}</p>
										@enderror									
									</div>
								</div>
							</div>		
							<div class="col-sm-6 col-md-6">
								<div class="input-box">
									<div class="form-group">
										<label class="form-label fs-12">{{ __('Email') }}</label>
										<input type="email" class="form-control @error('email') is-danger @enderror" name="email" value="{{ auth()->user()->email }}">
										@error('email')
											<p class="text-danger">{{ $errors->first('email') }}</p>
										@enderror
									</div>
								</div>
							</div>
								
							<div class="col-sm-6 col-md-6">
								<div class="input-box">
									<div class="form-group">								
										<label class="form-label fs-12">{{ __('Số điện thoại') }}</label>
										<input type="tel" class="fs-12 @error('phone') is-danger @enderror" id="phone" name="phone" value="{{ auth()->user()->phone }}">
										@error('phone')
											<p class="text-danger">{{ $errors->first('phone') }}</p>
										@enderror
									</div>
								</div>
							</div>			
							<div class="col-sm-6 col-md-6">
								<div class="input-box">
									<label class="form-label fs-12">{{ __('Ảnh đại diện') }}</label>
									<div class="input-group file-browser">									
										<input type="text" class="form-control border-right-0 browse-file" placeholder="choose" readonly>
										<label class="input-group-btn">
											<span class="btn btn-primary special-btn">
												Browse <input type="file" name="avatar" style="display: none;">
											</span>
										</label>
									</div>
									@error('avatar')
										<p class="text-danger">{{ $errors->first('avatar') }}</p>
									@enderror
								</div>
							</div>	
							<div class="col-md-12">
								<div class="input-box">
									<div class="form-group">
										<label class="form-label fs-12">{{ __('Địa chỉ') }}</label>
										<input type="text" class="form-control @error('address') is-danger @enderror" name="address" value="{{ auth()->user()->address }}">
										@error('address')
											<p class="text-danger">{{ $errors->first('address') }}</p>
										@enderror
									</div>
								</div>
							</div>
							
						</div>
						<div class="card-footer border-0 text-right mb-2 pr-0">
							<a href="{{ route('user.profile.index') }}" class="btn btn-cancel mr-2">{{ __('Quay lại') }}</a>
							<button type="submit" class="btn btn-primary">{{ __('Cập nhật') }}</button>							
						</div>
					</form>
				</div>				
			</div>
		</div>
	</div>
	<!-- EDIT USER PROFILE PAGE --> 
    @endsection
</body>

</html>