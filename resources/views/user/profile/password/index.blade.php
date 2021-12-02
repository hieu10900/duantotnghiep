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
    <!-- CHANGE PASSWORD -->
	<div class="row"> 
		<div class="col-xl-3 col-lg-4">
			<div class="card border-0">
				<div class="card-header">
					<h3 class="card-title">{{ __('Edit Password') }}</h3>
				</div>
				<div class="card-body">
					<div class="text-center mb-5">
						<div class="widget-user-image overflow-hidden">
							<img alt="User Avatar" class="rounded-circle mr-3" src="{{ asset('frontend_assets/img/avatar.jpg') }}">
						</div>
						<h4 class="mb-1 mt-4 font-weight-bold fs-16">{{ auth()->user()->full_name }}</h4>
						<h6 class="text-muted fs-12">{{ __('Last Profile Update') }}: {{ auth()->user()->updated_at->diffForHumans() }}</h6>
					</div>
					<form method="POST" action="" enctype="multipart/form-data">

						@csrf

						@foreach ($errors->all() as $error)
                            <p class="text-danger">{{ $error }}</p>
                         @endforeach 

						<div class="input-box">	
							<div class="form-group">
								<label class="form-label fs-12">{{ __('Current Password') }}</label>
								<input type="password" name='current_password' class="form-control">
							</div>
						</div>
						<div class="input-box">
							<div class="form-group">
								<label class="form-label fs-12">{{ __('New Password') }}</label>
								<input type="password" name="new_password" class="form-control">
							</div>
						</div>
						<div class="input-box mb-0">
							<div class="form-group mb-0">
								<label class="form-label fs-12">{{ __('Confirm New Password') }}</label>
								<input type="password" name="new_confirm_password" class="form-control">
							</div>
						</div>
						<div class="card-footer border-0 text-right mt-2 pr-0 pb-0">
							<a href="{{ route('user.profile.index') }}" class="btn btn-cancel mr-2">{{ __('Cancel') }}</a>
							<button type="submit" class="btn btn-primary">{{ __('Change') }}</button>							
						</div>
					</form>					
				</div>				
			</div>
		</div>
	</div>
	<!-- CHANGE PASSWORD -->
    @endsection
</body>

</html>